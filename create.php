<!DOCTYPE html>

<title>$title</title>

<meta name="robots" content="index,follow">
<link type="text/css" rel="stylesheet" rev="stylesheet" href="Entwicklerblog.css" >
<style type="text/css"></style></head>
<body>
<div id="container">
<h1><a href="blog.php">$title</a></h1>
<div class="navigation">$navigation<div id="content">
<div class="post">
<script src="tinymce/tinymce.min.js"></script>
<script>
		tinymce.init({
			selector:'.tinymce',
			height : 300,
		});
</script>
		
		<div class='content'><h1>$create entry</h1>
		
		<form name='aendern' action='create_send.php' method="post">
		$title:<input name='titel' type='text' maxlength='30' size='15' required>
		$date:<input name='datum' type='date' maxlength='30' value='<?php echo date('Y-m-d');?>' min='2015-01-01' max='2020-01-01' required>
		<br><textarea name='content' class='tinymce'>
		$text
		</textarea>
		
		$master_psw:<input name='master_psw' type='password' maxlength='30' value='' required>
		<br>
		<a href='#' onclick='document.aendern.submit();' class='block'><h3>$send</h3></a> 
		</form>
		<a href='blog.php' class='block'><h3>$back</h3></a>
		</div>
		
</div>

<div class="navigation">$navigation</a>	
		
</div>
<div id="footer">
Powered by FireBlog
<br> Version 0.1
</div>
<script type="text/javascript" src="inc/js.inc.js"></script>