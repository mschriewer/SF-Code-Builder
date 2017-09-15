<html><head>
	<title>Convert content to HTML</title>
<!-- Place inside the <head> of your HTML -->
<link rel="stylesheet" href="css/stlye.css" type="text/css">
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#elm1",
	theme: 'modern',
	skin: 'mystic',
	/*content_css: '/css/my-styles.css',*/
	content_css: '/code-builder/css/my-styles.css',
	preview_styles: false,
    plugins: [
        "code, link, image imagetools, table, paste"
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
			{title: 'Font Size 15px', selector: 'li,p,td,table,div,h1,h2,h3,h4,h5,h6', classes: 'font-15'},
			{title: 'Font White', selector: 'li,p,td,table,div,h1,h2,h3,h4,h5,h6', classes: 'font-white'},
			{title: 'Font Dark Gray', selector: 'li,p,td,h1,h2,h3,h4,h5,h6', classes: 'font-gray'},
			{title: 'Font Light Gray', selector: 'li,p,td,h1,h2,h3,h4,h5,h6', classes: 'font-gray2'}
		]},
		{title: 'Spacing', items: [ 
			{title: 'Top padding 10px', selector: 'li,p,td,table,div,h1,h2,h3,h4,h5,h6', classes: 'top-10'},
			{title: 'Top padding 20px', selector: 'li,p,td,table,div,h1,h2,h3,h4,h5,h6', classes: 'top-20'},
			{title: 'Top padding 30px', selector: 'li,p,td,table,div,h1,h2,h3,h4,h5,h6', classes: 'top-30'},
			{title: 'Bottom padding 10px', selector: 'li,p,td,table,div,h1,h2,h3,h4,h5,h6', classes: 'bottom-10'},
			{title: 'Bottom padding 20px', selector: 'li,p,td,table,div,h1,h2,h3,h4,h5,h6', classes: 'bottom-20'},
			{title: 'Bottom padding 30px', selector: 'li,p,td,table,div,h1,h2,h3,h4,h5,h6', classes: 'bottom-30'},
			{title: 'Delete / Add spacing', selector: 'ul,li,p,td,table,div,h1,h2,h3,h4,h5,h6,tr,table,h1,h2,h3,h4,h5,h6', classes: 'flush'}
		]},
		{title: 'Breakouts', items: [ 
			
			{title: 'FAQ Title format', selector: 'p', classes: 'faqTitle'},
			{title: 'FAQ Abstract format', selector: 'div,p', classes: 'faqContent'},
		]}
    ],
	allow_html_in_named_anchor: true,
	extended_valid_elements: 'pre[*],script[*],style[*]', 
	valid_children: "+body[style|script],pre[script|div|p|br|span|img|style|h1|h2|h3|h4|h5],*[*]",
	valid_elements : '*[*]', 
	invalid_classes : 'faqContent',
	relative_urls : false,
	remove_script_host : true,
	document_base_url : "/",
	convert_urls : true,
    formats: {
    list: {selector : 'li', classes : 'left'}
    },
	content_style: [".add-to-calendar {margin: 10px; border: 5px solid red; padding: 3px}"],
    toolbar1: "undo redo | styleselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist | link  |   image   |   imagetools   |  table   |   removeformat   |   pastetext   |   code",
    auto_focus: "elm1",
  	height : 300
 });
	// Applying the specified format
	tinymce.activeEditor.formatter.apply('custom_format');
 
</script>
<script src="js/jQuery/jquery-1.6.1.min.js" type="text/javascript"></script>

<!--script src="http:////ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script-->
<script src="js/code.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
<style type="text/css">
   

</style>
<script type="text/javascript">
$(document ).ready(function() {
	//Close boxes when page is ready
	CODER.commonMethod.closeBox("#openbox", "#closebox", "#support");
   	CODER.commonMethod.closeBox ("#opentemp", "#closetemp", "#templates");
	//Close AddToCalendar window
	//$("#addtocal").hide();
	$("#atcResult").hide();
	$("#addtocalBack").hide();
   //FN's for close button
    $("#close").click(function() {
        CODER.commonMethod.closeBox ("#openbox", "#closebox", "#support");
    });
	$("#closeTmpBtn").click(function() {
        CODER.commonMethod.closeBox ("#opentemp", "#closetemp", "#templates");
    });
	 //FN's for open button
    $("#open").click(function() {
		CODER.commonMethod.openBox ("#openbox", "#closebox", "#support");
    });
	$("#openTmpBtn").click(function() {
		CODER.commonMethod.openBox ("#opentemp", "#closetemp", "#templates");
    });
	$("#addtocalClose").click(function() {
		CODER.commonMethod.closeAddtoCal();
	});
	$("#addtocalBack").click(function() {
		CODER.commonMethod.openCalendarContent();
    });
	 
	$('#button').click (function (event) {
		var str = CODER.commonMethod.getAddToCalendarData('#data');
		CODER.commonMethod.openResultWindow(str);
		event.preventDefault();
	});	
	
	$('#result').attr("value", "");
});
</script>
</head>
<body>
    <div class="margin-10">
    <div id="closebox" class="border-grey bg-light-grey gutter-10">
        <div><button id="close">Close Help [-]</button></div>
    </div>
    <div id="openbox" class="border-grey bg-grey gutter-10" style="margin-bottom:10px">
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
    <div id="closetemp" class="border-grey bg-light-grey gutter-10">
        <div><button id="closeTmpBtn">Close Templates [-]</button></div>
    </div>
    <div id="opentemp" class="border-grey bg-grey gutter-10" style="margin-bottom:30px">
        <div><button id="openTmpBtn">Open Templates [+]</button></div>
    </div>
    <div id="templates">
    	<div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Details</h3>
                <a onClick="tinyMCE.activeEditor.setContent(CODER.vars.str_details);" href="#"><img src="images/img-prew-details.jpg" class="border-3 shade-3 flex"></a>
            </div>
        </div>
    	<div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Agenda</h3>
                <a onClick="tinyMCE.activeEditor.setContent(CODER.vars.str_agenda);" href="#"><img src="images/img-prew-standard.jpg" class="border-3 shade-3 flex"></a>
            </div>
        </div>
        <div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Agenda Essentials</h3>
                <a onClick="tinyMCE.activeEditor.setContent(CODER.vars.str_agenda_essentials);" href="#"><img src="images/img-prew-essentials.jpg" class="border-3 shade-3 flex"></a>
            </div>
        </div>
        <div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Location & Timing</h3>
                <a onClick="tinyMCE.activeEditor.setContent(CODER.vars.str_location);" href="#"><img src="images/img-prew-loc.jpg" class="border-3 shade-3 flex"></a>
            </div>
        </div>
        <div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Speakers</h3>
                <a onClick="tinyMCE.activeEditor.setContent(CODER.vars.str_speakers);" href="#"><img src="images/img-prew-speakers.jpg" class="border-3 shade-3 flex"></a>
            </div>
        </div>
        <div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">AddToCalendar</h3>
                <a onClick="CODER.commonMethod.openAddToCalendar();" href="#"><img src="images/img-prew-addtocal.jpg" class="border-3 shade-3 flex"></a>
            </div>
        </div>
        <div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Waitlist</h3>
                <a onClick="tinyMCE.activeEditor.setContent(CODER.vars.str_waitlist);" href="#"><img src="images/img-prew-waitlist.jpg" class="border-3 shade-3 flex"></a>
            </div>
        </div>
        <div class="width-25-min-scr3 width-50-max-scr2 left">
            <div class="gutter-10 center">
                <h3 class="top-0">Waitlist conf</h3>
                <a onClick="tinyMCE.activeEditor.setContent(CODER.vars.str_waitlist_conf);" href="#"><img src="images/img-prew-waitlist-conf.jpg" class="border-3 shade-3 flex"></a>
            </div>
        </div>
    </div>
    <div class="clear"></div>

    <!-- Place this in the body of the page content -->
    <form method="post">
        <textarea id="elm1"></textarea>
    </form>
    
     <!-- Form to capture AddToCalendar code -->
    <div id="addtocal">
        <form id="data" action="#"> 
            <div id="sec1"> 
        	<div id="addtocalBar">
            	<h3 id="addToTitle">Enter AddToCalendar Data</h3>
                <div id="addToBtnContainer">
                    <div id="addtocalBack">back &lt;</div>
                    <div id="addtocalClose">close x</div>
                </div>
            </div>
            <div id="addtocalContent">
            		<label for="_url">Link to Event page *</label>
        			<input id="url" name="_url" type="text" class="required" placeholder="Link to Event page" />
            		<label for="_cta">Button title *</label>
        			<input id="cta" name="_cta" type="text" class="required" placeholder="Button title" />
                    <label for="_start">Start Date*</label> 
                    <input id="startdate" name="_start" type="date" class="required" placeholder="yyyy-mm-dd" />
                    <label for="_end">End Date *</label> 
                    <input id="enddate" name="_end" type="date" class="required" placeholder="yyyy-mm-dd" />
       				<label for="atc_time_start">Start Time*</label> 
                    <input id="starttime" name="atc_time_start" type="time" class="required" placeholder="hh:mm" />
                    <label for="atc_time_end">End Time *</label> 
                    <input id="endtime" name="atc_time_end" type="time" class="required" placeholder="hh:mm" />
        			<label for="_timezone">Time Zone</label>
                     <select name="_timezone">
                      <option value="Europe/London">London</option>
                      <option value="Europe/Paris">Paris</option>
                      <option value="Europe/Berlin">Berlin</option>
                      <option value="Europe/Amsterdam">Amsterdam</option>
                      <option value="America/Los_Angeles">San Francisco</option>
                    </select> 
                    <label for="_summary">Title of the Event *</label> 
        			<input id="title" name="_summary" type="text" class="required" placeholder="Event title" />
                    <label for="_description">Description *</label>
                    <textarea id="_description" name="_description"></textarea>
        			<label for="_location">Location *</label>
                    <input id="venue" name="_location" type="text" placeholder="Location" />
                    <!--label for="_organizer">Organizer *</label>
                    <input id="organizer" name="_organizer" type="text" placeholder="Organizer" />
                    <label for="_organizer_email">Email Organizer *</label>
                    <input id="email_organizer" name="_organizer_email" type="text" placeholder="Email Organizer" /-->
        			<button type="submit" id="button" value="submit">create code</button>
                    <p>(*) Mandatory</p>
        	</div> 
            <div id="atcResult">
                    <textarea id="result" name="_result"></textarea>
                </div>
            </div> 
        </form>
    </div>
	<!-- End Form -->
    
</div>
<div class="footer"><p>Jerry Rietveld / Mike Schriewer</p></div>
</body>
</html>