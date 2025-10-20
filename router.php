<?php

$routes = [];

function route($path, $callback) {
    global $routes;
    $routes[$path] = $callback;
}

function run()
{
    global $routes;
    $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // 1️⃣ Exact static route match first
    if (array_key_exists($requestUri, $routes)) {
        $routes[$requestUri]();
        return;
    }

    // 2️⃣ Dynamic route matching (like /product/{slug})
    foreach ($routes as $path => $callback) {
        // Convert `{param}` into regex capture group
        $pattern = preg_replace('#\{([a-zA-Z_][a-zA-Z0-9_]*)\}#', '(?P<$1>[^/]+)', $path);
        $pattern = '#^' . $pattern . '$#';

        if (preg_match($pattern, $requestUri, $matches)) {
            // Extract only named parameters
            $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);

            // Call the matched route
            $callback($params);
            return;
        }
    }

    // 3️⃣ If no match, show 404
    if (array_key_exists('/404', $routes)) {
        $routes['/404']();
    } else {
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
    }
}