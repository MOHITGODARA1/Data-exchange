<!-- filepath: d:\FULL stack\htdocs\Class project\index\signup.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <meta name="google-signin-client_id" content="654211061514-midk24g4o2rog224bv6t45t5qctf665l.apps.googleusercontent.com"> <!-- Replace with your Google Client ID -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    <style>
      /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.signup-container {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 350px;
    text-align: center;
}

h1 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    font-size: 14px;
    color: #555;
}

input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

hr {
    margin: 20px 0;
    border: 0;
    border-top: 1px solid #ddd;
}

.social-login {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-top: 15px;
}

.social-login img {
    width: 48px;
    height: 48px;
    cursor: pointer;
}

.linkedin-login img {
    border-radius: 4px;
}
.g-signin2 {
        width: 100% !important; /* Set the width to 100% */
        display: block; /* Ensure it behaves like a block element */
        text-align: center; /* Center the content inside the button */
    }
p {
    margin-top: 15px;
    font-size: 14px;
    color: #555;
}

p a {
    color: #007bff;
    text-decoration: none;
}

p a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
    <div class="signup-container">
        <h1>Sign Up</h1>
        <!-- Signup Form -->
        <form id="signupForm">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>

        <hr>

        <!-- Social Login Options -->
        <h3>Or Sign Up With</h3>
        <div class="social-login">
            <!-- Google Login -->
            <div class="g-signin2" data-onsuccess="onGoogleSignIn" data-theme="dark"></div>

           

         </div>
         <p>Already have an account? <a href="loginpage.php">Login here</a></p>

    <script>
        // Handle Signup Form Submission
        document.getElementById('signupForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent default form submission

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Send the signup data to the server
            fetch('save_user.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ name, email, password }),
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.status === 'success') {
                        alert('Signup successful!');
                        window.location.href = 'loginpage.php'; // Redirect to the login page
                    } else {
                        alert('Signup failed. Please try again.');
                    }
                })
                .catch((error) => console.error('Error:', error));
        });

        // Google Login
        function onGoogleSignIn(googleUser) {
            const profile = googleUser.getBasicProfile();
            const userData = {
                id: profile.getId(),
                name: profile.getName(),
                email: profile.getEmail(),
                image: profile.getImageUrl(),
            };

            // Send user data to the server
            fetch('save_user.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(userData),
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.status === 'success') {
                        alert('Google signup/login successful!');
                        window.location.href = 'index.php'; // Redirect to the homepage
                    } else {
                        alert('Failed to save user data.');
                    }
                })
                .catch((error) => console.error('Error:', error));
        }

        // Facebook Login
        function checkFacebookLoginState() {
            FB.getLoginStatus(function (response) {
                if (response.status === 'connected') {
                    FB.api('/me', { fields: 'id,name,email,picture' }, function (userData) {
                        // Send user data to the server
                        fetch('save_user.php', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify(userData),
                        })
                            .then((response) => response.json())
                            .then((data) => {
                                if (data.status === 'success') {
                                    alert('Facebook signup/login successful!');
                                    window.location.href = 'index.php'; // Redirect to the homepage
                                } else {
                                    alert('Failed to save user data.');
                                }
                            })
                            .catch((error) => console.error('Error:', error));
                    });
                } else {
                    alert('Facebook login failed.');
                }
            });
        }
    // Handle Signup Form Submission
    document.getElementById('signupForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // Send the signup data to the server
        fetch('save_user.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ name, email, password }),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.status === 'success') {
                    alert('Signup successful!');
                    window.location.href = 'loginpage.php'; // Redirect to the login page
                } else {
                    alert(data.message); // Show error message
                }
            })
            .catch((error) => console.error('Error:', error));
    });
    function onGoogleSignIn(googleUser) {
        const profile = googleUser.getBasicProfile();
        const userData = {
            id: profile.getId(),
            name: profile.getName(),
            email: profile.getEmail(),
            image: profile.getImageUrl(),
        };
    
        // Send user data to the server
        fetch('google_login.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(userData),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.status === 'success') {
                    alert('Google login successful!');
                    window.location.href = 'index.php'; // Redirect to the homepage
                } else {
                    alert('Failed to log in with Google.');
                }
            })
            .catch((error) => console.error('Error:', error));
    }
    </script>
</body>
</html>