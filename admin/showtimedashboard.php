<?php

include('adminheader.php');

?>


<?php include('leftsidebar.php') ?>

  <div class="content"style="background:#F3EFEE" >
      <div class='container-fluid'>
      <div class="row">
        <div class="col-md-6">
          
          <Span style="font-size: 30px">Movie Show time List</Span>
          
        </div>

        <div class="col-md-6" style="text-align: right; margin-top: 20px">
          <a href="dashboard.html"><i class="fas fa-home"></i> <span style="color: black">Home</span></a><br>

        </div>

      </div>

      <div class="container" style="background-color: white; margin-top: 10px">

         <div class="row mb-3">
      
        <div class="col-md-6">
          
          <Span style="font-size: 20px">Show List</Span>
          
        </div>

        <div class="col-md-6" style="text-align: right; margin-top: 20px">
          
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
     
      
    </div>
  </div>

  <br><br>


   <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Delete Movies</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
    
     
      
    </div>
  </div>
  

        </div>


  <table class="table table-striped">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Cinema name</th>
        <th>Movie Name</th>
        <th>Show Start Date</th>
        <th>Show End date</th>
        <th>Weekdays</th>
        <th>Weekend</th>
        <th>Bluckbluster</th>
        <th>3D Movies</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php


          $columbia = 1;
          foreach($movie->getMovieAssoc() as $key => $value){

        ?>
      <tr>
        <td><?php echo $columbia++; ?></td>
        <td><?php echo $value['selectcinema'];?></td>
        <td><?php echo $value['selectmovie'];?></td>
        <td><?php echo $value['showstart'];?></td>
        <td><?php echo $value['showend'];?></td>
        <td><?php echo $value['weekdays'];?></td>
        <td><?php echo $value['weekend'];?></td>
        <td><?php echo $value['bluckbluster'];?></td>
        <td><?php echo $value['movies3d'];?></td>
        <td>
        <a href="edit.php?id=<?php echo $value['movies_id'];?>">Edit details</a>
        <a href="">Delete</a>
        </td>
      </tr>
      <?php

          }
        ?>
      
    </tbody>
  </table>


  <?php include('adminscript.php') ?>