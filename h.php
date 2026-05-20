<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h4 id="love"></h4>
    <div class=" container">

        <h1>Expense Tracker</h1>

        <div class="form-box">

            <input type="text" id="title" placeholder="Expense Title">

            <input type="number" id="amount" placeholder="Amount">

            <select id="currency">
                <option value="INR">INR</option>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
            </select>

            <button id="addBtn">
                Add Expense
            </button>

        </div>

        <ul id="expenseList"></ul>

        <h2>
            Total: ₹<span id="total">0</span>
        </h2>

    </div>

    <script src="app.js"></script>

</body>

</html>