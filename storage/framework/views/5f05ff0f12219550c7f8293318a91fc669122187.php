<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title><?php echo e(translate('Branch')); ?> | <?php echo e(translate('Login')); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/vendor.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/vendor/icon-set/style.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/theme.minc619.css?v=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/toastr.css">

</head>

<body>
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="auth-wrapper">

        <div class="auth-wrapper-left">
            <div class="auth-left-cont">
                <img onerror="this.src='<?php echo e(asset('assets/admin/img/160x160/img2.jpg')); ?>'" src="<?php echo e(asset('storage/restaurant')); ?>/<?php echo e(\App\Model\BusinessSetting::where(['key'=>'logo'])->first()->value); ?>" alt="public/img">
                <h2 class="title"><?php echo e(translate('Your')); ?> <span class="d-block"><?php echo e(translate('All Fresh Food')); ?></span> <strong class="text--039D55"><?php echo e(translate('in one Place')); ?>....</strong></h2>
            </div>
        </div>

        <div class="auth-wrapper-right">
            <div class="auth-wrapper-form">

                <!-- Form -->
                <form id="form-id" action="<?php echo e(route('branch.auth.login')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <div class="auth-header">
                        <div class="mb-5">
                            <div class="auth-wrapper-right-logo">
                                <img onerror="this.src='<?php echo e(asset('assets/admin/img/160x160/img2.jpg')); ?>'" src="<?php echo e(asset('storage/restaurant')); ?>/<?php echo e(\App\Model\BusinessSetting::where(['key'=>'logo'])->first()->value); ?>" alt="public/img">
                            </div>
                            <h2 class="title"><?php echo e(translate('sign in')); ?></h2>
                            <div><?php echo e(translate('welcome_back')); ?></div>
                            <p class="mb-0"><?php echo e(translate('Want to login your admin account ')); ?>?
                                <a href="<?php echo e(route('admin.auth.login')); ?>">
                                    <?php echo e(translate('Admin Login')); ?>

                                </a>
                            </p>
                            <span class="badge badge-soft-info mt-2">( <?php echo e(translate('branch login')); ?> )</span>
                        </div>
                    </div>

                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                        <label class="input-label" for="signinSrEmail"><?php echo e(translate('Your email')); ?></label>

                        <input type="email" class="form-control form-control-lg" name="email" id="signinSrEmail"
                                tabindex="1" placeholder="<?php echo e(translate('email@address.com')); ?>" aria-label="email@address.com"
                                required data-msg="Please enter a valid email address.">
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                        <label class="input-label" for="signupSrPassword" tabindex="0">
                            <span class="d-flex justify-content-between align-items-center">
                                <?php echo e(translate('Password')); ?>

                            </span>
                        </label>

                        <div class="input-group input-group-merge">
                            <input type="password" class="js-toggle-password form-control form-control-lg"
                                    name="password" id="signupSrPassword" placeholder="<?php echo e(translate('8+ characters required')); ?>"
                                    aria-label="8+ characters required" required
                                    data-msg="Your password is invalid. Please try again."
                                    data-hs-toggle-password-options='{
                                                "target": "#changePassTarget",
                                    "defaultClass": "tio-hidden-outlined",
                                    "showClass": "tio-visible-outlined",
                                    "classChangeTarget": "#changePassIcon"
                                    }'>
                            <div id="changePassTarget" class="input-group-append">
                                <a class="input-group-text" href="javascript:">
                                    <i id="changePassIcon" class="tio-visible-outlined"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Checkbox -->
                    <div class="form-group">
                        <div class="custom-control custom-checkbox d-flex align-items-center">
                            <input type="checkbox" class="custom-control-input" id="termsCheckbox"
                                name="remember">
                            <label class="custom-control-label text-muted m-0" for="termsCheckbox">
                                <?php echo e(translate('remember')); ?> <?php echo e(translate('me')); ?>

                            </label>
                        </div>
                    </div>
                    <!-- End Checkbox -->

                    
                    <?php ($recaptcha = \App\CentralLogics\Helpers::get_business_settings('recaptcha')); ?>
                    <?php if(isset($recaptcha) && $recaptcha['status'] == 1): ?>
                        <div id="recaptcha_element" class="w-100" data-type="image"></div>
                        <br/>
                    <?php else: ?>
                        <div class="row pt-2 pb-2 align-items-center">
                            <div class="col-6 pr-0">
                                <input type="text" class="form-control form-control-lg" name="default_captcha_value" value=""
                                    placeholder="<?php echo e(\App\CentralLogics\translate('Enter captcha value')); ?>" autocomplete="off">
                            </div>
                            <div class="col-6 input-icons bg-white rounded">
                                <div onclick="javascript:re_captcha();" class="d-flex align-items-center">
                                    <img src="<?php echo e(URL('/branch/auth/code/captcha/1')); ?>" class="rounded" id="default_recaptcha_id">
                                    <i class="tio-refresh icon"></i>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-block btn--primary"><?php echo e(translate('login')); ?></button>
                </form>
                <!-- End Form -->

                <?php if(env('APP_MODE')=='demo'): ?>
                <div class="auto-fill-data-copy">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div>
                            <span class="d-block"><strong>Email</strong> : branch@branch.com</span>
                            <span class="d-block"><strong>Password</strong> : 12345678</span>
                        </div>
                        <div>
                            <button class="btn action-btn btn--primary m-0" onclick="copy_cred()"><i class="tio-copy"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>

    </div>
    <!-- End Content -->
</main>
<!-- ========== END MAIN CONTENT ========== -->


<!-- JS Implementing Plugins -->
<script src="<?php echo e(asset('assets/admin')); ?>/js/vendor.min.js"></script>

<!-- JS Front -->
<script src="<?php echo e(asset('assets/admin')); ?>/js/theme.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/js/toastr.js"></script>
<?php echo Toastr::message(); ?>


<?php if($errors->any()): ?>
    <script>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        toastr.error('<?php echo e($error); ?>', Error, {
            CloseButton: true,
            ProgressBar: true
        });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>
<?php endif; ?>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // INITIALIZATION OF SHOW PASSWORD
        // =======================================================
        $('.js-toggle-password').each(function () {
            new HSTogglePassword(this).init()
        });

        // INITIALIZATION OF FORM VALIDATION
        // =======================================================
        $('.js-validate').each(function () {
            $.HSCore.components.HSValidation.init($(this));
        });
    });
</script>


<?php if(isset($recaptcha) && $recaptcha['status'] == 1): ?>
    <script type="text/javascript">
        var onloadCallback = function () {
            grecaptcha.render('recaptcha_element', {
                'sitekey': '<?php echo e(\App\CentralLogics\Helpers::get_business_settings('recaptcha')['site_key']); ?>'
            });
        };
    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    <script>
        $("#form-id").on('submit',function(e) {
            var response = grecaptcha.getResponse();

            if (response.length === 0) {
                e.preventDefault();
                toastr.error("<?php echo e(translate('Please check the recaptcha')); ?>");
            }
        });
    </script>
<?php else: ?>
    <script type="text/javascript">
        function re_captcha() {
            $url = "<?php echo e(URL('/branch/auth/code/captcha')); ?>";
            $url = $url + "/" + Math.random();
            document.getElementById('default_recaptcha_id').src = $url;
            console.log('url: '+ $url);
        }
    </script>
<?php endif; ?>


<?php if(env('APP_MODE')=='demo'): ?>
    <script>
        function copy_cred() {
            $('#signinSrEmail').val('branch@branch.com');
            $('#signupSrPassword').val('12345678');
            toastr.success('Copied successfully!', 'Success!', {
                CloseButton: true,
                ProgressBar: true
            });
        }
    </script>
<?php endif; ?>

<!-- IE Support -->
<script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="<?php echo e(asset('assets/admin')); ?>/vendor/babel-polyfill/polyfill.min.js"><\/script>');
</script>
</body>
</html>
<?php /**PATH /home/909502.cloudwaysapps.com/dphjjcvmmc/public_html/resources/views/branch-views/auth/login.blade.php ENDPATH**/ ?>