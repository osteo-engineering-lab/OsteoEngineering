<!-- <script type="text/javascript" src="../js/instafeed.min.js"></script>-->
<script type="text/javascript" src="../js/instafetch.js"></script>
<script type="text/javascript" src="../js/insta.js"></script>
<script type="text/javascript">
// 	var foundImages = 0;
// 	var maxImages = 36;
// 	
// 	var feed = new Instafeed({
// 		limit: 30,
// 		resolution: 'standard_resolution',
// 		get: 'user',
// 		userId: 819085045,
// 		//filter: function(image) {return image.tags.indexOf('rss16') >= 0;},
// 		accessToken: '',
// 		success: function() {
// 			foundImages = 0;
// 		},
// 		filter: function(image) {
// 			if (image.tags.indexOf('<?php echo $dot; ?>') >= 0 && foundImages < maxImages) {
// 				foundImages = foundImages + 1;
// 				return true;
// 			}
// 			return false;
// 		},
// 		template: '<div class="col-xs-6 col-sm-2 col-md-2 insta"><a href="{{link}}"><img class="img-responsive" src="{{image}}" /></a></div>'
// 	});
// 	feed.run();
	
$(function() {
  // Get an instance of a fetcher
  var fetcher = new Instafetch('0798c403198a4d039869e83f86831838');

  // Fetch results
  fetcher.fetch({
    user: 819085045, // This is the ID for 9gag, you can get the ID from username using http://jelled.com/instagram/lookup-user-id
    tag: '<? echo $dot; ?>',
    limit: 88,
    callback: displayInstaBlocks, // You can customize your own functionality by building from the logResults method
    params: 'instafetches'
  });
});
</script>