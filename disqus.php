<!-- This code is ment to live in the 'bottom' custom scripts area -->
<style>
#disqus_thread {
	overflow-y: overlay;
	width: auto;
	height: auto;
}
</style>
<script type="text/javascript">
	var disqus_shortname = '{Your Short Name Here}'; // Required - Replace example with your forum shortname
	var baseDomain = 'example.cdmhost.com'; //Required - replace this domain with your own ContentDM domain information

    $(function() {
	    /** Building the URL for the current object **/
	    var customURL = buildURL($('#cdm_collection').val(), $('#cdm_show').val(), $('#cdm_id').val());

	    /** Replacing built-in comments **/
	    $('#comment_box').parent().html('<div id="disqus_thread"></div>');
	    $('#comments_count').hide();

	    try {
		    /** Set Disqus Customizations **/
		    var disqus_identifier = customURL;
		    var disqus_url = customURL;

		    /** Load Disqus **/
	        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	        dsq.src = '//' + [disqus_shortname] + '.disqus.com/embed.js';
	        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	    } catch(err){}


	    /** Reload Disqus after ajax calls **/
		$(document).ajaxSuccess(function() {
		    /** Building the URL for the current object **/
			var customURL = buildURL($('#cdm_collection').val(), $('#cdm_show').val(), $('#cdm_id').val());

			/** Reloading Disqus **/
		    try {
				DISQUS.reset({
				  reload: true,
				  config: function () {  
				    this.page.identifier = customURL;  
				    this.page.url = customURL;
				  }
				});
		    } catch(err){}
		});
    });

	/** Function to build the Object URL **/
	function buildURL(coll, show, id) {
		var result = 'http://' + [baseDomain] + '/cdm/ref/collection/' + coll + '/id/';
		if (show != 'undefined') {
	    	result += show;
	    } else {
	    	result += id;
	    }

	    return result;
	}
</script>
