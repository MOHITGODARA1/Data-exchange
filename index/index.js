document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById("loginModal");
    var btn = document.getElementById("loginBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "flex";
        modal.style.visibility = "visible";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    // Email validation functionality
    const loginForm = document.getElementById("loginForm");
    loginForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const emailInput = document.getElementById("email");
        const emailValue = emailInput.value.trim();
        const emailRegex = /^[a-zA-Z][a-zA-Z0-9._%+-]*@gmail\.com$/;

        if (!emailRegex.test(emailValue)) {
            alert("Please enter a valid email address that ends with @gmail.com and does not start with a number.");
            return;
        }

        alert("Login successful!");
        modal.style.display = "none";
    });

    // Initialize Google API
    gapi.load('auth2', function() {
        gapi.auth2.init({
            client_id: 'YOUR_GOOGLE_CLIENT_ID'
        });
    });

    // Google login functionality
    var googleLogin = document.querySelector(".google");
    googleLogin.onclick = function() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signIn().then(function(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId());
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail());
        });
    }

    // Initialize Facebook API
    window.fbAsyncInit = function() {
        FB.init({
            appId     : 'YOUR_FACEBOOK_APP_ID',
            cookie     : true,
            xfbml      : true,
            version    : 'v12.0'
        });
    };

    // Facebook login functionality
    var facebookLogin = document.querySelector(".facebook");
    facebookLogin.onclick = function() {
        FB.login(function(response) {
            if (response.authResponse) {
                FB.api('/me', {fields: 'name,email,picture'}, function(response) {
                    console.log('Good to see you, ' + response.name + '.');
                    console.log('Email: ' + response.email);
                    console.log('Picture: ' + response.picture.data.url);
                });
            } else {
                console.log('User cancelled login or did not fully authorize.');
            }
        }, {scope: 'email,public_profile'});
    }
});
//popupanimation
document.addEventListener('DOMContentLoaded', function () {
    const popups = document.querySelectorAll('.popup'); 
    function checkPopups() {
        const triggerBottom = window.innerHeight / 5 * 4; 

        popups.forEach(popup => {
            const popupTop = popup.getBoundingClientRect().top;

            if (popupTop < triggerBottom) {
                popup.classList.add('show');
            } else {
                popup.classList.remove('show'); 
            }
        });
    }
    window.addEventListener('scroll', checkPopups);
    checkPopups();
});
// Toggle Chat Visibility
function toggleChat() {
    const chatContainer = document.getElementById("chat-container");
    chatContainer.style.display = chatContainer.style.display === "none" ? "block" : "none";
}

// Handle Form Submission
document.getElementById("chat-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form from refreshing the page

    const userInput = document.getElementById("user-input").value;
    const chatBox = document.getElementById("chat-box");

    // Append user message to chat box
    if (userInput.trim() !== "") {
        chatBox.innerHTML += `<div class="user-message">You: ${userInput}</div>`;
    }

    // Send message to server using AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "chatbot.php", true); // Send request to chatbot.php
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Append bot response to chat box
            chatBox.innerHTML += `<div class="bot-response">Bot: ${xhr.responseText}</div>`;
            chatBox.scrollTop = chatBox.scrollHeight; // Scroll to the bottom
        }
    };
    xhr.send("message=" + encodeURIComponent(userInput));

    // Clear input field
    document.getElementById("user-input").value = "";
});
function subscribe() {
    const email = document.getElementById('email').value;
    if (email && email.includes('@')) {
      alert(`Subscribed with: ${email}`);
    } else {
      alert('Please enter a valid email address.');
    }
  }

  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }





//   new

    // Handle Login Form Submission
  
    document.getElementById('loginbtn').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default behavior
    
        const email = document.getElementById('email').value; // Fetch the email entered by the user
        const password = document.getElementById('password').value; // Fetch the password entered by the user
    
        // Send the login data to the server
        fetch('check_user.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email, password }),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.status === 'success') {
                    alert('Login successful!');
    
                    // Remove the login and signup buttons
                    const loginButton = document.getElementById('loginbtn');
                    const signupLink = document.getElementById('signupLink'); // Assuming there's an element with id 'signupLink'
    
                    if (loginButton) loginButton.remove();
                    if (signupLink) signupLink.remove();
    
                    // Add the user's email
                    const userEmailElement = document.createElement('span');
                    userEmailElement.textContent = email; // Use the logged-in user's email
                    userEmailElement.style.marginLeft = '10px';
                    userEmailElement.style.fontSize = '16px';
                    userEmailElement.style.color = 'blue';
    
                    // Append the email to the parent container
                    const parentContainer = document.querySelector('.login-container'); // Replace with the appropriate container
                    if (parentContainer) parentContainer.appendChild(userEmailElement);
                } else {
                    alert(data.message); // Show error message
                }
            })
            .catch((error) => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
    });