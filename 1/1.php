<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $liczba = rand(1,20);
    $liczbab = rand(1,20);
    $liczbac = rand(1,20);
    $liczbad = rand(1,20);
    $liczbae = rand(1,20);
    $liczbaf = ($liczba+$liczbab+$liczbac+$liczbad+$liczbae);
    $liczbaab = ($liczbaf / 5);
    $liczbabb = ($liczba + 41);
    $liczbacb = ($liczbab + 41);
    $liczbadb = ($liczbac + 41);
    $liczbaeb = ($liczbad + 41);
    $liczbafb = ($liczbae + 41);
    $liczbaac = chr($liczbaab);
    $liczbabc = chr($liczbabb);
    $liczbacc = chr($liczbacb);
    $liczbadc = chr($liczbadb);
    $liczbaec = chr($liczbaeb);
    
    echo "<br>pierwsza liczba wylosowana to: $liczba";
    if($liczba%2==0) echo "<i>liczba jest parzysta</i>";   
    else echo "<i>liczba jest nieparzysta</i>";


    echo "<br>druga liczba wylosowana to: $liczbab";
    if($liczbab%2==0) echo "<i>liczba jest parzysta</i>";  
    else echo "<i>liczba jest nieparzysta</i>";


    echo "<br>trzecia liczba wylosowana to: $liczbac";
    if($liczbac%2==0) echo "<i>liczba jest parzysta</i>";  
    else echo "<i>liczba jest nieparzysta</i>";


    echo "<br>czwarta liczba wylosowana to: $liczbad";
    if($liczbad%2==0) echo "<i>liczba jest parzysta</i>";  
    else echo "<i>liczba jest nieparzysta</i>";


    echo "<br>piata liczba wylosowana to: $liczbae";
    if($liczbae%2==0) echo "<i>liczba jest parzysta</i>";  
    else echo "<i>liczba jest nieparzysta</i>";


    echo "<br>suma liczb to: $liczbaf </br>"


    ?>
</body>
</html>