<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <p id="display"></p>
    <h2 id="demo"></h2>
    <script>
    function myfunction() {
        document.getElementById("display").innerHTML = "Hello World";
    }
    myfunction();
    let car = ["BMW", "Volvo", "Saab", "Ford"];
    let text = "";

    for (let i = 0; i < car.length; i++) {
        console.log(text += car[i] + "<br>");
    }

    document.getElementById("display").innerHTML = text;
    let next = "";
    for (let j = 0; j < car.length; j++) {
        next += car[j] + "<br>";
    }
    document.getElementById("demo").innerHTML = next;


    const numbers = [45, 4, 9, 16, 25];
    let suam = "";
    let i = 3;
    for (; i < numbers.length; i++) {
        suam += numbers[i] + "<br>";
    }
    document.getElementById("demo").innerHTML = "The sum is:" + suam;
    </script>
</body>

</html>