/*** Récupération des éléments du DOM ***/

    // Textes Captcha Complété
    let captchaVerif = document.getElementById('captchaVerif')
    let completed = document.getElementById('completed')

    // Consignes Captcha
    let colorCompleteInfo = document.getElementById('colorCompleteInfo')

    // Carrés du Captcha
    let captchaSquares = document.getElementsByClassName('captchaSquare')

    // Ids des Carrés du Captcha
    const squaresIds = Array.from(captchaSquares).map((square) => {
    return square.id;
    })

    // Bouton Sign Up
    let signUpButton = document.getElementById('signUp')

/**/

/*** Couleurs  ***/

    // Tableau couleurs captcha
    const colors = ['red', 'green', 'blue']
    
    // Couleur de Validation
    let colorToComplete = colors[Math.floor(Math.random() * colors.length)]
    colorCompleteInfo.textContent = `All Squares Must be ${colorToComplete}`;
/**/

/*** Vérification ***/

    // Tableau données vérification
    let verify = []

/*** Ajout events quand click sur carrés ***/

    Array.from(captchaSquares).forEach((square) => {

        // Changement de couleur du carré
        square.addEventListener('click', changeColor)

        // Vérification si captcha Complété
        square.addEventListener('click', checkCompletion)
    })
/**/

/*** Initialisation des couleurs random des différents carrés ***/

    Array.from(captchaSquares).forEach((square) => {
        square.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
    })

/**/

/*** Index tableau des couleurs ***/
    let color = 0;
/**/

/*** Changement de couleur des carrés quand clic ***/
    function changeColor(evt) {
        if(color < 2){
            evt.path[0].style.backgroundColor = colors[color];
            color++;
        } else {
            evt.path[0].style.backgroundColor = colors[color];
            color = 0;
        }
        squaresIds.forEach((square) => {
            let _square = document.getElementById(square)

            if(_square.style.backgroundColor == colorToComplete) {
                if(verify.indexOf(square) !== -1){
                }else{
                    verify.push(square)
                }
            }else{
                if(verify.indexOf(square) !== -1){
                    verify.splice(verify.indexOf(square))
                }
            }
        })
    }
/**/

/*** Vérification Compétion du Captcha quand clic ***/
    function checkCompletion() {
        if (verify.length == 9) {
            completed.innerHTML = "Captcha Completed"
            captchaVerif.textContent = "Captcha Has Been Completed"
            console.log(signUp)
            signUp.removeAttribute("disabled")
        }else{
            completed.innerHTML = ""
            captchaVerif.textContent = "Click To Complete The Captcha"
            signUp.setAttribute("disabled", true)
            console.log(signUp)
        }
    }
/**/
