<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Databank - View & Share</title>
    <link rel="stylesheet" href="view.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white text-lg font-bold">
                <a href="../index/index.php">Market Databank</a>
            </div>
            <ul class="flex space-x-6 text-white">
                <li><a href="../index/index.php" class="hover:text-gray-300">Home</a></li>
                <li><a href="../upload/upload.php" class="hover:text-gray-300">Upload Data</a></li>
                <li><a href="view.php" class="hover:text-gray-300">View & Share</a></li>
            </ul>
        </div>
    </nav>

    <div class="search-bar-container">
        <input
            type="text"
            id="search-bar"
            placeholder="Search for a company..."
            onkeyup="filterDivs()"
        />
        <h2 class="EX">Explore Company Insights at a Glance</h2>
    </div>
    <div class="full-width-div" onclick="window.location.href='company1.html'" data-name="Secure cloud storage and enterprise-grade encryption.">
        <h1>
            Secure cloud storage and enterprise-grade encryption.
        </h1>
       
        <p><strong>Services:</strong> ​Secure cloud storage with enterprise-grade encryption is essential for protecting sensitive business data from unauthorized access and cyber threats. This approach ensures that data is encrypted both during transmission and while at rest, safeguarding it from potential breaches.</p>
        <button class="action-button" onclick="window.location.href='company1.html'">Learn More</button>
    </div>

    <div class="full-width-div" onclick="window.location.href='company2.html'" data-name="AI-driven data analysis for business intelligence.">
        <h1>
            AI-driven data analysis for business intelligence.
        </h1>
        <p> AI-driven data analysis for business intelligence empowers organizations to make smarter, faster decisions by extracting insights from large volumes of data. Using machine learning algorithms, AI can identify trends, patterns, and anomalies that traditional analytics might miss. This technology automates data processing, reduces human error, and enhances forecasting accuracy. Businesses leverage AI to optimize operations, understand customer behavior, and improve strategic planning.</p>
          <button class="action-button" onclick="window.location.href='company1.html'">Learn More</button>
    </div>

    <div class="full-width-div" onclick="window.location.href='company3.html'" data-name="Decentralized data management and blockchain solutions.">
        <h1>
            Decentralized data management and blockchain solutions.
        </h1>
        
        <p> offer secure, transparent, and tamper-proof methods of storing and sharing data without relying on a central authority. By distributing data across a network of nodes, these systems reduce the risk of single points of failure and enhance resilience against cyberattacks. Blockchain technology ensures data integrity through cryptographic hashes and immutable records, making it ideal for applications like digital identity, supply chain tracking, and secure transactions.</p>
          <button class="action-button" onclick="window.location.href='company1.html'">Learn More</button>
    </div>

    <div class="full-width-div" onclick="window.location.href='company4.html'" data-name="Global CDN and high-speed file transfers.">
        <h1>
            Global CDN and high-speed file transfers.
        </h1>
       
        <p>reliable access to digital content by distributing data across a network of servers worldwide. A Content Delivery Network (CDN) reduces latency by delivering files from the server closest to the user, enhancing performance and load times for websites, apps, and media. This is especially critical for streaming, large file downloads, and global businesses. Combined with optimized file transfer protocols, CDNs ensure secure and efficient delivery of data across continents</p>
          <button class="action-button" onclick="window.location.href='company1.html'">Learn More</button>
    </div>

    <div class="full-width-div" onclick="window.location.href='company5.html'" data-name="Hybrid cloud integrations for secure backups.">
        <h1>
            Hybrid cloud integrations for secure backups.
        </h1>
        <p>combine the strengths of both private and public cloud environments to create a flexible, scalable, and secure data protection strategy. This approach allows businesses to store critical data on private servers for maximum control and security, while leveraging public cloud services for cost-effective scalability and disaster recovery. Hybrid solutions ensure data redundancy, enabling quick recovery during system failures or cyberattacks</p>
          <button class="action-button" onclick="window.location.href='company1.html'">Learn More</button>
    </div>

    <div class="full-width-div" onclick="window.location.href='company6.html'" data-name=" Privacy-first file sharing and access control.">
        <h1>
            Privacy-first file sharing and access control.
        </h1>
        
        <p>prioritizes the confidentiality and security of user data by implementing strict privacy measures and granular permissions. These systems ensure that only authorized individuals can access, view, or edit shared files, often using encryption, password protection, and multi-factor authentication. Advanced access control features allow users to set expiration dates, restrict downloads, or assign read-only permissions. Privacy-first platforms minimize data exposure risks and comply with regulations like GDPR and HIPAA</p>
          <button class="action-button" onclick="window.location.href='company1.html'">Learn More</button>
    </div>

    <div class="full-width-div" onclick="window.location.href='company7.html'" data-name="Data compliance solutions (GDPR, HIPAA, etc.).">
        <h1>
            Data compliance solutions (GDPR, HIPAA, etc.).
        </h1>
        
        <p> help organizations adhere to legal and regulatory standards for handling sensitive data. These solutions implement frameworks and tools to ensure that personal and health-related information is collected, stored, and processed securely and transparently. They include features like encryption, audit trails, user consent management, and data breach notification systems. Compliance with regulations such as GDPR (General Data Protection Regulation) and HIPAA (Health Insurance Portability and Accountability Act) reduces legal risks and builds customer trust</p>
          <button class="action-button" onclick="window.location.href='company1.html'">Learn More</button>
    </div>

    <div class="full-width-div" onclick="window.location.href='company8.html'" data-name="Real-time collaboration and secure cloud workspace.">
        <h1>
            Real-time collaboration and secure cloud workspace.
        </h1>
        <p>solutions enable teams to work together from anywhere with instant access to shared files, documents, and tools. These platforms support features like live editing, version control, task assignments, and team chat, streamlining productivity and communication. Security is a top priority, with encrypted connections, role-based access controls, and data backups ensuring sensitive information remains protected. By centralizing workflows in the cloud, organizations reduce reliance on local storage and promote agile, scalable operations</p>
          <button class="action-button" onclick="window.location.href='company1.html'">Learn More</button>
    </div>

    <div class="full-width-div" onclick="window.location.href='company9.html'" data-name="End-to-end encrypted data hosting and APIs.">
        <h1>
            End-to-end encrypted data hosting and APIs.

        </h1>
        
        <p> ensure that data remains secure from the moment it is created until it reaches its destination. This level of encryption means that only the sender and intended recipient can access the data—no third parties, including service providers, can decrypt it. APIs built with end-to-end encryption allow developers to integrate secure communication and data exchange into their applications. These solutions are ideal for industries handling sensitive data, such as finance, healthcare, and legal services.</p>
          <button class="action-button" onclick="window.location.href='company1.html'">Learn More</button>
    </div>

    <div class="full-width-div" onclick="window.location.href='company10.html'" data-name="Affordable and scalable storage solutions for startups.">
        <h1>
            Affordable and scalable storage solutions for startups.
        </h1>
        
        <p>provide cost-effective ways to store, manage, and access growing volumes of data without heavy upfront investments. These solutions typically use cloud-based infrastructure, allowing startups to pay only for the storage they use and easily scale as their business expands. With features like automatic backups, high availability, and remote access, startups can focus on innovation rather than IT management. Many providers also offer integration with development tools and analytics platforms.</p>
          <button class="action-button" onclick="window.location.href='company1.html'">Learn More</button>
    </div>
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
    <script src="view.js"></script>
</body>
</html>