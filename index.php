<html>
<head>
	<title>Convert content to HTML</title>
<!-- Place inside the <head> of your HTML -->
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "code, link"
    ],
    style_formats: [   
        {title: 'Paragraph', format: 'p'},      
        {title: 'Heading 1', format: 'h1'},
        {title: 'Heading 2', format: 'h2'},
        {title: 'Heading 3', format: 'h3'},
        {title: 'Heading 4', format: 'h4'},
        {title: 'Heading 5', format: 'h5'}
    ],
    menu: {
        tools: {title: 'Get HTML code', items: 'code'}
    },
    toolbar1: "undo redo | styleselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist | link  |  code",
    auto_focus: "elm1"

 });
</script>
<script src="http:////ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
<style type="text/css">
    body {
        font-family: lucida, arial, sans-serif;
    }
    .gutter-10 {
        padding:10px;
    }
    .center {
        text-align: center;
    }
    .border-3 {
        border:3px solid #eee;
    }
    .shade-3 {
        box-shadow: 0 0 3px #555;
    }
    .left {
        float:left;
    }
    .flex {
        width:100%;
        max-width: 209px;
        height:auto;
    }
    .clear {
        clear:both;
    }
    .top-0 {
        margin-top:0;
    }

    @media all and (min-width: 768px) {
        .width-25-min-scr3 {
            width:25%;
        }
    }
    @media all and (max-width: 767px) {
        .width-50-max-scr2 {
            width:50%;
        }
        .flex {
            max-width: 150px;
        }
    }
    #support h3 {
        font-family: 'Patrick Hand SC', lucida, arial, sans-serif;
    }

</style>
<script type="text/javascript">
$(document ).ready(function() {
    $("#open").hide();
    $("#close").click(function() {
        $("#support").slideUp();
        $("#open").show();
        $("#close").hide();
    });
    $("#open").click(function() {
        $("#support").slideDown();
        $("#open").hide();
        $("#close").show();
    });
});
</script>
</head>
<body id="fullpage">
<div style="text-align:right"><button id="close">close [x]</button></div>
<div style="text-align:right"><button id="open">open [+]</button></div>
<div id="support">
    <div class="width-25-min-scr3 width-50-max-scr2 left">
        <div class="gutter-10 center">
            <h3 class="top-0">Enter your content</h3>
            <img src="image1.png" class="border-3 shade-3 flex">
        </div>
    </div>
    <div class="width-25-min-scr3 width-50-max-scr2 left">
        <div class="gutter-10 center">
            <h3 class="top-0">Do your styling</h3>
            <img src="image2.png" class="border-3 shade-3 flex">
        </div>
    </div>
    <div class="width-25-min-scr3 width-50-max-scr2 left">
        <div class="gutter-10 center">
            <h3 class="top-0">Maybe create a list</h3>
            <img src="image3.png" class="border-3 shade-3 flex">
        </div>
    </div>
    <div class="width-25-min-scr3 width-50-max-scr2 left">
        <div class="gutter-10 center">
            <h3 class="top-0">Grab the HTML</h3>
            <img src="image4.png" class="border-3 shade-3 flex">
        </div>
    </div>
</div>

<div class="clear"></div>

<img style="width:100%;max-width:640px;height:auto" src="image6.png">

<!-- Place this in the body of the page content -->
<form method="post">
    <textarea id="elm1"></textarea>
</form>
<div style="text-align:right"><img style="width:100%;max-width:563px;height:auto" src="arrow.png"></div>


</body>
</html>