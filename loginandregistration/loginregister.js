const loginBtn = document.getElementById('showLogin');
const registerBtn = document.getElementById('showRegister');
const loginSection = document.getElementById('loginSection');
const registerSection = document.getElementById('registerSection');

loginBtn.addEventListener('click', () => {
    loginSection.classList.remove('hidden');
    registerSection.classList.add('hidden');
    loginBtn.classList.add('active');
    registerBtn.classList.remove('active');
});

registerBtn.addEventListener('click', () => {
    registerSection.classList.remove('hidden');
    loginSection.classList.add('hidden');
    registerBtn.classList.add('active');
    loginBtn.classList.remove('active');
});
