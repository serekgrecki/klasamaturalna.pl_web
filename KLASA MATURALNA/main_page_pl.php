<!DOCTYPE html>
<html lang="pl">
<head>
<title>Klasa maturalna</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="CSS/style_index.css">
<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<section id="covermain">
         <nav id="navBar" class="col-md-3 offset-md-9 col-lg-3 offset-lg-9 hidden-sm-down hidden-xs-down">
  		<ul id="menu">
               			<center>
  		    <li><a href="#nav-main" class="btn btn-success" role="button">&uarr; Wróć na góre</a></li><BR>
  		    <li>Osób online : </li>
  			<li><?php include("online.php"); ?></li>
  			<br>
  			<li>CZAT</li>
                 <?php include("PHP/chat.php"); ?>
           <br>
           <h3>Znajdź nas!</h3>
            <table>
                <tr>
                    <td style="background:white;"><img src="IMG/android.png" width="60" height="60"></td>
                    <td>&nbsp;</td>
                    <td><a target="_blank" href="https://www.facebook.com/Matura-ustna-Polski-Angielski-2017-138961329930705/"><img src="IMG/facebook.png" width="60" height="60"></a></td>
                </tr>
            </table>
            </center>
  		</ul>  	
       </nav>	
      <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" id="nav-main">
     <div class="pos-f-t hidden-md-up">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-inverse p-4">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="strona-glowna">Strona główna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="materialy-do-pobrania">Materiały do pobrania</a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Matura 2015/2016</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="matura-2015">Matura 2015</a>
          <a class="dropdown-item" href="matura-2016">Matura 2016</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="matura-2017">Matura 2017</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="losuj-pytanie">Losuj pytanie!</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="ktore-pytanie-moge-trafic">Które pytanie mogę trafić?</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="kontakt">Kontakt</a>
      </li>
    </ul>
    </div>
  </div>
  <nav class="navbar navbar-inverse bg-inverse">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
 
  <div class="collapse navbar-collapse hidden-sm-down" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="strona-glowna">Strona główna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="materialy-do-pobrania">Materiały do pobrania</a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Matura 2015/2016</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="matura-2015">Matura 2015</a>
          <a class="dropdown-item" href="matura-2016">Matura 2016</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="matura-2017">Matura 2017</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="losuj-pytanie">Losuj pytanie!</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="ktore-pytanie-moge-trafic">Które pytanie mogę trafić?</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="kontakt">Kontakt</a>
      </li>
    </ul>
  </div>
</nav>
      <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12" id="insideText">
      <div id="text" style="padding:1rem;">
      <h1 style="text-align:left;border-bottom: 1px solid white;">Witaj!</h1>
      <h4>Witaj w części poświęconej egzaminowi ustnemu z języka polskiego, żeby zmienić na języka angielski naciśjnij flagę Angli w górnym prawym rogu.</h4>
      <br>
      <h1 style="text-align:left;border-bottom: 1px solid white;">O nas</h1>
      <h4>Strona poświęcona maturzystom. Na bieżąco będą publikowane materiały do nauki oraz w czasie trwania matur oczywiście pytania, które postaramy się jak najszybciej opracować! A już teraz zapraszamy do zakładki <a href="random_question_page_pl.php">„Losuj pytanie!"</a> w której przekonasz się jak dobrze jesteś przygotowany do egzaminu ustnego z języka POLSKIEGO.</h4>
      <br>
      <h1 style="text-align:left;border-bottom: 1px solid white;">Pomóżmy sobie!</h1>
      <h4>Zapraszamy do wysyłania pytań, które trafiały się wam na egzaminie ustnym z języka polskiego. Pomoże to nam jak najszybciej poznać, opracować i opublikować te pytania dla pozostałych maturzystów! Dane kontaktowe w zakładce <a href="contact_pl.php">Kontakt</a></h4>
      <br>
      <h1 style="text-align:left;border-bottom: 1px solid white;">TERMINARZ MATURZYSTY</h1>
      <h4 style="text-align:left;">4 MAJA, CZWARTEK - POLSKI PISEMNY PODSTAWA + ROZSZERZENIE</h3>
      <H4 style="text-align:left;">5 MAJA, PIATEK - MATEMATYKA PODSTAWA</H3>
      <H4 style="text-align:left;">8 MAJA, PONIEDZIAŁEK - ANGIELSKI PISEMNY PODSTAWA + ROZSZERZENIE</H3>
      <h4 style="text-align:left;">POLSKI USTNY : MAJ 8 - 20</h3>
      <h4 style="text-align:left;">ANGIELSKI USTNY : MAJ 4 - 26</h3>
      <br>
      </div>
      <div style="height:80px;margin:1rem;">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- footer --><!-- footer -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4454936709409872"
     data-ad-slot="3452454544"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
  </section>
   <script src="node_modules/jquery/dist/jquery.min.js"></script>
   <script src="node_modules/tether/dist/js/tether.min.js"></script>
   <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
   <script src="JS/timer.js"></script>
</body>
</html>
