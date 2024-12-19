<form action="<?php echo e(url('/login')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>Password:</label>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>
<?php /**PATH C:\laragon\www\UTS-PBW\resources\views/auth/login.blade.php ENDPATH**/ ?>