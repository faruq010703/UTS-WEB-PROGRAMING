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
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            alert(data.message);
            if (data.status === "success") {
                alert(data.message);
                window.location.assign("http://localhost:8000/halaman/");

            }
        } else {
            alert(data.message); // Display error message
        }
    })
    .catch(error => console.error("Error:", error));
});
