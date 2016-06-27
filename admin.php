<?php
if (!isset($_COOKIE['first_name']))
{
	// Need the functions:
	require('./inc/login_functions.inc.php');
	redirect_user();
}

?>


 <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css"
          rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!-- Page Heading -->
<section class="section page-heading animate-onscroll">
	<button class="logout"><a href="./logout.php">Log Out</a></button>
	<h1>Administration</h1>
</section>

<!-- Page Heading -->

	
		<div class="row">
			<div class="col-sm-12">
			<table id="example" class="display" cellspacing="0" width="100%">
               <thead>
                  <th>id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Message</th>
                  
               </thead>
			   <?php require_once('../db.php'); ?>
               <?php
               //Query the database for all of the volunteers
               $query = "SELECT id, name, email, phone, message FROM kpraxel_portfolio.contact ORDER BY id DESC ";

               //Send the query to the database
               $rows = mysqli_query($cnxn, $query);

               //Loop through each result and display in a row on the table
               while($row = mysqli_fetch_array($rows))
               {
				   $id = $row['id'];
                  echo "<tr>";
					 echo "<td>" . $row['id'] . "</td>";
                     echo "<td>" . $row['name'] . "</td>";
                     echo "<td>" . $row['email'] . "</td>";
                     //Format phone number and display
                     $phone = $row['phone'];
                     echo "<td>(".substr($phone, 0, 3).") ".substr($phone, 3, 3)."-".substr($phone,6)."</td>";
                     echo "<td>" . $row['message'] . "</td>";
                  echo "</tr>";
               }

               //Loop through all of the volunteers and display them in a table

               ?>

            </table>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    
    <script>
      $('#example').DataTable();
    </script>
    
			</div>
		</div>
	</section>


