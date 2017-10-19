<?php
$STARTZEIT = microtime(true);
?>
<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
?>
<?php

///Init Installation or Include default Start
if((@include("global.php")) === false)
{
	header("Location: ./install/index.php");
	echo"No Global Settings - Start Installation";
	exit;
}
else
{
	header("Location: ./blog.php");
}

///Init Installation or Include default End

?>
<!DOCTYPE html>
<title>Entwicklerblog</title>

<meta name="robots" content="index,follow">
<link type="text/css" rel="stylesheet" rev="stylesheet" href="Entwicklerblog.css" >
<style type="text/css"></style></head>
<body>
<div id="container">
<h1><a href="http://fireweb.blackburn-division.de/">FireBlog</a></h1>
<div class="navigation"><a href="/install">Install</a> / <a href="blog.php">Blog</a> / <a href="creat.php">Creat Entry</a></div>
<div id="content">	
<div class="post">License
<div class='message'>
<h3>	English </h3>
<p>FireBlog is a single blogsoftware and part of the "FireWeb" webbased software series.</p>

<p>Copyright (C) 2016 Frederik Mann</p>

<p>This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version.</p>

<p>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.</p>

<p>You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>.</p>
		
<p>The source code is currently not available to download. To get the sourcecode contact me.</p>

<p>Thanks to the Notepad++ Team for there products!</p>
<br>
	
<h3>	German </h3>
<p>FireBlog ist eine single Blogsoftware und Teil der "FireWeb" webbasierten Softwareserie.
<br>Copyright (C) 2016 Frederik Mann</p>

<p>Dieses Programm ist freie Software. Sie können es unter den Bedingungen der GNU General Public License,
wie von der Free Software Foundation veröffentlicht, weitergeben und/oder modifizieren,
entweder gemäß Version 3 der Lizenz oder (nach Ihrer Option) jeder späteren Version.</p>

<p>Die Veröffentlichung dieses Programms erfolgt in der Hoffnung, daß es Ihnen von Nutzen sein wird,
aber OHNE IRGENDEINE GARANTIE, sogar ohne die implizite Garantie der MARKTREIFE oder
der VERWENDBARKEIT FüR EINEN BESTIMMTEN ZWECK. Details finden Sie in der GNU General Public License.</p>

<p>Sie sollten ein Exemplar der GNU General Public License zusammen mit diesem Programm erhalten haben. Falls nicht, siehe <http://www.gnu.org/licenses/>.</p>

<p>Der Quellcode ist zur Zeit nicht verfügbar zum Download. Um den Quellcode zu bekommen kontaktiere mich.</p>
<p>Thanks to the Notepad++ Team for there products!</p>
		</div>11.11.15</div>

<div class="navigation">Powered by <a href='http://fireweb.blackburn-division.de/' class="linkfarbe1">FireBlog</a></div>
<div id="footer">
Version 0.1
</div>
