// JavaScript Document

// global namespace
var CODER = CODER || {};

CODER.vars = {
/*Variables*/
str_agenda: "<div id=\"agenda\">\
<table>\
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
</table></div>",
str_agenda_essentials: "<h2 class=\"flush bottom-10 font-26\">Agenda Morning</h2>\
<h3 class=\"flush bottom-10 font-22\">#Breakout Room 1#</h3>\
<table>\
<tbody>\
<tr>\
<td>08:00 – 09:00</td>\
<td>Registration</td>\
</tr>\
<tr>\
<td>09:00 – 09:15</td>\
<td>\
<strong>Preshow with *********</strong>\
</td>\
</tr>\
<tr>\
<td>09:15 – 10:45</td>\
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
<td>10:45 – 11:00</td>\
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
<td>11:00 – 11:30</td>\
<td>Coffee</td>\
</tr>\
<tr>\
<td>11:30 – 12:30</td>\
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
<td>12:30 – 13:30</td>\
<td>Lunch</td>\
</tr>\
</tbody>\
</table>\
<h2 class=\"top-30 flush bottom-10 font-26\">Agenda afternoon</h2>\
<h3 class=\"flush bottom-10 font-22\">#Breakout Room 2#</h3>\
<table>\
<tbody>\
<tr>\
<td>13:30 – 14:15</td>\
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
<td>14:25 – 15:10</td>\
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
<td>15:10 – 15:40</td>\
<td>Coffee</td>\
</tr>\
<tr>\
<td>15:40 – 16:25</td>\
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
<td>16:35 – 17:20</td>\
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
<td>17:20 – 18:00</td>\
<td>Closing Keynote</td>\
</tr>\
<tr>\
<td>18:00 – 19:00</td>\
<td>Drinks</td>\
</tr>\
</tbody>\
</table>\
<h3 class=\"top-30 flush bottom-10 font-22\">#Breakout Room 3#</h3>\
<table>\
<tbody>\
<tr>\
<td>13:30 – 14:15</td>\
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
<td>14:25 – 15:10</td>\
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
<td>15:10 – 15:40</td>\
<td>Coffee</td>\
</tr>\
<tr>\
<td>15:40 – 16:25</td>\
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
<td>16:35 – 17:20</td>\
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
str_speakers: "<!-- SPEAKER -->\
<div class=\"flex\" style=\"background-color: #f3f3f3; overflow: hidden; padding: 10px; margin-bottom: 30px;\">\
<div class=\"grid-cell grid-20\"><img src=\"/uk/assets/images/webinar/man.jpg\" alt=\"Name Surname\" /></div>\
<div class=\"grid-cell grid-60 left-10-only-scr3 left-20-max-scr2\">\
<h4 style=\"color: #666; font-weight: bold; font-size: 18px;\">Speaker Name Surname</h4>\
<p class=\"font-16\" style=\"margin-bottom: 5px;\">Job title | <span class=\"font-16 bold\" style=\"color: #00a1e0;\">Company</span></p>\
</div>\
</div>",
str_location : "<p><strong>Location:</strong><br />\
[Venue name],<br />\
[Street / Number],<br />\
[Postal code] [City]</p>\
<p><strong>Date:</strong><br />\
[Date]</p>\
<p><strong>Time:</strong><br />\
[From - Until]</p>",
str_details : "<h2>Headline</h2>\
<p>Add your copy in here. Add paragraphs by 'Enter'</p>\
<p class=\"flush\"><strong>What we will cover:(Feel free to delete the bullet list)</strong></p>\
<ul class=\"bullet\">\
<li>item 1</li>\
<li>item 2</li>\
<li>item 3</li>\
<li>item 4</li>\
</ul>\
<p><strong>Places are limited so don't miss out and register today!</strong></p>\
<p><strong>Venue:</strong><br />\
[Venue name],<br />\
[Street / Number],<br />\
[Postal code] [City]</p>\
<p><strong>Date:</strong><br />\
[Date]</p>\
<p><strong>Time:</strong><br />\
[From - Until]</p>",
str_waitlist : "<p><strong>Thanks for your interest. At this time Dreamforce to you in [city] is full and cannot take your RSVP.</strong></p>\
<p>If you would like to be placed on the wait list, please complete this form and you will be contacted if a space opens up.</p>\
<p><strong>Please note: if you do not hear from us, that means we cannot accommodate your RSVP.</strong></p>\
<p>Sincerely,<br />the Salesforce Team</p>",
str_waitlist_conf : "<p><strong>Thank you! You are on the waitlist for Dreamforce to you in [venue]. We will be in touch if a space opens up.</strong></p>\
<p>Due to high demand, we cannot reply unless a space opens up. If you do not hear from us, that means we cannot accommodate your request.</p>\
<p>Thanks,<br>The Salesforce Team</p>"

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
	},
	
	showAddDiv: function (div) {
		$(div).fadeOut(1000);
	},
	
	closeAddtoCal: function () {
		$('#addtocal').fadeOut();
	},
	
	openAddToCalendar: function () {
		var h= $(window).height();
		$('#sec1').height(h - 100);
		$('#addtocal').fadeIn(500);
	},
	
	openResultWindow: function (str) {
		//Calculate height of window
		var h= $(window).height();
		var fac = h*.3;
		$('#sec1').height(h - 100);
		$('#result').height(h-fac);
		//
		// Update Window Title
		$("#addToTitle").text ("Copy / Paste your AddToCalendar code");
		//
		//Handle windows fadIn / fadeOut
		$("#addtocalBack").show();
		$('#result').attr("value", str);
		$("#addtocalContent").fadeOut();
		$("#atcResult").fadeIn();
		return;
	},
	
	openCalendarContent: function () {
		//Clear result textarea;
		$('#result').attr("value", "");
		//
		//Calculate height
		var h= $(window).height();
		//
		// Update Window Title
		$("#addToTitle").text ("Enter AddToCalendar Data");
		//
		$('#sec1').height(h - 30);
		$("#addtocalContent").fadeIn();
		$("#atcResult").fadeOut();
		$("#addtocalBack").fadeOut();
	},
	
	getAddToCalendarData: function (data) {
		var object = {};
		var codeSnippets = ["<div class=\"add-to-calendar\">\
<a title=\"Add to Calendar\" class=\"addthisevent\" ","<span class=\"_date_format\">YYYY/MM/DD</span></a></div>"];
		var str= "";
		console.log('str=' + str);
		var name= "";
		// Put form inputs into an array
		var array = $(data).serializeArray();
		// Make an object out of the array
		$.each(array, function(index, item) {
			object[item.name] = item.value;
			//Merge date & time strings for start & end date
			//*** Better solution would be to sort out the object ***
			if (item.name == "_url") {
					str += "href=\""+ item.value +"\">";
			} else if (item.name == "_cta") {
					str += item.value;
			} else if (item.name == "atc_time_start") {
					name = object["_start"] + " " + item.value;
					str += "<span class=\"_start\">"+ name +"</span>";
			} else if (item.name == "atc_time_end") {
				name = object["_end"] + " " + item.value;
					str += "<span class=\"_end\">"+ name +"</span>";
			} else if (item.name == "_timezone") {
					name = "<span class=\""+item.name+"\" style=\"display: none;\">"+item.value+"</span>";
					str += name; 
			} else if (item.name == "_description") {
				str += "<span class=\""+item.name+"\">"+CODER.commonMethod.valAddToCalendarTextArea (item.value)+"</span>";	
			}
			if (item.name != "_result" &&
				item.name != "_url" &&
				item.name != "_cta" &&
				item.name != "_timezone") {
				if (item.name != "_start" &&
					item.name != "_end" &&
					item.name != "atc_time_start" &&
					item.name != "atc_time_end" &&
					item.name != "_description") {
					str += "<span class=\""+item.name+"\">"+item.value+"</span>";
				}
			}
			console.log (item.name + ": " + item.value);
		});
		
		str = codeSnippets[0] + str + codeSnippets[1];
		CODER.commonMethod.openResultWindow(str);
		//return str;
	},
	
	// Validate textarea content of the AddTOCalendar generator
	valAddToCalendarTextArea: function (data) {
		return data.replace(/\n|\r\n|\r/g, '\\n');
	}
};