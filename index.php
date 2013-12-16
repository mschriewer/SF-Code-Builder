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
    menu: {
        tools: {title: 'Get HTML code', items: 'code'}
    },
    toolbar1: "undo redo | formatselect | alignleft aligncenter alignright alignjustify bullist numlist bold italic underline strikethrough | link  |  code",
    auto_focus: "elm1"

 });
</script>

</head>
<body>


<!-- Place this in the body of the page content -->
<form method="post">
    <textarea id="elm1"></textarea>
</form>
<div style="text-align:right"><img style="width:100%;max-width:563px;height:auto" src="arrow.png"></div>


</body>
</html>