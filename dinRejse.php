<!-- Head include -->
<?php
	$title="Din Rejse";
	$description="Vi skræddersyer din rejse";
    $specialStylesheet="<link rel='stylesheet' type='text/css' href='css/bootstrap.css'/>";
	include("includes/head.inc.php");
?>
<body>

<!-- Nav include -->
<?php
    $pageType=1;
	include("includes/nav.inc.php");
?>

<div class="container"> 
<div class="row">
<div class="col-md-12 text-center">
	<h2>Hvordan kunne du tænke dig at din rejse skulle se ud?</h2>
    </div>
</div>
<!-- Div with round images -->
<div class="row">
     <div class="col-md-6 col-md-offset-3 text-center">
    <h3>Vi skræddersyer din rejse efter dine ønsker</h3>
    </div>
    </div>
    <div id="circleImageDiv">
    <div class="row">
    <div class="col-md-4">
    <img class="img-responsive" src="images/rund1.png" alt="Round image beach"/>
    </div>
        <div class="col-md-4">
    <img class="img-responsive" src="images/rund2.png" alt="Round image culture"/>
    </div>
        <div class="col-md-4">
    <img class="img-responsive" src="images/rund3.png" alt="Round image adventure"/>
    </div>
    </div>
    
    <div class="row">
    <div class="col-md-4">
    <img class="img-responsive" src="images/rund4.png" alt="Round image city"/>
    </div>
        <div class="col-md-4">
    <img class="img-responsive" src="images/rund5.png" alt="Round image diving"/>
    </div>
                <div class="col-md-4">
    <img class="img-responsive" src="images/rund6.png" alt="Round image contact"/>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 col-md-offset-3 text-center">
    <h3>Du kan også udfylde formularen og</h3>
     <a href="http://cctravel.dk/kontakt/rejsetilbud?land=filippinerne" target="_blank"><button id="travelButton">Indhente et rejsetilbud</button></a>
    <h3>Så lad os  sammen udforme din drømmerejse til Filippinerne</h3>
        </div>
    </div>
</div>
</div>

<!-- Footer include -->
      <?php
	include("includes/footer.inc.php");
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.1.1.min.js"></script>

</body>
</html>
