
<?php
function setup($titre, $icone_connexion) {
    echo '<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>'.$titre.'</title>
        <link rel="icon" href="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>';
}

function pageheader(){
	echo "<div class='jumbotron'>

    <h1><strong>Bibliotheque Sainte Jeanne-d'Arc</strong>
    <img src='biblio.png' alt='Italian Trulli'></h1>
    <p>Bienvenue sur notre fabuleuse bibliothèque interactive.</p>
</div>";
}

function pagefooter() {
    echo '<footer class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Bibliotheque Sainte Jeanne-d Arc<br>
                Mail : Biblio-st-jeanne@gmail.com<br>
                Date et heure : '.date("d/m/Y H:i:s").'</p>
            </div>
            <div class="col-md-6 text-right">
              
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>';
}
function pagenavbar($pageactive) {
    echo '<nav class="navbar navbar-expand-sm bg-light navbar-light">
		  <ul class="navbar-nav">
		    <li class="nav-item <?php if ($pageactive == 'page01') {echo 'active';} ?>">
		      <a class="nav-link" href="page01.php">Acceuil</a>
		    </li>
		    
		   
		    <li class="nav-item<?php if ($pageactive == 'page02') {echo 'active';} ?>">
		      <a class="nav-link" href="page02.php">Informations</a>
		    </li>
		    <li class="nav-item <?php if ($pageactive == 'page02') {echo 'active';} ?>">
		      <a class="nav-link" href="page02.php">Formulaire</a>
		    </li>
		    <li class="nav-item <?php if ($pageactive == 'page02') {echo 'active';} ?>">
		      <a class="nav-link" href="#">Fichiers</a>
		    </li>
		  </ul>
		</nav>
';
}


?>
