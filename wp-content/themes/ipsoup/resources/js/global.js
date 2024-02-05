var $animation_elements;
var $window = jQuery(window);


function toggle_menu() {
	jQuery('#menu_bar').toggleClass('show_menu');
	jQuery('#menu_button').toggleClass('active');
}
function setcook() {
	var nazwa = 'cookie_ue';
	var wartosc = '1';
	var expire = new Date();
	expire.setMonth(expire.getMonth()+12);
	document.cookie = nazwa + "=" + escape(wartosc) +";path=/;" + ((expire==null)?"" : ("; expires=" + expire.toGMTString()));
}
jQuery( document ).ready( function() {
	jQuery('li.menu-item-has-children').append('<i class="submenu_arrow"></i>');
	jQuery('li.menu-item-has-children i').click( function() { jQuery(this).parent().toggleClass('show_menu'); });
});