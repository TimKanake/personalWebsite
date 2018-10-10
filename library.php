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
    <div>
      <ul class="nav justify-content-end" style="height:40px">
        <li class="nav-item">
          <a class="nav-link menu-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-link" href="blog.html"><s>Blog</s></a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-link" href="projects.html">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-link" href="library.php">Library</a>
        </li>
      </ul>
    </div>
  	<div class="container title-container">
	      <h1 class="display-4 text-center title-text">Library</h1>
	      <h3 class="display-5 text-center title-text">2018 Reading List...And Counting.</h3>
    </div>
    <hr>
    <div class="container">
      <ul class="list-group list-group-flush">

      	<?php
      		include_once "librarydetails.php";
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
    <footer>
      <div class="container footer-container custom-fixed-footer">
        <a href="https://twitter.com/timkanake" target="blank" class="tw-ic">
            <i class="fa fa-twitter mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <a href="https://linkedin.com/in/timothymwiti" target="blank" class="li-ic">
            <i class="fa fa-linkedin mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <a href="https://instagram.com/random_by_tim" target="blank" class="ins-ic">
            <i class="fa fa-instagram mr-md-5 mr-3 fa-2x"> </i>
        </a>
      </div>
      <div class="footer-copyright py-3 text-center">
          © 2018 Copyright
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
