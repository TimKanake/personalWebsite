<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/personalstyling.css" rel="stylesheet">
    <title>Tim's Library</title>
  </head>
  <body>
  	<div class="container title-container">
	      <h1 class="display-4 text-center title-text">My Library</h1>
	      <h3 class="display-5 text-center title-text">I'm Finally Back To Reading. These are some of the books I have read so far.</h3>
    	</div>
    	<hr>
    <div class="container">
      <ul class="list-group list-group-flush">

      	<?php 
      		include_once "../librarydetails.php";
      		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()){

		    	if($row['Reading'] == 1){
		    		echo "<a href = \"\"  target=\"_blank\" class=\"list-group-item list-group-item-action text-center border-0 a3\">" . $row["BookTitle"]. " by " . $row["Author"]. "(Currently Reading) </a>";
		    	}else{
		    		echo "<a href = \"\"  target=\"_blank\" class=\"list-group-item list-group-item-action text-center border-0 a3\">" . $row["BookTitle"]. " by " . $row["Author"]. "</a>";
		    	}
		    }
		}
      	?>
      </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </body>
</html>
