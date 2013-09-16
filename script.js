jQuery(document).ready(function(){
	jQuery(".nextProda").live("click",function(){
        jQuery(document).scrollTop( jQuery.cookie("scroll") );
		return false;
	});

    if ( jQuery.cookie("scroll") !== null ) {
		jQuery("#footer").append("<a class='nextProda' href='#'>Продолжить чтение</a>");
    }

    jQuery(window).scroll(function(){
        jQuery.cookie("scroll", jQuery(document).scrollTop() );
    });
});
