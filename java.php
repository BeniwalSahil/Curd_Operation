<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <input type="text" id="inputs" readonly>
    <button onclick="addinp()">Clone</button>
    <button onclick="removeinp()">Remove</button>
    <b><i>
            <button onclick="myFunction11()">Sort Alphabetically</button>
            <button onclick="myFunction12()">Sort Numerically</button>
            <button onclick="my12()">Random Sorting</button>
            <h1 id="gesss"></h1>
            <h2 id="get_id"></h2>
            <h2 id="get"></h2>
            <h2 id="gedt"></h2>
            <h1 id="ge"></h1>
            <h1 id="gessss"></h1>

        </i>
    </b>
    <!-- <ul id="listing"></ul>
    <p id="display"></p>
    <h2 id="demo"></h2>
    <h3 id="demo1">
        <h1 id="j"></h1>


    </h3>
    <p id="do"></p><button onclick="say()">SHOW HERE!</button> -->

    <script>
    const b = [3, 24, 2, 52, 62];
    document.getElementById("gessss").innerHTML = mys(b);

    function mys(arr) {
        return Math.min.apply(null, arr);

    }

    console.log(mys());

    const gwr = [33, 33, 7, 72, 67, 89, 3];
    document.getElementById("gesss").innerHTML = gwr;


    function my12() {
        for (let i = gwr.length - 1; i > 0; i--) {
            let j = Math.floor(Math.random() * (i + 1));
            let k = gwr[i];
            gwr[i] = gwr[j];
            gwr[j] = k;
        }
        // gwr.sort(function() {
        //     return 0.5 - Math.random()
        // });
        document.getElementById("gesss").innerHTML = gwr;
    }
    const points = [3, 234, , 3455, 3, 3, 32, 34, 6, 24, 6, 742, 7, 825, 1, 2];


    document.getElementById("gesss").innerHTML = points;

    function myFunction11() {
        points.sort();
        document.getElementById("gesss").innerHTML = points;
    }
    console.log(myFunction11());

    function myFunction12() {
        points.sort(function(a, b) {
            return (a - b);
        });
        document.getElementById("gesss").innerHTML = points;
    }
    const fruitss = ["Banana", "Orange", "Apple", "Mango"];

    const nexts = ["Banansa", "Oransge", "Appse", "Masngo"];
    const nextss = ["Banasnsa", "Orasnsge", "Appsse", "Masnsgo"];
    const mymerge = fruitss.concat(nexts, nextss);
    // let v = mymerge.sort();
    // mymerge.reverse();
    let v = mymerge.toSorted();
    const reversed = mymerge.toReversed();
    let posittion = mymerge.indexOf("Banana") + 1 + 1 + 2 + (21 / 2 * 2);
    let posittiosn = mymerge.lastIndexOf("Banana") + 1;
    console.log(mymerge.includes("Apple"));
    console.log(posittion);
    console.log(posittiosn);

    console.log(mymerge);
    let g = fruitss.pop();
    fruitss.push("kiiw");
    fruitss.shift();
    fruitss.unshift("lemon");
    fruitss[0] = "Ap";
    fruitss[fruitss.length] = "App";
    delete fruitss[2];
    console.log(Array.isArray(fruitss));
    console.log(g);



    document.getElementById("ge").innerHTML = v;
    document.getElementById("ge").innerHTML = reversed;
    const poit = [24, 56, 1, 4, 57, 2, 5, 3];

    poit.sort(function m(a, b) {
        return (b - a);
    });
    poit.sort(function m(a, b) {
        return (a - b);
    });
    document.getElementById("get_id").innerHTML = poit;

    // let myList = fruitss.length;
    // let myLisst = fruitss.toString();
    let fruit = fruitss[2];
    console.log(fruit);
    console.log(myList);
    console.log(myLisst);


    let x = "";
    const myObj = {
        name: "John",
        age: 30,
        cars: [{
                name: "Ford",
                models: ["Fiesta", "Focus", "Mustang"]
            },
            {
                name: "BMW",
                models: ["320", "X3", "X5"]
            },
            {
                name: "Fiat",
                models: ["500", "Panda"]
            }
        ]
    }

    for (let i in myObj.cars) {
        x += "<h2>" + myObj.cars[i].name + "</h2>";
        for (let j in myObj.cars[i].models) {
            x += myObj.cars[i].models[j] + "<br>";
        }
    }
    document.getElementById("ge").innerHTML = x;


    const fruits = ["Banana", "Orange", "Apple", "Mango"];
    let ds = fruits.length;

    let tes = "<ul>";
    for (let i = 0; i < ds; i++) {
        tes += "<li>" + fruits[i] + "</li>";
    }
    tes += "</ul>";
    document.getElementById("gedt").innerHTML = tes;

    function Pers(fullname, fathername, age, fatherage) {
        this.fullname = fullname;
        this.fathname = fathername;
        this.age = age;
        this.fatherage = fatherage;
    }
    let t = new Pers("SAHIL > 18", "Surendra Beniwal > 40", 22, 40);
    document.getElementById("get").innerHTML = t.fullname + "<br>" + t.fathname + "<br>" + t.age + "<br>" + t.fatherage;
    const pers = {
        fullname: "SAHIL BENIWAL",
        fathername: "Surendra Beniwal",
        age: 22,
        fatherage: 40
    }
    let ss = JSON.stringify(pers);
    document.getElementById("get_id").innerHTML = ss;
    // const myArray = Object.values(pers);
    // let tr = myArray.toString();

    // document.getElementById("get_id").innerHTML = tr;
    // const person = {
    //     fullname: "Sahil",
    //     lastname: "Beniwal",
    //     age: 24,
    //     // ffcun: function() {
    //     //     return this.fullname + "  " + this.lastname;
    //     // }
    // };
    // let te = "";
    // for (let x in person) {
    //     te += person[x] + "<br>";
    // }

    // document.getElementById("get_id").innerHTML = te;
    // document.getElementById("get_id").innerHTML = person.ffcun();

    function addinp() {
        let li = document.createElement("li");
        let input = document.getElementById("inputs").innerHTML + '<input type="text" id="inputs" readonly>';

        document.getElementById("listing").appendChild(li).innerHTML = input;
        document.getElementById("inputs").value = "";
    }

    function removeinp() {
        let listi = document.getElementById("listing");
        if (listi.lastElementChild) {
            listi.lastElementChild.remove();
        }
    }
    let names = "REVERSE STRING";
    let results = names.length;
    for (let m = results - 1; m >= 0; m--) {
        results += names[m];
    }
    console.log(
        document.getElementById("demo").innerHTML = results);

    const carss = {
        type: "Fiat",
        model: "500",
        color: "white"
    };

    document.getElementById("j").innerHTML = carss.type + "<br>" + carss.model + "<br>" + carss.color;


    const swift = {};
    swift.type = "Maruti";
    swift.model = "2026";
    swift.color = "Red";
    swift.name = "swift";
    document.getElementById("demo").innerHTML = swift.type + "<br>" + swift.model + "<br>" + swift.color + "<br>" +
        swift.name;

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
    let c = numbers.length;
    let suam = "";
    let i = 3;
    for (; i < c; i++) {
        suam += numbers[i] + "<br>";
    }
    document.getElementById("demo").innerHTML = "The sum is:" + suam;

    let name = "";
    let is = 0;
    while (is <= 10) {
        name += is + "<br>";
        is++;
    }
    document.getElementById("demo").innerHTML = name;

    let game = "";
    let d = 1;
    do {
        if (d == 3) {
            break;
        }
        game += d + "<br>";
        d++;
    } while (d <= 10);
    if (game) {
        document.getElementById("demo1").innerHTML = game;
    } else {
        document.getElementById("demo1").innerHTML = "No game";
    }
    let day;
    switch (new Date().getDay()) {
        case 0:
            day = "Sunday";
            break;
        case 1:
            day = "Monday";
            break;
        case 2:
            day = "Tuesday";
            break;
        case 3:
            day = "Wednesday";
            break;
        case 4:
            day = "Thursday";
            break;
        case 5:
            day = "Friday";
            break;
        case 6:
            day = "Saturday";
            break;
        default:
            day = "Unknown";
    }
    document.getElementById("demo").innerHTML = "Today is:" + day;

    for (let f = 0; f < 5; f++) {
        for (let g = 0; g < 5; g++) {
            if (g === 3) continue;
            text += "The number is:" + g + f + "<br>";
        }
    }
    document.getElementById("demo").innerHTML = text;
    const ca = ["BMW", "Volvo", "Saab", "Ford"];
    list: {
        text += ca[0] + "<br>";
        text += ca[1] + "<br>";
        break list;
        text += ca[2] + "<br>";
        text += ca[3] + "<br>";
    }
    // let len = "";
    let textlen = "SAHILBENIWALMYCOUNTRYNAMEISINDIA";
    let len = textlen.length;
    for (let k = len - 1; k >= 0; k--) {
        len += textlen[k];
    }
    // let len = textlen.length;
    document.getElementById("demo").innerHTML = len;

    let header = "JavaScript String Methods";
    let tags = ["JavaScript", "String", "Methods"];
    let html = `<h2>${header}</h2><ul>`;

    for (const x of tags) {
        html += `<p>${x}</p>`;
    }

    html += `</ul>`;
    document.getElementById("demo").innerHTML = html;


    function my(a, b) {
        return a != b ? a : b;
    }
    let result = my(5, 10);
    let sum = my(5, 5);
    document.getElementById("demo").innerHTML = "The result " + result + "<br>" + "The sum " + sum;

    function sayHello() {
        return "Hello World";
    }

    console.log(sayHello());

    function toCelsius(fahrenheit) {
        return (5 / 9) * (fahrenheit - 32);
    }
    let value = toCelsius(77);
    document.getElementById("demo").innerHTML = value;

    function say() {
        return "SAHIL BENIEWAL";
    }

    function say() {
        document.getElementById("do").innerHTML = say();
    }

    // x = sumAll[12, 345, 5, 6, 6, 7, 7, 57, 567];

    function sumAll() {
        let sum = 0;
        for (let i = 0; i < arguments.length; i++) {
            sum += arguments[i];
        }
        return sum;
    }
    document.getElementById("demo").innerHTML = sumAll(2432, 24, 23, 42353456345, 6, 5475);

    function mu() {
        let Find = -Infinity;
        for (let i = 0; i < arguments.length; i++) {
            if (arguments[i] > Find) {
                Find = arguments[i];
            }
        }
        return Find;
    }

    const add = (a, b) => a + b;

    function sayHello() {
        return "Hello World";
    }

    let texts = sayHello();
    document.getElementById("demo").innerHTML = texts;
    </script>

</body>

</html>