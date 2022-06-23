<nav class="navbar navbar-expand-lg top">
    <div class="container-fluid mx-4">
        <a class="navbar-brand" href="/">
            <img src="{{ asset("images/logo/logo-transparent.png") }}" width="90" style="margin-top: 10px;"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @include('common.menu', ['menu' => $menu])
        <nav id="langues" style="">
            <ul class="links icons" style="margin: auto;">
                <li class="">
                    <a href="/locale/en/">
                        <img src="{{ asset('images/countries/head_en.png') }}" label="English" />
                    </a>
                </li>
                <li class="">
                    <a href=" /locale/fr/">
                    <img src="{{ asset('images/countries/head_fr.png') }}" label="French" />
                    </a>
                </li>
                <li class="">
                    <a href="/locale/zh/">
                        <img src="{{ asset('images/countries/head_su.png') }}" label="chinese" />
                    </a>
                </li>
                <li class="">
                    <a href="/locale/ru/">
                        <img src="{{ asset('images/countries/head_ru.png') }}" label="russian" />
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</nav>