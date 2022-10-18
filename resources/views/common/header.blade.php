<nav class="navbar navbar-expand-lg top">
    @include('common.extra-menu')

    <div class="container-fluid mx-4">
        <a class="navbar-brand" href="/">
            <img src="{{ asset("images/logo/new-logo.png") }}" width="100"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @include('common.menu', ['menu' => $menu])

    </div>
</nav>