
<?php include_once 'header.php'; ?> 

<?php
	// echo "<h2> --> ".$segment_id."</h2>";
	// if($this->session->has_userdata('logged_in')){
	// 	echo "<h2>YES,is logged in</h2>";
	// } else {
	// 	echo "<h2>NO, is NOT logged in</h2>";
	// }
	// die;
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  
	<!-- <title><?php echo $segment_data->segment.' | '; ?>Segments View</title> -->
<!-- </head> -->
<!-- <body> -->

	<div class="container">
		&nbsp;<br> &nbsp;<br> &nbsp;<br> &nbsp;<br>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>No.</th>
					<th>Title</th>
					<th>Description</th>
					<th>Thumbnail</th>
					<th>Guest(s)</th>
					<th>Action</th>
					<?php if($this->session->userdata('logged_in')): ?>
				
						<th>
							<i class="fas fa-plus-square"></i> 
						</th>
						<th>	
							<i class="fas fa-edit"></i>
						</th>
						<th>	
							<i class="fas fa-trash-alt"></i>
						</th>
					<?php endif; ?>
				</tr>
			</thead>
		<?php

        $this->load->helper('text');

        $ctr = 1;
         foreach ($segment_items as $segment) {
             echo '<tr>';
             echo '<td>'.$ctr.'</td>';
             echo '<td>'.$segment->title.'</td>';
             // echo "<td>".$segment->descrip."</td>";
             echo '<td>'.character_limiter($segment->descrip, 150).'</td>';
             echo '<td>'."<img src='".$segment->photourl."' width='50' height='40'>".'</td>';
             echo '<td>'.$segment->guests.'</td>';
             //echo "<td>".$segment->url."</td></tr> ";
			 echo "<td><a href='".base_url().'index.php/player/item/'.$segment->id."' class='btn btn-primary'> 	Play</a></td>";

			// echo $this->session->has_userdata('logged_in');
			// die;

			 if (isset($logged_in) && $logged_in) {
			 ?>

				<!-- Activate editing buttons when logged in -->
				<td>
					<a href="<?php echo base_url();?>index.php/broadcasts">	<i class="fas fa-plus-square"></i> </a>
				</td>
				<td>
					<a href="<?php echo base_url();?>index.php/broadcasts/edit/<?php echo $segment->id;?>">	<i class="fas fa-edit"></i></a>
				</td>
				<td>
					<a href="">	<i class="fas fa-trash-alt"></i></a>
				</td>
				</tr>

			 <?php
				}
             	++$ctr;
         }
        ?>
		</table>
	</div>
	<?php   echo $this->pagination->create_links();?>
<!-- </body> -->
<!-- </html> -->
<?php include 'footer.php'; ?> 