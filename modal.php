<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .modal-overlay {
        display: none;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .modal-overlay.show {
        display: block;
    }

    .modal-box {
        background: white;
        width: 90%;
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        border-radius: 10px;
        position: relative;
    }

    .modal-close {
        position: absolute;
        right: 12px;
        top: 8px;
        font-size: 24px;
        border: none;
        background: none;
        cursor: pointer;
    }

    input {
        padding: 8px;
        width: 260px;
        margin-bottom: 4px;
    }

    .error {
        color: red;
        margin: 0;
    }

    .ok {
        color: green;
        margin: 0;
    }

    .field {
        margin-bottom: 12px;
    }
    </style>

<body>

    <form id="frm1" action="/action_page.php">
        FIRST NAME: <input type="text" name="fname" value="Donlad" />
        <br>
        LAST NAME: <input type="text" name="lname" value="Duck" />
        <br>
        <input type="submit" value="Submit" />
    </form>

    <p id="dems"></p>
    <script>
    const x = document.forms[frm1];
    let text = "";
    for (let i = 0; i < x.length; i++) {
        text += x.elements[i].value + "<br>";
    }
    document.getElementById("dems").innerHTML = text;
    </script>
    <p id="p_is"> This si your new blogs. </p>
    <h3 id="demos">This is your demo account in this h3 tag.</h3>

    <script>
    const element = document.getElementById("p_is");
    document.getElementById("demos").innerHTML = "this text is now for using ares" + element.innerHTML;
    </script>
    <h1>Sign Up Form</h1>

    <form id="signupForm">

        <div class="field">
            <label>Name:</label><br>
            <input id="name" type="text" placeholder="Your name">
            <p id="nameError" class="error"></p>
        </div>

        <div class="field">
            <label>Email:</label><br>
            <input id="email" type="text" placeholder="name@example.com">
            <p id="emailError" class="error"></p>
        </div>

        <div class="field">
            <label>Password:</label><br>
            <input id="password" type="password" placeholder="Min 8 characters">
            <p id="passwordError" class="error"></p>
        </div>

        <div class="field">
            <label>Confirm Password:</label><br>
            <input id="confirm" type="password" placeholder="Repeat password">
            <p id="confirmError" class="error"></p>
        </div>

        <p><button type="submit">Sign Up</button></p>

    </form>

    <p id="result"></p>

    <script>
    const form = document.getElementById("signupForm");
    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const passInput = document.getElementById("password");
    const confirmInput = document.getElementById("confirm");
    const nameError = document.getElementById("nameError");
    const emailError = document.getElementById("emailError");
    const passError = document.getElementById("passwordError");
    const confirmError = document.getElementById("confirmError");
    const result = document.getElementById("result");

    function showError(el, message) {
        el.innerHTML = message;
    }

    function clearError(el) {
        el.innerHTML = "";
    }

    function validateName() {
        let value = name.nameInput.value.trim();
        if (value.length < 2) {
            showError(nameError, "Name must be required at least 2 characters.");
            return false;
        }
        clearError(nameError);
        return true;
    }

    function validateEmail() {
        let value = emailInput.value.trim();
        if (!sv) {
            showError(emailError, "Enter a valid email address.");
            return false;
        }
        clearError(emailError);
        return true;
    }

    function validatePassword() {
        let value = passInput.value;
        if (value.length < 2) {
            showError(passError, "Password must be at least 8");
            return false;
        }
        clearError(passError);
        return true;
    }

    function validateConfirm() {
        let pass = passInput.value;
        let confirm = confirmInput.value;
        if (confirm === "") {
            showError(confirmError, "Please confirm your password");
            return false;
        }

        if (confirm !== pass) {
            showError(confirmError, "Password did not match !");
            return false;
        }
        clearError(passError);
        return true;
    }


    function validateForm() {
        let okName = validateName();
        let okEmail = validateEmail();
        let okPass = validatePassword();
        let okConfirm = validateConfirm();

        return okName && okEmail && okPass && okConfirm;
    }

    form.addEventListener("submit", function(event) {
        event.preventDefault();
        result.innerHTML = "";

        if (validateForm()) {
            inner.innerHTML = "Form field is valid"
            result.className = "ok";
        } else {
            result.innerHTML = "Please fix this errors.";
            result.className = "error";
        }

    });

    const modal = document.getElementById("modal");
    const openBtn = document.getElementById("openBtn");
    const closeBtn = document.getElementById("closeBtn");

    function openModal() {
        modal.classList.add("show");
    }

    function closeModal() {
        modal.classList.remove("show");
    }

    openBtn.addEventListener("click", openModal);
    closeBtn.addEventListener("click", closeModal);

    modal.addEventListener("click", function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });
    document.addEventListener("click", function(event) {
        if (event.key === "Escape") {
            closeModal();
        }
    });
    </script>
</body>

</html>