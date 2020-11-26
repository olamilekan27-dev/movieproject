<?php 
     
include('movieclass.php');

include('header2.php');

?>


<div class='container'>

	<div class='row'>

		<div class='col'>
		
    			<h3 class="panel-title">
							<?php 
//for time slot
							//$timeSlot=$conn->query("select time from timeslot");	

//movie details
							$movieId=$_POST['movieId'];
							$_SESSION['movieId']=$movieId;
							 $conn=new mysqli('localhost','root','','movieshowtimefounder');
							$res=$conn->query("select * from movies where movies_id=$movieId;");
							$row=$res->fetch_object();
							

			 				echo "".$row->movie_name;?>
						</h3>

			

		</div>

		<div class="panel-body">
						<div class="row">
							<div class="col-md-4 col-lg-4 " align="center">
								<img alt="User Pic" src=<?php echo '"moviephotos/'.$row->picture.'"';?> class='card-img-top'> 
							</div>
							<div class=" col-md-8 col-lg-8 "> 
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td><strong>Movie Name </strong></td>
											<td><?php echo "".$row->movie_name;?> </td>
										</tr>
										
										<tr>
											<td><strong>Director</strong></td>
											<td><?php echo "".$row->movie_director;?> </td>
										</tr>
										<tr>
											<tr>
												<td><strong>Description</strong></td>
												<td><?php echo "".$row->movie_description;	?> </td>
											</tr>
										</tr>
									</tbody>
								</table>

	
</div>
	</div>

	</div>
</div>
</div>




