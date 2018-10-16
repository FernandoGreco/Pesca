<html>
<head>
<!--<script src="nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
-->
<script src="tinymce/tinymce.min.js"></script>
<script>//tinymce.init({ selector:'textarea', images_upload_url: 'up.php', paste_data_images: true,plugins: 'image code media autolink textcolor link colorpicker', media_live_embeds: true });</script>
<script>
tinymce.init({
  selector: '#mytextarea',
  images_upload_url: 'up.php', 
  paste_data_images: true,
  theme: 'modern',
  plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
  toolbar1: 'fontsizeselect | fontselect | formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  font_formats: 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;AkrutiKndPadmini=Akpdmi-n',
  fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
</script>
<?php
	include "check.php";
?>
<title>Guia Pesca</title>
</head>
<body bgcolor="#000">
<form action="post.php" method="POST" id="usrform">
	<select name="guia">
		<option value="noticias">Noticias</option>
		<option value="embarc">Embarcações</option>
		<option value="galeria">Galeria</option>
		<option value="dicas">Dicas</option>
	</select>
	<input type="text" name="title"></input>
	
	<input type="submit"></input>
</form>
<font color="white"><h2>Previa</h2></font>
<textarea rows="15" cols="175" name="demo" form="usrform"></textarea>
<font color="white"><h2>Post</h2></font>
<textarea rows="180" cols="50" id="mytextarea" name="html" form="usrform"></textarea>
Enter text here...</textarea>
</body>
</html>