<div class="footer">
    <div class="row justify-content-between align-items-center">
        <div class="col">
            <p class="font-size-sm mb-0">
                <span class="d-none d-sm-inline-block"><?php echo e(Str::limit(Helpers::get_business_settings('footer_text'), 100)); ?></span>
            </p>
        </div>
        <div class="col-auto">
            <div class="d-flex justify-content-end">
                <!-- List Dot -->
                <ul class="list-inline list-separator">
                    <li class="list-inline-item">
                        <a class="list-separator-link" href="<?php echo e(route('admin.business-settings.store.ecom-setup')); ?>"><?php echo e(\App\CentralLogics\translate('restaurant')); ?> <?php echo e(\App\CentralLogics\translate('settings')); ?></a>
                    </li>

                    <li class="list-inline-item">
                        <a class="list-separator-link" href="<?php echo e(route('admin.settings')); ?>"><?php echo e(\App\CentralLogics\translate('profile')); ?></a>
                    </li>


                    <li class="list-inline-item">
                        <!-- Keyboard Shortcuts Toggle -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                               href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="tio-home-outlined"></i>
                            </a>
                        </div>
                        <!-- End Keyboard Shortcuts Toggle -->
                    </li>

                    <li class="list-inline-item">
                        <label class="badge badge-success text-capitalize">
                            <?php echo e(translate('Software Version')); ?> <?php echo e(env('SOFTWARE_VERSION')); ?>

                        </label>
                    </li>

                </ul>
                <!-- End List Dot -->
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/909502.cloudwaysapps.com/dphjjcvmmc/public_html/resources/views/layouts/admin/partials/_footer.blade.php ENDPATH**/ ?>