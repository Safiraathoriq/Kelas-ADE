<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Belajar BE</title>
</head>
<body>
    <h1>Latihan Array</h1>
    <?php 
    $employee = [
        'name' => 'Safira Salsabila Athoriq',
        'email' => 'safiraathoriq@gmail.com',
        'phone' => '081459182569',
        'hobbies' => ['drawing', 'reading a book'],
      ];

    echo "Hai Perkenalkan nama saya ". $employee['name']; 
    echo "<br>";
    echo "Hobi saya yaitu ".$employee['hobbies'][0];
    echo " dan saya juga suka ".$employee['hobbies'][1];
    echo "<br>";
    echo "Kalian bisa hubungi saya lewat ".$employee['email'];
    echo " atau ".$employee['phone'];
    ?>