<?php 
include_once("lib/config.php");
if(!isset($_SESSION['login'])) {
	header("Location: login.php");
}
include_once("lib/Gebruiker.php");
include_once("lib/Advertentie.php");
include_once("lib/Reactie.php");

if(isset($_GET['id'])) {
	$id=$_GET['id'];
} else {
	$id = 0;
}
if(isset($_POST['knop'])) {
	extract($_POST);
	$reactie = new Reactie();
	$reactie->setReactietekst($reactietekst);
	$reactie->setIdGebruiker($_SESSION['login']['idgebruiker']);
	$reactie->setIdAdvertentie($id);
	
	
	if($reactie->insertReactie()) {
		$messages[] = "Reactie is toegevoegd<br><a href='advertentie.php?id=".$id."'>Terug</a>";
	} else {
		$messages[] = "Reactie is niet toegevoegd!<br><a href='advertentie.php?id=".$id."'>Terug</a>";
	}

}
include("layout/header.php");
?>
<div class="row">
    <div class="col-sm-offset-2 col-sm-10">
    	<h1>Reactie toevoegen</h1>
	</div>
</div>
<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']."?id=".$id; ?>" method="post" >
  <div class="form-group">
	<label for="reactietekst" class="col-sm-2 control-label">Reactie</label>
    <div class="col-sm-10">
	  <textarea class="form-control" rows="5" id="reactietekst" name="reactietekst"></textarea>
    </div>
  </div>  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="knop">Verstuur</button>
    </div>
  </div>
</form>
<?php include("layout/footer.php"); ?>
