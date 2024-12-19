

<?php $__env->startSection('content'); ?>
<h1>Selamat Datang, <?php echo e(Auth::user()->name); ?></h1>
<img src="<?php echo e(Auth::user()->profile_photo); ?>" alt="Foto Profil">
<p>Kelas: <?php echo e(Auth::user()->kelas); ?></p>
<p>Mata Kuliah: Pemrograman Berbasis Website</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\UTS-PBW\resources\views/home.blade.php ENDPATH**/ ?>