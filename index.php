<html>
<head>
	<title>Convert your content to HTML</title>
<!-- Place inside the <head> of your HTML -->
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "code, link"
    ],
    menu: {
        tools: {title: 'Get HTML!', items: 'code'}
    },
    toolbar1: "undo redo | styleselect formatselect | alignleft aligncenter alignright alignjustify bullist numlist bold italic underline strikethrough | link  |  code"

 });
</script>

</head>
<body>


<!-- Place this in the body of the page content -->
<form method="post">
    <textarea></textarea>
</form>
<div style="text-align:right"><img src="arrow.png"></div>


</body>
</html>