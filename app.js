const addBtn = document.getElementById("addBtn");
const title = document.getElementById("title");
const amount = document.getElementById("amount");
const currency = document.getElementById("currency");
const expenseList = document.getElementById("expenseList");
const total = document.getElementById("total");

let expenses = [];

addBtn.addEventListener("click", async () => {
  const convertedAmount = await convertCurrency(
    Number(amount.value),
    currency.value,
  );

  const expense = {
    id: Date.now(),
    title: title.value,
    amount: convertedAmount,
    originalCurrency: currency.value,
  };

  expenses.push(expense);

  displayExpenses();

  title.value = "";
  amount.value = "";
});

function displayExpenses() {
  expenseList.innerHTML = "";

  let totalAmount = 0;

  expenses.forEach((expense) => {
    totalAmount += expense.amount;

    const li = document.createElement("li");

    li.innerHTML = `
            ${expense.title} - ₹${expense.amount.toFixed(2)}
            <button onclick="deleteExpense(${expense.id})">
                Delete
            </button>
        `;

    expenseList.appendChild(li);
  });

  total.innerText = totalAmount.toFixed(2);
}

function deleteExpense(id) {
  expenses = expenses.filter((expense) => {
    return expense.id !== id;
  });

  displayExpenses();
}

async function convertCurrency(amount, currency) {
  if (currency === "INR") {
    return amount;
  }

  const response = await fetch(`https://open.er-api.com/v6/latest/${currency}`);

  const data = await response.json();

  const rate = data.rates.INR;

  return amount * rate;
}

setTimeout(myFunction, 2000);
function myFunction() {
  document.getElementById("love").innerHTML = "I Love you !";
}
