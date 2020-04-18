<?php 
$content = file_get_contents("http://blynk-cloud.com/Jgib6URsqxtaktMBg0ORkNH7V-UaC_kT/get/v6");

$result  = json_decode($content);
$a = json_decode($result[0]);
// echo $a;
$contents = file_get_contents("http://blynk-cloud.com/Jgib6URsqxtaktMBg0ORkNH7V-UaC_kT/get/v5");

$results  = json_decode($contents);
$as = json_decode($results[0]);
// echo $a;
?>

<!DOCTYPE html>
<html>
<head>
	<title>IoT Basic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="https://pngimage.net/wp-content/uploads/2018/06/iot-logo-png-1.png" width="60" height="30" class="d-inline-block align-top" alt="">
    Internet of Things
  </a>
</nav>
<div class="container">
	<h1 class="text-center">Controller with one click</h1>
	<div class="text-center">
		<img id="myImage" onclick="changeImage()" src="nyoba/pic_bulboff.gif" width="100" height="180">
	</div>
	<br>
	<div class="text-center">
		<img id="myImages" onclick="changeImages()" src="nyoba/fan.png" width="200" height="200">
	</div>
</div>
<!-- <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div> -->
<div class="container">
	<!-- <p id="demo"><?php echo $a; ?></p> -->
	<!-- <input type = "text" id = "name"/> -->
	<h1 class="text-center">Monitoring Temperature and Humidity</h1>
	<div id="myfirstchart" style="height: 250px;"></div>
</div>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script type="text/javascript">
	var content = false;
</script>
<script type="text/javascript">
	var content;
	var refreshId = setInterval(function()
{
    $('#div1').load('http://blynk-cloud.com/u-IDJZHRFpfZqF-UKWVKHk_ByP77Hs5n/get/v6', function(data){
 	content = data;
 	// console.log(content);
    });
     
}
, 500);
</script>
<script type="text/javascript">
	var content;
	var j;
	var refreshId = setInterval(function()
{
    $('#demo').load('graph.php', function(data){
 	content = data;
 	// console.log(content);
    });
     
}
, 500);
</script>
<script type="text/javascript">
	
	var xhttp = new XMLHttpRequest();
	a = 80;
	var donut_chart = new Morris.Donut({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { label: 'Temperature', value : <?php echo $a; ?>},
    { label: 'Humidity', value: <?php echo $as; ?> }
  ]
  // The name of the data record attribute that contains x-values.
});
</script>
<script type="text/javascript">
	function changeImage() {
		var image = document.getElementById('myImage');
		if (image.src.match("bulbon")) {
			image.src = "nyoba/pic_bulboff.gif";
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET", "http://blynk-cloud.com/Jgib6URsqxtaktMBg0ORkNH7V-UaC_kT/update/D25?value=0", false);
			xhttp.send();
			// document.getElementById("demo").innerHTML = xhttp.responseText;
		}
		else {
			image.src = "nyoba/pic_bulbon.gif";
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET", "http://blynk-cloud.com/Jgib6URsqxtaktMBg0ORkNH7V-UaC_kT/update/D25?value=1", false);
			xhttp.send();
			// document.getElementById("demo").innerHTML = xhttp.responseText;
  }

}
</script>
<script type="text/javascript">
	function changeImages() {
				var image = document.getElementById('myImages');
				if (image.src.match("fun")) {
					image.src = "nyoba/fan.png";
					var xhttp = new XMLHttpRequest();
					xhttp.open("GET", "http://blynk-cloud.com/Jgib6URsqxtaktMBg0ORkNH7V-UaC_kT/update/D33?value=0", false);
					xhttp.send();
					// document.getElementById("demo").innerHTML = xhttp.responseText;
				}
				else {
					image.src = "nyoba/fun.png";
					var xhttp = new XMLHttpRequest();
					xhttp.open("GET", "http://blynk-cloud.com/Jgib6URsqxtaktMBg0ORkNH7V-UaC_kT/update/D33?value=1", false);
					xhttp.send();
					// document.getElementById("demo").innerHTML = xhttp.responseText;
		  }

		}
</script>
</body>
</html>