<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/links.php';?>
	<?php include 'css/style.php';?>
</head>
<body onload="fetch()">
	<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><img src="images/menu.png" alt="menu"/ width="40px" height="35px"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalized">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#symid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="worldcorona.php">World Corona Live</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="indiacorona.php">India Corona Live</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="indiaday.php">India Day Wise</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>
    
  </div>
</nav>



<div class="main_header mt-5 mb-5">
	<div class="container">
	<div class="row" height="100px">

		<div class="col-lg-7  col-md-7 col-12 order-lg-1 order-1 mx-auto">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h2 class="text-capitalized font-weight-bold pl-5 pr-5 mt-5">Let's Stay Safe & Fight Together Against Corona Virus
				<span class="corona-spin"><img src="images/corona-spiner.png" width="60" height="60"></span>
				<span>No virus</span><h2>
			</div>
		</div>


		<div class="col-lg-5 col-md-5 col-12 order-lg-2 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center mt-5 mb-5">
				<img src="images/header-covid1.png" alt="no image" width="100%" height="">
			</div>
		</div>		

	</div>
	</div>
</div>


<div class="container">
	<div class="section_header text-center py-5 my-3">
		<h1 class="text-uppercase text-weight-2 font-weight-bold heading">Corona Live Update</h1>
	</div>
	<?php
				$data=file_get_contents('https://api.covid19api.com/summary');
				$coronalive1 =json_decode($data,);// object fetch
				$coronalive=json_decode($data,true);// array fetch

				//echo "<pre>";
				//print_r($coronalive);
				//echo "</pre>";

				$statecount= count($coronalive['Global']);
				
					$TotalConfirmed=$coronalive['Global']['TotalConfirmed'];
					$TotalRecovered=$coronalive['Global']['TotalRecovered'];
					$TotalDeaths=$coronalive['Global']['TotalDeaths'];
					$NewConfirmed=$coronalive['Global']['NewConfirmed'];
					$NewRecovered=$coronalive['Global']['NewRecovered'];
					$NewDeaths=$coronalive['Global']['NewDeaths'];
				
			?>

	<div class="align">
   <div class="stat-wrap text-center">
      <div>
         Total Case
         <span class="stat-number"><?php echo $TotalConfirmed; ?></span>      
      </div>
      <div>
        Recovered
         <span class="stat-number"><?php echo $TotalRecovered; ?></span>      
      </div>
         <div>
          Death
         <span class="stat-number"><?php echo $TotalDeaths; ?></span>      
      </div>
         <div>
            New Confirmed
         <span class="stat-number"><?php echo $NewConfirmed; ?></span>      
      </div>
         <div>
            New Recovered
         <span class="stat-number"><?php echo $NewRecovered; ?></span>      
      </div>
      	<div>
            New Deaths
         <span class="stat-number"><?php echo $NewDeaths; ?></span>      
      </div>
   </div>
</div>
</div>


<div class="container-fluid sub_section mb-5" id="aboutid">
	<div class="section_header text-center py-5 my-3">
		<h1 class="text-uppercase text-weight-2 font-weight-bold heading">About Corona</h1>
	</div>
	<div class="row ">
		<div class="col-lg-5 col-md-6 col-12 ">
			<img src="images/about.jpg" class="img-fuild" width="100%" height="100%">
		</div>
		<div class="col-lg-7 col-md-6 col-12 pl-5">
			<h2>What is a novel coronavirus?</h2>
			<p>
			    COVID-19 is the disease caused by the new coronavirus that emerged in China in December 2019.
			    COVID-19 symptoms include cough, fever or chills, shortness of breath or difficulty breathing, muscle or body aches, sore throat, new loss of taste or smell, diarrhea, headache, fatigue, nausea or vomiting and congestion or runny nose. COVID-19 can be severe, and some cases have caused death.
			</p>
			<p>
				The new coronavirus can be spread from person to person. It is diagnosed with a laboratory test.
			    There is no coronavirus vaccine yet. Prevention involves frequent hand-washing, coughing into the bend of your elbow, staying home when you are sick and wearing a cloth face covering if you can't practice physical distancing.
			</p>
		</div>
	</div>
</div>


<div class="container py-5" id="symid">
	<div class="section_header text-center my-5">
		<h1 class="text-uppercase text-weight-2 font-weight-bold heading">Corona Virus Symptoms</h1>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-md-12 mt-5">
			<figure class="text-center">
				<img src="images/cough.png" class="img-fuild" width="120" height="120">
			</figure>
			<figcaption class="text-center">Cought</figcaption>
		</div>	  
		<div class="col-lg-4 col-md-4 col-md-12 mt-5">
			<figure class="text-center">
				<img src="images/runny_nose.png" class="img-fuild" width="120" height="120">
			</figure>
			<figcaption class="text-center">Runny Nose</figcaption>
		</div>	  
		<div class="col-lg-4 col-md-4 col-md-12 mt-5">
			<figure class="text-center">
				<img src="images/fever.png" class="img-fuild" width="120" height="120">
			</figure>
			<figcaption class="text-center">Fever</figcaption>
		</div>	  
		<div class="col-lg-4 col-md-4 col-md-12 mt-5">
			<figure class="text-center">
				<img src="images/cold.png" class="img-fuild" width="120" height="120">
			</figure>
			<figcaption class="text-center">Cold</figcaption>
		</div>	  
		<div class="col-lg-4 col-md-4 col-md-12 mt-5">
			<figure class="text-center">
				<img src="images/breathing.png" class="img-fuild" width="120" height="120">
			</figure>
			<figcaption class="text-center">Difficulty Breathing</figcaption>
		</div>	  
		<div class="col-lg-4 col-md-4 col-md-12 mt-5">
			<figure class="text-center">
				<img src="images/tired.png" class="img-fuild" width="120" height="120">
			</figure>
			<figcaption class="text-center">Tiredness</figcaption>
		</div>	  
	</div>
</div>

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center my-5">
		<h1 class="text-uppercase text-weight-2 font-weight-bold heading">6 steps Prevention Against CoronaVirus</h1>
	</div>

	<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<figure class="text-center">
						<img src="images/handwash.png" class="img-fuild" width="90" height="90">
					</figure>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<p>wash your hand regularly for 20 secounds, with soup and water or alcohol-based hand rub</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<figure class="text-center">
						<img src="images/facemask.png" class="img-fuild" width="90" height="90">
					</figure>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<p>Cover your face and mouth with a disposible tisues or elbow when you cough or sneeze</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<figure class="text-center">
						<img src="images/socialdistance.png" class="img-fuild" width="90" height="90">
					</figure>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<p>Avoid close contact with people who are unwell</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<figure class="text-center">
						<img src="images/stayhome.png" class="img-fuild" width="90" height="90">
					</figure>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<p>Stay home and self-isolation from other in the household if you fell unwell</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<figure class="text-center">
						<img src="images/news.png" class="img-fuild" width="90" height="90">
					</figure>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<p>Stay informed by watching news and follow the recommended practices</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<figure class="text-center">
						<img src="images/illness.png" class="img-fuild" width="90" height="90">
					</figure>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<p>If you have fever, caugh and diffeculty breathing seek medical care early</p>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>


<div class="container pb-5" id="contactid">
	<div class="section_header text-center my-5">
		<h1 class="text-uppercase text-weight-2 font-weight-bold heading">Contact Us If U Have Problem</h1>
	</div>
	<div class="col-lg-8 col-md-8 col-12 offset-lg-2 offset-md-2">
	<form action="coronacase.php" method="POST">

  <div class="form-group">
    <label>User Name</label>
    <input type="text" class="form-control"  placeholder="Enter Username" name="username" required="required">
  </div>

  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email" required="required" oninvalid="alert('You must enter valid email id!');">

  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Phone Number</label>
    <input type="text" pattern="[789][0-9]{9}" class="form-control" placeholder="Enter mobile number" name="mobile" required="required" oninvalid="alert('You must enter valid mobile number!');" mexlength="10">
  </div>
  <div class="form-group">
    <label>Symptoms</label>
  </div>
  <div class="form-check custom-control-inline text text-capitalized">
    <input type="checkbox" class="form-check-input " id="exampleCheck1" name="coronasym[]" value="caugh">
    <label class="form-check-label">Caugh</label>
  </div>

  <div class="form-check custom-control-inline text text-capitalized">
    <input type="checkbox" class="form-check-input " id="exampleCheck2" name="coronasym[]" value="fever">
    <label class="form-check-label" for="exampleCheck1">Fever</label>
  </div>

  <div class="form-check custom-control-inline text text-capitalized">
    <input type="checkbox" class="form-check-input " id="exampleCheck3" name="coronasym[]" value="breath">
    <label class="form-check-label" for="exampleCheck1">Difficulty breathing</label>
  </div>

  <div class="form-check custom-control-inline text text-capitalized">
    <input type="checkbox" class="form-check-input " id="exampleCheck4" name="coronasym[]" value="tired">
    <label class="form-check-label" for="exampleCheck1">Feel Week</label>
  </div><br/><br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Other Problem</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" required="required"></textarea>
  </div>
  <br/><br/>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

<div class="container scrollTop float-right">
	<div><i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i></div>
</div>

<div class="container-fluid nav_style">
	<div class="row justify-content-center align-items-center">
		<a> Copyright by Rinkaljasani</a>
	</div>
</div>

<script type="text/javascript">


	myButton=document.getElementById("myBtn");
	window.onscroll = function(){scrollFunction()};
	function scrollFunction(){
		if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
			myButton.style.display="block";
		}
		else
		{
			myButton.style.display="none";	
		}
	}

	function topFunction()
	{
		document.body.scrollTop=0;
		document.documentElement.scrollTop=0;
	}

	$('.stat-number').each(function () {
   var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
   $(this).prop('Counter', 0).animate({
      Counter: $(this).text()
   }, {
      duration: 5000,
      step: function (func) {
         $(this).text(parseFloat(func).toFixed(size));
      }
   });
});
	
</script>

</body>
</html>

