<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculator</title>
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: #f4f4f4;
        font-family: Arial;
    }

    .calculator {
        background: #222;
        padding: 20px;
        border-radius: 10px;
        width: 250px;
    }

    #display {
        width: 100%;
        height: 50px;
        margin-bottom: 10px;
        font-size: 22px;
        text-align: right;
        padding-right: 10px;
    }

    button {
        width: 55px;
        height: 55px;
        margin: 2px;
        font-size: 20px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
    }

    .operator {
        background: orange;
        color: white;
    }

    .equal {
        background: green;
        color: white;
    }

    .clear {
        background: red;
        color: white;
    }
    </style>
</head>

<body>
    <div class="container">
        <input type="text" id="display" readonly>
        <br>
        <button onclick="appendvalue('7')">7</button>
        <button onclick=" appendvalue('8')">8</button>
        <button onclick=" appendvalue('9')">9</button>
        <button class="operator" onclick=" appendvalue('/')">/</button>
        <br>
        <button onclick="appendvalue('6')">6</button>
        <button onclick=" appendvalue('5')">5</button>
        <button onclick=" appendvalue('4')">4</button>
        <button class="operator" onclick=" appendvalue('-')">-</button>
        <br>
        <button onclick="appendvalue('3')">3</button>
        <button onclick=" appendvalue('2')">2</button>
        <button onclick=" appendvalue('1')">1</button>
        <button class="operator" onclick=" appendvalue('+')">+</button>
        <br>
        <button onclick="appendvalue('7')">0</button>
        <button onclick=" appendvalue('.')">.</button>
        <button class="equal" onclick="calculate('=')">=</button>
        <button class="operator" onclick="appendvalue('*')">*</button>
        <br>
        <button class="clear" style="width: 100%;" onclick="clearDisplay()">C</button>
    </div>
</body>
<script>
function appendvalue(value) {
    document.getElementById('display').value += value;
}

function calculate() {
    let res = document.getElementById('display').value;
    document.getElementById('display').value = eval(res);
}

function clearDisplay() {
    document.getElementById('display').value = '';
}
</script>

</html>