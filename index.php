<?php
	include("layout/header.php");
	include_once("lib/Blog.php");
	$blog = new Blog();
	$blog->selectAdvertenties();
?>
    <div class="container">
      <div class="page-header">
        <h1>Advertentieoverzicht</h1>
      </div>

<?php foreach($blog->getAdvertenties() as $advertentie) { ?>
        <div class="row">
        		<div class="col-md-offset-4 col-md-8">
        			<?php echo $advertentie->getGebruikerById()->getFullName();?>
        		</div>
        </div>
        <div class="row">
	        <div class="col-md-4"><img src="<?php echo $advertentie->getUrlFoto(); ?>" alt="advertentieplaatje"></div>
	        <div class="col-md-8">
	        		<h3><?php echo $advertentie->getTitel(); ?></h3>
	        		<p><?php echo $advertentie->getAdvertentietekst(); ?></p>
	        </div>
      	</div>
      	<div class="row">
	      	<div class="col-md-offset-4 col-md-8">
	      		<a href="advertentie.php?id=<?php echo $advertentie->getIdAdvertentie(); ?>">Reacties</a>
	      	</div>
      	</div>
<?php } ?>

    </div> <!-- /container -->



<?php  include("layout/footer.php"); ?>