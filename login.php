
  <?php
          $us=$_REQUEST['us'];
          echo "Welcome".$us;
          ?>
          <!DOCTYPE html>
<html>
<head>
	<title>MyBasket Online grcery store</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="mybasket.css">
  <script type="text/javascript" src="login.js"></script>

  </style>

</head>
<body>
   <div class="container">
	  
  <div class="row">
	   		<div class="col-md-6"><img src="C:\xampp\htdocs\MyBasket\logo3.jpg" alt="image" width="25%" height="25%">
			</div>
			<div class="col-md-6" align="right">
	  		
  
	 			<a href="Homepage.html" ><img src="C:\xampp\htdocs\MyBasket\image.jpg" width="40%" height="40%" ></a>
	   		</div>
	   	</div>
	   	<div align="center">
	   		<form action="" method="post">
	   		<input type="text" name="search" placeholder="Enter the item to search here" >
	   		<input type="submit" class="btn btn-md" value="search">
	   		</form>
   		</div>	
     
   <br>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="Homepage.html">Home</a></li>
      <li class="dropdown">
        <a href="staple.html">Staples</a>
        <div class="dropdown-content">
          <a href="staple.html">Edible oils/ghee</a>
          <a href="staple.html">pcikles</a>
        </div>
      </li>
     <li class="dropdown">
       <a href="beverages.html">Beverages</a>
        <ul class="dropdown-content">
          <li><a href="beverages.html">Cool Drinks</a></li>
          <li><a href="beverages.html">juices</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="veggies.html">Veggies&Fruits</a>
        <ul class="dropdown-content">
          <li><a href="veggies.html">Veggies</a></li>
          <li><a href="vseggies">Fruits</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="Branded.html">BrandedItems</a>
        <ul class="dropdown-content">
          <li><a href="Branded.html">Noodles & Soups</a></li>
          <li><a href="Branded.html">choclates</a></li>
        </ul>
      </li>
       <li class="dropdown">
        <a href="Dairy.html">Dairy & Bread</a>
        <ul class="dropdown-content">
          <li><a href="Dairy.html">Dairy</a></li>
          <li><a href="Dairy.html">Bread</a></li>
        </ul>
      </li>
      <li><a href="offers.html">Best offers</a></li>
    </ul>
  </div>
</nav>
  <br>
  <div class="row">
   <div id="myCarousel" class="carousel slide col-md-8" data-interval="2000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
       <div class="item active">
       <img src="offers1.jpg" href="Homepage.html">
      </div>

      <div class="item">
        <img src="offers2.jpg" >
      </div>
    
      <div class="item">
        <img src="offers3.jpg" >
      </div>

      <div class="item">
        <img src="offers4.jpg">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="col-md-4" id="con">
  <pre><h4><u>Address:</u></h4>
    Bramarambika Nagar Colony,
    Beearamguda,HYDERABAD-502032 
    <h4><u>Contact Us:</u></h4>
    040-25894584,34582895.
    Mybasket@gmail.com
    </pre>

  </div>
  </div>
  <br><br>
  <div>
    <p>
      Why to choose us?
      <br>
      <img src="del1.png">
      <img src="del2.jpg">
    </p>
</div>
</div>
</div>


<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel("pause");

    // Click on the button to start sliding 
  
        $("#myCarousel").carousel("cycle");
    

    // Click on the button to stop sliding 
  
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});


</script>
    
</body>
</html>
