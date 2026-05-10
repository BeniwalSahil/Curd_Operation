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

    body {
        font-family: Arial;
        background: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .calculator {
        background: #222;
        padding: 20px;
        border-radius: 10px;
        width: 300px;
        color: white;
    }

    input {
        width: 100%;
        height: 40px;
        margin-bottom: 10px;
        font-size: 18px;
        padding-left: 10px;
    }

    button {
        width: 100%;
        height: 40px;
        background: orange;
        border: none;
        color: white;
        font-size: 18px;
        cursor: pointer;
    }

    h2 {
        text-align: center;
    }
    </style>
</head>

<body>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter First Number" Required>
        <input type="number" name="num2" placeholder="Enter Second Number" Required>
        <select name="operator" required>
            <option value="">Select Operator</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php 
    if(isset($_POST['calculate'])){

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    
    switch($operator){
        case '+':
            $result = $num1 + $num2;
        break;
        case '-':
            $result = $num1 - $num2;
        break;
        case '*':
            $result = $num1 * $num2;
        break;
        case '/':
            if(!$num2 == 0){
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero";
            }
        break;
        default:
            $result = "Invalid Operator";
        
    }
    echo "<h2>Result: $result</h2>";
    }

    ?>
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