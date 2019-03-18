<?php
declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

$config = require 'config.php';

use Nopolabs\EBay\Api\Factory\ApiConfig;
use Nopolabs\EBay\Api\Factory\ApiFactory;
use Nopolabs\EBay\Commerce\Taxonomy\Api\CategoryTreeApi;
use Nopolabs\EBay\Commerce\Taxonomy\Model\CategoryTree;
use Nopolabs\EBay\Commerce\Taxonomy\Model\CategoryTreeNode;

// Get clientId and clientSecret from https://developer.ebay.com/my/keys
$config = new ApiConfig($config['ebay']);
$factory = new ApiFactory($config);
$categoryTreeApi = $factory->getCategoryTreeApi();
$productMetadataApi = $factory->getProductMetadataApi();

function categoryTree(CategoryTreeNode $node, string $path = '') : array
{
    $category = $node->getCategory();
    $name = $category->getCategoryName();
    $id = $category->getCategoryId();
    $path = $path ? "$path>$name" : $name;
    $children = array_reduce(
        $node->getChildCategoryTreeNodes()??[],
        function(array $children, CategoryTreeNode $node) use ($path) {
            return array_merge($children, categoryTree($node, $path));
        },
        []
    );

    return [$name => array_filter([
        'id' => $id,
        'children' => $children,
        'path' => $path,
    ])];
}

function getCategoryTree(CategoryTreeApi $apiInstance) : array
{
    try {
        return categoryTree($apiInstance->getCategoryTree('0')->getRootCategoryNode());
    } catch (Exception $e) {
        echo 'Exception when calling CategoryTreeApi->getCategoryTree: ', $e->getMessage(), PHP_EOL;
    }

    return [];
}

function flatten(array $tree) : array
{
    if (isset($tree['children'])) {
        return array_reduce(
            $tree['children'],
            function (array $flattened, array $child) {
                return array_merge($flattened, flatten($child));
            },
            []
        );
    }

    return [substr($tree['path'], 5) => $tree['id']];
}

$tree = getCategoryTree($categoryTreeApi);

$leaves = flatten($tree['Root']);

//echo json_encode($leaves, JSON_PRETTY_PRINT)."\n";
//echo json_encode(array_flip($leaves), JSON_PRETTY_PRINT)."\n";
//echo count($leaves)."\n";

foreach ($leaves as $name => $id) {
    echo "    \"$name\",\n";
}
