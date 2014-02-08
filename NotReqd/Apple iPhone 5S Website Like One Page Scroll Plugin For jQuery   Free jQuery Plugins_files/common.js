// -----------------------------------------------------------------------------------
//
// common JS library for jQueryscript.net
// http://www.jqueryscript.net/
// Last updated: 2013-03-23
//

// Hide IE Error

function ResumeError() { 
return true; 
} 
window.onerror = ResumeError; 

// Tabbed Menu

function showtab(btnid,tabid,tabnumber)
{
	for (i = 1;i<=tabnumber;i++)
	{
		document.getElementById(tabid+"_btn"+i).className = "tabpane";
		document.getElementById(tabid+"_sub"+i).style.display = "none";
	}
	document.getElementById(tabid+"_btn"+btnid).className = "current-tab";
	document.getElementById(tabid+"_sub"+btnid).style.display = "";
}

// back to top
(function(a){a.fn.scrollToTop=function(c){var d={speed:800};c&&a.extend(d,{speed:c});return this.each(function(){var b=a(this);a(window).scroll(function(){100<a(this).scrollTop()?b.fadeIn():b.fadeOut()});b.click(function(b){b.preventDefault();a("body, html").animate({scrollTop:0},d.speed)})})}})(jQuery);
$(function() {
     $("#toTop").scrollToTop(500);
});

// lightbox

jQuery(document).ready(function(){var a=jQuery;a(".jqoverlay .vlightbox3").mouseenter(function(){var b=a("div.vlb_zoom",this);if(!b.length){b=a('<div class="vlb_zoom" style="position:absolute">').hide().appendTo(this);a("img:first",b).detach()}b.fadeIn("fast")}).mouseleave(function(){a("div",this).fadeOut("fast")})});

jQuery(document).ready(function(){ window.Lightbox = new jQuery().visualLightbox({autoPlay:false,borderSize:10,classNames:'vlightbox3',closeLocation:'top',descSliding:true,enableRightClick:false,enableSlideshow:false,resizeSpeed:7,slideTime:4,startZoom:true,prefix:"pref2_"}) });

jQuery(document).ready(function(){var a=jQuery;a(".jqoverlay2 .vlightbox2").mouseenter(function(){var b=a("div.vlb_zoom",this);if(!b.length){b=a('<div class="vlb_zoom" style="position:absolute">').hide().appendTo(this);a("img:first",b).detach()}b.fadeIn("fast")}).mouseleave(function(){a("div",this).fadeOut("fast")})});

jQuery(document).ready(function(){ window.Lightbox = new jQuery().visualLightbox({autoPlay:false,borderSize:10,classNames:'vlightbox2',closeLocation:'top',descSliding:true,enableRightClick:false,enableSlideshow:false,resizeSpeed:7,slideTime:4,startZoom:true,prefix:"pref2_"}) });

// code highlighter


// pretty date time

