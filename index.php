<html>
<head>
	<title>Convert content to HTML</title>
<!-- Place inside the <head> of your HTML -->
<link rel="stylesheet" href="css/stlye.css" type="text/css">
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
/*Variables*/
str_agenda="<table>\
<tbody>\
<tr>\
<td>08:30-09:30</td>\
<td>Registration</td>\
</tr>\
<tr>\
<td>09:30-11:00</td>\
<td>Item 2</td>\
</tr>\
<tr>\
<td>11:00-11:30</td>\
<td>Item 3</td>\
</tr>\
<tr>\
<td>11:30-12:15</td>\
<td>Item 4</td>\
</tr>\
<tr>\
<td>12:15-13:00</td>\
<td>Item 5</td>\
</tr>\
<tr>\
<td>13:00-13:45</td>\
<td>Item 6</td>\
</tr>\
<tr>\
<td>13:45-16:10</td>\
<td>\
<strong>Sales Cloud</strong>\
</td>\
</tr>\
<tr>\
<td>13:45-14:30</td>\
<td>\
<strong>Service Cloud</strong>\
</td>\
</tr>\
<tr>\
<td>14:35-15:20</td>\
<td>\
<strong>Marketing Cloud</strong>\
</td>\
</tr>\
<tr>\
<td>15:25-16:10</td>\
<td>\
<strong>App Cloud</strong>\
</td>\
</tr>\
<tr>\
<td>16:10-16:30</td>\
<td>Closing Keynote</td>\
</tr>\
</tbody>\
</table>";
str_agenda_essentials = "<h2 class=\"flush bottom-10 font-26\">Agenda Morning</h2>\
<h3 class=\"flush bottom-10 font-22\">#Breakout Room 1#</h3>\
<table>\
<tbody>\
<tr>\
<td>08:00 &ndash; 09:00</td>\
<td>Registration</td>\
</tr>\
<tr>\
<td>09:00 &ndash; 09:15</td>\
<td>\
<strong>Preshow with *********</strong>\
</td>\
</tr>\
<tr>\
<td>09:15 &ndash; 10:45</td>\
<td>\
<p class=\"flush\">\
<strong>Title Keynote</strong>\
</p>\
<ul class=\"flush left-30 bottom-10\">\
<li>Name Surname, Job title, Company<strong>\
<br />\
</strong>\
</li>\
<li>Name Surname, Job title, Company</li>\
</ul>\
</td>\
</tr>\
<tr>\
<td>10:45 &ndash; 11:00</td>\
<td>\
<p class=\"flush\">\
<strong>Interview:</strong>\
</p>\
<ul class=\"flush left-30 bottom-10\">\
<li>Name Surname, Job title, Company</li>\
</ul>\
</td>\
</tr>\
<tr>\
<td>11:00 &ndash; 11:30</td>\
<td>Coffee</td>\
</tr>\
<tr>\
<td>11:30 &ndash; 12:30</td>\
<td>\
<p class=\"flush\">\
<strong>Customer Testimonial Panel</strong>\
</p>\
<ul class=\"flush left-30 bottom-10\">\
<li>Name Surname, Job title, Company<strong>\
<br />\
</strong>\
</li>\
<li>Name Surname, Job title, Company</li>\
</ul>\
</td>\
</tr>\
<tr>\
<td>12:30 &ndash; 13:30</td>\
<td>Lunch</td>\
</tr>\
</tbody>\
</table>\
<h2 class=\"top-30 flush bottom-10 font-26\">Agenda afternoon</h2>\
<h3 class=\"flush bottom-10 font-22\">#Breakout Room 2#</h3>\
<table>\
<tbody>\
<tr>\
<td>13:30 &ndash; 14:15</td>\
<td>\
<p class=\"flush\">\
<strong>Sales Cloud</strong>\
</p>\
<ul class=\"flush left-30 bottom-10\">\
<li>Name Surname, Job title, Company</li>\
<li>Name Surname, Job title, Company</li>\
</ul>\
</td>\
</tr>\
<tr>\
<td>14:25 &ndash; 15:10</td>\
<td>\
<p class=\"flush\">\
<strong>Service Cloud</strong>\
</p>\
<ul class=\"flush left-30 bottom-10\">\
<li>Name Surname, Job title, Company</li>\
<li>Name Surname, Job title, Company</li>\
</ul>\
</td>\
</tr>\
<tr>\
<td>15:10 &ndash; 15:40</td>\
<td>Coffee</td>\
</tr>\
<tr>\
<td>15:40 &ndash; 16:25</td>\
<td>\
<p class=\"flush\">\
<strong>App Cloud</strong>\
</p>\
<ul class=\"flush left-30 bottom-10\">\
<li>Name Surname, Job title, Company</li>\
<li>Name Surname, Job title, Company</li>\
</ul>\
</td>\
</tr>\
<tr>\
<td>16:35 &ndash; 17:20</td>\
<td>\
<p class=\"flush\">\
<strong>Marketing Cloud</strong>\
</p>\
<ul class=\"flush left-30 bottom-10\">\
<li>Name Surname, Job title, Company</li>\
</ul>\
</td>\
</tr>\
<tr>\
<td>17:20 &ndash; 18:00</td>\
<td>Closing Keynote</td>\
</tr>\
<tr>\
<td>18:00 &ndash; 19:00</td>\
<td>Drinks</td>\
</tr>\
</tbody>\
</table>\
<h3 class=\"top-30 flush bottom-10 font-22\">#Breakout Room 3#</h3>\
<table>\
<tbody>\
<tr>\
<td>13:30 &ndash; 14:15</td>\
<td>\
<p class=\"flush\">\
<strong>Headline</strong>\
<br />\
Description</p>\
<ul class=\"flush left-30 bottom-10\">\
<li>Name Surname, Job title, Company</li>\
<li>Name Surname, Job title, Company</li>\
</ul>\
</td>\
</tr>\
<tr>\
<td>14:25 &ndash; 15:10</td>\
<td>\
<p class=\"flush\">\
<strong>Headline</strong>\
<br />\
Description</p>\
<ul class=\"flush left-30 bottom-10\">\
<li>Name Surname, Job title, Company</li>\
<li>Name Surname, Job title, Company</li>\
</ul>\
</td>\
</tr>\
<tr>\
<td>15:10 &ndash; 15:40</td>\
<td>Coffee</td>\
</tr>\
<tr>\
<td>15:40 &ndash; 16:25</td>\
<td>\
<p class=\"flush\">\
<strong>Headline</strong>\
<br />\
Description</p>\
<ul class=\"flush left-30 bottom-10\">\
<li>Name Surname, Job title, Company</li>\
<li>Name Surname, Job title, Company</li>\
</ul>\
</td>\
</tr>\
<tr>\
<td>16:35 &ndash; 17:20</td>\
<td>\
<p class=\"flush\">\
<strong>Headline</strong>\
<br />\
Description</p>\
<ul class=\"flush left-30 bottom-10\">\
<li>Name Surname, Job title, Company</li>\
<li>Name Surname, Job title, Company</li>\
</ul>\
</td>\
</tr>\
</tbody>\
</table>\
<p class=\"flush top-30\">Footnote</p>";
str_speakers = "<h4 class=\"bottom-10\">Speakers</h4>\
\
<div class=\"flex\" style=\"background-color:#f3f3f3\">\
\
<div class=\"grid-cell grid-20\">\
<img alt=\"\" src=\"http://www.salesforce.com/uk/assets/images/webinar/guest-speaker-will-moxley.jpg\" style=\"border:1px solid #999\">\
</div>\
<div class=\"grid-cell grid-60 top-10 left-10-only-scr3 left-20-max-scr2\">\
<h4>Will Moxley</h4>\
<p style=\"margin-bottom:5px;\" class=\"font-14\">\
<strong>SVP Sales Cloud Product Management</strong>\
<br>\
<span class=\"font-16\">Salesforce</span>\
</p>\
</div>\
<div class=\"grid-cell grid-20 top-20 show-min-scr3\">\
<img alt=\"\" src=\"http://www.salesforce.com/de/assets/images/webinar/brandmaker-de-image.png\">\
</div>\
<div class=\"clear-both\">\
</div>\
</div>\
<br>\
<div class=\"flex margin-bottom-20\" style=\"background-color:#f3f3f3\">\
<div class=\"grid-cell grid-20\">\
<img alt=\"\" src=\"http://www.salesforce.com/uk/assets/images/webinar/guest-speaker-jeremy-waite.jpg\" style=\"border:1px solid #999\">\
</div>\
<div class=\"grid-cell grid-60 top-10 left-10-only-scr3 left-20-max-scr2\">\
<h4>Jeremy Waite</h4>\
<p style=\"margin-bottom:5px;\" class=\"font-14\">\
<strong>Head of Digital Strategy</strong>\
<br>\
<span class=\"font-16\">Salesforce</span>\
</p>\
</div>\
<div class=\"grid-cell grid-20 top-20 show-min-scr3\">\
<img alt=\"\" src=\"http://www.salesforce.com/uk/assets/images/webinar/salesforce-logo-mini.png\">\
</div>\
<div class=\"clear-both\">\
</div>\
</div>\
<br>\
<div class=\"flex\" style=\"background-color:#f3f3f3\">\
<div class=\"grid-cell grid-20\">\
<img alt=\"\" src=\"http://www.salesforce.com/uk/assets/images/webinar/guest-speaker-stacey-smith.jpg\" style=\"border:1px solid #999\">\
</div>\
<div class=\"grid-cell grid-60 top-10 left-10-only-scr3 left-20-max-scr2\">\
<h4>Stacey Smith</h4>\
<p style=\"margin-bottom:5px;\" class=\"font-14\">\
<strong>Senior Director</strong>\
<br>\
<span class=\"font-16\">CEB</span>\
</p>\
</div>\
<div class=\"grid-cell grid-20 top-20 show-min-scr3\">\
<img alt=\"\" src=\"http://www.salesforce.com/uk/assets/images/webinar/salesforce-logo-mini.png\">\
</div>\
<div class=\"clear-both\">\
</div>\
</div>";
/**********/
tinymce.init({
    selector: "textarea",
    plugins: [
        "code, link, image imagetools, table"
    ],
	imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",
    style_formats: [  
		{title: 'Font', items: [ 
			{title: 'Paragraph', format: 'p'},      
			{title: 'Heading 1', format: 'h1'},
			{title: 'Heading 2', format: 'h2'},
			{title: 'Heading 3', format: 'h3'},
			{title: 'Heading 4', format: 'h4'},
			{title: 'Heading 5', format: 'h5'},
			{title: 'Font-size-15', selector: 'li,p,td', classes: 'font-15'}
		]},
		{title: 'Spacing', items: [ 
			{title: 'Top margin 20px', selector: 'li,p,td', classes: 'top-20'},
			{title: 'Top margin 30px', selector: 'li,p,td', classes: 'top-30'},
			{title: 'Bottom margin 20px', selector: 'li,p,td', classes: 'bottom-20'},
			{title: 'Bottom margin 30px', selector: 'li,p,td', classes: 'bottom-30'},
			{title: 'Delete spacing', selector: 'ul,li,p,td,tr,table,h1,h2,h3', classes: 'flush'}
		]}
    ],
    formats: {
    list: {selector : 'li', classes : 'left'},
    },
    menu: {
        tools: {title: 'Get HTML code', items: 'code'}
    },
    toolbar1: "undo redo | styleselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist | link  |   image   |   imagetools   |  table   |   code",
    auto_focus: "elm1",
  	height : 600
 });
 function setContent (str) {
	 	tinyMCE.activeEditor.setContent(str);
	 };
function closeBox (obtn, cbtn, box) {
		$(box).slideUp();
		$(obtn).show();
		$(cbtn).hide();
	}
function openBox (obtn, cbtn, box) {
		$(box).slideDown();
		$(obtn).hide();
		$(cbtn).show();
	}
</script>
<!--script src="js/jQuery/jquery-1.6.1.min.js"></script-->

<script src="http:////ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/code.js"></script>
<link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
<style type="text/css">
   

</style>
<script type="text/javascript">
$(document ).ready(function() {
	//Close boxes when page is ready
   closeBox ("#openbox", "#closebox", "#support");
   closeBox ("#opentemp", "#closetemp", "#templates");
   //FN's for close button
    $("#close").click(function() {
        closeBox ("#openbox", "#closebox", "#support");
    });
	$("#closeTmpBtn").click(function() {
        closeBox ("#opentemp", "#closetemp", "#templates");
    });
	 //FN's for open button
    $("#open").click(function() {
		openBox ("#openbox", "#closebox", "#support");
    });
	$("#openTmpBtn").click(function() {
		openBox ("#opentemp", "#closetemp", "#templates");
    });

});
</script>
</head>
<body>
    <div class="margin-10">
    <div id="closebox" class="border-1-red bg-light-red gutter-10 shade-3">
        <div><button id="close">Close Help [-]</button></div>
    </div>
    <div id="openbox" class="border-1-green bg-light-green gutter-10 shade-3" style="margin-bottom:10px">
        <div><button id="open">Open Help [+]</button></div>
    </div>
	<!--SUPPORT-->
    <div id="support">
        <div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Enter your content</h3>
                <img src="images/image1.png" class="border-3 shade-3 flex">
            </div>
        </div>
        <div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Do your styling</h3>
                <img src="images/image2.png" class="border-3 shade-3 flex">
            </div>
        </div>
        <div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Maybe create a list</h3>
                <img src="images/image3.png" class="border-3 shade-3 flex">
            </div>
        </div>
        <div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Grab the HTML</h3>
                <img src="images/image4.png" class="border-3 shade-3 flex">
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div id="closetemp" class="border-1-red bg-light-red gutter-10 shade-3">
        <div><button id="closeTmpBtn">Close Templates [-]</button></div>
    </div>
    <div id="opentemp" class="border-1-green bg-light-green gutter-10 shade-3" style="margin-bottom:10px">
        <div><button id="openTmpBtn">Open Templates [+]</button></div>
    </div>
    <div id="templates">
    	<div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Agenda</h3>
                <a onClick="setContent(str_agenda);" href="#"><img src="images/img-prew-standard.jpg" class="border-3 shade-3 flex"></a>
            </div>
        </div>
        <div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Agenda Essentials</h3>
                <a onClick="setContent(str_agenda_essentials);" href="#"><img src="images/img-prew-essentials.jpg" class="border-3 shade-3 flex"></a>
            </div>
        </div>
        <div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Speakers</h3>
                <a onClick="setContent(str_speakers);" href="#"><img src="images/img-prew-speakers.jpg" class="border-3 shade-3 flex"></a>
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <img style="width:100%;max-width:640px;height:auto" src="images/image6.png">

    <!-- Place this in the body of the page content -->
    <form method="post">
        <textarea id="elm1"></textarea>
    </form>
    <div style="text-align:right"><img style="width:100%;max-width:563px;height:auto" src="images/image7.png"></div>
</div>
<div class="footer"><p><a href="http://jgrietveld.com" target="_blank">Jerry Rietveld</a>: Making the web work for you since 1995 / Mike Schriewer</p></div>
</body>
</html>