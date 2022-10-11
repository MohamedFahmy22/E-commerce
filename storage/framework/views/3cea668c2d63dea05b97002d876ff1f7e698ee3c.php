<?php $__env->startSection('title'); ?>
    الضبط العام
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader'); ?>
    الضبط
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheaderlink'); ?>
    <a href="<?php echo e(route('admin.adminPanelSetting.index')); ?>"> الضبط </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheaderactive'); ?>
    عرض
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title card_title_center">بيانات الضبط العام</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if(@isset($data) && !@empty($data)): ?>
                        <table id="example2" class="table table-bordered table-hover">

                            <tr>
                                <td class="width30">اسم الشركة</td>
                                <td > <?php echo e($data['system_name']); ?></td>
                            </tr>

                            <tr>
                                <td class="width30">كود الشركة</td>
                                <td > <?php echo e($data['company_code']); ?></td>
                            </tr>

                            <tr>
                                <td class="width30">حالة الشركة</td>
                                <td > <?php if($data['active'] == 1): ?> مفعل  <?php else: ?> معطل <?php endif; ?></td>
                            </tr>

                            <tr>
                                <td class="width30">عنوان  الشركة</td>
                                <td > <?php echo e($data['address']); ?></td>
                            </tr>

                            <tr>
                                <td class="width30">هاتف  الشركة</td>
                                <td > <?php echo e($data['phone']); ?></td>
                            </tr>

                            <tr>
                                <td class="width30">  اسم الحساب المالي للعملاء الاب</td>
                                <td > <?php echo e($data['customer_parent_account_name']); ?> رقم حساب مالي ( <?php echo e($data["customer_parent_account_number"]); ?> )</td>
                            </tr>
                            <tr>
                                <td class="width30">  اسم الحساب المالي للموردين الاب</td>
                                <td > <?php echo e($data['supplier_parent_account_name']); ?> رقم حساب مالي ( <?php echo e($data["suppliers_parent_account_number"]); ?> )</td>
                            </tr>
                            <tr>
                                <td class="width30">  رسالة التنبية اعلي الشاشة للشركة</td>
                                <td > <?php echo e($data['general_alert']); ?></td>
                            </tr>
                            <tr>
                                <td class="width30">لوجو  الشركة</td>
                                <td >
                                    <div class="image">
                                        <img style="width: 50px; height: 50px" src="<?php echo e(asset('assets/admin/uploads').'/'.$data['photo']); ?>"  alt="لوجو الشركة">
                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td class="width30">  تاريخ اخر تحديث</td>
                                <td >
                                    <?php if($data['updated_by']>0 and $data['updated_by']!=null ): ?>
                                        <?php
                                            $dt=new DateTime($data['updated_at']);
                                            $date=$dt->format("Y-m-d");
                                            $time=$dt->format("h:i");
                                            $newDateTime=date("A",strtotime($time));
                                            $newDateTimeType= (($newDateTime=='AM')?'صباحا ':'مساء');
                                        ?>
                                        <?php echo e($date); ?>

                                        <?php echo e($time); ?>

                                        <?php echo e($newDateTimeType); ?>

                                        بواسطة
                                        <?php echo e($data['updated_by_admin']); ?>


                                    <?php else: ?>
                                        لايوجد تحديث
                                    <?php endif; ?>

                                </td>
                            </tr>
                            <tr>
                                <td>العمليات</td>
                                <td>
                                    <a href="<?php echo e(route('admin.adminPanelSetting.edit')); ?>" class="btn btn-success">تعديل</a>

                                </td>
                            </tr>

                        </table>
                    <?php else: ?>
                        <div class="alert alert-danger">
                            عفوا لاتوجد بيانات لعرضها !!
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sales\resources\views/admin/admin_panel_settings/index.blade.php ENDPATH**/ ?>