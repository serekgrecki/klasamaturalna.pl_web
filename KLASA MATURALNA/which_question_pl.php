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
                 <?php include("PHP/chat.php");?>
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
        <a class="nav-link" href="strona-glowna">Strona główna</a>
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
        <a class="nav-link active" href="ktore-pytanie-moge-trafic">Które pytanie mogę trafić?</a>
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
        <a class="nav-link" href="strona-glowna">Strona główna</a>
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
        <a class="nav-link active" href="ktore-pytanie-moge-trafic">Które pytanie mogę trafić?</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="kontakt">Kontakt</a>
      </li>
    </ul>
  </div>
</nav>
      <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12" id="insideText">
      <div id="text" style="padding:1rem;">
<center>
      <!-- footer -->
     <div style="height:80px;margin:1rem;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- footer -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4454936709409872"
     data-ad-slot="3452454544"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
       <!-- footer -->
       </div>

     <fieldset class="form-group align-items-center">
     <div class="alert alert-success col-lg-4" role="alert" id="alert" style="visibility:hidden"></div>
      <div class="form-gorup">
          <label class="col-md-4 control-label" for="cmbStartTime">Czas rozpoczęcia pracy komisji</label>
          <div class="col-md-4">
              <select id="cmbStartTime" name="cmbStartTime" class="form-control">
                  <option value="9">9:00</option>
                  <option value="9">9:15</option>
                  <option value="9">9:30</option>
                  <option value="9">9:45</option>
                  <option value="10">10:00</option>
                  <option value="10">10:15</option>
                  <option value="10">10:30</option>
                  <option value="10">10:45</option>
                  <option value="11">11:00</option>
                  <option value="11">11:15</option>
                  <option value="11">11:30</option>
                  <option value="11">11:45</option>
                  <option value="12">12:00</option>
                  <option value="12">12:15</option>
                  <option value="12">12:30</option>
                  <option value="12">12:45</option>
                  <option value="13">13:00</option>
                  <option value="13">13:15</option>
                  <option value="13">13:30</option>
                  <option value="13">13:45</option>
                  <option value="14">14:00</option>
                  <option value="14">14:15</option>
                  <option value="14">14:30</option>
                  <option value="14">14:45</option>
                  <option value="15">15:00</option>
                  <option value="15">15:15</option>
                  <option value="15">15:30</option>
                  <option value="15">15:45</option>
                  <option value="16">16:00</option>
                  <option value="16">16:15</option>
                  <option value="16">16:30</option>
                  <option value="16">16:45</option>
                  <option value="17">17:00</option>
                  <option value="17">17:15</option>
                  <option value="17">17:30</option>
                  <option value="17">17:45</option>
                  <option value="18">18:00</option>
                  <option value="18">18:15</option>
                  <option value="18">18:30</option>
                  <option value="18">18:45</option>
              </select>
          </div>
      </div>
      <br>
      <br>
       <div class="form-gorup">
          <label class="col-md-4 label-control" for="cmbNumberOnList">Wchodzę jako</label>
          <div class="col-md-4">
              <select id="cmbNumberOnList" name="cmbNumberOnList" class="form-control">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
              </select>
          </div>
         </div>
      <br><br>
         <button id="send" type="submit" class="btn btn-success" onclick="Select()">
         Wyślij</button>
       </fieldset>
      </center>
          </div>
           <!-- footer -->
     <div style="height:80px;margin:1rem;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- footer -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4454936709409872"
     data-ad-slot="3452454544"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
       </div>
  </section>
   <script src="JS/question_calculator.js"></script>
   <script src="node_modules/jquery/dist/jquery.min.js"></script>
   <script src="node_modules/tether/dist/js/tether.min.js"></script>
   <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
   <script src="JS/timer.js"></script>
   <script>
        $(window).load(function() {
            document.getElementById("alert").style.visibility = "hidden";
        });
        </script>
</body>
</html>
