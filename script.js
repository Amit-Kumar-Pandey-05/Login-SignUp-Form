const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add('active')
});
loginBtn.addEventListener('click', () => {
    container.classList.remove('active')
});



const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
   this.classList.toggle('fa-eye');
});



const togglePassword_1 = document.querySelector('#togglePassword_1');
  const password_1 = document.querySelector('#id_password_1');

  togglePassword_1.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password_1.getAttribute('type') === 'password' ? 'text' : 'password';
    password_1.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye');   
});





const togglePassword_1a = document.querySelector('#togglePassword_1a');
  const password_1a = document.querySelector('#id_password_1a');

  togglePassword_1a.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password_1a.getAttribute('type') === 'password' ? 'text' : 'password';
    password_1a.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye');
});





// prevent form submit 
const form = document.querySelector("form"); form.addEventListener('submit', function (e) { e.preventDefault(); });
