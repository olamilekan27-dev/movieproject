<!DOCTYPE html>
<html>
<head>
<title>
    Cinemahouse
</title>


<meta name='keyword' content=' cinema in lagos, cinema in Nigeria, films Nigeria, movie show time'>
<meta name='description' content=' Find out what movies are currently showing, book movie tickets, watch trailers, and many more.'>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

<link href='css/bootstrap.css' type='text/css' rel='stylesheet'>
<link href='fontawesome/css/all.css' type='text/css' rel='stylesheet'>
<link href='style/frontend.css' type='text/css' rel='stylesheet'>
<link href='css/animate4.min.css' type='text/css' rel='stylesheet'>

<link href='css/bootstrap.css' type='text/css' rel='stylesheet'>
<link href='fontawesome/css/all.css' type='text/css' rel='stylesheet'>
<link href='css/animate4.min.css' type='text/css' rel='stylesheet'>
<link href='style/frontend.css' type='text/css' rel='stylesheet'>

<style type='text/css'>




</style>


 
<script src='js/jquery.min.js' type='text/javascript'></script>
<script src='js/popper.min.js' type='text/javascript'></script>
<script src='js/bootstrap.js' type='text/javascript'></script>




</head>


<body>

<div class='container-fluid' style='height: 620px; background-color: '>
  
<div class='row'>
          <div class="col">
              

              <nav class="navbar navbar-expand-lg">
                          

                          <a class="navbar-brand" href="#" style='color: white; font-family:Verdana;margin-left:70px; font-size: 25px'>Movies Date</a>
                           

                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                           
                           </button>
                          
                          <div class="collapse navbar-collapse justify-content-center"  id="navbarNavDropdown">
                                   

                                    <ul class="navbar-nav">
                                        

                                         <li class="nav-item active">
                                              
                                               <a class="nav-link" href="#success" style='color: purple; font-family:Verdana; margin-right:45px;  font-size: 15px;'>HOME<span class="sr-only">(current)</span></a>
                                         </li>
                          
                                         <li class="nav-item navv">
                                               
                                               <a class="nav-link" href="#pro" style='font-family:Verdana; margin-right:45px; font-size: 15px'>MOVIES</a>
                                                                             </li>
     

                                         <li class="nav-item">
                                              
                                               <a class="nav-link" href="cinema.html" style='font-family:Verdana; margin-right:45px; font-size: 15px'>CINEMA</a>
                                        

                                         </li>
                                          

                                           <li class="nav-item">
                                              
                                               <a class="nav-link" href="#bog" style='font-family:Verdana; margin-right:45px; font-size: 15px'>TICKET PRICES</a>
                                          </li>
     

                                         <li class="nav-item">
                                              
                                               <a class="nav-link" href="#for" style='font-family:Verdana; margin-right:45px; font-size: 15px'>SELF HELP</a>
                                          
                                          </li>

                                          <li class="nav-item">
                                              
                                               <a class="nav-link" href="login.php" style='font-family:Verdana; margin-right:45px; font-size: 15px'>SIGN UP/LOGIN</a>
                                          </li>

                                          <li class="nav-item">
                                              
                                               <a class="nav-link" href="#for" style='font-family:Verdana; margin-left:70px; font-size: 15px'><i class='fa fa-search' style='color:purple'></i>    SEARCH</a>
                                          
                                          </li>
                                   </ul>
                     </div>
                 </nav>
         </div>
      </div>

<div id="slideshow">
 
    <img class="active" src="project6/Mulan1.jpg" alt="Slideshow Image 1"/>
    <img src="project6/tenet.jpeg" alt="Slideshow Image 2" />
    <img src="project6/banner1.jpg" alt="Slideshow Image 3" />
    
</div>

</div>



<div class="container">

  <div  class="panel with-nav-tabs panel-success">
    <div class="panel-heading">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#nowshowing" data-toggle="tab">Showing Now</a></li>
      </ul>
    </div>
    <div class="panel-body">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="nowshowing">


   <!--  $connect=[];
    $conn=new mysqli('localhost','root','','movieshowtimefounder');

    $query="SELECT * FROM cinema";

    $qr=$conn->query($query); -->

          <?php 
          $count=0;
           $conn=new mysqli('localhost','root','','movieshowtimefounder');

          $res=$conn->query("select * from movies;");
          while ($row=$res->fetch_object()) {
             // $_SESSION['movie']=;

            if ($count==4) {
              echo "<div class='row'>";
              $count=0;
            }

            echo " 
            <div class='col-md-3 col-sm-12'>
              <div class='card-container'>
                <div class='card'>
                  <div class='front'>
                    <div class='cover'>
                      <img src='moviephotos/".$row->picture."'/> 
                    </div>
                    <div class='content'>
                      <div class='main'>
                        <h3 class='name'>".$row->movie_name ."</h3>

                        

                        <p class='profession'><b>Director: </b> " .$row->movie_director ."</p>
                        

                      </div>
                    </div>
                  </div>
                  <!-- end front panel -->
                  <div class='back'>
                    <div class='content'>
                      <div class='main'>
                        <h4 class='text-center'>".$row->movie_name ."</h4>
                        <p class='text-center'>".$row->movie_description ." </p>
                      </div>
                      <div style='margin-top: 10vw;' class='buy_ticket'>

                       <form action='ticketProcessing.php' method='post' >
                        <input type='hidden' name='movieId' value='".$row->movies_id."' >
                        <input type='submit'  class='btn btn-primary btn-xs btn-block' type='submit' value='Showtime and Details' name='submit'>
                      </form>

                    </div>
                  </div>
                </div> <!-- end card -->
              </div> <!-- end card-container -->
            </div>
          </div>";

          $count++;
        } ?>




      </div>
    </div>
  </div>
</div>
</div>




<?php include('footer.php') ?>

</div>