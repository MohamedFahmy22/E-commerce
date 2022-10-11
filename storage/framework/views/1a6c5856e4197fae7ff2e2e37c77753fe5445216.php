<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo $__env->yieldContent('contentheader'); ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><?php echo $__env->yieldContent('contentheaderlink'); ?></li>
                        <li class="breadcrumb-item active"><?php echo $__env->yieldContent('contentheaderactive'); ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
           <?php echo $__env->yieldContent('content'); ?>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<?php /**PATH C:\xampp\htdocs\sales\resources\views/admin/includes/content.blade.php ENDPATH**/ ?>