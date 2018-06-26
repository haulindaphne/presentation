<?php

$destinaire = 'haulindaphne@gmail.com';
$sujet = "Demande de stage";

    
if($_POST)
{  
    $society = ($_POST['society']);
    $nom = ($_POST['nom']);
    $mail = ($_POST['mail']);
    $message = ($_POST['message']);



    if(!empty($_POST['society']) AND !empty($_POST['nom']) AND !empty($_POST['mail'])) {
        extract($_POST);

        header("Location: /Presentation-cv/thanks.php");
    }
    else 
    {
        echo "Merci de remplir les champs du formulaire!";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Haulin Daphné">
    <title>Présentation</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/resume.min.css" rel="stylesheet">
    <link href="css/presentation.css" rel="stylesheet">
    <link href="css/animation.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-none d-lg-block"></span>
        <span class="d-none d-lg-block"></span>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projets">Projets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#goals">Objectifs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#who">About me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="home"><!-- page d'accueil -->
        <div class="my-auto">
            <ul id="textAnim1" class="textAnim1 hidden">
                <li>B</li>
                <li>o</li>
                <li>n</li>
                <li>j</li>
                <li>o</li>
                <li>u</li>
                <li>r</li>
            </ul>
            <ul id="textAnim2" class="textAnim2 hidden">
                <li>J</li>
                <li>e</li>
                <li> </li>
                <li>m</li>
                <li>'</li>
                <li>a</li>
                <li>p</li>
                <li>p</li>
                <li>e</li>
                <li>l</li>
                <li>l</li>
                <li>e</li>
            </ul>
            <ul id="textAnim3" class="textAnim3 hidden">
                <li>D</li>
                <li>a</li>
                <li>p </li>
                <li>h</li>
                <li>n</li>
                <li>é</li>
            </ul>
            <ul id="textAnim4" class="textAnim4 hidden">
                <li>J</li>
                <li>e</li>
                <li> </li>
                <li>s</li>
                <li>u</li>
                <li>i</li>
                <li>s</li>
            </ul>
            <ul id="textAnim5" class="textAnim5 hidden">
                <li>J</li>
                <li>u</li>
                <li>n </li>
                <li>i</li>
                <li>o</li>
                <li>r</li><br><br>
                <li></li>
                <li>W</li>
                <li>e</li>
                <li>b</li>
                <li></li><br><br>
                <li>D</li>
                <li>e</li>
                <li>v</li>
                <li>e</li>
                <li>l</li>
                <li>o</li>
                <li>p</li>
                <li>e</li>
                <li>r</li><br>
            </ul>
            <div id="image">
                <img id="becode" alt="logo Becode" src="img/becode.png">
            </div>
            <ul id="text" class="text hidden">
                <li>I</li>
                <li>'</li>
                <li>m</li>
                <li></li>
                <li>l</li>
                <li>o</li>
                <li>o</li>
                <li>k</li>
                <li>i</li>
                <li>n</li>
                <li>g</li>
                <li></li>
                <li>f</li>
                <li>o</li>
                <li>r</li>
                <li></li>
                <li>a</li>
                <li>n</li>
                <li></li>
                <li>I</li>
                <li>n</li>
                <li>t</li>
                <li>e</li>
                <li>r</li>
                <li>n</li>
                <li>s</li>
                <li>h</li>
                <li>i</li>
                <li>p</li>
            </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5" id="capa">SKILLS</h2>
          <div class="subheading mb-3">
              <div id="skills">
                  <table>
                    <tr>
                        <td><img class="carre" src="img/carre.png"></td>
                        <td><p>HTML 5</p></td>
                      </tr>
                      <tr>
                        <td><img class="carre" src="img/carre.png"></td>
                        <td><p>CSS 3</p></td>
                     </tr>
                     <tr>
                        <td><img class="carre" src="img/carre.png"></td>
                        <td><p>SASS</p></td>
                     </tr>
                     <tr>
                        <td><img class="carre" src="img/carre.png"></td>
                        <td><p>PHP</p></td>
                     </tr>
                     <tr>
                        <td><img class="carre" src="img/carre.png"></td>
                        <td><p>JAVASCRIPT</p></td>
                     </tr>
                     <tr>
                        <td><img class="carre" src="img/carre.png"></td>
                        <td><p>JQUERY</p></td>
                     </tr>
                     <tr>
                        <td><img class="carre" src="img/carre.png"></td>
                        <td><p>WORDPRESS</p></td>
                     </tr> 
                     <tr>
                      <td><img class="carre" src="img/carre.png"></td>
                      <td><p>BOOTSTRAP</p></td>
                   </tr>                                                            
                                                         
                  </table>
              </div>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="projets">
        <div class="my-auto">
          <h2 class="mb-5" id="skillProjet">Projets</h2>
          <div class="subheading mb-3">
            <fieldset>
              <legend id="first">Refonte site "Foodog" - Exercice WORDPRESS</legend>
                <a href="http://leersmathieu.com/becode/MADS-foodog/wordpress/"><img id="foodog" src="img/foodog.png" width="200" height="100"></a>
            </fieldset>
            <fieldset>
              <legend id="second">Refonte site "Mission Locale Schaerbeek" - Exercice BOOTSTRAP</legend>
                <a href=""><img id="milocs" src="img/milocs.png" width="200" height="100"></a>
                <p id="cours">En cours</p>
            </fieldset>
            <fieldset>
              <legend id="third">Refonte site "Musée de la Photographie" de Mont-sur-Marchienne</legend>
                <a href="http://www.museephoto.be/"><img id="milocs" src="img/photo.png" width="200" height="100"></a>
                <p id="cours">En cours</p>
            </fieldset>
          </div>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="goals">
        <div class="my-auto">
          <h2 class="mb-5" id="objectifs">Objectifs</h2>

        <div class="resume-item d-flex flex-column flex-md-row mb-5">
          <div class="resume-content mr-auto" id="objectContent">
            <h3 class="mb-0">De la formation à l'entreprise</h3>
            <p class="object">Parfaire les connaissances acquises pendant la formation
            <img id="becodeObject" src="img/becode.png">.</p>
            <p class="object">Continuez à apprendre des nouveaux langages(nodejs, Angular, ...).</p>
            <p class="object">Effectuer un stage orienté Front-end.</p>
            <p class="object">Partagez ma créativité.</p>
          </div>
          <div class="resume-date text-md-right">
          </div>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="who">
        <div class="my-auto">
            <h2 class="mb-5">About me</h2>
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <p>Etre Junior Web Developer, c'est relever des défis tous les jours. Depuis janvier 2018, c'est devenu mon quotidien. <br /><br />
                Après plus de 10ans dans le secteur touristique, j'ai entamé une reconversion professionnelle et trouvé ma voie dans le secteur digital.<br /><br />
                Aujourd'hui je recherche un stage de 1 à 3 mois pour continuer sur ma lancée et non terminer ma formation ; celle-ci ne finissant jamais...</p>
            </div>
            <p>&nbsp;</p>
            <div class="resume-date text-md-right">

            <ul class="list-inline list-icons">
              <li class="list-inline-item">
                <a href="https://github.com/haulindaphne"><img src="img/github-logo.png" width="60" height="60"/></a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/haulindafke"><img src="img/logo-twitter.png" height="50"/></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/daphnehaulin/"><img src="img/linkedin-logo.png" height="50"/></a>
              </li>
            </ul>
           </div>
          </div>            
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="contact"><!--Page 7 -->
        <div class="my-auto">
          <h2 class="mb-5" id="contTitle">Contact</h2>

          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputlastName1" name="nom" aria-describedby="lastNameHelp" placeholder="Entrez votre nom">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputFirstName1" name="society" aria-describedby="firstNameHelp" placeholder="Nom de votre société">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputMail1" name="mail" aria-describedby="mailHelp" placeholder="Entrez votre e-mail">
            </div>
            <div class="form-group">
              <textarea type="text" class="form-control" id="exampleInputMessage1" name="message" aria-describedby="messageHelp" placeholder="Laissez votre message"></textarea>
            </div>
            <button type="submit" class="btn button-submit" name="send">Envoyer</button>
          </form>
          <?php
            if(isset($_POST['send'])){
                $form_mail = "De la Société : $society\n";
                $form_mail = "Personne de contact : $nom\n";
                $form_mail .= "Email : $mail\n";
                $form_mail .= "Message : $message\n";
            
                mail("$destinaire", "$sujet", "$form_mail", "From: $mail");
            }
        ?>

        </div>
      </section>


    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>
    <script src="js/app.js"></script>

  </body>

</html>
