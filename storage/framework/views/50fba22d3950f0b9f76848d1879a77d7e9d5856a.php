
<div class="card">
	<img class="card-img-top" data-aos="fade-up" src="<?php echo e(asset($card['imagesrc'])); ?>" alt="<?php echo $card['imagealt']; ?>">
	<div class="card-body">
		<h5 class="card-title" data-aos="fade-up"><?php echo $card['title']; ?></h5>
		<div style="max-height: 250px;" class="card-text" data-aos="fade-up"><?php echo substr($card['content'],0,250); ?>...</div>

	</div>
</div>


<?php /**PATH /Users/seddikezzaki/workspaces/summercourses/nancy-project/resources/views/layouts/card.blade.php ENDPATH**/ ?>