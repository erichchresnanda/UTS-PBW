<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Laravel App'); ?></title>
    <!-- Tambahkan CSS atau script lainnya di sini -->
</head>
<body>
    <header>
        <h1>Header Aplikasi</h1>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <p>Footer Aplikasi</p>
    </footer>
</body>
</html>
<?php /**PATH C:\laragon\www\UTS-PBW\resources\views/layout.blade.php ENDPATH**/ ?>