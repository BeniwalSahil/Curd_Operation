<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <button onclick="document.getElementById('game').innerHTML=gameing(1,10)">Click Me</button> -->
    <p id="game"></p>
    <p id="adrtes"></p>

    <script>
    let d = new Date();
    let ts = d.toString();;
    document.getElementById("adrtes").innerHTML = ts;
    let text = "W#SCHOLLS BNE";

    // let n = text.match(/W#SCHOLLS/);
    // let n = text.replace(/W#SCHOLLS/i, "SAHIL BENIWAL");
    let n = text.search(/W#SCHOLLS/);

    document.getElementById("game").innerHTML = n;

    function gameing(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }

    // document.getElementById("math").innerHTML = game(getRndInteger(0, 10));

    // document.getElementById("math").innerHTML = Math.random(4, 3);

    // document.getElementById("math").innerHTML = Math.cos(0 * Math.PI / 180);

    // document.getElementById("math").innerHTML = Math.min(0, 150, 30, 20, -8, -200);

    // document.getElementById("math").innerHTML = Math.sign(0);

    // document.getElementById("math").innerHTML = Math.trunc(4.9);

    // document.getElementById("math").innerHTML = Math.floor(4.9);

    // document.getElementById("math").innerHTML = Math.ceil(4.1);

    // document.getElementById("math").innerHTML = Math.round(4.4);

    // document.getElementById("math").innerHTML = Math.PI;

    // document.getElementById("math").innerHTML = Math.PI;

    // document.getElementById("math").innerHTML = Math.PI;

    // document.getElementById("math").innerHTML = Math.PI;
    </script>
</body>

</html>