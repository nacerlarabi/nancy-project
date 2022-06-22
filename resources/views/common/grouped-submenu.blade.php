<div class="">
    <div class="media d-flex align-items-center">
        {{-- <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
            <i class="ni ni-spaceship"></i>
        </div> --}}
        <div class="media-body ml-3">
            <a href="{{ $subMenu['uri'] }}/">
                <h6 class="heading text-primary mb-md-1">{{ $subMenu['title'] }}</h6>
            </a>
            {{-- <p class="description d-none d-md-inline-block mb-0"> --}}
                <ul class="mb-4 px-0">
                    @foreach($subMenu['elements'] as $element)
                        <a href="/{{ $subMenu['uri'] }}#{{ $element['mnemonic'] }}">
                            <li class="nav-item d-none d-lg-block">{{ $element['title'] }}</li>
                        </a>
                    @endforeach
                </ul>
            {{-- </p> --}}
        </div>
    </div>
</div>
