
<div class="card">
	<img class="card-img-top" data-aos="fade-up" src="{{ asset($card['imagesrc']) }}" alt="{!! $card['imagealt'] !!}">
	<div class="card-body">
		<h5 class="card-title" data-aos="fade-up">{!! $card['title'] !!}</h5>
		<div style="max-height: 250px;" class="card-text" data-aos="fade-up">{!! substr($card['content'],0,250) !!}...</div>

	</div>
</div>


