<?php session_start();?>
<!DOCTYPE html>
<!-- saved from url=(0066)http://blackburn-division.de/forum/archive/index.php?thread-8.html -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>$title</title>

<meta name="robots" content="index,follow">
<link type="text/css" rel="stylesheet" rev="stylesheet" href="Entwicklerblog.css" >
<style type="text/css"></style></head>
<body>
<div id="container">
<h1><a href="blog.php">$title</a></h1>
<div class="navigation">$navigation</div>
<div id="content">
<div class="post">
<script src="/inc/tinymce/tinymce.min.js"></script>
<script>
		tinymce.init({
			selector:'.tinymce',
			height : 300,
		});
</script>
<?php
			include dirname(__FILE__)."/global.php";
			include dirname(__FILE__)."/settings.php";
			//
			if (!$db_link_i) {
			die ('<br>'.'Connect Error: ' . mysqli_connect_errno().' (terminierung)');
			}
			//
			$datum = $_POST["datum"];
			$content = $_POST["content"];
			$content = $db_link_i->real_escape_string($content);
			$titel = $_POST["titel"];
			$titel = $db_link_i->real_escape_string($titel);
			$username = $_SESSION["username"];
			//
			
			if ($_POST["master_psw"] === $setting['master_psw'] and $content != "" and $titel != "" and $datum != "")
			{
			//
			mysqli_select_db($db_link_i, $db_name)or die(mysqli_error($db_link_i));
			mysqli_query($db_link_i,"SET NAMES 'utf8'");
			//
			$insert="INSERT INTO ".$db_prefix."blog (id, date, author, title, content, removed) VALUES (NULL,'$datum','$username','$titel','$content',0)";
			$ergebnis=mysqli_query($db_link_i, $insert);			
			echo "
			<script src='http://website.blackburn-division.de/tinymce/tinymce.min.js'></script>
			<script>tinymce.init({
				selector:'.tinymce',
				height : 400,
			});
			</script>
			<div class='content'>
			<h2>Blog erstellt </h2>
			<br>
			<br><b>Titel:".$_POST["titel"]."
			<br>Datum:".$_POST["datum"]."</b>
			<textarea class='tinymce'>".$_POST["content"]."
			</textarea></h2>
			</div>";
			}

			else
			{
				echo"<h1>Master Passwort falsch oder leere Felder</h1>";
			}
?>
		<a href='blog.php' class='block'><h3>$back</h3></a> 
</div>

<div class="navigation">$navigation</div>
	
</div>
<div id="footer">
Powered by FireBlog
<br> Version 0.1
</div>
<script type="text/javascript" src="inc/js.inc.js"></script>