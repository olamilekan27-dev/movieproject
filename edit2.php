<!-- <?php

include('header.php');
include('movieclass.php');

$movie = new Movie("localhost","root","","movieshowtimefounder"); 

$moviename = $_POST['moviename'];

$moviedescription = $_POST['moviedescription'];

$moviedirector = $_POST['moviedirector'];

$movieyear = $_POST['movieyear'];

$output = $movie->updatemovie($moviename,$moviedescription,$moviedirector,$movieyear);

echo $output;

?> -->