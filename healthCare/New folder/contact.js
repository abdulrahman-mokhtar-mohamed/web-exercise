document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById("form");
    const sumbit = document.getElementById("sumbit");

    form.addEventListener("submit", function (event) {
        event.preventDefault();


        const username = document.getElementById("Username").value;
        const email = document.getElementById("Email").value;
        const message = document.getElementById("Message").value;


        console.log("Form Data Submitted:", { username, email, message });


        const responseMessage = document.getElementById("responseMessage");
        responseMessage.textContent = `Thank you, ${username}! Your message has been sent.`;
        responseMessage.style.color = "green";

        sumbit.value = "Next";
        sumbit.onclick = function () {
            location.reload();
        }

    });
});
