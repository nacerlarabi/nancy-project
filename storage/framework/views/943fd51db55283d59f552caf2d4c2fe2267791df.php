<style>
	.image_mosaic {

	}

	.image_mosaic img {
		max-width:150px;
		max-height:150px;
		box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		margin: 3px;
	}
.card {
  	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  	transition: 0.3s;
  	border: none;
  	&:hover {
    	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
  	}
  	a {
    	color: initial;
    	&:hover {
      		text-decoration: initial;
    	}
  	}
  }
.text-muted i {
    margin: 0 10px;
 }
.image-caste {
  	object-fit: cover;
  	object-position: -20% 0;
}

</style>

<div class="image_mosaic lm-auto" alt="working girl">
	<img id="mosaic-el-1" class="img-fluid" src="<?php echo e(asset('images/project/31_.jpeg')); ?>" />
	<img id="mosaic-el-2" class="img-fluid" src="<?php echo e(asset('images/project/saintmartin.jpg')); ?>" />
	<img id="mosaic-el-3" class="img-fluid" src="<?php echo e(asset('images/project/7_.jpg')); ?>" />
	<img id="mosaic-el-4" class="img-fluid" src="<?php echo e(asset('images/project/9_.jpg')); ?>" />
	<img id="mosaic-el-5" class="img-fluid" src="<?php echo e(asset('images/project/10_.jpg')); ?>" />
	<img id="mosaic-el-6" class="img-fluid" src="<?php echo e(asset('images/project/22_.jpg')); ?>" />
	<img id="mosaic-el-7" class="img-fluid" src="<?php echo e(asset('images/project/25_.jpg')); ?>" />
	<img id="mosaic-el-8" class="img-fluid" src="<?php echo e(asset('images/project/32_.jpg')); ?>" />
	<img id="mosaic-el-9" class="img-fluid" src="<?php echo e(asset('images/project/45_.jpg')); ?>" />
</div>
<?php /**PATH /Users/seddikezzaki/workspaces/summercourses/nancy-project/resources/views/layouts/image_mosaic.blade.php ENDPATH**/ ?>