<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View and Share Data</title>
  <link rel="stylesheet" href="view.css">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="logo">Market Data Bank</div>
      <nav>
        <ul>
          <li><a href="../index/index.php">Home</a></li>
          <li><a href="../upload/upload.php">Upload Data</a></li>
          <li><a href="view.php">View & Share</a></li>
          <li><a href="../index/contact.php">Feedback</a></li>
        </ul>
      </nav>
    </aside>
    <main class="main">
      <h1>View and Share Data</h1>
      
      <!-- Add Search Bar -->
      <input type="text" id="searchBar" placeholder="Search by name or description..." onkeyup="filterData()">

      <div class="data-list" id="dataList">
        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "uploddata"; // Replace with your database name

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("<p>Connection failed: " . $conn->connect_error . "</p>");
        }

        // Fetch uploaded data
        $query = "SELECT id, name, description, category, file_name, file_path, file_size, file_type, uploaded_at 
                  FROM uploads 
                  ORDER BY uploaded_at DESC";

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="data-card">';
                echo '<h1>' . htmlspecialchars($row['name']) . '</h1>'; // Display the name as an H1 tag
                echo '<p>' . htmlspecialchars($row['description']) . '</p>'; // Display the description as a paragraph
                echo '<a href="' . htmlspecialchars($row['file_path']) . '" download>Download</a>'; // Provide a download link
                echo '</div>';
            }
        } else {
            echo '<p>No data available.</p>';
        }

        $conn->close();
        ?>
      </div>
    </main>
  </div>

  <script>
    // JavaScript for filtering data
    function filterData() {
      const searchInput = document.getElementById('searchBar').value.toLowerCase();
      const dataCards = document.querySelectorAll('.data-card');

      dataCards.forEach(card => {
        const name = card.querySelector('h1').textContent.toLowerCase();
        const description = card.querySelector('p').textContent.toLowerCase();

        if (name.includes(searchInput) || description.includes(searchInput)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }
  </script>
</body>
</html>