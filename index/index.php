<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Databank - Home</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <style>
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
  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    margin-left: -64px;
    margin-right: -108px;
    justify-content: flex-end; /* Align nav items to the right */
    flex: 1; /* Take up available space */
}
.feature {
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 300px;
    text-align: center;
}
.features-container {
    display: flex;
    flex-wrap: wrap;
    gap: 66px;
    justify-content: center;
    margin-top: 0px;
}
.imagesection{
    width: 100%;
    margin-top: 0px;
}
.features{
    margin-top: 0px;
    background-color: #333c50;
    height: 210px;
    margin-bottom: 0px;
    
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.Key{
    margin-top: 125px;
    margin-bottom: 15px;
    font-family: "Cormorant Garamond", serif;
    font-size:60px;

}
.cta{
    background: liner-gradient();
    height: 180px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.cta .btn {
    width: 32%;
    height: 27%;
    background-color: #333;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 50px;
    transition: background-color 0.3s ease;
    background: linear-gradient(90deg,rgb(39, 43, 66),rgb(72, 67, 115),rgb(53, 59, 96));
   
    /* -webkit-background-clip: text; 
    -webkit-text-fill-color: transparent;  */
    /* font-size: 2rem; 
    font-weight: bold; */
    /* text-align: center; */
    /* margin: 20px 0; */
}

.freedata{
    background: linear-gradient(90deg,rgb(39, 43, 66),rgb(72, 67, 115),rgb(53, 59, 96));
    margin-left: 194px;
    margin-right: 164px;
    height: 630px;
    border-radius: 13px
}
.detail-of-provider{
    /* color:white; */
    font-family: "Cormorant Garamond", serif;
}
.freecontent{
    text-align: start;
    margin-left: 57px;
    color: white;
    font-family: "Cormorant Garamond", serif;
    font-size: 21px;
    margin-left: 11px;
}
.AWSdataset{
    margin-left: -501px;
    margin-top: 18px;
    margin-bottom: 14px;
  font-family: "Cormorant Garamond", serif;
    color: white;
}
.provider{
    font-family: serif;
    margin-left: -637px;
    /* color: white; */
    color:black;
}
    </style>
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="company-name">
                <a href="index.php">Market Databank</a>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="../upload/upload.php">Upload Data</a></li>
                <li><a href="../view/view.php">View & Share</a></li>
                <li><a href="contact.php">Feedback</a></li>
                <li><a href="loginpage.php"><button id="loginBtn">Logout</button></a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="firstdiv">
            <h1>Welcome to Market Databank</h1>
            <p>A versatile platform to collect, organize, store, and share market data seamlessly across teams and industries.</p>
        </div>

        <!-- Additional Section: About the Platform -->
        <section class="about">
            <div class="about-content">
                <div class="heading">
                    <h2 class="About">About Market Databank</h2>
                </div>
                <div class="content">
                    <p class="content">
                        Market Databank is an essential resource for investors and financial professionals, offering a comprehensive repository of financial and market data. It provides real-time and historical data on stock prices, trading volumes, market indices, economic indicators, and corporate financials. This information allows users to track market trends, identify patterns, and make informed investment decisions.

                        Market indices, such as Nifty 50 and Sensex, serve as benchmarks for the market's performance, while sectoral indices represent specific sectors like banking, technology, and healthcare. Economic indicators, including GDP growth rates, inflation rates, and interest rates, offer insights into the overall health of the economy, influencing market movements.

                        Corporate financials, including earnings, revenue, and profit margins, help evaluate the financial health of companies. The databank also provides data on corporate actions like dividends, stock splits, and mergers and acquisitions, which significantly impact stock prices.

                        Market Databank includes various tools and resources, such as charting software and financial calculators, to analyze and interpret the data effectively. These tools enable users to gain deeper insights into market trends and make better investment decisions. Overall, Market Databank is a vital tool for navigating the complexities of the financial markets and achieving financial goals
                </p>
                </div>
                
            </div>
            <img src="secondimage.webp" alt="image" class="about-image">
        </section>
        <div class="allreview">

        
            <section class="reviews">
                <h2 class="re">Reviews of People</h2>
                <div class="reviews-container">
                    <div class="review popup">
                        <img src="profile1.avif" alt="John Doe" class="review-image">
                        <strong>John Doe:</strong>
                        <p class="recontent">"Market Databank has completely transformed the way I handle market data. The platform is incredibly user-friendly, and I can upload my CSV and PDF files within seconds. The search and filter options help me analyze trends efficiently. It has become an essential tool for my daily workflow!"</p>
                    </div>
                    <div class="review popup">
                        <img src="profile2.avif" alt="Jane Smith" class="review-image">
                        <strong>Jane Smith:</strong>
                        <p class="recontent">"I was struggling with data organization before using Market Databank. Now, with its secure storage and seamless file management, I can access my data from anywhere. The encryption and backup features give me peace of mind, knowing my files are safe at all times. Highly recommend this tool to professionals dealing with large datasets!"</p>
                    </div>
                    <div class="review popup">
                        <img src="profile3.avif" alt="Michael Brown" class="review-image">
                        <strong>Michael Brown:</strong>
                        <p class="recontent">"Collaboration has never been easier. I work with a remote team, and sharing insights used to be a hassle. With Market Databank, we can now analyze data together in real-time, leave comments, and make collective decisions much faster. The intuitive interface makes it easy even for non-technical team members to use. A must-have tool for businesses!"</p>
                    </div>
                </div>
            </section>
        </div>
        
        <h2 class="Key">Key Features</h2>
        <section class="features">
            <div class="features-container">
                <div class="feature popup">
                    <strong>Easy Data Upload:</strong> Upload CSV, PDF, or text files in just a few clicks.
                </div>
                <div class="feature popup">
                    <strong>Secure Storage:</strong> Your data is safely stored and accessible anytime.
                </div>
                <div class="feature popup">
                    <strong>Sharing Made Simple:</strong> Share insights with your team or the public effortlessly.
                </div>
                <div class="feature popup">
                    <strong>User-Friendly Interface:</strong> Navigate with ease, designed for all skill levels.
                </div>
            </div>
        </section>
        
        <div class="imagesection">
            <img src="Screenshot 2025-03-01 201749.png" alt="Screenshot" class="imagesection">
        </div>
        <div class="popularset">
            <h1 class="provider">
                Popular data providers on AWS Data Excange
            </h1>
            <p class="detail-of-provider">
                There is no other place where customers can find data files, tables, and APIs in one place. Here are a few of over 300 data providers you will find in the AWS Data Exchange catalog.
            </p>
            <div class="image">
                <img src="https://d1.awsstatic.com/Data%20and%20Analytics/data_exchange_equifax_logo.bf5eb559cda2f350003302087407325138e66247.png" alt="logo" class="logo">
                <img src="https://d1.awsstatic.com/Data%20and%20Analytics/data_exchange_insightdb_logo.9326055c1037096244d66bc954216777c956a9f9.png" alt="logo1" class="logo">
                <img src="https://d1.awsstatic.com/Data%20and%20Analytics/data_exchange_glimps_logo.1dbc9e8686d4a1d0a1130cfa5abd2529f2525cb1.png" alt="logo2" class="logo">
                <img src="https://d1.awsstatic.com/Data%20and%20Analytics/data_exchange_prognos_health_logo.c6e250a499c0476673b972596e1f1d25547542e0.png" alt="logo3" class="logo">
                <img src="https://d1.awsstatic.com/data_exchange_ovation_logov2.89db75ad0f836a99c5d61a203181ed7cd5f87312.png" alt="logo4" class="logo">
            </div>
        </div>
         <div class="popularset">
            <h1 class="sers-api">Popular free data sets and APIs</h1>
            <div class="freedata">
                <h2 class="set" style="color: white; font-family: 'Cormorant Garamond', serif;    margin-bottom: 15px;font-size: 56px;">Free data sets</h2>
                <p class="freecontent">
                    Choose from over 1,000 free data sets across the Automotive, Financial Services, Gaming, Healthcare & Life Sciences, Manufacturing, Marketing, Media & Entertainment, Retail, and more industries.
                </p>
                <hr>
                <h2 class="AWSdataset">
                    Popular free data sets on AWS Data Exchange
                </h2>
                <div class="datacontainor popup">
                    <div class="firstset">
                        <a href="https://aws.amazon.com/marketplace/seller-profile?id=c3d0a604-a811-4af5-bdba-7a9976bc0d0b"><img src="https://d1.awsstatic.com/sharethis-logo-275x75.52080caf88b46d2b2dfd4e192ecca6cf808eca20.png" alt="image"></a>
                        <p class="content-set">This free data set contains 20+ years of end-of-day historical data for the top 10 US companies by market cap as of September 5, 2020. Data is delivered in CSV format.</p>
                    </div>
                    <div class="firstset">
                        <a href="https://aws.amazon.com/marketplace/seller-profile?id=c3d0a604-a811-4af5-bdba-7a9976bc0d0b"><img src="https://d1.awsstatic.com/ovation_io-logo-275x75.8daee7fc453704e18f2de46514e63e1cfef3b307.png" alt="image"></a>
                        <p class="content-set">ShareThis observes consented, anonymous engagement behavior for over 1.5B users on millions of sites that use our sharing tools.</p>
                    </div>
                    <div class="firstset">
                        <a href="https://aws.amazon.com/marketplace/seller-profile?id=5ee6f5af-2453-41a2-ac06-add1d6988454"><img src="https://d1.awsstatic.com/Marketplace/solutions-center/logos/shutterstock.3fb462655286b87c57eb9b94d843ee79282a50d3.png" alt="image"></a>
                        <p class="content-set">A free image and metadata sample of 500 images. All assets are tagged with descriptive title and relevant keywords, providing an ideal data set to train machine learning algorithms.</p>
                    </div>
                    <div class="firstset">
                        <a href="https://aws.amazon.com/marketplace/seller-profile?id=5ee6f5af-2453-41a2-ac06-add1d6988454"><img src="https://d1.awsstatic.com/Data%20and%20Analytics/data_exchange_prognos_health_logo.c6e250a499c0476673b972596e1f1d25547542e0.png" alt="image"></a>
                        <p class="content-set">A free image and metadata sample of 500 images. All assets are tagged with descriptive title and relevant keywords, providing an ideal data set to train machine learning algorithms.</p>
                    </div>
                </div>
            </div>
         </div>
        <div class="cta">
            <p>Ready to get started?</p>
            <a href="../upload/upload.php" class="btn">Upload Your Data Now</a>
        </div>
    </div>
    <!-- <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Market Databank. All rights reserved.</p>
            <p>Follow us on 
                <a href="#">Twitter</a>, 
                <a href="#">Facebook</a>, 
                <a href="#">LinkedIn</a>
            </p>
        </div>
    </footer> -->
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


    <!-- <div id="loginModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Login/Signup</h2>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <input type="text" id="email" placeholder="Username" required>
                    <input type="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
                <hr>
                <div class="social-login">
                    <div class="g-signin2" data-onsuccess="onGoogleSignIn" data-theme="dark"></div>
                    
                </div>
            </div>
        </div>
    </div> -->
    <!-- Chatbot Icon -->
<div id="chat-icon" onclick="toggleChat()">
    💬
</div>

<!-- Chatbot Window -->
<div id="chat-container" style="display: none;">
    <div id="chat-header">
        Chatbot <span onclick="toggleChat()">❌</span>
    </div>
    <div id="chat-box" style="height: 300px; overflow-y: auto; padding: 10px; border: 1px solid #ddd;"></div>
    <form id="chat-form" method="post">
        <input type="text" id="user-input" name="message" placeholder="Type a message..." required>
        <button type="submit">Send</button>
    </form>
</div>
    <script src="index.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

</body>
</html>


