<?php
function Button($children, $variant = 'primary', $attributes = [])
{
    // Define the base styles for each variant
    $variants = [
        'blue' => 'bg-primary text-lightGrey px-5 py-2 rounded-lg font-semibold hover:bg-primary/90 transition-colors duration-300 cursor-pointer inline-flex items-center gap-2',
        'red' => 'bg-accent text-lightGrey px-5 py-2 rounded-lg font-semibold hover:bg-highlight transition-colors duration-300 cursor-pointer inline-flex items-center gap-2',
        'white' => 'bg-white text-darkGrey px-5 py-2 rounded-lg font-semibold hover:text-primary hover:bg-lightGrey transition-colors duration-300 cursor-pointer inline-flex items-center gap-2'
    ];

    // Pick the variant class or default to 'primary'
    $class = $variants[$variant] ?? $variants['primary'];

    // Merge extra attributes
    $attrString = '';
    foreach ($attributes as $key => $value) {
        $attrString .= sprintf(' %s="%s"', htmlspecialchars($key), htmlspecialchars($value));
    }

    // Output the button
    echo sprintf('<button class="%s"%s>%s</button>', $class, $attrString, $children);
}
?>