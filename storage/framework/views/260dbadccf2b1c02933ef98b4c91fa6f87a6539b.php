<?php $__env->startSection('content'); ?>

<!-- HERO -->
<section class="hero hero-bg d-flex justify-content-center align-items-center" style="background-image: url('images/paris.jpg'); background-size: 100% 100%;">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                <div class="hero-text">

                    <h1 class="text-white" data-aos="fade-up"><?php echo $content["home|title"]; ?></h1>
                    <p class="text-white mt-3" data-aos="fade-up" data-aos-delay="100"><?php echo $content["home|init1"]; ?></p>
                    <p class="text-white mt-3" data-aos="fade-up" data-aos-delay="100"><?php echo $content["home|init2"]; ?></p>
                    <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"></strong>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ABOUT -->
<section class="about section-padding pb-0" id="about">
    <div class="container">

        <div class="row">
            <div class="card-deck" data-aos="fade-up" data-aos-delay="100">
                <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('layouts.card', ['card'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-lg-7 mx-auto col-md-10 col-12">
                <div class="about-info"></div>

                <div class="about-image" data-aos="fade-up" data-aos-delay="400">

                    <img src="<?php echo e(asset('images/logo/logo-transparent.png')); ?>" class="img-fluid" alt="office" width="200">
                </div>
            </div>

        </div>
    </div>
</section>


<!-- PROJECT -->
<section class="project section-padding" id="project">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-12" >

                <h2 class="mb-5 text-center" data-aos="fade-up" >
                    Ils témoignent ...
                    <strong>L'expérience unique </strong>
                </h2>
            </div>
        </div>
    </div>
</section>

                <div class="test-imo" style="padding: 0;
			font-family: 'Lato', sans-serif; background-color: #f0f8ff;">
                    <section class="spacer" style="background-color: #f0f8ff;">
                        <div class="testimonial-section">
                            <div class="testi-user-img">
                                <div class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">
                                        <?php $counter=count($testimonies)-1; ?>
                    <?php $__currentLoopData = $testimonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide">
                        <img src="<?php echo e(asset($testimonie['picture'])); ?>" class="u<?php echo $counter; ?>" alt="project image">
                                                <?php $counter-- ?>
                        
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                                            <div class="user-saying" style="box-shadow: -117px -3px 109px -90px rgba(0,0,0,0.75);
-webkit-box-shadow: -117px -3px 109px -90px rgba(0,0,0,0.75);
-moz-box-shadow: -117px -3px 109px -90px rgba(0,0,0,0.75); z-index: 13;">
                                                <div class="swiper-container testimonial">
                                                    <!-- Additional required wrapper -->
                                                    <section class="swiper-wrapper">
                                            <?php $__currentLoopData = $testimonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="swiper-slide">
                                                                <div class="quote">
                                                                    <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">
                                                                    <p><?php echo \Illuminate\Support\Str::limit($testimonie['deposit'], 350, ' ...'); ?></p>
                                                                    <div class="name" style="color:black;">-<?php echo $testimonie['firstname']; ?> <?php echo $testimonie['lastname']; ?>-</div>
                                                                    <div class="designation" style="color:black;"><?php echo $testimonie['occupation']; ?> - <?php echo $testimonie['country']; ?></div>
                                                                </div>
                                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </section>
                                                </div>
                                            </div>
                            </div>
                    </section>
</div>
<!-- TESTIMONIAL -->
<section class="testimonial section-padding" style="background-color: #f0f8ff;">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-5 col-12">
                <div class="contact-image text-center" data-aos="fade-up">

                    <img src="<?php echo e(asset("images/directeur.png")); ?>" class="img-fluid" alt="website">
                </div>
            </div>

            <div class="col-lg-6 col-md-7 col-12">
                <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100"><?php echo e($content['home|titleDirectorWord']); ?></h4>

                <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                <h6 class="mb-4" data-aos="fade-up" data-aos-delay="300"><?php echo e($content['home|directorWord1']); ?></h6>
                <h6 class="mb-4" data-aos="fade-up" data-aos-delay="300"><?php echo e($content['home|directorWord2']); ?></h6>
                <h6 class="mb-4" data-aos="fade-up" data-aos-delay="300"><?php echo e($content['home|directorWord3']); ?></h6>

                <p data-aos="fade-up" data-aos-delay="400">
                    <strong><?php echo e($content['home|titleDirectorName']); ?></strong>

                    <span class="mx-1">/</span>

                    <small><?php echo e($content['home|titleDirectorPosition']); ?></small>
                </p>
            </div>

        </div>
    </div>
</section>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Downloads/www/resources/views/pages/home.blade.php ENDPATH**/ ?>