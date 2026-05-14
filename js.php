<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <style>
    body {
        font-family: Arial;
        padding: 20px;
    }

    input {
        padding: 8px;
        width: 200px;
    }

    button {
        padding: 8px 12px;
        margin: 5px;
        cursor: pointer;
    }

    li {
        margin: 10px 0;
    }
    </style>
</head>

<body>
    <h2>CRUD Operation Using JavaScript</h2>

    <input type="text" id="name" placeholder="Enter Name">

    <button onclick="addUser()">Add</button>

    <ul id="userList"></ul>
    <script>
    let users = [];
    let editIndex = null;

    function addUser() {
        let Input = document.getElementById("name");
        let value = Input.value.trim();

        if (value === "") {
            alert("Please enter a name.");
            return;
        }
        if (editIndex !== null) {
            users[editIndex] = value;
            editIndex = null;
        } else {
            users.push(value);
        }
        Input.value = "";
        displayUsers();
    }

    function displayUsers() {
        let userList = document.getElementById("userList");
        userList.innerHTML = "";
        users.forEach((user, index) => {
            let li = document.createElement("li");
            li.innerHTML =
                `${user} <button onclick="editUser(${index})">Edit</button> <button onclick="deleteUser(${index})">Delete</button>`;
            userList.appendChild(li);
        });
    }

    function editUser(index) {
        document.getElementById("name").value = users[index];
        editIndex = index;
    }

    function deleteUser(index) {
        users.splice(index, 1);
        displayUsers();
    }
    </script>
</body>

</html>