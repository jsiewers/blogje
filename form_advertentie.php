<?php 
session_start(); 
if(!isset($_SESSION['login'])) {
	header("Location: login.php");
}
include_once("lib/Gebruiker.php");
include_once("lib/Advertentie.php");
if(isset($_POST['knop'])) {
	extract($_POST);
	$advertentie = new Advertentie();
	$advertentie->setTitel($titel);
	$advertentie->setAdvertentieTekst($advertentietekst);
	$advertentie->setUrlFoto($urlfoto);
	$advertentie->setIdGebruiker($_SESSION['login']['idgebruiker']);
	
	if($advertentie->insertAdvertentie()) {
		$message[] = "Advertentie is toegevoegd";
	} else {
		$message[] = "Advertentie is niet toegevoegd!";
	}
}
include("layout/header.php"); 
?>
<div class="row">
    <div class="col-sm-offset-2 col-sm-10">
    	<h1>Advertentie toevoegen</h1>
	</div>
</div>
<form class="form-horizontal" action="#" method="post" >
  <div class="form-group">
    <label for="titel" class="col-sm-2 control-label">Titel</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="titel" name="titel" placeholder="Titel">
    </div>
  </div>
  <div class="form-group">
	<label for="advertentietekst" class="col-sm-2 control-label">Advertentietekst</label>
    <div class="col-sm-10">
	  <textarea class="form-control" rows="5" id="advertentietekst" name="advertentietekst"></textarea>
    </div>
	</div>  
	<div class="form-group">
    <label for="urlfoto" class="col-sm-2 control-label">URL van de Foto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="urlfoto" name="urlfoto" placeholder="url van de foto">
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="knop">Verstuur</button>
    </div>
  </div>
</form>
<?php include("layout/footer.php"); ?>
