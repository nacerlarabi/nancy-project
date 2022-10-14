<nav class="navbar navbar-expand-lg top">
    <div class="container-fluid mx-4">
        <a class="navbar-brand" href="/">
            <img src="{{ asset("images/logo/logo-transparent.png") }}" width="50"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @include('common.extra-menu')
        @include('common.menu', ['menu' => $menu])

    </div>
</nav>