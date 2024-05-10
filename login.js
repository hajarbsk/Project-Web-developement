const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');



loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});