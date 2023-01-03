<!DOCTYPE html>
<html lang="fr">
<head>
  <title>PlaisirVoyage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="carousel.css" rel="stylesheet">
  <style>
		nav {
			background-color: black;
		}
		
		footer {
			background-color: #555;
			color: white;
			padding: 20px;
		}

    body {
          padding-top: 5em;
          background-image: url("Produit/fond.jpg");
          background-size: cover;
          background-repeat: no-repeat;
          background-attachment:fixed;
          color: white;
        }
    main{
      margin-bottom: 20%
    }
  </style>
</head>

<body>
    
     <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <img class="img-responsive" style="padding-right:1%;" src="Produit/logo.jpg" alt="icone-marque">
        <a class="navbar-brand" href="#">PLaisirVoyage</a>
        <!--  Bouton lorsque l'on réduit la taille de l'écran-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
		</button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Produit.php">Destinations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    
     <main  class="container row">
		<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-lg-4">

      <hr>
      <br>
      <h4>Audio</h4>
      <br>
      <audio controls>
        <source src="Produit/video/son.mp3" type="audio/mpeg">
        <source src="....ogg" type="audio/ogg">
        Votre navigateur ne supporte pas la balise audio.
      </audio>
      <hr>
      <br>
      <h4>Video youtube</h4>
      <br>
      <iframe src="https://www.youtube.com/embed/GyV2LoQncS0?start=8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <hr>


    </div>

    <div class="col-lg-8 text-left"> 
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
  </div>
</div>
     
     
     </main>
     
	 <footer class="container-fluid text-center fixed-bottom">
		<p>Site : <a href="">Valide Html</a> | <a href="">Valid css</a> | <a href="">Bootstrap</a></p>
		<p>© Copyright PLaisirVoyage</p>
	</footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>