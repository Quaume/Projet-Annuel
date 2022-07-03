const body = document.querySelector("body"),
switchMode = body.querySelector(".form-check-input");

switchMode.addEventListener("click", () => {
    if(localStorage.getItem("light") === "false"){
        localStorage.setItem("light","true");
        body.classList.toggle("light");
    }else {
        localStorage.getItem("light") === "true";
        localStorage.removeItem("light");
        body.classList.toggle.remove("light");
    }
});
 