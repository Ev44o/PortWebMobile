/*custom.js
Evan P

*/

// this function makes the nav bar scroll
// with the user for quick access 
jQuery(function()
{
  var menuOffset = jQuery('nav')[0].offsetTop;
  jQuery(document).bind('ready scroll',function() 
	{
    		var docScroll = jQuery(document).scrollTop();
    		if(docScroll >= menuOffset)
		{
      			jQuery('nav').addClass('fixed');
    		}
		else
		{
      			jQuery('nav').removeClass('fixed').removeAttr("width");
    		}
	});
});