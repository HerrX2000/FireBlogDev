<?php
$STARTTIME = microtime(true);


		include dirname(__FILE__)."/settings.php";
		include dirname(__FILE__)."/strings-en.php";
?>
<!DOCTYPE html>
<title>$title</title>
<meta name="robots" content="index,follow">
<link type="text/css" rel="stylesheet" rev="stylesheet" href="style/basis/blog.css" >
<style type="text/css"></style></head>
<body>
<div id="container">
<a href="blog.php"><h1><?php echo $setting['title'];?></h1></a>
<div class="navigation"><?php echo $setting['navigation'];?></div>
<div id="content">	
<div class="post">
<?php
		include dirname(__FILE__)."/global.php";
		//
		if (!$db_link_i) {
		die ('<br>'.'Connect Error: ' . mysqli_connect_errno().' (terminierung)');
		}
		//
		mysqli_select_db($db_link_i, $db_name) or die (mysqli_error());
		mysqli_query($db_link_i,"SET NAMES 'utf8'");
		//
		$abfrage1="SELECT date,title,content from ".$db_prefix."blog ORDER BY date DESC";
		//
		$ausgabe1_unfertig=mysqli_query($db_link_i,$abfrage1);
		//
		while ($row = mysqli_fetch_assoc($ausgabe1_unfertig))
		{
		$rows[] = $row ;
		}
		foreach($rows as $row){
		$Datum = strtotime($row["date"]);
		$Datum = date("d.m.y",$Datum);
		echo $Datum."<div class='header'>".$row["title"]."</div>";
		echo "<div class='message'>".$row["content"]."</div>";
		}
		
		
?>
</div>

<div class="navigation"><?php echo $setting['navigation'];?></div>
<a href='create.php' class='linkfarbe2'><h2><?php echo $string['CREATE_LINK'];?></h2></a>
	
</div>
<div id="footer">
Powered by 	FireBlog 
<br>Version 0.1.1
</div>
<script type="text/javascript" src="inc/js.inc.js"></script>
<?php
$ENDTIME = microtime(true);
$RUNTIME = $ENDTIME - $STARTTIME;
$RUNTIME = round ($LAUFZEIT, 3);
$RUNTIME_MS = $LAUFZEIT * 1000;
$USERAGENT = $_SERVER['HTTP_USER_AGENT'];
$SCRIPTNAME = $_SERVER['SCRIPT_NAME'];
print "
<!--
Run time: $RUNTIME sek / $RUNTIME_MS ms
Useragent: $USERAGENT
Page: $SCRIPTNAME
-->";
?>