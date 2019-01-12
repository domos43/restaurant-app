<?php $__env->startSection('title','Slider'); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"</link>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo e(route('slider.create')); ?>" class="btn btn-primary">Add New</a>
                    <?php echo $__env->make('layouts.partial.msg', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Slider</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Sub Title
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Created At
                                    </th>
                                    <th>
                                        Updated At
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <?php echo e($key + 1); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($slider->title); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($slider->sub_title); ?>

                                                </td>
                                                <td>
                                                    <img class="img-responsive img-thumbnail" src="<?php echo e(asset('uploads/slider/'.$slider->image)); ?>" style="height: 100px; width: 100px" alt="">
                                                </td>
                                                <td>
                                                    <?php echo e($slider->price); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($slider->created_at); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($slider->updated_at); ?>

                                                </td>
                                                <td>
                                                    <a href="<?php echo e(route('slider.edit',$slider->id)); ?>" class="btn btn-info btn-sm">
                                                        <i class="material-icons">mode_edit</i></a>

                                                    <form id="delete-form-<?php echo e($slider->id); ?>" action="<?php echo e(route('slider.destroy',$slider->id)); ?>" style="display: none;" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('are you sure? srsly you want delete this?'))
                                                    {
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-<?php echo e($slider->id); ?>').submit();
                                                    }
                                                            else {
                                                            event.preventDefault();
                                                            }">
                                                        <i class="material-icons">delete</i></button>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table').DataTable();
    } );
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>