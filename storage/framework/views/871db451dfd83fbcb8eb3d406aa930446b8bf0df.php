<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
       <div class="col-sm-2"></div>
       <div class="col-sm-8">
         <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                   <li class="nav-item">
                     <a class="nav-link active" href="#">Profile</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link active" href="<?php echo e(route('dependencies')); ?>">Depedencies</a>
                   </li>
                   
                  
               </ul>
            </div>
            <div class="card-body">
               <table class="table table-sm">
                  <thead>
                      <tr>
                         <th>#</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Action</th>
                      </tr>
                      <tr>
                        <td><?php echo e(Auth::user()->id); ?></td>
                        <td><?php echo e(Auth::user()->name); ?></td>
                        <td><?php echo e(Auth::user()->email); ?></td>
                       
                        <td>
                         <a class="badge badge-secondary" href="#">
                          Delete
                         </a>
                        </td>
                      </tr>
                  </thead>
               </table>
            </div>
         </div>
       </div>
       <div class="col-sm-2"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/walfare/resources/views/profile.blade.php ENDPATH**/ ?>