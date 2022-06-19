<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    
    // Array Default
    $murid = [
    "nama" => "Daffa Anaqi Farid",
    "kelas" => "10",
    "sekolah" => "SMKN 7 Jakarta"
    ];


    foreach ($murid as $key => $value) {
         echo $key . " : " . $value . "\n";
    } 


    //  Array Multidimension
    $students = [

        [  
            "nama" => "Daffa Anaqi Farid",
            "kelas" => "10",
            "sekolah" => "SMKN 7 Jakarta"
        ],

        [  
            "nama" => "Naufal Rizqi",
            "kelas" => "12",
            "sekolah" => "SMA Diponegoro"
        ],

        [  
            "nama" => "Seseorang",
            "kelas" => "11",
            "sekolah" => "SMA Jaya Makmur earth-838"
        ]

                
        ];
            echo $students[0]["nama"] . "\n"; // Yang muncul Daffa dulu / yang paling atas
            
            foreach ($students as $student) {
                var_dump ($student) . " : " . "<br>" ;
            } 

                
    ?>
</body>
</html>