<?php
$usr=$_POST["usr"];
$pwd=$_POST["pwd"];
if($usr=="sajid" && $pwd=="sajid123")
{
$loginName="welcome Admin";
}
else
{
$loginName="Login failed";
}

?>
<DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet"href="sitestyle./css>
</head>
<body>
<header>
<h1>Cloud login Result</h1>
</header>
<hr>
<article>
<section>
<h2><?php echo $loginName ?></php>
</section>
</article>
<footer>
        Developed by K Anbarasan
</footer>
</body>
</html