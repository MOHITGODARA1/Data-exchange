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

    // Modal functionality
    var modal = document.getElementById("loginModal");
    var btn = document.getElementById("loginBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "flex";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Google login functionality
    var googleLogin = document.getElementById("googleLogin");
    googleLogin.onclick = function() {
        gapi.auth2.getAuthInstance().signIn().then(function(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId());
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail());
        });
    }

    // Facebook login functionality
    var facebookLogin = document.getElementById("facebookLogin");
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

    // Initialize Google API
    gapi.load('auth2', function() {
        gapi.auth2.init({
            client_id: '988793874325-lafupihbbjlm7p5urpflorij4a0jtqd3.apps.googleusercontent.com'
        });
    });
});
window.fbAsyncInit = function() {
    FB.init({
        appId: 'YOUR_FACEBOOK_APP_ID',
        cookie: true,
        xfbml: true,
        version: 'v12.0'
    });
};