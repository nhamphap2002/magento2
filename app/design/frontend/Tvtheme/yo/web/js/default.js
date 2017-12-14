require([
    "jquery"
], function (jQuery) {

   jQuery(document).ready(function() {
	_heightTitleProduct('.details.product-item-details .product-item-link');
	});
	function _heightTitleProduct(elm) {
		if(jQuery(elm).length > 0) {		
			var height = jQuery(elm).map(function() {
				return jQuery(this).outerHeight();
			}).get();

			minHeight = Math.max.apply(null, height);
		 
			jQuery(elm).css('min-height', minHeight + 'px');
		}
	}
});