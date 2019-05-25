<!DOCTYPE html>
<html>
 <head>
  <title>Bestellformular TAI-Abschluss-Shirt</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php
    $vorname = "";
    $name = "";
    $strasse = "";
    $plz = "";
    $wohnort = "";
    $email = "";
    $muster = "#^[0-9]{5}$#";
    $anrede = "Herr";
    $groesse = "M";
    $zahlungsweise = "Vorkasse";
    $fehlermeldungplz = "";
	  $fehlermeldungemail = "";
    $Fehlermerker = false;

    if(isset($_POST['Absenden']))
    {
      $anrede = $_POST['Anrede'];
      $vorname = $_POST['Vorname'];
      $name = $_POST['Name'];
      $strasse = $_POST['Strasse'];
      $wohnort = $_POST['Wohnort'];
      $groesse = $_POST['Groesse'];
      $zahlungsweise = $_POST['Zahlungsweise'];

      $email = $_POST['Email'];

      $plz = $_POST['PLZ'];
      if(!preg_match($muster, $plz))
      {
        $fehlermeldungplz = "Bitte geben Sie eine gültige PLZ ein!";
        $Fehlermerker = true;
      }

  	  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  	  {
  		  $fehlermeldungemail = "Bitte geben Sie eine gültige Email ein!";
  		  $Fehlermerker = true;
  	  }

      if($Fehlermerker == false)
      {
        exit ('<span id="anzexit">Bestellung erfolgreich.</span>');
      }
    }

   ?>
 </head>
 <body >
   <div class ="Header" width="1000px">
     <h1><span id="abstand"><img src="laptop_symbol.png" alt="Laptop" width="60" height="60"></span>Die <span id="TAI">TAI</span>: Lernen für die Zukunft</h1>
   </div>
	<form class="left" name="Bestellung" action="" method="post">

	   <h3>Bestellformular</h3>
	   Gewähltes Motiv:  <span id="GameOver">GAME OVER!</span> <br>
	   <p><span id="Warnung">Mit * gekennzeichnete Felder müssen ausgefüllt werden</span></p>

     <label for="anrede">Anrede</label>
	   <input type="radio" id="anrede" name="Anrede" value="Herr"<?php echo $anrede == "Herr" ? "checked" : ""; ?>>Herr
	   <input type="radio" name="Anrede" value="Frau" <?php echo $anrede == "Frau" ? "checked" : "" ; ?>>Frau
	   <br>

     <label for="Vorname">Vorname*</label>
	   <input type="text" name="Vorname" id="Vorname" value="<?php echo $vorname; ?>" maxlength="40" size="40" required>
	   <br>

     <label for="Name">Name*</label>
	   <input type="text" name="Name" maxlength="40" id="Name" size="40" value="<?php echo $name; ?> " required>
	   <br>

     <label for="Strasse">Strasse/Hsnr.*</label>
	   <input type="text" name="Strasse" id="Strasse" maxlength="40" size="40" value="<?php echo $strasse; ?>" required>
	   <br>

     <label for="PLZ">PLZ*</label>
	   <input type="text" name="PLZ" id="PLZ" maxlength="5" size="5" value="<?php echo $plz; ?>" required><?php echo $fehlermeldungplz;?>
	   <br>

     <label for="Wohnort">Wohnort*</label>
	   <input type="text" id="Wohnort" name="Wohnort" maxlength="40" value="<?php echo $wohnort; ?>" size="40" required>
	   <br>

     <label for="Email"> Email*</label>
	   <input type="email" id="Email" name="Email" maxlength="40" size="40" value="<?php echo $email; ?>" required><?php echo $fehlermeldungemail;?>
	   <br>

     <label for="Farbe"> Farbe </label>
	   <select>
	   <option>Schwarz</option>
	   <option>Weiß</option>
	   <option>Blau</option>
	   <option>Grün</option>
	   <option>Grau</option>
	   </select>
	   <br>

    <label for="groesse"> Größe </label>
	  <select>
	   <option name="Groesse" value="S" <?php echo $groesse == "S" ? "selected" : ""; ?>>S</option>
	   <option name="Groesse" value="M" <?php echo $groesse == "M" ? "selected" : ""; ?>>M</option>
	   <option name="Groesse" value="L" <?php echo $groesse == "L" ? "selected" : ""; ?>>L</option>
	   <option name="Groesse" value="XL" <?php echo $groesse == "XL" ? "selected" : ""; ?>>XL</option>
	   </select>
	   <br>

     <label for="Zahlungsweise"> Zahlungsweise</label>
	   <input type="radio" id="Zahlungsweise" name="Zahlungsweise" value="Vorkasse" <?php echo $zahlungsweise == "Vorkasse" ? "checked" : ""; ?>>Vorkasse<br>
     <label></label>
	   <input type="radio" name="Zahlungsweise" value="Nachname" <?php echo $zahlungsweise == "Nachname" ? "checked" : ""; ?>>Nachnahme<br>
     <label></label>
	   <input type="radio" name="Zahlungsweise" value="Paypal" <?php echo $zahlungsweise == "Paypal" ? "checked" : ""; ?>>Paypal<br>
     <label></label>
	   <input type="radio" name="Zahlungsweise" value="Sofortüberweisung" <?php echo $zahlungsweise == "Sofortüberweisung" ? "checked" : ""; ?>>Sofortüberweisung<br>
	   <br>
	   <br>

     <label></label>
	   <input id="blue" type="submit" name="Absenden" value="absenden"> <input id="blue" type="reset" value="zurücksetzen">
	   <br><br>
	</form>
  <div class="footer">
    tai.bs-lif.de
  </div>
  </body>
</html>
