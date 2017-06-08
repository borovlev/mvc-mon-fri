<?php

// $student = [
//     'name' => 'Mike',
//     'age' => 23,
//     'city' => 'Frankfurt'
// ];

// $json = json_encode($student);


// function a() {
//     echo 'a';
    
//     function b() {
//         echo 'b';
//     }
// }

// // a();
// b();


die;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <script>
        var json = '<?=$json?>';
        console.log(JSON.parse(json))
    </script>
</body>
</html>
