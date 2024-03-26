async function handleRegister() {


    let firstName = document.querySelector(".firstName").value
    let lastName = document.querySelector(".lastName").value
    let email = document.querySelector(".email").value
    let password = document.querySelector(".password").value


    let user = {
        firstName_user: firstName,
        lastName_user: lastName,
        email_user: email,
        password_user: password,
    }



    let params = {

        method: "POST",
        headers: {
            "Content-Type": "application/json; charset=utf-8",
        },
        body: JSON.stringify(user),
    };

    fetch("./register.php", params)
        .then((res) => res.text())
        .then((data) => {
            handleFetchResponse(data)
        }).catch((e) => {
            console.log(e)
        });
}


function handleFetchResponse(data) {
    console.log(data)
    let registerForm = document.querySelector("formRegister")

    if (data === "Email already taken") {
        console.log(data);
        let toast = document.querySelector(".toast")
        toast.innerText = data
    } else if (data == 1) {
        registerForm.style.display = "none"
    }
}

async function name() {
    
}