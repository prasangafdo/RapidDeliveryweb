<?php
include("receivercheck.php");  
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rapid Delivery</title>
    
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

</head>


<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Rapid Delivery</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Your Parcels</a>
                    </li>
                    <li>
                    	<a class="page-scroll" href="#track">Tracking</a>
                    </li>
                </ul>
                <ul>
                <div class="userName">
                
<?php  
echo "<h3> $login_user </h3>";
?>

                    
                    <form action="logout.php" method="post">
                    <div class="logout">
                    <input name="btn_logout" type="submit" value="Logout">
				</form>
            </div>
            </ul>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="welcomePane">
                    <h1>Welcome to Rapid Delivery</h1>
                    
                     <img src="images/Man-having-a-parcel-deliv-014.jpg" width="90%" class="img-responsive">  
                     <br/>
            </div>
        </div>

  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style4.css">
  </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Rapid Delivery</h1>
                    	<p align="justify"> Rapid Delivery is a 24/7 courier service, located in Colombo, Sri Lanka. Our company was founded in mid-2017 by Prasanga Fernando. A final year software engineering student of the University of the west of England with the aim of providing a better courier service that is focused on delivery transparency with the support of GPS. 

</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Services Section</h1>
                    <p align="justify">
                    Rapid Delivery originally only delivers parcels to Sri Lankan addresses, they now deliver parcels to any global location requested by incorporated clients.  
Rapid Delivery us, utilize Intelligent Dispatch, which is an artificial intelligence and fleet management system to allocate a booking to the most appropriate vehicle for transport mode (including bicycles, motorbikes and vans of varying sizes). 
<br/>
Our couriers are rewarded and motivated with high pay for the service levels they provide, supported by the information technology. Thus, Rapid Delivery customers can render a courier service that is reliable, trustworthy and transparent than other traditional courier services all around the island. This industrial and organization philosophy is complex to initiate and also requiring explicit training to be given to the couriers to change the way in which they worked in their lives in the purpose of courier service and behaved in order to fit the new organizational practices and image, enabled by new information technology.  
<br/>
Additionally, other than giving features to the employees, Rapid Delivery has been provided a new feature to the customers for the real time tracking of their parcel on a map, in the power of GPS technology. They are also shown the shortest route from the starting point to the final destination, for which they are billed, from pick-up to dispatch. So the customer can keep monitoring their parcel on the map till the package been delivered. That will be a relief for the customers to identify the package has reached to the final destination successfully. It is this high level of human-to-system connectivity at the heart of Rapid Delivery, makes it a unique e-courier service with fulfilling the customer satisfaction.
</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Your Parcel Details</h1>
                    <p style="text-align:center">
                   All the parcles belong to you shown in the following table.
                    </p>
  <table class="container">
	<thead>
		<tr>
			<th><h1>Parcel ID</h1></th>
			<th><h1>Pickup Address</h1></th>
			<th><h1>Delivery Address</h1></th>
            <th><h1>Package Type</h1></th>
			<th><h1>Contact Number</h1></th>
			<th><h1>Status</h1></th>

		</tr>
	</thead>
	<tbody>
<?php
$sql = "SELECT customer_id from receiver where username = '$login_user'";

    
$results = mysqli_query($db, $sql) or die(mysql_error());
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {

extract($row);

//echo $customer_id;//Getting  the customer_ID	
}
////////////////
$sql1 = "SELECT status from parcel_status where customer_id = '$customer_id'";
if (mysqli_query($db, $sql1)) {
    
$results = mysqli_query($db, $sql1) or die(mysql_error());
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {

extract($row);
echo $status;//Getting  parcel status
	}
}

$sql = "SELECT parcel.ID, parcel.pickup_address, parcel.delivery_address, parcel.package_type, parcel.contact_no, parcel_status.status FROM parcel INNER JOIN parcel_status on parcel.id = parcel_status.parcel_ID WHERE parcel_status.status = 'Pickedup' AND parcel_status.customer_id = '1'";
////////////////

$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		extract($row);	
	  echo	"
		<tr>
			<td>$ID</td>
			<td>$pickup_address</td>
			<td>$delivery_address</td>
			<td>$package_type</td>
			<td>$contact_no</td>
			<td>$status</td>
		</tr>
		";
    }
} else {
    echo "0 results";
}

echo "";
//$db->close();
?>
</tbody>
</table>
 
                </div>
            </div>
        </div>
    </section>
    
    <!-- Tracking Section -->
    <section id="track" class="track-section">
        <div class="container">
            <div class="row">
                <div class="">
                    <h1>Tracking</h1>
                     <p style="text-align:center">
                     Please enter the Parcel ID which you want to track. You can get the parcel ID from the above table.
                     </p>
                     </div>
             </div>
             <form action="CustomerParcels.php" method="post">
             <input type="text" name="parcel_ID" placeholder="Parcel ID">
             <input type="submit">
             </form>
             <p style="text-align:center">
              If the parcel is delivered and still shown on the table, please mark it as deliverd.
              </p>
             <form action="DeleteParcels.php" method="post">
             <input type="text" name="parcel_ID" placeholder="Parcel ID">
             <input type="submit" value="Received">
             </form>    
              
             
        <!--       
       <div class="map-Border">
        <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          //center: {lat: 7.8731, lng: 80.7718},
		  center: {lat: 7.1824795, lng: 79.9043215},
          //zoom: 8
		  zoom:15
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPtg5NhcYerzCS0sHvWAff9XqUipqY8LU&callback=initMap"
    async defer></script>
       </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>