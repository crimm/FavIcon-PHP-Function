<?php
//A very simple function to return the favicon of a url that is passed and display it as a link
//Example usage: <?php include ('favicon.php'); echo favicon("http://otakucoder.com",2,"black","32px","black");
//Made by Crimm from otakucoder.com

function favicon($url,$bordersize,$bordercolor,$height,$background) {
	$img = "<img src='http://www.google.com/s2/favicons?domain=".$url."' height='".$height."' style='background-color:".$background."; border:".$bordersize."px solid ".$bordercolor."'>";
	$result = "<a href=".$url." rel='nofollow'>".$img."</a>";
return $result;
}
?>