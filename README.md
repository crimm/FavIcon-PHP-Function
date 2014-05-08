FavIcon-PHP-Function
====================

This is a very simple function to return the favicon of a url that is passed and display it as a link. 

I added some variable to allow you to pass style features. I use this function to create a custom home page with all my favorite sites.


Iteration 1:
- Uses Google for favicon pull
- Plans to do it in PHP and cache it for speed up in the future

Example usage:
<?php 
include ('favicon.php'); 
echo favicon("http://otakucoder.com",2,"black","32px","black");
?>
