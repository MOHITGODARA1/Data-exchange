document.getElementById("uploadForm").addEventListener("submit", function (e) {
  const fileInput = document.getElementById("fileInput");
  const file = fileInput.files[0];
  if (file) {
    const allowedTypes = [
      "application/pdf",
      "application/vnd.ms-excel",
      "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
    ];
    if (!allowedTypes.includes(file.type)) {
      e.preventDefault();
      alert("Only Excel and PDF files are allowed.");
    }
  }
});
document.getElementById("uploadForm").addEventListener("submit", function (event) {
  event.preventDefault(); // Prevent the default form submission

  const fileInput = document.getElementById("file");
  const allowedExtensions = ["pdf", "xls", "xlsx"];
  const fileName = fileInput.files[0].name;
  const fileExtension = fileName.split(".").pop().toLowerCase();

  // Validate file type
  if (!allowedExtensions.includes(fileExtension)) {
    alert("Invalid file type. Only PDF and Excel files are allowed.");
    return;
  }

  // Create a FormData object to send the form data via AJAX
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
        alert("✅ Data uploaded successfully!");
        form.reset(); // Clear the form
      } else {
        // Show error message
        alert("❌ Error: " + data.message);
      }
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("⚠️ An error occurred while uploading the data.");
    });
});