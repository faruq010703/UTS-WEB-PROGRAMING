document.getElementById("loginform").addEventListener("submit", function (event) {
    event.preventDefault();
    const formData = new FormData();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    formData.append("username", username);
    formData.append("password", password);

    fetch("http://localhost:8000/submit.php", {
        method: "POST",
        body: formData
    })
