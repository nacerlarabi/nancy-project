<?php $__env->startSection('content'); ?>

<section class="slice slice-lg bg-section-secondary" id="hebergement">
    <div class="container">
        <div class="text-center">
            <h1 style="padding-top: 40px;" class="fh5co-lead to-animate fadeIn animated"><strong>SÉJOUR ET HÉBERGEMENT</strong></h1>
        </div>
        <div class="row mt-5">
            <div class="col-xl-6">
                <div id="accordion-1" class="accordion accordion-spaced">
                    <!-- Accordion card 1 -->
                    <div class="card">
                        <div class="card-header py-4 collapsed" id="heading-1-1" data-toggle="collapse" role="button" data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                            <h5 class="mb-0"><?php echo $content['accommodation|title1']; ?></h5>
                        </div>
                        <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1" style="">
                            <div class="card-body">
                                <p>
                                    <?php echo $content['accommodation|p1']; ?>

                                    <?php echo $content['accommodation|p1_1']; ?>

                                    <?php echo $content['accommodation|p1_2']; ?>


                                <ul>
                                    <li><?php echo $content['accommodation|p1_2_li_1']; ?></li>
                                    <li><?php echo $content['accommodation|p1_2_li_2']; ?></li>
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card 2 -->
                    <div class="card">
                        <div class="card-header py-4" id="heading-1-2" data-toggle="collapse" role="button" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                            <h5 class="mb-0"><?php echo $content['accommodation|title3']; ?></h5>
                        </div>
                        <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                            <div class="card-body">
                                <p><?php echo $content['accommodation|p7']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card 3 -->
                    <div class="card">
                        <div class="card-header py-4" id="heading-1-3" data-toggle="collapse" role="button" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                            <h5 class="mb-0"><?php echo $content['accommodation|title5']; ?></h5>
                        </div>
                        <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                            <div class="card-body">
                                <p><?php echo $content['accommodation|p16']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div id="accordion-2" class="accordion accordion-spaced">
                    <!-- Accordion card -->
                    <div class="card">
                        <div class="card-header py-4 collapsed" id="heading-2-1" data-toggle="collapse" role="button" data-target="#collapse-2-1" aria-expanded="false" aria-controls="collapse-2-1">
                            <h5 class="mb-0"><?php echo $content['accommodation|title2']; ?></h5>
                        </div>
                        <div id="collapse-2-1" class="collapse" aria-labelledby="heading-2-1" data-parent="#accordion-2" style="">
                            <div class="card-body">
                                <p>
                                    <?php echo $content['accommodation|p2']; ?>

                                    <?php echo $content['accommodation|p3']; ?>

                                    <br>
                                    <strong><?php echo $content['accommodation|p5']; ?></strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card 2 -->
                    <div class="card">
                        <div class="card-header py-4 collapsed" id="heading-2-2" data-toggle="collapse" role="button" data-target="#collapse-2-2" aria-expanded="false" aria-controls="collapse-2-2">
                            <h5 class="mb-0"><?php echo $content['accommodation|title4']; ?></h5>
                        </div>
                        <div id="collapse-2-2" class="collapse" aria-labelledby="heading-2-2" data-parent="#accordion-2" style="">
                            <div class="card-body">
                                <p>
                                    <?php echo $content['accommodation|p13']; ?>

                                    <br>
                                    <?php echo $content['accommodation|p14']; ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fin section sejour -->

<!-- section la ville de Nancy -->
<!-- <div class="container pt-4" id="programme-container" data-aos="fade-up" data-aos-delay="200">-->
<div class="container pt-4" id="nancy" data-aos="fade-up" data-aos-delay="200">

    <div class="row">
        <div class="col-md-12 col-md-offset-2 fh5co-section-heading text-center ">
            <h1 class="fh5co-lead to-animate fadeIn animated"><strong><?php echo $content['nancy|title1']; ?></strong></h1>
            <p class="fh5co-sub to-animate fadeIn animated" data-aos="fade-up" data-aos-delay="200">
                <?php echo $content['nancy|p1']; ?>

                <?php echo $content['nancy|p2']; ?>

            </p>
        </div>
    </div>

    <div class="row row-grid mt-xl" id="home_reassurance" style="margin-top: 20px !important;">
        <div class="col-md-4 reassurance" style="display: flex;">
            <div class="card shadow reassurance-element" style="display: flex;">
                <p class="text-center">
                    <img src="https://www.france-summercourses.com/common/nancy_01.gif" style="height: 300px; width: 100%;">
                </p>
                <div class="card-body" style="display: flex;">
                    <div class="d-flex align-items-start">
                        <div class="icon icon-shape  text-info rounded-circle">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="icon-text" style="margin-left: -40px;">
                            <h5><strong><?php echo $content['nancy|title2']; ?></strong></h5>
                            <p class="mb-0">
                                <?php echo $content['nancy|p3']; ?>

                                <?php echo $content['nancy|p4']; ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 reassurance" style="display: flex;">
            <div class="card shadow reassurance-element" style="display: flex;">

                <p class="text-center">
                    <img src="https://www.france-summercourses.com/common/nancy_02.gif" style="height: 300px; width: 100%;">
                </p>
                <div class="card-body" style="display: flex;">
                    <div class="d-flex align-items-start">
                        <div class="icon-text px-4">
                            <h5><strong><?php echo $content['nancy|title3']; ?></strong></h5>
                            <p class="mb-0">
                                <?php echo $content['nancy|p5']; ?>

                                <?php echo $content['nancy|p6']; ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 reassurance" style="display: flex;">
            <div class="card shadow reassurance-element" style="display: flex;">
                <p class="text-center">
                    <img src="https://www.france-summercourses.com/common/nancy_03.gif" style="height: 300px; width: 100%;">
                </p>
                <div class="card-body">
                    <div class="icon-text px-4">
                        <h5><strong><?php echo $content['nancy|title3']; ?></strong></h5>
                        <p class="mb-0">
                            <?php echo $content['nancy|p7']; ?>

                            <?php echo $content['nancy|p8']; ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<!-- fin section -->
<!-- section liens utiles -->
<section id="links" class="slice bg-section-secondary mt-0 pt-0">
    <div class="text-center">
        <h1 class="fh5co-lead to-animate fadeIn animated"><strong>LIENS UTILES</strong></h1>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6 col-sm-12 d-flex" style="flex: 1 0 auto;">
                <div class="card hover-shadow-lg hover-translate-y-n10 d-flex" style="flex: 1 0 auto;">
                    <div class="px-4 pb-5">
                        <h5><?php echo $content['links|title1']; ?></h5>
                        <p class="text-muted">
                        <ul>
                            <li><?php echo $content['links|p1']; ?></li>
                            <li><?php echo $content['links|p2']; ?></li>
                            <li><?php echo $content['links|p3']; ?></li>
                            <li><?php echo $content['links|p4']; ?></li>
                            <li><?php echo $content['links|p5']; ?></li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 d-flex" style="flex: 1 0 auto;">
                <div class="card hover-shadow-lg hover-translate-y-n10 d-flex" style="flex: 1 0 auto;">
                    <div class="px-4 pb-5">
                        <h5><?php echo $content['links|title3']; ?></h5>
                        <p class="text-muted">
                        <ul>
                            <li data-content="links|p7"><?php echo $content['links|p7']; ?></li>
                            <li><?php echo $content['links|p8']; ?></li>
                            <li><?php echo $content['links|p9']; ?></li>
                            <li><?php echo $content['links|p10']; ?></li>
                            <li><?php echo $content['links|p11']; ?></li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 d-flex" style="flex: 1 0 auto;">
                <div class="card hover-shadow-lg hover-translate-y-n10 d-flex" style="flex: 1 0 auto;">
                    <div class="px-4 pb-5">
                        <h5><?php echo $content['links|title2']; ?></h5>
                        <p class="text-muted"><?php echo $content['links|p6']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 d-flex" style="flex: 1 0 auto;">
                <div class="card hover-shadow-lg hover-translate-y-n10 d-flex" style="flex: 1 0 auto;">
                    <div class="px-4 pb-5">
                        <h5><?php echo $content['links|title4']; ?></h5>
                        <p class="text-muted">
                        <ul>
                            <li><?php echo $content['links|p12']; ?></li>
                            <li><?php echo $content['links|p13']; ?></li>
                            <li><?php echo $content['links|p14']; ?></li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- fin section liens utiles -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/seddikezzaki/workspaces/summercourses/nancy-project/resources/views/pages/sejour.blade.php ENDPATH**/ ?>