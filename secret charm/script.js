// reference to the Sign Up button, Sign In button, Sign In form, and Sign Up form
const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signup');

// event listener to the "Sign Up" button
signUpButton.addEventListener('click', function () {
    signInForm.style.display = "none";
    signUpForm.style.display = "block";
});

// event listener to the "Sign In" button
signInButton.addEventListener('click', function () {
    signInForm.style.display = "block";
    signUpForm.style.display = "none";
});
