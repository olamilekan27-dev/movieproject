<?php 

include 'movieclass.php';

include('header2.php');
?>


<?php


	$movieId=$_SESSION['movieId'];
	$_SESSION['movieId']=$movieId;

	$conn=new mysqli('localhost','root','','movieshowtimefounder');
	$movieIdentity=$conn->query("select * from movies where movies_id=$movieId;");

	$row=$movieIdentity->fetch_object();



	$movieName=$row->movie_name;
	$date=$_POST['date'];
	$time=$_POST['timeSlot'];
	$theater=$_POST['cinema'];







?>




<div class='container' style='margin-top: 40px;'>

<div class='row ' style='justify-content: center;'>

<div class='col-6 text-left p-2' style='background-color:#D9EDF7'>
  
		<?php 


							//$_SESSION['movieId']="";

						echo "".$movieName;
						?>


</div>
</div>
</div>




<div class='container'>

<div class='row bg-white text-left' style='border:1px solid #D9EDF7; justify-content: center '>
	<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img alt="User Pic" src=<?php echo '"moviephotos/'.$row->picture.'"';?> class=" img-responsive">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <table class="table table-user-information">

        			<tbody>

									<tr>
										<td><strong>Date </strong></td>
										<td><?php echo "".$date ?> </td>
									</tr>
									<tr>
										<td><strong>Movie Name </strong></td>
										<td><?php

										$conn=new mysqli('localhost','root','','movieshowtimefounder');
										$movieIdentity=$conn->query("select * from movies where movies_id=$movieId;");

										$row=$movieIdentity->fetch_object();

										 echo "".$row->movie_name;
										 ?> 
										</td>
									</tr>
									<tr>
										<td><strong>Time </strong></td>
										<td><?php echo "". $_POST['timeSlot']?></td>
									</tr>
									<tr>
										<td><strong>Movie Name </strong></td>
										<td><?php echo "". $_POST['cinema']?></td>
									</tr>
									<tr>
										<td><strong>Ticket Price </strong></td>
										<td> 300 </td>
									</tr>


							<td colspan="2" width="100%">
												<input class="btn btn-primary btn-xs btn-block" type="submit" name="submit" value="Confirm Ticket">
											</td>

						</tbody>

					</table>
     				 </div>
    				</div>
  					</div>
					</div>



					</div>
					</div>