<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EGZAMIN KOŃCOWY</title>
    </head>
    <body>
        
        <?php
        // ZADANIE 1    
        echo 'ZADANIE 1';

        $name = "PRZEMEK";
        $licz = strlen($name);

        echo '<br>';
        echo strrev($name);
        echo '<hr>';
        
        
        
        //ZADANIE 2
        echo 'ZADANIE 2';

        $kursanci = array(
            array('Artur','Kacprzak','A1','Łódź','29'),
            array('Pola','Kacprzak','A2','Warszawa','39'),
            array('Milena','Kliszko','A3','Londyn','21'),
            array('Kolega', 'Fajny', 'A4', 'Piła', '21'),
            array('Ula','Ola', '26541','A5','21')
        );
        echo '<br>';
        echo $kursanci[2][0].'<br>';
        echo $kursanci[0][2].'<br>';

        for($i=0;$i< count($kursanci);$i++){
            echo $kursanci[1][$i].' ';
        }
        echo '<hr>';
        
//        ZADANIE 3
        echo "ZADANIE 3";
        echo "<br>";
        
        ?>
        
         <form method="post">
            
            <input name="kwota_kredytu">Kwota kredytu<br>
            <input name="ilosc_rat">Ilość rat<br>
            <input name="oprocentowanie_roczne">Oprocentowanie roczne<br>
            <input type="submit" name="wyslij" value="Wyślij"><br>
    
        </form>

        <?php
        
//        Zadanie III (OOP) - Kalkulator kredytowy
//        Opracować skrypt do obliczenia rat przy spłacie kredytu mieszkaniowego w równych ratach miesięcznych
//        korzystając z wzoru:
//        
//        rata = (K * opm) / (1 - (1 / (1 - opm) do n))
//        gdzie:
//        
//        K - kwota kredytu
//        n - ilość rat
//        pr - oprocentowanie roczne
//        opm - pr / 12
//
//        Dane wprowadzane z formularz:
//         - kwota kredytu
//         - ilość rat
//         - oprocentowanie roczne
//
//        Wyświetlić użytkownikowi:
//         - kwotę miesięcznej raty
//         - kwotę kapitału do spłaty
//         - kwotę odsetek do zapłacenia
//
//        Całość kodu umieść na GIT (np. Github)
        
        if(isset($_POST['wyslij'])){
            
            $kwota_kredytu = $_POST['kwota_kredytu'];
            $ilosc_rat = $_POST['ilosc_rat'];
            $oprocentowanie_roczne = $_POST['oprocentowanie_roczne'];
            
            $rata_kredytu = new KlasaObliczanieRatKredytu();
            $rata_kredytu->funkcjaObliczanieRatKredytu($kwota_kredytu, $ilosc_rat, $oprocentowanie_roczne);

        }    

        class KlasaObliczanieRatKredytu {
            
            public function funkcjaObliczanieRatKredytu($kwota_kredytu, $ilosc_rat, $oprocentowanie_roczne){
                
                $opm = $oprocentowanie_roczne / 12;
//                rata = (K * opm) / (1 - (1 / (1 - opm) do n))
                $rata = ( $kwota_kredytu * $opm ) / ( 1 - ( 1 / pow( ( 1 - $opm ), $ilosc_rat) ) );
                
                echo "Twoja rata to: $rata";
                
            }
            
        }    
        echo '<hr>';
        // Zadanie 4
        echo "zadanie 4";
        
        
//Zadanie IV (SYMFONY2/3) - Książka kontaktowa
//Wykorzystując Symfony2 opracuj aplikację która będzie przechowywać informacje kontaktowe różnych osób.
//
//Pola książki adresowej:
// - imię
// - nazwisko
// - telefon
// - e-mail
//
//Funckjnalności:
// - wyświetlanie
// - dodawanie
// - usuwanie
// - edytowanie
//
//Całość kodu umieść na GIT (np. Github)
        ?>

    </body>
    
</html>
