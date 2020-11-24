

<?php include('header.php') ?>




<div id="slideshow">
 
    <img class="active" src="project6/Mulan1.jpg" alt="Slideshow Image 1"/>
    <img src="project6/tenet.jpeg" alt="Slideshow Image 2" />
    <img src="project6/banner1.jpg" alt="Slideshow Image 3" />
    
</div>



<!-- <div  class='row' style='margin-top: 65px'>
  
  <div  class='col' style='height: 100px;'>
    
    <p>THE BOY IS COMING HOME</p>

  </div>

</div> -->

</div>


<div class='container-fluid' style='background-color: black; min-height: 2000px'>


<div  class='row' style='height: 150px'>
  
  <div id='cog' class='col' style='height: 150px; text-align: center'>

    <button type="button" class='btn btn-dark' style=' margin-top: 5px; height: 120px; border: 4px solid purple'>
      
        <p>Choose your Prefered cinema</p>

        <select class='form-group showUser(this.value)' name="cinema_id" id='exam'>
       
      <option value="All Cinemas"  style='border: 0'>All Cinemas</option>

      <?php if(!empty($connect)){
                            foreach($connect as $id=>$name){
                                echo "<option value='$id'>$name</option>";
                            }
                        } 

                        ?>
      
    
    </select>


    </button>

    
    

  </div>

</div>


<div class='container' style='margin-top: 40px'>


<div class='row'>
  

<div class='col-md-2 col-12' style='height: 100px; text-align: right'>
  
<a href='' style='color: purple; text-decoration: none; font-size:25px; font-family: arial'><b>NOW SHOWING</b></a>

</div>

<div class='col-md-2 col-12' style='margin-left: 10px; height: 150px;'>
  
  <img src='project6/rise.jpg' alt='' class='rounded' style='height:220px; width: 100%; margin-top:10px'>

</div>

<div class='col-md-7 col-12' style='height: 220px;'>

  

  <div>
  
<div style='float: left; height: 90px; width: 60%; margin-top: 10px'>

  <p style='color: purple;'><b>DRAMA</b></p>

  <a href='' class='special-a' style='font-size: 30px; text-decoration: none; color: white; padding-top:0px'>Rise Of The Saints</a>
  
</div>


<div  id='def' style='float: right; height: 90px; width: 35%; margin-top: 10px; text-align: center; '>
  
  <button id='hah' type="button" class="btn" style='color: white; background-color: purple; display: none'> BOOK NOW</button>

</div>


</div>



<p style='clear:both; color: #6B6865'>Inspired by the story of Moremi Ajasoro, the warrior Queen of Ife, who delivers her people from destruction in the hands of her sworn nemesis Jagan. In present day world.</p>

<p style='color: #6B6865'>90MINS | RATED TBC</p>

<a href=''><i class='fa fa-play' style='color:purple'></i>  WATCH TRAILER</a>



</div>



</div>



</div>




<div class='container' style='margin-top: 150px'>


<div class='row'>
  

<div class='col-md-2 col-12' style='height: 100px; text-align: right'>
  

</div>

<div class='col-md-2 col-12' style='margin-left: 10px; height: 150px;'>
  
  <img src='project6/lady.jpg' alt='' class='rounded' style='height:220px; width: 100%; margin-top:10px'>

</div>

<div class='col-md-7 col-12' style='height: 220px;'>

  <div>
  
<div style='float: left; height: 90px; width: 60%; margin-top: 10px'>

  <p style='color: purple;'><b>DRAMA</b></p>

  <a href='' class='special-a' style='font-size: 30px; text-decoration: none; color: white; padding-top:0px'>This Lady Called Life</a>
  
</div>


<div id='pep' style='float: right; height: 90px; width: 35%; margin-top: 10px; text-align: center;'>
  
  <button id='man' type="button" class="btn" style='color: white; background-color: purple; display: none'> BOOK NOW</button>

</div>


</div>

<p style='clear:both; color: #6B6865'>Becoming a chef is Aiye's greatest desire. But. She is a young, struggling, single mother who has been abandoned by her family. To settle for defeat, or to fight .......</p>

<p style='color: #6B6865'>119MINS |  RATED TBC</p>

<a href=''><i class='fa fa-play' style='color:purple'></i>  WATCH TRAILER</a>


</div>



</div>


</div>



<div class='container' style='margin-top: 150px'>


<div class='row'>
  

<div class='col-md-2 col-12' style='height: 100px; text-align: right'>
  

</div>

<div class='col-md-2 col-12' style='margin-left: 10px; height: 150px;'>
  
  <img src='project6/husna.jpg' alt='' class='rounded' style='height:220px; width: 100%; margin-top:10px'>

</div>

<div class='col-md-7 col-12' style='height: 220px;'>

  <div>
  
<div style='float: left; height: 90px; width: 60%; margin-top: 10px'>

  <p style='color: purple;'><b>DRAMA</b></p>

  <a href='' class='special-a' style='font-size: 30px; text-decoration: none; color: white; padding-top:0px'>Husna</a>
  
</div>


<div id='dad' style='float: right; height: 90px; width: 35%; margin-top: 10px; text-align: center;'>
  
  <button id='yet' type="button" class="btn" style='color: white; background-color: purple; display: none'> BOOK NOW</button>

</div>


</div>

<p style='clear:both; color: #6B6865'>Husna tells a story of Husna, a daughter of a poor village farmer who is forced into marriage in a city with a rich politician. Her first boyfriend, Halliru, with whom s</p>

<p style='color: #6B6865'>119MINS |  RATED TBC</p>

<a href=''><i class='fa fa-play' style='color:purple'></i>  WATCH TRAILER</a>


</div>



</div>


</div>


<div class='container' style='margin-top: 150px'>


<div class='row'>
  

<div class='col-md-2 col-12' style='height: 100px; text-align: right'>
  

</div>

<div class='col-md-2 col-12' style='margin-left: 10px; height: 150px;'>
  
  <img src='project6/high.jpg' alt='' class='rounded' style='height:220px; width: 100%; margin-top:10px'>

</div>

<div class='col-md-7 col-12' style='height: 220px;'>

  <div>
  
<div style='float: left; height: 90px; width: 60%; margin-top: 10px'>

  <p style='color: purple;'><b>DRAMA</b></p>

  <a href='' class='special-a' style='font-size: 30px; text-decoration: none; color: white; padding-top:0px'>The High Note</a>
  
</div>


<div id='last' style='float: right; height: 90px; width: 35%; margin-top: 10px; text-align: center;'>
  
  <button id='best' type="button" class="btn" style='color: white; background-color: purple; display: none'> BOOK NOW</button>

</div>


</div>

<p style='clear:both; color: #6B6865'>Set in the dazzling world of the LA music scene comes the story of Grace Davis, a superstar whose talent, and ego, have reached unbelievable heights. Maggie is Grace's ov</p>

<p style='color: #6B6865'>119MINS |  RATED TBC</p>

<a href=''><i class='fa fa-play' style='color:purple'></i>  WATCH TRAILER</a>


</div>



</div>


</div>


<div class='container-fluid' style='margin-top: 150px;padding-top: 30px; border: 1px solid #6B6865 ; height: 200px'>


<div class='row' style= 'text-align:center;'>


       <div class='col 12'>

        <p style='font-size: 20px; color:  #6B6865 ; margin-top: 10px'>Need help? Call or send a message on whatsapp to our support team between 10AM and 8PM.</p>
        <p style='font-size: 35px; color: #D43CDE'><b>08123751498, 08084641767</b></p>


    </div>

</div>


</div>





<?php include('footer.php') ?>

</div>