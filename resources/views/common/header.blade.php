<section class="fixed-top justify-content-end" style="">
    @include('common.extra-menu')
</section>
<nav class="navbar navbar-default sticky-top navbar-expand-lg">
    <a class="navbar-brand mr-auto mt-2 mt-lg-0" href="/">
        <img src="{{ asset("images/logo/new-logo.png") }}" width="100"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
            @include('common.menu', ['menu' => $menu])
    </div>



    <!--
    <div class="container-fluid ">
            <a class="navbar-brand" href="/">
                <img src="{{ asset("images/logo/new-logo.png") }}" width="100"/>
            </a>
        <div class="navbar-right">
            <div>

            </div>
            <div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


            </div>
        </div>
        <div class="navbar-right" style="width:40px;">
            <div class="">

            </div>
        </div>
    </div>
-->


</nav>
