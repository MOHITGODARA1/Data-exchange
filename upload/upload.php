

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>dataBank - Upload Your Data</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="uplode.css">
  <style>
        .footer {
    background-color: #1a202c;
    color: white;
    padding: 3rem 1rem;
    font-family: sans-serif;
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
<body class="bg-gray-100 font-sans">

  
  <nav>
    <div class="nav-container">
      <div class="company-name">
        <a href="../index/index.php">Market Databank</a>
      </div>
      <ul>
        <li><a href="../index/index.php">Home</a></li>
        <li><a href="upload.php" class="active">Upload Data</a></li>
        <li><a href="../view/view.php">View & Share</a></li>
      </ul>
    </div>
  </nav>

  <section class="text-center py-20 bg-blue-50 fade-in">
    <h2 class="text-4xl font-bold text-blue-700">Securely Upload & Access Your Data</h2>
    <p class="text-gray-600 mt-4">Fast, easy, and safe data storage in the cloud.</p>
  </section>

  <main class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-2xl fade-in">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Upload your files</h2>
    
    <!-- <div id="upload-area" class="border-4 border-dashed border-gray-300 rounded-lg p-10 text-center cursor-pointer hover:bg-gray-50 transition flex flex-col items-center justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4-4m0 0l4 4m-4-4v12" />
      </svg>
      <p class="text-gray-500 mt-2">Drag & drop your files here or</p>
      <label class="mt-4 inline-block bg-blue-600 text-white px-6 py-2 rounded-lg cursor-pointer hover:bg-blue-700">
        Browse Files
        <input type="file" id="file-input" class="hidden" multiple />
      </label>
      <div id="file-list" class="mt-4 text-left text-sm text-gray-600"></div>
  
      <button id="upload-btn" class="mt-6 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        Upload
      </button>
    </div> -->

    <div id="upload-area" class="border-4 border-dashed border-gray-300 rounded-lg p-10 text-center cursor-pointer hover:bg-gray-50 transition flex flex-col items-center justify-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4-4m0 0l4 4m-4-4v12" />
    </svg>
    <p class="text-gray-500 mt-2">Drag & drop your files here or</p>
    <label class="mt-4 inline-block bg-blue-600 text-white px-6 py-2 rounded-lg cursor-pointer hover:bg-blue-700">
      Browse Files
      <input type="file" id="file-input" class="hidden" multiple />
    </label>
    <div id="file-list" class="mt-4 text-left text-sm text-gray-600"></div>
  </div>

    <!-- Additional Information Form -->
  <form id="data-info-form" method="POST" action="upload_process.php" enctype="multipart/form-data">
    <div class="mb-4">
      <label for="data_name" class="block text-gray-700 font-medium">Data Name:</label>
      <input type="text" id="data_name" name="data_name" class="w-full p-2 border border-gray-300 rounded-lg" required />
    </div>
    <div class="mb-4">
      <label for="description" class="block text-gray-700 font-medium">Description:</label>
      <textarea id="description" name="description" rows="4" class="w-full p-2 border border-gray-300 rounded-lg" required></textarea>
    </div>
    <div class="mb-4">
      <label for="category" class="block text-gray-700 font-medium">Type/Category:</label>
      <select id="category" name="category" class="w-full p-2 border border-gray-300 rounded-lg" required>
        <option value="">-- Select Type --</option>
        <option value="Document">Document</option>
        <option value="Image">Image</option>
        <option value="Presentation">Presentation</option>
        <option value="Other">Other</option>
      </select>
    </div>
    <button id="upload-btn" type="submit" class="mt-6 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
      Upload
    </button>
  </form>
    
  </main>
  

  <section class="max-w-6xl mx-auto mt-20 px-6 grid md:grid-cols-3 gap-6 fade-in">
    <div class="bg-white p-6 rounded-xl shadow-md text-center">
      <h3 class="text-xl font-semibold text-blue-600">🔒 Secure</h3>
      <p class="text-gray-600 mt-2">All your uploads are encrypted and safely stored.</p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-md text-center">
      <h3 class="text-xl font-semibold text-blue-600">⚡ Fast Uploads</h3>
      <p class="text-gray-600 mt-2">Lightning fast upload speeds with no hassle.</p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-md text-center">
      <h3 class="text-xl font-semibold text-blue-600">🌐 Access Anywhere</h3>
      <p class="text-gray-600 mt-2">Access your files from any device, anytime.</p>
    </div>
  </section>

  <section class="max-w-4xl mx-auto mt-20 bg-white p-6 rounded-xl shadow fade-in">
    <h3 class="text-xl font-bold text-gray-800 mb-4">Recent Uploads (Preview)</h3>
    <ul class="list-disc pl-6 text-gray-600 space-y-2">
      <li>project-report.pdf</li>
      <li>design_mockup.png</li>
      <li>presentation-final.pptx</li>
    </ul>
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
