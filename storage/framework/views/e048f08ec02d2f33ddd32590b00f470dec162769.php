
<div class="card-header border-0 order-header-shadow">
    <h5 class="card-title d-flex justify-content-between flex-grow-1">
        <span><?php echo e(translate('top_customer')); ?></span>
        <a href="<?php echo e(route('admin.customer.list')); ?>" class="fz-12px font-medium text-006AE5"><?php echo e(translate('view_all')); ?></a>
    </h5>
</div>

<!-- Body -->
<div class="card-body">
    <div class="top--selling">
        <?php $__currentLoopData = $top_customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(isset($item->customer)): ?>
                <a class="grid--card" href="<?php echo e(route('admin.customer.view',[$item['user_id']])); ?>">
                <img src="<?php echo e(asset('storage/app/public/profile/'.$item->customer->image  ?? '' )); ?>"
                        onerror="this.src='<?php echo e(asset('assets/admin/img/admin.jpg')); ?>'"
                        alt="<?php echo e($item->customer->name); ?> image">
                <div class="cont pt-2">
                    <h6><?php echo e($item->customer['f_name']??'Not exist'); ?></h6>
                    <span><?php echo e($item->customer['phone']); ?></span>
                </div>
                <div class="ml-auto">
                    <span class="badge badge-soft"><?php echo e(translate('Orders')); ?> : <?php echo e($item['count']); ?></span>
                </div>
            </a>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- End Body -->

<?php /**PATH /home/909502.cloudwaysapps.com/dphjjcvmmc/public_html/resources/views/admin-views/partials/_top-customer.blade.php ENDPATH**/ ?>