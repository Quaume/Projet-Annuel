const body = document.querySelector("body"),
        switchMode = body.querySelector(".form-check-input");
        
        switchMode.addEventListener("click", () => {
            body.classList.toggle("light");
        });