$(document).ready(function(){

/*************** Checkbox script ***************/
var inputs = document.getElementsByTagName('input');
for (a = 0; a < inputs.length; a++) {
if (inputs[a].type == "checkbox") {
var id = inputs[a].getAttribute("id");
if (id==null){
id=  "checkbox" +a;
}
inputs[a].setAttribute("id",id);
var container = document.createElement('div');
container.setAttribute("class", "ttr_checkbox");
var label = document.createElement('label');
label.setAttribute("for", id);
$(inputs[a]).wrap(container).after(label);
}
}

/*************** Radiobutton script ***************/
var inputs = document.getElementsByTagName('input');
for (a = 0; a < inputs.length; a++) {
if (inputs[a].type == "radio") {
var id = inputs[a].getAttribute("id");
if (id==null){
 id=  "radio" +a;
}
inputs[a].setAttribute("id",id);
var container = document.createElement('div');
container.setAttribute("class", "ttr_radio");
var label = document.createElement('label');
label.setAttribute("for", id);
$(inputs[a]).wrap(container).after(label);
}
}

/*************** Staticfooter script ***************/
var window_height =  Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
var body_height = $(document.body).height();
var content = $("div[id$='content_margin']");
if(body_height < window_height){
differ = (window_height - body_height);
content_height = content.height() + differ;
$("div[id*='content_margin']").css({"min-height":content_height+"px"});
}

/* Slideshow Function Call */

if(jQuery('#ttr_slideshow_inner').length){
jQuery('#ttr_slideshow_inner').TTSlider({
stopTransition:false,slideShowSpeed:2000, begintime:1000,cssPrefix: 'ttr_'
});
}

/*************** Hamburgermenu slideleft script ***************/
$('#nav-expander').on('click',function(e){
e.preventDefault();
$('body').toggleClass('nav-expanded');
});

/*************** Menu click script ***************/
$('ul.ttr_menu_items.nav li [data-toggle=dropdown]').on('click', function() {
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
if(window_width > 1025 && $(this).attr('href')){
window.location.href = $(this).attr('href'); 
}
else{
if($(this).parent().hasClass('open')){
location.assign($(this).attr('href'));
}
}
});

/*************** Sidebarmenu click script ***************/
$('ul.ttr_vmenu_items.nav li [data-toggle=dropdown]').on('click', function() {
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
if(window_width > 1025 && $(this).attr('href')){
window.location.href = $(this).attr('href'); 
}
else{
if($(this).parent().hasClass('open')){
location.assign($(this).attr('href'));
}
}
});

/*************** Tab menu click script ***************/
$('.ttr_menu_items ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) { 
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
if(window_width < 1025){
event.preventDefault();
event.stopPropagation();
$(this).parent().siblings().removeClass('open');
$(this).parent().toggleClass(function() {
if ($(this).is(".open") ) {
window.location.href = $(this).children("[data-toggle=dropdown]").attr('href'); 
return "";
} else {
return "open";
}
});
}
});

/*************** Tab-Sidebarmenu script ***************/
$('.ttr_vmenu_items ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) { 
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
if(window_width < 1025){
event.preventDefault();
event.stopPropagation();
$(this).parent().siblings().removeClass('open');
$(this).parent().toggleClass(function() {
if ($(this).is(".open") ) {
window.location.href = $(this).children("[data-toggle=dropdown]").attr('href'); 
return "";
} else {
return "open";
}
});
}
});

/*************** Sticky menu script ***************/
if(jQuery('#ttr_menu').length){
var menuheight = $('nav.navbar').height();
var menutop = $('#ttr_menu').offset().top;
$(document).scroll(function () {
var scrollTop = $(this).scrollTop();
var menuOffset = menutop - menuheight;
if(menuOffset < 0)
{
menuOffset = 0;
}
if (scrollTop > menutop) {
$('#ttr_menu').addClass('navbar-fixed-top');
} else  if (scrollTop <= menuOffset) {
$('#ttr_menu').removeClass('navbar-fixed-top');
}
});
}
WebFontConfig = {
google: { families: [ 'Open+Sans:700','Open+Sans','Lato'] }
};
(function() {
var wf = document.createElement('script');
wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.0.31/webfont.js';
wf.type = 'text/javascript';
wf.async = 'true';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(wf, s);
})();
/*************** Html video script ***************/
var objects = ['iframe[src*="youtube.com"]','iframe[src*="youtu.be"]', '.html_content video','object'];
for(var i = 0 ; i < objects.length ; i++){
if ($(objects[i]).length > 0 ) {
$(objects[i]).wrap( "<div class='embed-responsive embed-responsive-16by9'></div>" );
$(objects[i]).addClass('embed-responsive-item');
}
}
});


// For tabs

function openTabs(evt, tabName){
	var i, tabcontent, tablinks;

	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}

	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className =tablinks[i].className.replace("active", "");
	}

	document.getElementById(tabName).style.display = "block";
	evt.currentTarget.className += " active";

	document.getElementById("ManageCustomer").click();

}


// Manage movies table

// function myFunction(){
// 	var input. filter, table, tr, td, i, txtValue;
// 	input = document.getElementById("myInput");
// 	filter = input.value.toUpperCase();
// 	table = document.getElementById("myTable");
// 	tr = table.getElementsByTagName("tr");

// 	for(i = 0, i < tr.length; i++){
// 		td = tr[i].getElementsByTagName("td")[0];
// 		if(td){
// 			txtValue = td.textContent || td.innerText;

// 		 	if(txtValue.toUpperCase().indexOf(filter) > - 1){
// 		 		tr[i].style.display = "";
// 		 	}else{
// 		 		tr[i].style.display = "none";
// 		 	}
// 		}
// 	}
// }
// 		