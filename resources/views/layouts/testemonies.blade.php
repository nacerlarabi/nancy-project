<div class="test-imo" style="padding: 0;
			font-family: 'Lato', sans-serif; background-color: #f0f8ff;">
    <section class="spacer" style="background-color: #f0f8ff;">
        <div class="testimonial-section">
            <div class="testi-user-img">
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <?php $i=0; ?>
                        @foreach($testimonies as $testimonie)
                            <div class="swiper-slide">
                                <img src="{{ asset($testimonie['picture']) }}" class="u<?php echo $i; ?>" alt="project image">
                                <?php $i++ ?>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="user-saying" style="box-shadow: -117px -3px 109px -90px rgba(0,0,0,0.75);
-webkit-box-shadow: -117px -3px 109px -90px rgba(0,0,0,0.75);
-moz-box-shadow: -117px -3px 109px -90px rgba(0,0,0,0.75); z-index: 1;">
                <div class="swiper-container testimonial">
                    <!-- Additional required wrapper -->
                    <section class="swiper-wrapper">
                        @foreach ($testimonies as $testimonie)
                            <div class="swiper-slide">
                                <div class="quote">
                                    <img class="quote-icon" src="/images/quote.png" alt="">
                                    <p>{!! \Illuminate\Support\Str::limit($testimonie['deposit'], 350, '...') !!}</p>
                                    <div class="name" style="color:black;">-{!! $testimonie['firstname'] !!} {!! $testimonie['lastname'] !!}-</div>
                                    <div class="designation" style="color:black;">{!! $testimonie['occupation'] !!} - {!! $testimonie['country'] !!}</div>
                                </div>
                            </div>
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="test-imo-mobile" style="padding: 0;
			font-family: 'Lato', sans-serif; background-color: #f0f8ff; width:100%;">
    <section class="spacer" style="background-color: #f0f8ff;">
        <div class="" style="width:100%">
            <div class="">
                <div class="swiper-container mobile-test-imo">
                    <div class="swiper-wrapper">
                        <?php $i=0; ?>
                        @foreach($testimonies as $testimonie)
                            <div class="swiper-slide row" style="background-color: white; display: inline; height: 300px; width: 107%;">
                                <img src="{{ asset($testimonie['picture']) }}" class="u<?php echo $i; ?> col-3" alt="project image" style="float:left; border-radius:50%;">
                                <?php $i++ ?>
                                <div class="col-9" style="float: right;">
                                    <img class="quote-icon" src="/images/quote.png" alt="" style="margin-top: 5px;">
                                    <p style="margin-left:-15px; font-size: 12px;">{!! \Illuminate\Support\Str::limit($testimonie['deposit'], 250, '...') !!}</p>
                                    <div class="name" style="color:black; font-size:13px;">-{!! $testimonie['firstname'] !!} {!! $testimonie['lastname'] !!}-</div>
                                    <div class="designation" style="color:black;">{!! $testimonie['occupation'] !!} - {!! $testimonie['country'] !!}</div>
                                </div>
                                {{-- </div> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>

    <div class="swiper-pagination" style="margin-left: 50px;"></div>
</div>