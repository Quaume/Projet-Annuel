import avatarConf from "../../config/avatar.conf.js";

export default class ctrlCreator{
    constructor(){
        this.controlsWrapper = document.querySelector(".js_controls");
    }

    init() {
        this.createSelectElements();
        this.createChangeListeners();
    }

    createSelectElements() {
        for (const controlKey in avatarConf.controls) {
            const control = avatarConf.controls[controlKey];
            setCssOptions(control);

            const selectElement = document.createElement("div");
            selectElement.innerHTML = createSelectHtml(control);

            this.controlsWrapper.appendChild(selectElement);
        }
        
    }
    
    createChangeListeners() {
        for (const controlKey in avatarConf.controls) {
            const control = avatarConf.controls[controlKey];

            const{ selectorClass, targetClasses, options } = control;
            const controlElements = document.querySelector(`.${selectorClass}`);

            controlElements.addEventListener('change', () => {
                    const selectedOptionKey = controlElements.value;
                    setCssStyles(targetClasses, options[selectedOptionKey]);
                });
        }
    }
}

function setCssOptions(control){
    const { targetClasses, defaultOption, options } = control;
    setCssStyles(targetClasses, options[defaultOption]);
}

function setCssStyles(targetClasses, options){
    for (const targetClass of targetClasses ){
        const targetElements = document.querySelectorAll(`.${targetClass}`);

        for (const targetElement of targetElements){
            for (const cssProperty in options ) {
                const cssValue = options[cssProperty];
                targetElement.style[cssProperty] = cssValue;
            }
        }
    }
}

function createSelectHtml(control){
    return `
    <div class="form-group">
        <label>${control.labelTitle}</label>
        <select id="${control.selectorClass}" class="form-control">
            ${renderOptionsHtml(control)}
        </select>
    </div>`
}

function renderOptionsHtml(control){
    let optionsHtml = '';
    
    for (const optionKey in control.options){
        const selectedHtml = optionKey === control.defaultOption ? 'selected' : '';

        optionsHtml += `\t\t<option ${selectedHtml} value="${optionKey}">${optionKey}</option>\n`
    }

    return optionsHtml;
}