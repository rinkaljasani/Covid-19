

<style type="text/css">
html{
	scroll-behavior: smooth;
}
.row{
	margin-left: 0!important;
	margin-right: 0!important;
}

	*{
		margin:0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Mulish', sans-serif;
	}
	.nav_style{
		background-color: #22b9ab!important;

	}
	.nav_style a{
		color:white;

	}
	.sub_section
	{
		background-color: #f6f6f6;
	}

/*-------------------  Main header -----------------*/

.main_header h1{
	color:#595959;
	font-size: 2.9rem;
}
.corona-spin img{
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona {
	0{
		transform: rotate(0);
	}
	100%{
		transform: rotate(360deg);
	}
}
.rightside h2{
	color:#222439 ;
}
.leftside img{
	//animation: heartbeat 3s linear infinite;
	
}
@keyframes heartbeat{
	0%{
		transform: scale(.75);
	}
	20%{
		transform: scale(1);
	}
	40%{
		transform: scale(.75);
	}
	60%{
		transform: scale(1);
	}
	100%{
		transform: scale(.75);
	}
	100%{

	}
}
/*************  Corona update ***********/
.corona_update{
	margin:0 0 30px 0;
}
/***************  end corona update ************/

#myBtn{
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #22b9ab;
	color:white;
	cursor:pointer;
	padding: 10px;
	border-radius: 10px;
}
#myBtn:hover{
	background:#606060;
}


.align{
   -webkit-display: flex;
   -moz-display: flex;
   -ms-display: flex;
   -o-display: flex;
   display: flex;   
   -webkit-flex-align: center;   
   -ms-flex-align: center;   
   -webkit-align-items: center;   
   align-items: center;
   //height:100vh;
}
.stat-wrap{
   
   -webkit-display: flex;
   -moz-display: flex;
   -ms-display: flex;
   -o-display: flex;
   display: flex;
   justify-content:space-between;
   padding: 50px;
   width: 100%;
   div{
      font-size: 20px;
      font-weight: bold;
      text-align: center;
   }
}
.stat-number{
   display: block;
   font-size: 35px;
   font-weight: bold;
   color: black;
}


.heading{
	color:#5e7871;
}


#aboutid h2{
	color:#424242;
}
#aboutid p
{
	color:#a2a2a2;
}

</style>

