<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                 <center>  <img src="<?php echo e(asset('images/user.png')); ?>" class="img-circle" style="width:80px;height:80px"></center>
                    <div class="card-body">
                         <form method="POST" action="<?php echo e(url('/home/childrens/edit/'.$sngl_data->id)); ?>">
                         <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>First Name:</label>
                                <input type="text" name="firstname" value="<?php echo e($sngl_data->firstname); ?>"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Last Name:</label>
                                <input type="text" name="lastname" value="<?php echo e($sngl_data->lastname); ?>"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" name="gender" value="<?php echo e($sngl_data->gender); ?>"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Birth Cert No:</label>
                                <input type="text" name="birth_certificate_no" value="<?php echo e($sngl_data->birth_certificate_no); ?>"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Date of Birth:</label>
                                <input type="text" name="date_of_birth" value="<?php echo e($sngl_data->date_of_birth); ?>"  class="form-control">
                            </div>
                               <input type="submit" name="submit" Value="Update" class="btn btn-primary" >
                        </form>
                    </div>
                    <div class="card-footer"><div>
                </div>
             </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/walfare/resources/views/childrens/update.blade.php ENDPATH**/ ?>