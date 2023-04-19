<html>
<head>
<meta charset="UTF-8">
<title>Video on Demand</title>
<link rel="stylesheet" href="styl3.css">
</head>
<body>
<div id="banerlewy">
    <h1> Internetowa wypozyczalnia filmow</h1>
    </div>
<div id="banerprawy">
<table>
<tr>
<td>Kryminał</td>
<td>Horror</td>
<td>Przygodowy</td> 
</tr>
<tr> 
<td>20</td>
<td>30</td>
<td>20</td>
</tr>
</table>
</div>
<div id="polecamy">
<h3>Polecamy</h3>
<?php

$polaczenie = mysqli_connect('localhost', 'root', '', 'dane3');
$zapytanie1 = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN (18,22,23,25)";
$wynik1 = mysqli_query($polaczenie, $zapytanie1);
while($wiersz1 = mysqli_fetch_array($wynik1)){
    echo "<div class='film'>
            <h4>$wiersz1[0]. $wiersz1[1]</h4>
            <img src='$wiersz1[3]' alt='film'>
            <p>$wiersz1[2]</p>
          </div>";
}
?>


</div>
<div id="filmyfantastyczne">
<h3>filmy Fantastyczne</h3>
<?php

 $zapytanie2 = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12";
 $wynik2 = mysqli_query($polaczenie, $zapytanie2);
 while($wiersz2 = mysqli_fetch_array($wynik2)){
     echo "<div class='film'>
             <h4>$wiersz2[0]. $wiersz2[1]</h4>
             <img src='$wiersz2[3]' alt='film'>
             <p>$wiersz2[2]</p>
           </div>";
 }

?>



</div>



<div id="stopka">


<p>Strone wykonał:0000000</p>
    </div>


</body>
</html>