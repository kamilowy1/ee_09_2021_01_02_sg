<!DOCTYPE html>
<head> 
    <meta charset="utf-8"/>
    <html lang="pl">
<title> piłka nożna </title>
<link rel="stylesheet" type="text/css" href="styl2.css"/>
</head>

<body>
<div id="baner">
<h3> Reprezentacja polski w piłce nożnej </h3>
<img src="obraz1.jpg" alt="reprezentacja"/>
</div>

    <div id="lewy">
<form action="" method="post">
    <select name="wybor">
        <option value="1">Bramkarze</option>
        <option value="2">Obrońcy</option>
        <option value="3">Pomocnicy</option>
        <option value="4">Napastnicy</option>
    </select>
    <button type="submit">Zobacz</button>
</form>
<img src="zad2.png" alt="piłka"/>
<p> Autor:000000000 </p>


    </div>

       <div id="prawy">
<?php
//utworzenie zmiennych 
$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "egzamin2";

$conn = mysqli_connect($server,$user,$passwd,$dbname);
/*
if (!$conn) {
    die ("fatal error".mysqli_error($conn));
} echo "jest okej";
*/

if (!empty($_POST['wybor'])) {
    $poz = $_POST['wybor'];
    $zapytanie = "SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id='$poz'";
    $sql=mysqli_query($conn,$zapytanie);

while ($wynik = mysqli_fetch_row($sql)) {
    
    echo "<ol>";
    echo "<li>" .$wynik[0] . " ". $wynik[1] ;
    echo "</li>";
    echo "</ol>";
    

}
}

?>
       </div>

         <div id="główny">
         <h3> Liga mistrzów </h3>
         </div>

            <div id="liga">
<?php


$zapytanie2 = "SELECT zespol, punkty, grupa FROM liga ORDER BY punkty DESC";
$sql2 = mysqli_query($conn,$zapytanie2);
while ($wynik2 = mysqli_fetch_row($sql2)) {
    echo "<div class='klasa'>";
    echo "<h2>".$wynik2[0]."</h2>";
    echo "<h1>".$wynik2[1]."</h2>";
    echo "grupa:".$wynik2[2];
    echo "</div>";
}
mysqli_close($conn);

?>
            </div>
</body>
</html>