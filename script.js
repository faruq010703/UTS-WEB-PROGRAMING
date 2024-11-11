document.getElementById("loginform").addEventListener("submit", function (event) {
    event.preventDefault();
    const formData = new FormData();
    formData.append("username", username);
    formData.append("password", password);
