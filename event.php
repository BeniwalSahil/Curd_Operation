<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p id="counter" style="font-size:40px;">0</p>
    <button id="add">Add</button>
    <button id="sub">Sub</button>
    <button id="reset">Reset</button>
    <button id="saving">Save</button>
    <button id="loading">Load</button>
    <p id="message"></p>
    <h1>To Do List</h1>
    <input type="text" id="inputs" />
    <button onclick="addlist()">Add</button>
    <ul id="listing"></ul>
    <button onclick="clearall()">Clear All</button>
    <script>
    let datashow = [];

    function displaydata() {
        let dataget = "";
        for (let i = 0; i < datashow.length; i++) {
            dataget += "<li>" + datashow[i] + '<button onclick="remove(' + i + ')"> REMOVE</button>'
            "</li>";
        }
        document.getElementById("listing").innerHTML = dataget;
    }

    function addlist() {
        let inputs = document.getElementById("inputs");
        let text = inputs.value;
        if (text === '') {
            return alert("???");
        }
        datashow.push(text);
        inputs.value = "";
        savedTask();
        displaydata();
    }

    function remove(i) {
        datashow.splice(i, 1);
        savedTask();
        displaydata();
    }

    function clearall() {
        datashow = [];
        savedTask();
        displaydata();
    }

    function savedTask() {
        localStorage.setItem("listing", JSON.stringify(datashow));
    }

    function loaddata() {
        let sh = localStorage.getItem("listing");
        if (sh !== '') {
            datashow = JSON.parse(sh);
        }
    }
    loaddata();
    displaydata();




    document.addEventListener("DOMContentLoaded", function() {
        let count = 0;

        const add = document.getElementById("add");
        const ms = document.getElementById("message");
        const sub = document.getElementById("sub");
        const reset = document.getElementById("reset");
        const saving = document.getElementById("saving");
        const loading = document.getElementById("loading");

        add.addEventListener('click', inadd);
        sub.addEventListener('click', desub);
        reset.addEventListener('click', rereset);
        saving.addEventListener('click', ssaaving);
        loading.addEventListener('click', laloading);
        // console.log("ceh");

        function updateCounter() {
            document.getElementById("counter").innerHTML = count;
        }

        function showMsg(text) {
            ms.innerHTML = text;
            setTimeout(function() {
                ms.innerHTML = "";
            }, 30000);
        }

        function inadd() {
            count++;
            updateCounter();
        }

        function desub() {
            count--;
            updateCounter();
        }

        function rereset() {
            count = 0;
            updateCounter();
        }

        function ssaaving() {
            localStorage.setItem("counter", saving);
            showMsg("Saved");
        }

        function laloading() {
            let saved = localStorage.getItem("counter");

            if (saved !== null) {
                count = Number(saved);
                showMsg("Loaded");
            }

            updateCounter();
        }

    });
    </script>
</body>

</html>