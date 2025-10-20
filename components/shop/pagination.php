<?php
// pagination.php

class Pagination
{
    /**
     * Generate the list of visible pages (with ellipses) - same logic as your React version.
     */
    private static function getVisiblePages(int $currentPage, int $totalPages): array
    {
        $pages = range(1, $totalPages);

        if ($totalPages <= 7) {
            return $pages;
        }

        if ($currentPage <= 4) {
            return array_merge(array_slice($pages, 0, 5), ['...', $totalPages]);
        }

        if ($currentPage >= $totalPages - 3) {
            return array_merge([1, '...'], array_slice($pages, -5));
        }

        return [1, '...', $currentPage - 1, $currentPage, $currentPage + 1, '...', $totalPages];
    }

    /**
     * Build a URL for a given page while preserving current query params.
     */
    private static function buildPageUrl(int $page): string
    {
        // Use the current path (without query string)
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/';

        // Copy current query params and replace page
        $params = $_GET;
        $params['page'] = $page;

        $query = http_build_query($params);
        return $path . ($query ? '?' . $query : '');
    }

    /**
     * Static render method so you can call Pagination::render($currentPage, $totalPages)
     */
    public static function render(int $currentPage, int $totalPages): string
    {
        // Sanity
        $currentPage = max(1, $currentPage);
        $totalPages = max(1, $totalPages);

        $visiblePages = self::getVisiblePages($currentPage, $totalPages);

        ob_start();
        ?>
        <div class="flex items-center justify-center gap-2 my-6">
            <!-- Prev -->
            <a href="<?= $currentPage > 1 ? htmlspecialchars(self::buildPageUrl($currentPage - 1)) : '#' ?>"
                class="inline-flex items-center justify-center px-3 py-1 border rounded-md <?= $currentPage === 1 ? 'opacity-50 pointer-events-none' : 'hover:border-blue-500 hover:text-blue-500' ?>"
                aria-disabled="<?= $currentPage === 1 ? 'true' : 'false' ?>" aria-label="Previous page">
                &laquo;
            </a>

            <!-- Page buttons -->
            <?php foreach ($visiblePages as $idx => $page): ?>
                <?php if ($page === '...'): ?>
                    <span class="px-2 text-gray-400" key="ellipsis-<?= $idx ?>">...</span>
                <?php else: ?>
                    <?php $page = (int) $page; ?>
                    <a href="<?= htmlspecialchars(self::buildPageUrl($page)) ?>"
                        class="px-3 py-1 rounded-md border transition-transform duration-150 inline-block <?= $currentPage === $page ? 'bg-blue-600 text-white hover:bg-blue-700' : 'border-gray-300 hover:border-blue-500 hover:text-blue-500' ?>"
                        aria-current="<?= $currentPage === $page ? 'page' : 'false' ?>">
                        <?= $page ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>

            <!-- Next -->
            <a href="<?= $currentPage < $totalPages ? htmlspecialchars(self::buildPageUrl($currentPage + 1)) : '#' ?>"
                class="inline-flex items-center justify-center px-3 py-1 border rounded-md <?= $currentPage === $totalPages ? 'opacity-50 pointer-events-none' : 'hover:border-blue-500 hover:text-blue-500' ?>"
                aria-disabled="<?= $currentPage === $totalPages ? 'true' : 'false' ?>" aria-label="Next page">
                &raquo;
            </a>
        </div>
        <?php
        return ob_get_clean();
    }
}
?>