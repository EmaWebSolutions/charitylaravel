<?php $__env->startSection('content'); ?>
<!-- ============================================================= Content Start ============================================================= -->
    <!--================ start banner Area =================-->
    <style type="text/css">
        .banner-area{background:url('<?php echo e(asset(Setting()->HomePicture)); ?>') no-repeat;background-size:cover}
    </style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row  align-items-center banner-content">
                <div class="col-lg-5">
                    <h1 class="text-white">أسبابنا</h1>
                    <p>لتنفيذ برامج مستدامة تعمل على تحسين فرص الوصول إلى الاستثمار في جميع أنحاء العالم.</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End banner Area =================-->

    <!--================ Start Popular Causes Area =================-->
    <section class="popular-cause-area section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2><span>جمع</span> الأسباب</h2>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <!--================ Start Popular Causes Area =================-->
                <?php $__currentLoopData = $Causes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Cause): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      
                <div class="col-lg-4 col-md-6">
                    <div class="card single-popular-cause">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="<?php echo asset($Cause->image); ?>" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <!--================ Start Popular Causes Area =================-->
                                 <?php if(isset($Cause->Category->title)): ?>
                                 <div class="tag"><?php echo e($Cause->Category->title); ?></div>
                                 <?php else: ?>
                                   <div class="tag">لا تصنيف</div>
                                 <?php endif; ?>
                                 <!--================ Start Popular Causes Area =================-->
                                <h4 class="card-title"><?php echo substr($Cause->Title_ar, 0, 190); ?></h4>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>رفع: <?php echo $Cause->Raised; ?></p>
                                    <p><span>هدف: <?php echo $Cause->Goal; ?></span></p>
                                <!--================ Start Popular Causes Area =================-->    
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="<?php echo url('Causes'); ?>/<?php echo $Cause->slug; ?>" class="primary-btn">تبرع</a>
                                    <p><span class="ti-heart mr-1"></span> <?php echo $Cause->Donors; ?> الجهات المانحة</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!--================ Start Popular Causes Area =================-->
                <!--================ Start Popular Causes Area =================-->
                <?php echo $Causes->links(); ?>

                <!--================ Start Popular Causes Area =================-->
            </div>
        </div>
    </section>
    <!--================ End Popular Causes Area =================-->
   <!--================ Start CTA Area =================-->
    <div class="cta-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="top_text">شكرا على قلبك</p>
                    <h1>ساهم في عملي الخيري من خلال تبرعك. شكرا على قلبك</h1>
                    <!--================ Start Popular Event Area =================-->
                    <a href="<?php echo url('Contact'); ?>" class="primary-btn">هبة</a>
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('arabic.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Charity/resources/views/arabic/Causes/index.blade.php ENDPATH**/ ?>