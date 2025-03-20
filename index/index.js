document.addEventListener('DOMContentLoaded', function () {
    // Modal functionality
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
            // Handle the login process here
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
                    // Handle the login process here
                });
            } else {
                console.log('User cancelled login or did not fully authorize.');
            }
        }, {scope: 'email,public_profile'});
    }
});
document.addEventListener('DOMContentLoaded', function () {
    const popups = document.querySelectorAll('.popup'); // Select all elements with the 'popup' class

    // Function to check if an element is in the viewport
    function checkPopups() {
        const triggerBottom = window.innerHeight / 5 * 4; // Trigger when the element is 80% into the viewport

        popups.forEach(popup => {
            const popupTop = popup.getBoundingClientRect().top;

            if (popupTop < triggerBottom) {
                popup.classList.add('show'); // Add the 'show' class to make the animation visible
            } else {
                popup.classList.remove('show'); // Remove the 'show' class if it's out of view
            }
        });
    }

    // Listen for scroll events
    window.addEventListener('scroll', checkPopups);

    // Initial check when the page loads
    checkPopups();
});