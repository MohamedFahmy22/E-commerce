<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title card_title_center">تعديل بيانات الضبط العام</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if(@isset($data) && !@empty($data)): ?>
                        <form action="<?php echo e(route('admin.adminPanelSetting.update')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>اسم الشركة</label>
                                <input name="system_name" id="system_name" class="form-control" value="<?php echo e($data['system_name']); ?>" placeholder="ادخل اسم الشركة" oninvalid="setCustomValidity('من فضلك ادخل هذا الحقل')" onchange="try{setCustomValidity('')}catch(e){}" required >
                                <?php $__errorArgs = ['system_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>


                            <div class="form-group">
                                <label>عنوان الشركة</label>
                                <input name="address" id="address" class="form-control" value="<?php echo e($data['address']); ?>" placeholder="ادخل اسم الشركة" oninvalid="setCustomValidity('من فضلك ادخل هذا الحقل')" onchange="try{setCustomValidity('')}catch(e){}"  >
                                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label>هاتف الشركة</label>
                                <input name="phone" id="phone" class="form-control" value="<?php echo e($data['phone']); ?>" placeholder="ادخل اسم الشركة" oninvalid="setCustomValidity('من فضلك ادخل هذا الحقل')" onchange="try{setCustomValidity('')}catch(e){}" >
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>


                            <div class="form-group">
                                <label>    الحساب الاب للعملاء بالشجرة المحاسبية</label>
                                <select name="customer_parent_account_number" id="customer_parent_account_number" class="form-control ">
                                    <option value="">اختر الحساب </option>
                                    <?php if(@isset($parent_accounts) && !@empty($parent_accounts)): ?>
                                        <?php $__currentLoopData = $parent_accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php if(old('customer_parent_account_number',$data['customer_parent_account_number'])==$info->account_number): ?> selected="selected" <?php endif; ?> value="<?php echo e($info->account_number); ?>"> <?php echo e($info->name); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                                <?php $__errorArgs = ['customer_parent_account_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label>    الحساب الاب للموردين بالشجرة المحاسبية</label>
                                <select name="suppliers_parent_account_number" id="suppliers_parent_account_number" class="form-control ">
                                    <option value="">اختر الحساب </option>
                                    <?php if(@isset($parent_accounts) && !@empty($parent_accounts)): ?>
                                        <?php $__currentLoopData = $parent_accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php if(old('suppliers_parent_account_number')==$info->account_number): ?> selected="selected" <?php endif; ?> value="<?php echo e($info->account_number); ?>"> <?php echo e($info->name); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                                <?php $__errorArgs = ['suppliers_parent_account_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label>رسالة تنبية اعلي الشاشة </label>
                                <input name="general_alert" id="general_alert" class="form-control" value="<?php echo e($data['general_alert']); ?>" placeholder="ادخل اسم الشركة" oninvalid="setCustomValidity('من فضلك ادخل هذا الحقل')" onchange="try{setCustomValidity('')}catch(e){}" >
                            </div>

                            <div class="form-group"  >
                                <label>شعار الشركة</label>
                                <div class="image">
                                    <img style="width: 50px; height: 50px" class="custom_img" src="<?php echo e(asset('assets/admin/uploads').'/'.$data['photo']); ?>"  alt="لوجو الشركة">
                                    <button type="button" class="btn btn-sm btn-danger" id="update_image">تغير الصورة</button>
                                    <button type="button" class="btn btn-sm btn-danger" style="display: none;" id="cancel_update_image"> الغاء</button>

                                </div>
                                <div id="oldimage">

                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-sm">حفظ التعديلات</button>
                            </div>
                        </form>
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
<?php $__env->startSection('title'); ?>
    الضبط العام
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheader'); ?>
    الضبط
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheaderlink'); ?>
    <a href="<?php echo e(route('admin.dashboard')); ?>">الضبط</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheaderactive'); ?>
    عرض
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sales\resources\views/admin/admin_panel_settings/edit.blade.php ENDPATH**/ ?>