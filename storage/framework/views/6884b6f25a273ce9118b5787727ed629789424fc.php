<?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.style.display='none'">
                <i class="material-icons">close</i>
            </button>
            <span>
                                    <b> Danger - </b> <?php echo e($error); ?> </span>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(session('successMsg')): ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.style.display='none'">
            <i class="material-icons">close</i>
        </button>
        <span>
                                    <b> Success - </b> <?php echo e(session('successMsg')); ?> </span>
    </div>
<?php endif; ?>