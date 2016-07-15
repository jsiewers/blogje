<?php session_start();
	include_once("lib/Blog.php");
	$blog = new Blog();
	$blog->selectAdvertenties();
	include("layout/header.php");
?>
      <div class="page-header">
        <h1>Advertentieoverzicht</h1>
      </div>

<?php foreach($blog->getAdvertenties() as $advertentie) { ?>
        <div class="row advertentie">
	        <div class="col-md-3"><img style="width:100%" class="img-rounded" src="<?php echo $advertentie->getUrlFoto(); ?>" alt="advertentieplaatje"></div>
	        <div class="col-md-9">
	        		Geplaatst door: <?php echo $advertentie->getGebruikerById()->getFullName();?>
	        		<h3><?php echo $advertentie->getTitel(); ?></h3>
	        		<p><?php echo $advertentie->getAdvertentietekst(); ?></p>
		      	<p><a href="advertentie.php?id=<?php echo $advertentie->getIdAdvertentie(); ?>">Reacties</a></p>
	        </div>
      	</div>
<?php } ?>


<?php  include("layout/footer.php"); ?>