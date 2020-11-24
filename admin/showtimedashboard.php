<?php

include('adminheader.php');

?>


<?php include('leftsidebar.php') ?>

  <div class="content"style="background:#F3EFEE" >
      <div class='container-fluid'>
      <div class="row">
        <div class="col-md-6">
          
          <Span style="font-size: 30px">Show Timings</Span>
          
        </div>

        <div class="col-md-6" style="text-align: right; margin-top: 20px">
          <a href="dashboard.html"><i class="fas fa-home"></i> <span style="color: black">Home</span></a><br>

        </div>

      </div>

      <div class="container" style="background-color: white; margin-top: 10px">

         <div class="row mb-3">
      
        <div class="col-md-6">
          
          <Span style="font-size: 20px">Show Timings</Span>
          
        </div>

        <div class="col-md-6" style="text-align: right; margin-top: 20px">
          <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal"><a href="../selectmovie.php">Selct Movies</a></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="text-align: center">
          <h4 class="modal-title">Add Movie Cinema</h4>
        </div>
        <div class="modal-body" style="text-align: center">
          <p>Cinema Name:</p>
          <input type="text" style="width: 400px;border: 3px solid skyblue" name=""><br>
           <p>Cinema Image:</p>
          <input type="file" name="fileToUpload" id="fileToUpload"><br><br>

          <button type="button" class="btn btn-info">Add cinema</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
      
    </div>
  </div>

  <br><br>


   <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Delete Selected</button>

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
        <th>Cinema Name</th>
        <th>Movie</th>
        <th>Start/End Date</th>
        <th>Start/End Time</th>
        <th>Weekdays Ticket Prices</th>
        <th>Weekend Ticket Prices</th>
        <th>Blockbluster Movies Prices</th>
        <th>Movies in 3D</th>
        <th>Delete</th>
        <th>Modify</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>FilmHouse Dugbe</td>
        <td>Rise of the Saint</td>
        <td>2020-11-17/2020-11-31</td>
        <td>14.00.00/17.00.00</td>
        <td>₦1,000 Flat(Popcorn)</td>
        <td>₦2,500 (Popcorn and drink)</td>
        <td>₦3,000 (Popcorn and drink)</td>
        <td>₦3,000 Flat (Popcorn and drink)</td>
        <td><input type="checkbox" name=""></td>
        <td><a href="">Edit</a></td>
      </tr>
      
    </tbody>
  </table>
                
                
                
            </div>

          </div>

          </div>
      
    </div>


  <?php include('adminscript.php') ?>