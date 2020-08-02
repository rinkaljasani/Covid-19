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
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalized">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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

    </ul>
    
  </div>
</nav>





<section class="container-fluid mt-5" id="worldcorona">
	<div class="text-center pt-5 pb-5">
		<h1 class="text-uppercase  font-weight-bold heading">COVID-19 LIVE UPDATE OF INDIA DAY BY DAY</h1>
	</div>
	<div class="table-responsive">
		<table class=" table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th class="text-capitalized">Date</th>
				<th class="text-capitalized">Total Confirmed Case</th>
				<th class="text-capitalized">Total Deceased</th>
				<th class="text-capitalized">Total Recovered</th>
				<th class="text-capitalized">Daily Confirmed</th>
				<th class="text-capitalized">Daily Confirmed</th>
				
			</tr>
			<?php
				$data=file_get_contents('https://api.covid19india.org/data.json');
				$coronalive1 =json_decode($data,);// object fetch
				$coronalive=json_decode($data,true);// array fetch

				//echo "<pre>";
				//print_r($coronalive);
				//echo "</pre>";

				$statecount= count($coronalive['cases_time_series']);
				$i=$statecount;

				for($i=$statecount-1; $i>=1; $i--)
				{
					echo "<tr><th>".$coronalive['cases_time_series'][$i]['date']."</th>";
					echo "<th>".$coronalive['cases_time_series'][$i]['totalconfirmed']."</th>";
					echo "<th>".$coronalive['cases_time_series'][$i]['totaldeceased']."</th>";
					echo "<th>".$coronalive['cases_time_series'][$i]['totalrecovered']."</th>";
					echo "<th>".$coronalive['cases_time_series'][$i]['dailyconfirmed']."</th>";
					echo "<th>".$coronalive['cases_time_series'][$i]['dailyconfirmed']."</th></tr>";
				}
			?>

		</table>
	</div>
	</div>
</div>
</section>





<div class="container scrollTop float-right">
	<div><i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i></div>
</div>

<div class="container-fluid nav_style p-3">
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


</script>

</body>
</html>

