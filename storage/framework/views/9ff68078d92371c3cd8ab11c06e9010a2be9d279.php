<?php $__env->startSection('content'); ?>
test view
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    Test
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheader'); ?>
    dslytu
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheaderlink'); ?>

    <a href="#">link</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheaderactive'); ?>
    Test
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sales\resources\views/tset.blade.php ENDPATH**/ ?>