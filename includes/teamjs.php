<script type="text/javascript" src="../js/instafeed.min.js"></script>
<script type="text/javascript">
	var foundImages = 0;
	var maxImages = 12;
	
	var feed = new Instafeed({
		limit: -1,
		resolution: 'standard_resolution',
		get: 'user',
		userId: 819085045,
		//filter: function(image) {return image.tags.indexOf('rss16') >= 0;},
		accessToken: '819085045.467ede5.00775a54fc3d4f218b7f637ea3d8d24d',
		success: function() {
			foundImages = 0;
		},
		filter: function(image) {
			if (image.tags.indexOf('<?php echo $dot; ?>') >= 0 && foundImages < maxImages) {
				foundImages = foundImages + 1;
				return true;
			}
			return false;
		},
		template: '<div class="col-xs-6 col-sm-2 col-md-2 insta"><a href="{{link}}"><img class="img-responsive" src="{{image}}" /></a></div>'
	});
	feed.run();
</script>