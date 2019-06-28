<?php 

if (isset($_POST['btn'])) {
  
/* $msg = "";
include_once "phpmailer/PHPMailer.php";
include_once "phpmailer/Exception.php";
include_once "phpmailer/SMTP.php";*/
	
	$meno = $_POST['meno'];
    $priezvisko = $_POST['priezvisko'];
    $obec = $_POST['obec'];
    $cislo = $_POST['cislo'];
    $email = $_POST['email'];
    $rodcis = $_POST['rodcis'];
	  $ciastka = $_POST['ciastka'];
	  $typ = $_POST['typ'];
    $mesprijem = $_POST['mesprijem'];
    $prijem = $_POST['prijem'];
    $suhlas1 = $_POST['suhlas1'];
    $suhlas2 = $_POST['suhlas2'];
    $predmet = "Pôžička z domeny topmoney.sk";
    $msg= '<div class="jumbotron">'. $_POST['ciastka'] . '<br>' . $_POST['typ'] .'<br>' . $_POST['prijem'] . '<br>' . $_POST['mesprijem'] . '<br>' . 
    $_POST['meno'] . '<br>' . $_POST['priezvisko'] . '<br>' . $_POST['obec'] . '<br>' . $_POST['cislo'] . '<br>' . $_POST['email'] . '<br>' . $_POST['rodcis'] . '<br>' . $_POST['suhlas1'] . '<br>' . $_POST['suhlas2'] . '</div>';

    if (isset($_POST['suhlas2']) && $_POST['suhlas2'] == 'odsuhlasene') {
      $suhlas2 == "odsuhlasene";
    } 
    else{ 
      $suhlas2 == "neodsuhlasene";
    }


    require('phpmailer/PHPMailerAutoload.php');
  
      $mail = new PHPMailer();
      $mail->CharSet = "UTF-8";
      $mail->addAddress('poziciamevam@poziciamevam.sk');
      $mail->setFrom($email);
      $mail->Subject = $predmet;
      $mail->isHTML(true);
      $mail->Body = $msg;

      if ($mail->send()) {
          header("Location: email_gen_msg.html");
      } else{
         //$msg = "Vyskitla sa chyba, skúste to znova!";
        echo 'nastala chyba';
       }
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Ponúkame výhodne pôžičky">
<meta name="robots" content="index, follow">
<meta name="keywords" content="pozicka,vyhodne,pozickaren">
<meta name="author" content="Global Graphic & Design">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>TOP MONEY</title>
<link rel="stylesheet" href="sablona.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script src="wow.min.js"></script>
<script>
  new WOW().init();
</script>
</head>
<body>

<div id="main">
    
<nav id="menu" class="navbar navbar-expand-md bg-light navbar-light fixed-top">
  <a class="navbar-brand" href="index.php">
        <h1 class="text-primary wow jackInTheBox animated">TOP MONEY</h1>
  </a>
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <!--<li class="nav-item">
        <a class="nav-link hvr-underline-from-center text-primary" href="index.php">Domov</a>
      </li>-->
    </ul>
  </div>  
</nav>

<div class="carousel-inner" id="carousel">
    <div class="carousel-inner active">
</div>
</div>
<br><br><br><br>
    <div class="container">
        <h2 class="text-center text-white" id="prvy">Pôžičky pre každého až do výšky 20.000 Eur! </h2>
        <h4 class="text-center text-white">Schvaľujeme 97% žiadostí! RPMN od 6,7% , Pôžičku môžete získať rýchlo a jednoducho.<br>Stačí, keď vyplníte krátky formulár.</h4>
    </div>
<br><br><br><br>

<form id="contact_form" method="post" class="form-horizontal" action="#">
<div class="container">
    <div class="row">
        <div class="col-md-8">
                <div class="row" id="form_row">
                    <div class="col-md-6">

                       <div class="form-group">
                            <label for="ciastka" class="text-white">
                                Požadovaná čiastka:</label>
                              <select id="subject" class="form-control" name="ciastka" required="required">
                                <option value="" selected="">Vybrať z možností:</option>
                                <option value="2000">2000</option>
                                <option value="3000">3000</option>
                                <option value="4000">4000</option>
                                <option value="5000">5000</option>
                                <option value="6000">6000</option>
                                <option value="7000">7000</option>
                                <option value="8000">8000</option>
                                <option value="9000">9000</option>
                                <option value="10000">10000</option>
                                <option value="11000">11000</option>
                                <option value="12000">12000</option>
                                <option value="13000">13000</option>
                                <option value="14000">14000</option>
                                <option value="15000">15000</option>
                                <option value="16000">16000</option>
                                <option value="17000">17000</option>
                                <option value="18000">18000</option>
                                <option value="19000">19000</option>
                                <option value="20000">20000</option>
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="ciastka" class="text-white">
                                Typ pôžičky:</label>
                              <select id="predmet" class="form-control" name="typ" required="required">
                                <option value="" selected="">Vybrať z možností:</option>
                                <option value="Pôžička na čokoľvek">Pôžička na čokoľvek</option>
                                <option value="Pôžička na refinancovanie">Pôžička na refinancovanie</option>
                                <option value="Pôžička bez registrov">Pôžička bez registrov</option>
                              </select>
                        </div>

                        <div class="form-group">
                            <label for="prijem" class="text-white">
                                Zdroj príjmu:</label>
                              <select id="predmet" class="form-control" name="prijem" required="required">
                                <option value="" selected="">Vybrať z možností:</option>
                                <option value="Zamestnaný na trvalý pracovný pomer">Zamestnaný na trvalý pracovný pomer</option>
                                <option value="Živnostník">Živnostník</option>
                                <option value="Majiteľ firmy">Majiteľ firmy</option>
                                <option value="Dôchodca">Dôchodca</option>
                              </select>
                        </div>


                        <div class="form-group">
                            <label class="text-white">
                                Priemerný mesačný príjem:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Mesačný príjem" name="mesprijem" required />
                            </div>
                        </div>
                              

                        <div class="form-group">
                            <label class="text-white">
                                Meno:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Váše Meno" name="meno" required />
                            </div>
                        </div>

                 </div>

                <div class="col-md-6">



                        <div class="form-group">
                            <label class="text-white">
                                Priezvisko:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Váše Priezvisko" name="priezvisko" required />
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="text-white">
                                Obec:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Obec" name="obec" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="text-white">
                                Telefonné číslo:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Telefónny kontakt"  name="cislo" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="text-white">
                                Email:</label>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Váš Email" name="email" required />
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="text-white">
                                Rodné číslo:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Rodné číslo bez lomítka" name="rodcis" required  />
                            </div>
                        </div>
                </div>


                        <div class="form-group" id="goright">
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="Odsuhlasene" name="suhlas1" required>&nbsp;&nbsp;&nbsp;<a href="suhlas.pdf" target="_blank" class="text-white">Súhlas so spracúvaním osobných údajov uvedených vo formulári</a>
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="Odsuhlasene" name="suhlas2">&nbsp;&nbsp;&nbsp;<a href="suhlas2.pdf" target="_blank" class="text-white">Súhlas s marketingovým oslovením prevádzkovateľom  topmoney.sk – spoločnosťou Diamond Side, spol., s.r.o.</a>
                                </label>
                        </div>

                    <div class="col-md-6">
                        <input type="submit" value="Odoslať" class="btn btn-primary pull-right" name="btn">
                    </div>

    </div>
</div>
</div>
</form>
</div>
<br><br>


<!-- Footer -->
<footer class="page-footer font-small bg-white lighten-3 pt-4">

    <div class="footer-copyright text-center py-3 text-primary">© 2019 Copyright:
      <a href="http://topmoney.sk" class="text-primary">topmoney.sk</a><br>
      code by <a href="https://globalgraphicdesign.eu">Global Graphic & Design</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>