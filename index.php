<!DOCTYPE html>
<html lang="en">
<head>
<title>P1 - Home</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="michaeldepaula">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<!--JS-->
<script src="js/jquery-1.11.3.min.js"></script>

<script>
$(document).ready(function(){
	$("#q1").hover(function(){
		$("#ex1").fadeIn(2000);
		$("#exp1").animate({'margin-top': '250px'});
		}, function(){
		 $("#ex1").fadeOut(2000);
		$("#exp1").animate({'margin-top': '30px'});
	});
});
</script>
</head>

<body>
    <div class="container-fluid">    
        <div class="row thumb1">
            <div class="col-md-7">
            	<div class="title">
                	MICHAEL <span class="csplit">DEPAULA</span>
                    <p>Dynamic Web Apps Portfolio</p>
                </div>
            </div>
            <div class="col-md-5">
                <nav>
                    <ul class="nav nav-pills">
                        <li  class="active"><a href="#">Home</a></li>
                        <li ><a href="#"><strong>P</strong><span class="csplit"> 2</span></a></li>
                        <li ><a href="#"><strong>P</strong><span class="csplit"> 3</span></a></li>
                        <li ><a href="#"><strong>P</strong><span class="csplit"> 4</span></a></li>                        
                    </ul>
                </nav>            
            </div>
        </div>        
        <div class="row">
            <div class="col-md-12 main"></div>
        </div>        
        <div class="row thumb2">
            <div id="q1" class="col-md-3">
                <div class="thumb-set1 maxheight">
                    <div class="thumbnail">
                        <figure><img src="img/1.jpg" alt=""></figure>
                        <div class="caption">
                            <p class="title">Why are you taking this course?</p>
                            <p id="ex1">text goes in here....very soon to will define.</p>
                            <span id="exp1" class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumb-set1 maxheight">
                    <div class="thumbnail">
                        <figure><img src="img/2.jpg" alt=""></figure>
                        <div class="caption">
                            <p class="title">What previous experience do you have with programming?</p>
                            <p class="hidden">text goes in here....very soon to will define.</p>
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </div>  
                    </div>
                </div> 
            </div> 
            <div class="col-md-3">
                <div class="thumb-set1 maxheight">
                    <div class="thumbnail">
                        <figure><img src="img/3.jpg" alt=""></figure>
                        <div class="caption">
                            <p class="title">Are you working on a Mac, PC, or some other platform?</p>
                            <p class="hidden">text goes in here....very soon to will define.</p>
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </div>  
                    </div>
                </div>
            </div>  
            <div class="col-md-3">
                <div class="thumb-set1 maxheight">
                    <div class="thumbnail">
                        <figure><img src="img/4.jpg" alt=""></figure>
                        <div class="caption">
                            <p class="title">Anything else we should know?</p>
                            <p class="hidden">text goes in here....very soon to will define.</p>
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </div>  
                    </div>
                </div>
            </div>                                    
        </div>        
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>