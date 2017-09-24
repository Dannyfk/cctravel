<!-- Nav -->
<div class="container" id="custom-nav"> 
<div class="row">
<div class="col-md-2 col-md-offset-1">
            <?php
        if($pageType ==1){
         echo'<a href="index.php"><img class="img-responsive" src="images/linkLeftFrontpage.png" alt="Link frontpage"></a>';
        }
        else{
            echo '<a href="dinRejse.php"><img class="img-responsive" src="images/linkLeftTravel.png" alt="Tailormade travel"></a>';
        }
    ?>
    </div>
    <div class="col-md-4 col-md-offset-1">
        <a href="http://cctravel.dk/" target="_blank"><img class="img-responsive" src="images/logo3.png" alt="logo"></a>
    </div>
    <div class="col-md-2 col-md-offset-1">
                    <?php
        if($pageType ==1){
         echo'<a href="rejsMedCcTravel.php"><img class="img-responsive" src="images/linkRightTravel.png" alt="Link travel with cc travel"></a>';
        }
        else{
            echo '<a href="index.php"><img class="img-responsive" src="images/linkRightFrontpage.png" alt="Link frontpage"></a>';
        }
    ?>
    </div>
    </div>
    </div>