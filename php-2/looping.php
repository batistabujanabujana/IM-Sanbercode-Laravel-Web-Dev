<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Looping</title>

</head>

<body>

    <h1>Berlatih Looping</h1>    
     <?php 

        echo "<h3>Soal No 1 Looping I Love PHP</h3>";

        /* 

            Soal No 1 

            Looping I Love PHP

            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) 

            dan Looping yang ke dua menurun (Descending).             
Output: 

            LOOPING PERTAMA

            2 - I Love PHP

            4 - I Love PHP

            6 - I Love PHP

            8 - I Love PHP

            10 - I Love PHP

            12 - I Love PHP

            14 - I Love PHP

            16 - I Love PHP

            18 - I Love PHP

            20- I Love PHP  

            LOOPING KEDUA

            20 - I Love PHP

            18 - I Love PHP

            16 - I Love PHP

            14 - I Love PHP

            12 - I Love PHP

            10 - I Love PHP

            8 - I Love PHP

            6 - I Love PHP

            4 - I Love PHP

            2 - I Love PHP

        */      
        echo "<b>LOOPING PERTAMA</b><br>";
        function Pertama($Masukan){ 
            for($i=2; $i <=20 ; $i+=2){
                echo $i.$Masukan. "<br>";
            }

        }  

        Pertama(" - I Love PHP");
            
        echo "<br><br><b>LOOPING KEDUA</b><br>";
         function Kedua($kedua){ 
            for($i=20; $i >=2 ; $i-=2){
                echo $i.$kedua. "<br>";
            }

        }  

        Kedua(" - I Love PHP");  
        echo "<br>";
        /* 

            Soal No 2

            Loop Associative Array

            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. 

            Setiap item memiliki key yaitu : id, name, price, description, source. 

            

            Output: 

            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 

            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 

            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 

            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg )             
        Jangan ubah variabel $items        */

        echo "<h3>Soal Nomer 2</h3><br>";
        $items = [

            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 

            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],

            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],

            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']

        ];

        foreach ($items as $data) {

            $barang = [
                "id" => $data[0],
                "name" => $data[1],
                "price" => $data[2],
                "description" => $data[3],
                "source" => $data[4]
            ];

            print_r($barang);
            echo "<br><br>";
        }


        // Output: 

        

        echo "<h3>Soal No 3 Asterix </h3>";

        /* 

            Soal No 3

            Asterix 5x5

            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 

            Output: 

            * 

            * * 

            * * * 

            * * * * 

            * * * * *

        */

       
        for($i=0;$i<5;$i++){
            for($j=0; $j<=$i;$j++){
                echo "*";
            }  
            echo "<br>";
        }


        echo "<br>";        

    ?></body>

</html>