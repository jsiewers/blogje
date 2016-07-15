<?php session_start(); 
include_once("lib/Gebruiker.php");
if(isset($_POST['login'])) {
	extract($_POST);
	$gebruiker = new Gebruiker();
	$gebruiker->setVoornaam($voornaam);
	$gebruiker->setAchternaam($achternaam);
	$gebruiker->setTussenvoegsel($tussenvoegsel);
	$gebruiker->setLogin($login);
	$gebruiker->setPassword(password_hash($password, PASSWORD_DEFAULT));
	
	if($gebruiker->insertGebruiker()) {
		echo "Gebruiker is succesvol toegevoegd!";
	} else {
		echo "Jammmer!";
		
	}
}
include("layout/header.php");
?>
<div class="row">
    <div class="col-sm-offset-2 col-sm-10">
    	<h1>Registreren</h1>
	</div>
</div>
<form class="form-horizontal" action="#" method="post" >
  <div class="form-group">
    <label for="voornaam" class="col-sm-2 control-label">Voornaam</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="voornaam" name="voornaam" placeholder="Voornaam">
    </div>
  </div>
  <div class="form-group">
    <label for="tussenvoegsel" class="col-sm-2 control-label">Tussenvoegsel</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tussenvoegsel" name="tussenvoegsel" placeholder="Tussenvoegsel">
    </div>
  </div>
  <div class="form-group">
    <label for="achternaam" class="col-sm-2 control-label">Achternaam</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="achternaam" name="achternaam" placeholder="Achternaam">
    </div>
  </div>
  <div class="form-group">
    <label for="login" class="col-sm-2 control-label">Login</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" name="login" required placeholder="Login">
    </div>
  </div>
   <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Verstuur</button>
    </div>
  </div>
</form>
<?php include("layout/footer.php"); ?>
