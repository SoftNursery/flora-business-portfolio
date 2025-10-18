<?php
$blogPosts = include __DIR__ . '/../data/blogPosts.php';

// Get slug from route params
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);

// Split the path into an array of segments
$segments = explode('/', trim($path, '/'));

// The slug is typically the last segment, or a specific segment depending on your URL structure
$slug = end($segments);

// Find product by slug
$blog = null;
foreach ($blogPosts as $b) {
    if ($b['slug'] === $slug) {
        $blog = $b;
        break;
    }
}

if (!$blog) {
    echo "<h2 class='text-center mt-20 text-gray-500'>Blog not found</h2>";
    exit;
}
?>