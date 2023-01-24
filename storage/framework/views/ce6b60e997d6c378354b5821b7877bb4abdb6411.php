<div id="headerMain" class="d-none">
    <header id="header"
            class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
        <div class="navbar-nav-wrap">
            <div class="navbar-nav-wrap-content-left d-xl-none">
                <!-- Navbar Vertical Toggle -->
                <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
                    <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip"
                       data-placement="right" title="Collapse"></i>
                    <i class="tio-last-page navbar-vertical-aside-toggle-full-align"
                       data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                       data-toggle="tooltip" data-placement="right" title="Expand"></i>
                </button>
                <!-- End Navbar Vertical Toggle -->
            </div>

            <!-- Secondary Content -->
            <div class="navbar-nav-wrap-content-right">
                <!-- Navbar -->
                <ul class="navbar-nav align-items-center flex-row">
                    <li class="nav-item mr-0">
                        <div class="hs-unfold">
                            <div class="p-2">
                                <?php ( $local = session()->has('local')?session('local'):'en'); ?>
                                <?php ($lang = \App\CentralLogics\Helpers::get_business_settings('language')??null); ?>
                                <div class="topbar-text dropdown disable-autohide text-capitalize">
                                    <?php if(isset($lang) && array_key_exists('code', $lang[0])): ?>
                                        <a class="topbar-link dropdown-toggle lang-country-flag" href="#" data-toggle="dropdown">
                                            <?php $__currentLoopData = $lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($data['code']==$local): ?>
                                                    <img src="<?php echo e(asset('assets/admin/img/google_translate_logo.png')); ?>" alt=""> <span><?php echo e($data['code']); ?></span>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </a>
                                        <ul class="dropdown-menu absolute">
                                            <?php $__currentLoopData = $lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($data['status']==1): ?>
                                                    <li>
                                                        <a class="dropdown-item pb-1 lang-country-flag"
                                                           href="<?php echo e(route('admin.lang',[$data['code']])); ?>">

                                                            <span><?php echo e(\App\CentralLogics\Helpers::get_language_name($data['code'])); ?></span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item d-none d-sm-inline-block">
                        <!-- Notification -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon notify--icon"
                               href="<?php echo e(route('admin.message.list')); ?>">
                                <i class="tio-messages-outlined"></i>
                                <!-- <img class="tio-messages-outlined" src="<?php echo e(asset('/assets/admin/img/chat.png')); ?>" alt="admin/img"> -->
                                <?php ($message=\App\Model\Conversation::where('checked',0)->count()); ?>
                                <span class="amount">
                                    <?php echo e($message=\App\Model\Conversation::where('checked',0)->count()); ?>

                                </span>
                            </a>
                        </div>
                        <!-- End Notification -->
                    </li>

                    <li class="nav-item">
                        <!-- Notification -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon notify--icon"
                               href="<?php echo e(route('admin.orders.list',['status'=>'pending'])); ?>">
                                <i class="tio-shopping-cart-outlined"></i>
                                <span class="amount">
                                    <?php echo e(\App\Model\Order::where(['checked' => 0])->count()); ?>

                                </span>
                            </a>
                        </div>
                        <!-- End Notification -->
                    </li>


                    <li class="nav-item ml-4">
                        <!-- Account -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;"
                               data-hs-unfold-options='{
                                     "target": "#accountNavbarDropdown",
                                     "type": "css-animation"
                                   }'>
                                   <div class="cmn--media right-dropdown-icon d-flex align-items-center">
                                    <div class="media-body pl-0 pr-2">
                                        <span class="card-title h5 text-right">
                                            <?php echo e(auth('admin')->user()->f_name); ?>

                                            <?php echo e(auth('admin')->user()->l_name); ?>

                                        </span>
                                        <span class="card-text"><?php echo e(auth('admin')->user()->role->name); ?></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                        <img class="avatar-img"
                                            onerror="this.src='<?php echo e(asset('assets/admin/img/160x160/img1.jpg')); ?>'"
                                            src="<?php echo e(asset('storage/admin')); ?>/<?php echo e(auth('admin')->user()->image); ?>"
                                            alt="Image Description">
                                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                    </div>
                                </div>
                            </a>

                            <div id="accountNavbarDropdown"
                                 class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account w-16rem">
                                <div class="dropdown-item-text">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img"
                                                 onerror="this.src='<?php echo e(asset('assets/admin/img/160x160/img1.jpg')); ?>'"
                                                 src="<?php echo e(asset('storage/admin')); ?>/<?php echo e(auth('admin')->user()->image); ?>"
                                                 alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="card-title h5"><?php echo e(auth('admin')->user()->f_name); ?></span>
                                            <span class="card-text"><?php echo e(auth('admin')->user()->email); ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="<?php echo e(route('admin.settings')); ?>">
                                    <span class="text-truncate pr-2" title="Settings"><?php echo e(\App\CentralLogics\translate('settings')); ?></span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="javascript:" onclick="Swal.fire({
                                    title: '<?php echo e(translate("Do you want to logout?")); ?>',
                                    showDenyButton: true,
                                    showCancelButton: true,
                                    confirmButtonColor: '#01684b',
                                    cancelButtonColor: '#363636',
                                    confirmButtonText: `Yes`,
                                    denyButtonText: `<?php echo e(translate("Do not Logout")); ?>`,
                                    }).then((result) => {
                                    if (result.value) {
                                    location.href='<?php echo e(route('admin.auth.logout')); ?>';
                                    } else{
                                    Swal.fire('Canceled', '', 'info')
                                    }
                                    })">
                                    <span class="text-truncate pr-2" title="Sign out"><?php echo e(\App\CentralLogics\translate('sign_out')); ?></span>
                                </a>
                            </div>
                        </div>
                        <!-- End Account -->
                    </li>
                </ul>
                <!-- End Navbar -->
            </div>
            <!-- End Secondary Content -->
        </div>
    </header>
</div>
<div id="headerFluid" class="d-none"></div>
<div id="headerDouble" class="d-none"></div>
<?php /**PATH /home/909502.cloudwaysapps.com/dphjjcvmmc/public_html/resources/views/layouts/admin/partials/_header.blade.php ENDPATH**/ ?>