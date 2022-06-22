
<div class="card">
	<img class="card-img-top" data-aos="fade-up" src="{{ asset($card['imagesrc']) }}" alt="{!! $card['imagealt'] !!}">
	<div class="card-body">
		<h5 class="card-title" data-aos="fade-up">{!! $card['title'] !!}</h5>
		<div class="card-text" data-aos="fade-up">{!! $card['content'] !!}</div>
		<p class="card-text text-right" data-aos="fade-up"><small class="text-muted">{!! $card['more'] !!}</small></p>
	</div>
</div>
