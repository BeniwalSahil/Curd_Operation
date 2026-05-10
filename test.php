<?php 
// echo "<pre>";
// $fruits = array("apple", "banana" , "cherry" );
// $fruitss = array("apples", "bananas" , "chersry" );
// // $bew  = "a";
// // array_splice($fruits,1 , 0, $bew);
// $ss = array_merge($fruits,$fruitss);
// print_r($ss);
// // $car = array("apple" => "AP", "banana" => "BA" , "cherry" => "CH" );
// // $car += ["Graphs" => "GR"];


// // print_r($car);

// // $fruits = array("apple", "banana" , "cherry" );
// // $new_a = array_push($fruits,"E" , "F" ,"G" );
// // $new_a = array_unshift($fruits,"E" , "F" ,"G" );
// // print_r($fruits);
// // var_dump($new_a);

// $cars = array("Volvo", "BMW", "Toyota");
// array_splice($cars, 1, 1);
// var_dump($cars);    

// $cars = array("Volvo", "BMW", "Toyota");
// array_splice($cars, 1, 2);
// var_dump($cars);

// $cars = array("Volvo", "BMW", "Toyota");
// unset($cars[1]);
// var_dump($cars);

// $cars = array("Volvo", "BMW", "Toyota");
// unset($cars[0],$cars[1]);
// var_dump($cars);

// $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
// unset($cars["model"]);
// var_dump($cars);

// $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
// $newarray = array_diff($cars, ["Mustang", 1964]);
// var_dump($newarray);

// $cars = array("Volvo", "BMW", "Toyota");
// array_pop($cars);
// var_dump($cars);

// $cars = array("Volvo", "BMW", "Toyota");
// array_shift($cars);
// var_dump($cars);

// $cars = array("Volvo", "BMW", "Toyota");
// sort($cars);
// var_dump($cars);

// $cars = array("Volvo", "BMW", "Toyota");
// rsort($cars);
// var_dump($cars);

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// asort($age);
// var_dump($age);

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// ksort($age);
// var_dump($age);

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// arsort($age);
// var_dump($age);

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// krsort($age);
// var_dump($age);

// $cars = array(
//     array("Swift",22,15),
//     array("Alto",18,13),
//     array("Baleno",28,20),
//     array("Brezza",238,203),
// );
// var_dump($cars);

// for($row = 0;$row < 4; $row++){
//     echo "<p><b>Row Number</b>$row</p>";
//     echo "<ul>";
//         for($col = 0; $col < 3; $col++){
//             echo "<li>" .$cars[$row][$col]."</li>";
//         }
//     echo "</ul>";
// }

// echo    "<table>
//             <tr>
//                 <th>Brand</th>
//                 <th>In Stock</th>
//                 <th>Sold</th>
//             </tr>
//         <table>";

//         foreach($cars as $car){
//             echo "<tr>";
//             foreach($car as $c){
//                 echo "<td>".$c."</td>";
//             }
//             echo "</tr>";
//         }
    
// echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
// echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
// echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
// echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

// $x = 4;
// function myTest(){
//     global $x;
//     echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// $x = 10;
// $y = 20;

// function result() {
//   $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// result();
// echo $z;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Search</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        width: 400px;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        font-size: 16px;
    }

    ul {
        list-style: none;
    }

    li {
        padding: 10px;
        background: #eee;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .not-found {
        color: red;
        text-align: center;
        display: none;
    }
    </style>

</head>

<body>

    <div class="container">
        <h2>Live Search</h2>
        <input type="text" id="search" placeholder="Search Name...." onkeyup="liveSearch()">
        <ul id="userList">
            <li>John Doe</li>
            <li>Jane Smith</li>
            <li>Michael Johnson</li>
            <li>Emily Davis</li>
            <li>David Wilson</li>
        </ul>
        <p class="not-found" id="notFound"></p>
    </div>
    <script>
    function liveSearch() {
        const searchInput = document.getElementById('search').value.toLowerCase();
        const userList = document.getElementById('userList');
        const users = userList.getElementsByTagName('li');
        let found = false;

        for (let i = 0; i < users.length; i++) {
            const userName = users[i].textContent.toLowerCase();
            if (userName.includes(searchInput)) {
                users[i].style.display = '';
                found = true;
            } else {
                users[i].style.display = 'none';
            }
        }

        const notFoundMessage = document.getElementById('notFound');
        if (!found) {
            notFoundMessage.textContent = 'No results found';
            notFoundMessage.style.display = 'block';
        } else {
            notFoundMessage.style.display = 'none';
        }
    }
    </script>

</body>

</html>