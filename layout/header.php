<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/hadseflads.css">

</head>
<body>
 <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="form_advertentie.php">Advertentie toevoegen</a></li>
              <li><a href="gebruiker.php">Gebruiker toevoegen</a></li>
              <?php if(isset($_SESSION['login'])) { ?>
              <li><a href="loguit.php">Uitloggen</a></li>
               <li><img style="width:42px;height:42px;" src="img/<?php echo $_SESSION['login']['login']; ?>.png" alt="plaatje gebruiker"></li>
               <li><a><?php echo $_SESSION['login']['fullname']; ?></a></li>
                <?php } else { ?>
              <li><a href="login.php">Inloggen</a></li>
               <?php } ?>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <img style="width:20%;margin:auto;" src="img/logo_hadseflads.png" class="img-responsive" alt="logo hadseflads">
<div class="container">
	<?php if(isset($messages) && count($messages)>0) { ?>
	<div class="well">
		<ul>
		<?php foreach($messages as $message) { ?>
			<li class="message"><?php echo $message; ?></li>
		<?php } ?>
		</ul>
	</div>
<?php } ?>


