<?php 

ob_start();

include('header.php');

     
include('movieclass.php');


?>

<?php

if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']=='send') {
    $errors = array();

          $movie_name=$_POST['moviename'];
          $movie_description=$_POST['moviedescription'];
          $movie_director=$_POST['moviedirector'];
          $movie_year=$_POST['movieyear'];
        

  // validate Movie name
    if(empty($_POST['moviename'])){
      $err_moviename = "<div class='err'>Movie name field cannot be empty</div>";
      $errors[] = $err_moviename;
  }
  

  // validate Movie description

    if (empty($_POST['moviedescription'])){

        $err_moviedescription = "<div class='err'>Movie description field cannot be empty</div>";
        $errors[] = $err_moviedescription;
    }
  

// validate Movie director

    if (empty($_POST['moviedirector'])){

        $err_moviedirector = "<div class='err'>movie director field cannot be empty</div>";
        $errors[] = $err_moviedirector;
    }
  

// validate Movie year

    if (empty($_POST['movieyear'])){

        $err_movieyear = "<div class='err'>movie year field cannot be empty</div>";
        $errors[] = $err_movieyear;
    }
  
    






      if (count($errors)==0) {
            //echo "successfully";
               
             
        $movie =new Movie;
         
 
$movies_id=$movie->Addmovie($_POST['moviename'],$_POST['moviedescription'],$_POST['moviedirector'],$_POST['movieyear'],$_POST['picture']);


           header('Location:addmovie.php?msg=successfully registered');

  }


}


?>

<div class="container">
	<?php

    if(isset($error)){


      foreach ($error as $key => $value) {
        
          echo $value;

      }


    }



  ?>


	<div class="row">



		<div class="col-md-6">


 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">

 	<!-- <?php


		//echo $_GET['msg'];

		?> -->

<label>

Movie Name
	
	<input type="text" class="form-control" name="moviename" value="<?php 
          if(isset($_POST['moviename'])){ 
            echo $_POST['moviename']; } 
          ?>"><br>

</label><br>
<?php

     if(isset($err_moviename)){

       echo $err_moviename;

         }

  ?>

<label>

Movie Description

 	<textarea name="moviedescription" class="form-control"><?php 
          if(isset($_POST['moviedescription'])){ 
            echo $_POST['moviedescription']; } 
          ?></textarea><br><br>

</label><br>

<?php

     if(isset($err_moviedescription)){

       echo $err_moviedescription;

         }

  ?>

<label>

Movie Director
	
	<input type="text" class="form-control" name="moviedirector" value="<?php 
          if(isset($_POST['moviedirector'])){ 
            echo $_POST['moviedirector']; } 
          ?>"><br><br>

</label><br>

<?php

     if(isset($err_moviedirector)){

       echo $err_moviedirector;

         }

  ?>


<label>

Movie Year
	
	<input type="date" class="form-control" name="movieyear" placeholder="YY-MM-DD" value="<?php 
          if(isset($_POST['movieyear'])){ 
            echo $_POST['movieyear']; } 
          ?>"><br><br>

</label>

<?php

     if(isset($err_movieyear)){

       echo $err_movieyear;

         }

  ?>


<label>

Movie Picture
	
	<input type="file" class="form-group" name="photo" id="fileToUpload"><br><br>

</label>


<input type="submit" class='btn btn-success btn-sm' name='submit' id='submit' value='send'>


 </form>         

</div>

</div>
</div>


 























 