<!-- Head include -->
<?php
	$title="Rejs med cc travel";
	$description="En rejse med cc travel";
    $specialStylesheet="<link rel='stylesheet' type='text/css' href='css/bootstrap.css'/>";
	include("includes/head.inc.php");
?>

<body>

<!-- Nav include -->
<?php
    $pageType=2;
	include("includes/nav.inc.php");
?>


<div class="container parallax_text">
<div class="row">
<div class="col-md-12 text-center" id="kampagne">
	<h2>Hvorfor rejse med CC Travel?</h2>
<!-- Storytelling video -->
    <video controls>
  <source src="movies/story.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
    <p>CC Travel kan med vores 26 års erfaring skræddersy den perfekte rejse til dig. Vi fokuserer på at alle dine ønsker bliver opfyldt og at trygheden er helt i top. Vi skal nok sørge for alle det praktiske ting til din rejse, så du bare kan slappe af, når du tager af sted. Vi holder også kontakten og skulle der ske det mindste, er vi klar til at hjælpe så godt vi nu kan.<br><br>Men hvad så med Filippinerne, hvorfor er det lige netop her, vi har så meget fokus?</p>
</div>
</div>
</div>
<!-- Parallax image -->
    <div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="images/strandTilSalg.jpg" data-natural-width="1400" data-natural-height="800"></div>

      <div class="container parallax_text">
      <div class="row">
<div class="col-md-8 col-md-offset-2">

<p>Det hele startede tilbage i 1985, hvor Enrico på sin rejse til Filippinerne stødte på en strand til salg. Han købte stranden og begyndte at bygge en resort på den smukke strand. Resorten hed Coco Beach og den blev bygget ind i de skønne omgivelser med lokale matrialer og personalet var også lokalt. I 1989 åbnede C&amp;C Travel med Coco Beach som deres eneste destination og det er stadig den dag i dag C&amp;C Travels største trækplaster. </p>

</div>
      </div>
      </div>
<!-- Parallax image -->
    <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-image-src="images/coco-beach.jpg" data-natural-width="1400" data-natural-height="500"></div>

     <div class="container parallax_text">
      <div class="row">
<div class="col-md-8 col-md-offset-2">

<p>Men Coco Beach er ikke den eneste destination, du kan rejse til med C&amp;C Travel. Gennem årene er mængden af destinationer steget kraftigt, men det betyder ikke at vi har sænket kvaliteten. Vi sørger for at holde et godt samarbejde med så mange af destinationerne vi kan, så vi sikre den bedste ferie for dig, når du rejser med os.</p>
<div class="linkButtons">
    <a href="http://cctravel.dk/kontakt/rejsetilbud?land=filippinerne" target="_blank" ><button><h3>Skræddersy din rejse</h3></button></a>
    <a href="http://cctravel.dk/kontakt" target="_blank"><button ><h3>Tlf:3315 3322</h3></button></a>
    </div>
</div>

      </div>
      </div>
<!-- Parallax image -->
    <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="images/phil3.jpg" data-natural-width="1400" data-natural-height="900"></div>


  <?php
	include("includes/footer.inc.php");
?>

<!--We use an older version of JQuery because the parallax scroll effect gets ruined with the newer version-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Script for the parallax scroll effect -->
<script src="js/parallaxScroll.min.js"></script>
</body>
</html>
