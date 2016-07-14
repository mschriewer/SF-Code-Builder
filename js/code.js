// JavaScript Document

// global namespace
var CODER = CODER || {};

CODER.vars = {
/*Variables*/
str_agenda: "<table>\
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
</table>",
str_agenda_essentials: "<h2 class=\"flush bottom-10 font-26\">Agenda Morning</h2>\
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
<p class=\"flush top-30\">Footnote</p>",
str_speakers: "<h4 class=\"bottom-10\">Speakers</h4>\
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
</div>"
};

CODER.commonMethod = {
  name: "Mike", // define regex for name validation
	validateName: function(name){
		alert(name);
	},
	
	closeBox: function (obtn, cbtn, box) {
		$(box).slideUp();
		$(obtn).show();
		$(cbtn).hide();
	},
	openBox: function (obtn, cbtn, box) {
		$(box).slideDown();
		$(obtn).hide();
		$(cbtn).show();
	}
};