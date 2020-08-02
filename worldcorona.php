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
        <a class="nav-link" href="indiacorona.php">India Live</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="indiaday.php">India Day Wise</a>
      </li>

    </ul>
    
  </div>
</nav>






<section class="container-fluid mt-5">
	<div class="text-center pt-5 pb-5">
		<h1 class="text-uppercase  font-weight-bold heading">COVID-19 LIVE UPDATE OF THE WORLD</h1>
	</div>
	<div class="table-responsive">
		<table class=" table table-bordered table-striped text-center" id="tbval">
			<tr class="">
				<th>Country</th>
				<th>TotalConfirmed</th>
				<th>TotalRecovered</th>
				<th>TotalDeaths</th>
				<th>NewConfirmed</th>
				<th>NewRecovered</th>
				<th>NewDeaths</th>
			</tr>
			
		</table>
	</div>
	</div>
</div>
</section>








<div class="container scrollTop float-right">
	<div><i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i></div>
</div>

<div class="container-fluid nav_style">
	<div class="row justify-content-center align-items-center ">
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


	//api 
	function fetch(){
		$.get("https://api.covid19api.com/summary",
			function(data){
				console.log(data['Countries'].length);
				var tbval = document.getElementById('tbval');
				for(var i=1; i<(data['Countries'].length); i++)
				{
					var x = tbval.insertRow();
					x.insertCell(0); 
					tbval.rows[i].cells[0].innerHTML = data[ 'Countries'][i-1]['Country'];
					
					x.insertCell(1);
					tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
					
					x.insertCell(2);
					tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
					
					x.insertCell(3);
					tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
					
					x.insertCell(4);
					tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
					
					x.insertCell(5);
					tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
					
					x.insertCell(6);
					tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
					
				}
			}
		);
	}
</script>

</body>
</html>

