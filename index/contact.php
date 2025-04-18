<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Market Data Bank - Feedback Form</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #f4f4f4;
    }

    header{
      display: flex;
      flex-direction:row;
      background-color:black;
      height:80px;
    }
    .footer {
    background-color: #1a202c;
    color: white;
    padding: 3rem 1rem;
    font-family: sans-serif;
  }

nav {
   display: flex
;
    flex-direction: row;
    justify-content: flex-end;
    align-items: flex-start;
    /* background-color: #1a202c; */
    padding: 1rem;
    width: 77%;
    height: 100%;
}

  .footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 2rem;
    max-width: 1280px;
    margin: 0 auto;
  }

  .footer-container > div {
    flex: 1 1 220px;
    min-width: 220px;
  }

  .footer h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
  }

  .footer p,
  .footer a,
  .footer li {
    font-size: 0.875rem;
    line-height: 1.5;
    color: #e2e8f0;
  }
 li{
    list-style: none;
 }
 h1{
   color:white;
   margin-top: 12px;
 }
  .footer a {
    color: #63b3ed;
    text-decoration: none;
  }

  .footer a:hover {
    text-decoration: underline;
  }

  .social-icons {
    display: flex;
    gap: 1rem;
    margin-top: 0.5rem;
  }

  .social-icons img {
    width: 32px;
    height: 32px;
    transition: transform 0.3s;
  }

  .social-icons img:hover {
    transform: scale(1.1);
  }

  .footer-bottom {
    border-top: 1px solid #4a5568;
    text-align: center;
    padding-top: 1.5rem;
    font-size: 0.875rem;
    margin-top: 2.5rem;
  }

  @media (max-width: 768px) {
    .footer-container {
      flex-direction: column;
      align-items: center;
    }

    .footer-container > div {
      text-align: center;
    }
  }
    nav a {
      color: #fff;
      margin-left: 1rem;
      text-decoration: none;
    }

    main {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      padding: 2rem;
      min-height: 80vh;
    }

    .image-section {
      flex: 1;
    padding-right: 2rem;
    height: 700px;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .image-section img {
      width: 100%;
      max-width: 636px;
      height: 100%;
    }

    .form-section {
      flex: 1;
      background: #fff;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .form-section h2 {
      margin-bottom: 1rem;
      color: #1a2a3a;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #21867a;
      color: white;
      padding: 0.75rem 1.5rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #176d61;
    }
    .item{
      align-self:end;
    }
  </style>
</head>

<body>
  <header>
    <h1>Market Data Bank</h1>
    <nav>
    <li><a href="index.php">Home</a></li>
                <li><a href="../upload/upload.php">Upload Data</a></li>
                <li><a href="../view/view.php">View & Share</a></li>
                <li><a href="contact.php">feedback</a></li>
    </nav>
  </header>

  <main>
    <div class="image-section">
      <img src="1-feedback-descriptive-2-removebg-preview.png" alt="Feedback Illustration">
    </div>

    <div class="form-section">
      <h2>Feedback Form</h2>   
      <form id="feedbackForm" method="POST" action="save_feedback.php">
  <div class="form-group">
    <label for="fullName">Full Name</label>
    <input type="text" id="fullName" name="fullName" required />
  </div>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" required />
  </div>
  <div class="form-group">
    <label for="satisfaction">How satisfied are you with our service?</label>
    <select id="satisfaction" name="satisfaction" required>
      <option value="Very Satisfied">Very Satisfied</option>
      <option value="Satisfied">Satisfied</option>
      <option value="Neutral">Neutral</option>
      <option value="Dissatisfied">Dissatisfied</option>
      <option value="Very Dissatisfied">Very Dissatisfied</option>
    </select>
  </div>
  <div class="form-group">
    <label for="message">Your Message</label>
    <textarea id="message" name="message" rows="4" required></textarea>
  </div>
  <button type="submit">Submit</button>
</form>
    </div>
  </main>

  <footer class="footer">
  <div class="footer-container">
    <!-- Left Column -->
    <div>
      <h3>About Market Databank</h3>
      <p>
        Market Databank is your go-to platform for organizing, storing, and sharing market data securely. 
        With tools for real-time collaboration, secure file sharing, and data encryption, we empower businesses 
        to make informed decisions.
      </p>
      <h3>Services</h3>
      <ul>
        <li>Data Storage Solutions</li>
        <li>Secure File Sharing</li>
        <li>Real-time Collaboration</li>
        <li>Analytics Dashboard</li>
        <li>Custom Integrations</li>
      </ul>
    </div>

    <!-- Right Column -->
    <div>
      <h3>Contact Us</h3>
      <p>Email: <a href="mailto:support@marketdatabank.com">support@marketdatabank.com</a></p>
      <p>Phone: +91 9057-1647-91</p>
      <p>Address: 123 Market Street, Delhi, D 10001</p>
      <h3>Follow Us</h3>
      <div class="social-icons">
        <a href="#"><img src="https://img.icons8.com/?size=100&id=bG29Ckcdp6YP&format=png&color=000000" alt="Twitter"></a>
        <a href="#"><img src="https://img.icons8.com/?size=100&id=118497&format=png&color=000000" alt="Facebook"></a>
        <a href="#"><img src="https://img.icons8.com/?size=100&id=xuvGCOXi8Wyg&format=png&color=000000" alt="LinkedIn"></a>
        <a href="#"><img src="https://img.icons8.com/?size=100&id=32323&format=png&color=000000" alt="Instagram"></a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 Market Databank. All rights reserved.</p>
    <p>
      <a href="#">Privacy Policy</a> |
      <a href="#">Terms of Service</a>
    </p>
  </div>
</footer>

  
<script>
  document.getElementById("feedbackForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission

    const form = event.target;
    const formData = new FormData(form);

    // Send the form data using fetch
    fetch(form.action, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === "success") {
          // Show success popup
          alert(data.message);
          form.reset(); // Clear the form
        } else {
          // Show error message
          alert("Error: " + data.message);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        alert("An error occurred while submitting the form.");
      });
  });
</script>
</body>

</html>
