;
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width:20rem;">
                    <img class="card-img-top img-circle" src="<?php echo e(asset('/images/use.jpg')); ?>" style="width:320px;">
                    <div class="card-body">
                    <center> <h3>Hello: <?php echo e(Auth::user()->name); ?></h3></center>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#">My dependencies</a></li>
                        <li class="list-group-item"><a href="#">My payments</a></li>
                        <li class="list-group-item"><a href="#">Borowings</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-8">
               <div class="row">
                <?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="col-sm-4">
                    <div class="panel panel-default" style="background-color:white">
                        <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-0"></div>
                                    <div class="col-sm-12">
                                    <img src="<?php echo e(asset('/images/user.png')); ?>" class="rounded-circl img-fliud  mx-auto d-block" style="width:100px;height:100px;">
                                    </div>
                                    <div class="col-sm-0"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-0"></div>
                                    <div class="col-sm-12">
                                    <center><h4><?php echo e($childrens->firstname); ?> <?php echo e($childrens->lastname); ?></h4></center>
                                    </div>
                                    <div class="col-sm-0"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-0"></div>
                                    <div class="col-sm-12">
                                    <center><p>Gender: <?php echo e($childrens->gender); ?></p></center>
                                    </div>
                                    <div class="col-sm-0"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-0"></div>
                                    <div class="col-sm-12">
                                        <center><a href="<?php echo e(URL::to('/home/childrens/show/'.$childrens->id)); ?>" class="badge badge-secondary">view</a> <a href="<?php echo e(URL::to('/home/childrens/update/'.$childrens->id)); ?>" class="badge badge-success">update</a> </center>
                                    </div>
                                    <div class="col-sm-0"></div>
                                </div>
                        </div>
                    </div>
                 </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/walfare/resources/views/childrens/index.blade.php ENDPATH**/ ?>