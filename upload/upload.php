<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Upload Data</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <style>
    /* Reset and base styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f7f9fc;
    color: #1f2937;
    line-height: 1.6;
  }
  
  /* Navbar */
  .navbar {
    background-color: #ffffff;
    padding: 20px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: black;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
  }
  
  .navbar .logo {
    font-size: 1.5rem;
    font-size: 33px;
    color:white;
    /* font-family: "Cormorant Garamond", serif; */
    font-weight: bold;
  }
  
  .navbar .nav-links {
    list-style: none;
    display: flex;
    gap: 30px;
  }
  
  .navbar .nav-links li a {
    text-decoration: none;
    color:rgb(255, 255, 255);
    font-weight: 500;
  }
  
  /* Upload Section */
  .upload-section {
    max-width: 600px;
    margin: 50px auto;
    background: #ffffff;
    padding: 30px;
    border-radius: 16px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
  }
  
  .upload-section h1 {
    font-size: 2.2rem;
    margin-bottom: 10px;
  }
  
  .upload-section p {
    font-size: 1rem;
    color: #6b7280;
    margin-bottom: 30px;
  }
  
  /* Form styles */
  form label {
    display: block;
    margin-top: 20px;
    font-weight: 500;
    margin-bottom: 8px;
  }
  
  form input[type="text"],
  form textarea,
  form select {
    width: 100%;
    padding: 12px;
    border: 1px solid #d1d5db;
    border-radius: 10px;
    font-size: 1rem;
  }
  
  form textarea {
    resize: vertical;
  }
  
  .file-drop {
    border: 2px dashed #cbd5e1;
    padding: 20px;
    border-radius: 12px;
    background-color: #f1f5f9;
    text-align: center;
    margin-top: 10px;
    cursor: pointer;
  }
  
  .file-drop p {
    margin-bottom: 5px;
  }
  
  .file-drop small {
    color: #6b7280;
  }
  
  #fileInput {
    display: block;
    margin: 10px auto;
  }
  
  button {
    display: block;
    margin-top: 30px;
    padding: 12px 24px;
    font-size: 1rem;
    background-color: #3b82f6;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  button:hover {
    background-color: #2563eb;
  }
  
  /* Data Bank Section */
  .data-bank-info {
    max-width: 600px;
    margin: 50px auto;
    background-color: #ffffff;
    padding: 25px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    gap: 20px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
  }
  
  .data-bank-info img {
    width: 80px;
    height: 80px;
  }
  
  .data-bank-info h2 {
    font-size: 1.5rem;
    margin-bottom: 5px;
  }
  
  .data-bank-info p {
    color: #4b5563;
  }
  .footer {
    background-color: #1a202c;
    color: white;
    padding: 3rem 1rem;
    font-family: sans-serif;
  }
  .g-signin2{
    width: 100%;
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
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="logo">Market Data Bank</div>
    <ul class="nav-links">
    <li><a href="../index/index.php">Home</a></li>
      <li><a href="../view/view.php">View & Share</a></li>
      <li><a href="upload.php" class="active">Upload Data</a></li>
      <li><a href="../index/contact.php">Contact Us</a></li>
    </ul>
  </nav>

  <section class="upload-section">
    <h1>Upload Data</h1>
    <p>Upload your data to contribute to our database.</p>

    <form id="uploadForm" method="POST" action="upload_process.php" enctype="multipart/form-data">
  <label for="name">Name</label>
  <input type="text" id="name" name="name" required />

  <label for="description">Description</label>
  <textarea id="description" name="description" rows="3" required></textarea>

  <label for="category">Category</label>
  <select id="category" name="category" required>
    <option value="">Select category</option>
    <option value="education">Education</option>
    <option value="health">Health</option>
    <option value="finance">Finance</option>
  </select>

  <label for="file">File</label>
  <input type="file" id="file" name="file" accept=".pdf, .xls, .xlsx" required />

  <button type="submit">Upload</button>
</form>
  </section>

  <section class="data-bank-info">
    <img src="https://img.icons8.com/3d-fluency/94/database.png" alt="database icon" />
    <div>
      <h2>Data Bank</h2>
      <p>Store and manage your datasets securely in our data bank.</p>
    </div>
  </section>
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

  <script src="uplod.js"></script>
</body>
</html>
