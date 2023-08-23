// Навигация в личном кабинете
let cabinetMenuBtn = document.querySelector('.js-cabinet-menu-btn');
let cabinetMenu = document.querySelector('.js-cabinet-menu');

cabinetMenuBtn.addEventListener('click', function(){
    cabinetMenu.classList.toggle('cabinet-menu-active');
    cabinetMenuBtn.classList.toggle('cabinet-menu-mobile__active');
})

// Аккордеон в личном кабинете - полезные материалы
function toggleAccordion(accordionId)
{
    let accordionContent = document.getElementById(accordionId);
    accordionContent.classList.toggle('materials-accordion-content__active');
}

// Показать пароль
function togglePasswordVisibility(inputId)
{
    let passwordInput = document.getElementById(inputId);

    if (passwordInput.type === "password")
    {
        passwordInput.type = "text";
    }
    else
    {
        passwordInput.type = "password";
    }
}