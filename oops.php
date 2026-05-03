<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="text" id="inp">
    <button onclick="btn_dd()">Add</button>
    <button onclick="remove()">Remove</button>
    <ul id="list"></ul>
</body>
<script>
function btn_dd() {
    let li = document.createElement("li");
    li.innerHTML = document.getElementById("inp").value + "<input typr='text'>";
    document.getElementById("list").append(li);
    document.getElementById("inp").value = "";
}

function remove() {
    let listing = document.getElementById("list");
    if (listing.lastElementChild) {
        listing.lastElementChild.remove();
    }
}
</script>

</html>