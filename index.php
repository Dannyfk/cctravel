<!-- Head include -->
<?php
	$title="Forside";
	$description="Velkommen til CC Travels kampagneside om rejser til filippinerne";
    $specialStylesheet="<link rel='stylesheet' type='text/css' href='css/parallax.css'/>";
	include("includes/head.inc.php");
?>
<body id="frontpage">
    <!-- Frontpage parallax scene-->
<div id="container" class="container">
		<ul id="scene" class="scene">
			<li class="layer" data-depth="1.00"><img src="images/Forside_image.jpg" alt="Background image"></li>
			<li class="layer" data-depth="0.90"><img src="images/cloud.png" alt="Cloud"></li>
            <li class="layer" data-depth="0.90"><img src="images/cloud2.png" alt="Cloud"></li>
            <li class="layer" data-depth="0.60"><img src="images/tree.png" alt="Tree"></li>
            <li class="layer" id="frontpageTravelText" data-depth="0.95"><a href="rejsMedCcTravel.php"><img src="images/musling.png" alt="Clam"></a></li>
            <li class="layer" data-depth="1.00"><img id="mute" src="images/volume-mute.png" onClick="startStop()" alt="Mute"></li>
            <li class="layer intro_text" id="intro" data-depth="0.50"><h3>Din drømmerejse til Filippinerne<br>starter nu</h3><a href="dinRejse.php" ><button><h3>Skræddersy her</h3></button></a></li>
            <li class="layer" data-depth="0.80"><a href="http://cctravel.dk/" target="_blank"><img src="images/logo3.png" alt="Logo"></a></li>
            <li class="layer" id="leafLeft" data-depth="0.10"><img src="images/leaf1.png" alt="Leaf"></li>
            <li class="layer" id="leafRight" data-depth="0.10"><img src="images/leaf2.png" alt="Leaf"></li>
            <li class="layer intro_text" id="forside_intro" data-depth="0.10"><h3>Velkommen til Filippinerne<br>En rejse med CC Travel<br><span>( Klik på skærmen )</span></h3></li>        
		</ul>
	</div>
    
    <!-- Ocean audio -->
<audio id="oceanSound" autoplay loop>
  <source src="audio/Ocean-low.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>


<!--  Scripts for the frontpage-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.1.1.min.js"></script>

<!-- Parallax javascript --> 
<script src="js/jquery.parallax.js"></script>
    
	<script>
        /* The function that starts the parallax effect */
	$('#scene').parallax();

$(document).ready(function(){
	$("#intro").hide();
    
    /* Funtion to animate the leafs and hide/show some intro tekst */
    function animateIntro(){
        $("#leafRight").animate({left: '1500px'},3000);
		$("#leafLeft").animate({left: '-1500px'},3000);
		$("#forside_intro").hide();
		$("#intro").show();
    }
	
    $("#leafRight").click(function(){
        animateIntro();
    });
	
	$("#leafLeft").click(function(){
        animateIntro();
    });
    
    $("#forside_intro").click(function(){
        animateIntro();
    });
	
});
        
/* Variables and function for the audio button */    
var audio = document.getElementById("oceanSound"); 
var mutePlay = 1;

function startStop() { 
    if(mutePlay === 1){
        audio.pause();
        mutePlay = 2;
    }
    else {
        audio.play();
        mutePlay = 1;
    }
} 
	</script>
</body>
</html>
