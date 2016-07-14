<?php
	include("layout/header.php");
	include_once("lib/Advertentie.php");
	$id = $_GET['id'];
	$advertentie = new Advertentie();
	$advertentie = $advertentie->getAdvertentieById($id);
	$reacties = $advertentie->getReactiesByIdAdvertentie();
	$gebruiker = $advertentie->getGebruikerById();
?>
    <div class="container">
      <div class="page-header">
        <h1>Advertentie</h1>
      </div>

       <div class="row">
       
        		<div class="col-md-4">
        			<img class="img-responsive" src="<?php echo $advertentie->getUrlFoto(); ?>">
        		</div>
        		<div class="col-md-8">
        			<p><i><?php echo $gebruiker->getFullName(); ?></i><p>
        			<h3><?php echo $advertentie->getTitel(); ?></h3>
        			<p><?php echo $advertentie->getAdvertentietekst(); ?></p>
        		</div>
       </div>
      <?php foreach($reacties as $reactie) { 
      	$gebruiker = $reactie->getGebruikerById()
      ?>
         <div class="row">
           	<div class="col-md-offset-3 col-md-1">
           		<img class="img-responsive" src="img/<?php echo $gebruiker->getLogin(); ?>.png" alt="plaatje gebruiker">
           	</div>
         	<div class="col-md-8">
         	<p><?php echo $reactie->getReactietekst(); ?></p>
         	<p><i>Door: <?php echo $gebruiker->getFullName(); ?></i></p>
         	</div>
        </div>
       <?php  } ?>

    </div> <!-- /container -->



<?php  include("layout/footer.php"); ?>