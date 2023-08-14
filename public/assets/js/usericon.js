const userLink = document.querySelector('.user_links');
const loginForm = document.querySelector('.login_form');
const registerForm = document.querySelector('.register_form');

userLink.addEventListener('click', (event) => {
  event.preventDefault();
  loginForm.style.display = 'block';
  registerForm.style.display = 'none';
  userLink.parentNode.classList.toggle('active');
});

const registerLink = document.querySelector('.register_links');
registerLink.addEventListener('click', (event) => {
  event.preventDefault();
  registerForm.style.display = 'block';
  loginForm.style.display = 'none';
  userLink.parentNode.classList.toggle('active');
});

// Add a click event listener to the document to hide the forms when the user clicks outside of them
document.addEventListener('click', (event) => {
  if (!event.target.closest('.login_register_popup')) {
    loginForm.style.display = 'none';
    registerForm.style.display = 'none';
    userLink.parentNode.classList.remove('active');
  }
});

