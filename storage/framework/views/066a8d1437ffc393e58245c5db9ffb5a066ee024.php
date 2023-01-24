<div class="card-header border-0 order-header-shadow">
    <h5 class="card-title d-flex justify-content-between flex-grow-1">
        <span><?php echo e(translate('top_selling_products')); ?></span>
        <a href="<?php echo e(route('admin.product.list')); ?>" class="fz-12px font-medium text-006AE5"><?php echo e(translate('view_all')); ?></a>
    </h5>
</div>
<!-- Body -->
<div class="card-body">
    <div class="top--selling">
        <?php $__currentLoopData = $top_sell; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(isset($item->product)): ?>
            <a class="grid--card" href="<?php echo e(route('admin.product.view',[$item['product_id']])); ?>">
                <?php if(!empty(json_decode($item->product->image,true))): ?>
                <img src="<?php echo e(asset('storage/product').'/'.json_decode($item->product->image)[0]  ?? ''); ?>"
                     onerror="this.src='<?php echo e(asset('assets/admin/img/400x400/img2.jpg')); ?>'"
                     alt="<?php echo e($item->product->name); ?> image">
                <?php endif; ?>
                <div class="cont pt-2">
                    <h6 class="line--limit-2"><?php echo e(substr($item->product['name'],0,20) . (strlen($item->product['name'])>20?'...':'')); ?></h6>
                </div>
                <div class="ml-auto">
                    <span class="badge badge-soft"><?php echo e(translate('Sold')); ?> : <?php echo e($item['count']); ?></span>
                </div>
            </a>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- End Body -->
<?php /**PATH /home/909502.cloudwaysapps.com/dphjjcvmmc/public_html/resources/views/admin-views/partials/_top-selling-products.blade.php ENDPATH**/ ?>