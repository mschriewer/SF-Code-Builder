<html>
<head>
	<title>Convert content to HTML</title>
<!-- Place inside the <head> of your HTML -->
<link rel="stylesheet" href="css/stlye.css" type="text/css">
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "code, link, image imagetools, table, paste"
    ],
	paste_as_text: true,
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

</script>
<script src="js/jQuery/jquery-1.6.1.min.js"></script>

<!--script src="http:////ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script-->
<script src="js/code.js"></script>
<link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
<style type="text/css">
   

</style>
<script type="text/javascript">
$(document ).ready(function() {
	//Close boxes when page is ready
	CODER.commonMethod.closeBox("#openbox", "#closebox", "#support");
   	CODER.commonMethod.closeBox ("#opentemp", "#closetemp", "#templates");
	//Hide addToCalendar form div
	$("#addtocal").hide();
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
                <h3 class="top-0">Speakers</h3>
                <a onClick="tinyMCE.activeEditor.setContent(CODER.vars.str_speakers);" href="#"><img src="images/img-prew-speakers.jpg" class="border-3 shade-3 flex"></a>
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
<div id="addtocal">
	<form id="example-form" action="#"> 
    <div> 
        <h3>Account</h3> 
        <section> 
            <label for="userName">User name *</label> 
            <input id="userName" name="userName" type="text" class="required"> 
            <label for="password">Password *</label> 
            <input id="password" name="password" type="text" class="required"> 
            <label for="confirm">Confirm Password *</label> 
            <input id="confirm" name="confirm" type="text" class="required"> 
            <p>(*) Mandatory</p> 
        </section> 
    </div> 
</form> 
</div>
<div class="footer"><p><a href="http://jgrietveld.com" target="_blank">Jerry Rietveld</a>: Making the web work for you since 1995 / Mike Schriewer</p></div>
</body>
</html>