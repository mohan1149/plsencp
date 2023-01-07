<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-md-8">
                <?php if(session()->has('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
                <div class="mar-ver pad-btm text-center">
                    <h1 class="h3">groFresh Software Update</h1>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('update-system')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="purchase_code">Codecanyon Username</label>
                                <input type="text" class="form-control" id="username" value="<?php echo e(env('BUYER_USERNAME')); ?>"
                                       name="username" required>
                            </div>

                            <div class="form-group">
                                <label for="purchase_code">Purchase Code</label>
                                <input type="text" class="form-control" id="purchase_key"
                                       value="<?php echo e(env('PURCHASE_CODE')); ?>" name="purchase_key" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.blank', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/909502.cloudwaysapps.com/dphjjcvmmc/public_html/resources/views/update/update-software.blade.php ENDPATH**/ ?>