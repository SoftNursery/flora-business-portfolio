<?php
// Expected variables (like props)
// $content, $name, $role, $company, $quoteImage, $customerImage

?>

<div
    class="flex-shrink-0 w-[350px] p-6 bg-card border border-primary/25 transition-colors duration-300 bg-lightGrey rounded-lg">
    <div class="mb-4">
        <img alt="Quote icon" src="<?php echo $quoteImage; ?>" class="h-5" />
    </div>

    <p class="text-foreground/90 mb-6 leading-relaxed text-balance">
        <?php echo htmlspecialchars($content); ?>
    </p>

    <div class="flex items-center gap-3">
        <img src="<?php echo $customerImage; ?>" alt="<?php echo htmlspecialchars($name); ?>"
            class="w-12 h-12 rounded-full object-cover" />
        <div>
            <p class="font-semibold text-foreground"><?php echo htmlspecialchars($name); ?></p>
            <p class="text-sm text-muted-foreground">
                <?php echo htmlspecialchars($role); ?> • <?php echo htmlspecialchars($company); ?>
            </p>
        </div>
    </div>
</div>