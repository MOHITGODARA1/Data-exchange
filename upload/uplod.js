const fileInput = document.getElementById("file-input");
const fileList = document.getElementById("file-list");
const uploadBtn = document.getElementById("upload-btn");
const dataName = document.getElementById("data_name");
const description = document.getElementById("description");
const category = document.getElementById("category");
const dataInfoForm = document.getElementById("data-info-form");

// fileInput.addEventListener("change", () => {
//   const files = fileInput.files;
//   fileList.innerHTML = "";
//   for (let i = 0; i < files.length; i++) {
//     const file = files[i];
//     const div = document.createElement("div");
//     div.textContent = `📁 ${file.name} - ${Math.round(file.size / 1024)} KB`;
//     fileList.appendChild(div);
//   }
// });

// uploadBtn.addEventListener("click", (event) => {
//   event.preventDefault(); 

//   if (fileInput.files.length === 0) {
//     alert("⚠️ Please select a file to upload.");
//     return;
//   }

//   if (!dataName.value.trim() || !description.value.trim() || !category.value) {
//     alert("⚠️ Please fill out all the required information before uploading.");
//     return;
//   }
//   alert("✅ Your file and information have been uploaded successfully!");
//   dataInfoForm.submit(); 
// });
  // Handle form submission
  document.getElementById("data-info-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission

    const form = event.target;

    // Create a FormData object to send the form data via AJAX
    const formData = new FormData(form);

    // Send the form data using fetch
    fetch(form.action, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === "success") {
          // Show success message
          alert("File uploaded successfully!");

          // Clear the form
          form.reset();
        } else {
          // Show error message
          alert("Error: " + data.message);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        alert("An error occurred while uploading the file.");
      });
  });
uploadBtn.addEventListener("click", (event) => {
  event.preventDefault(); // Prevent form submission by default

  // Check if a file is selected
  if (fileInput.files.length === 0) {
      alert("⚠️ Please select a file to upload.");
      return;
  }

  // Validate form fields
  if (!dataName.value.trim() || !description.value.trim() || !category.value) {
      alert("⚠️ Please fill out all the required information before uploading.");
      return;
  }

  // Create FormData object
  const formData = new FormData(dataInfoForm);

  // Send AJAX request
  fetch('upload_process.php', {
      method: 'POST',
      body: formData
  })
  .then(response => response.json())
  .then(data => {
      if (data.status === 'success') {
          alert("✅ " + data.message);
          // Optional: Reset form
          dataInfoForm.reset();
          fileInput.value = '';
          fileList.innerHTML = '';
      } else {
          alert("❌ " + data.message);
      }
  })
  .catch(error => {
      alert("⚠️ An error occurred during upload.");
  });
});


// Scroll animation logic: trigger animation ONCE when the section first enters viewport
const fadeIns = document.querySelectorAll(".fade-in");

// Check visibility function
function checkFadeIns() {
  fadeIns.forEach((el) => {
    const top = el.getBoundingClientRect().top;
    const isVisible = top < window.innerHeight - 100;

    if (isVisible && !el.classList.contains("visible")) {
      // Add animation class only the first time it becomes visible
      el.classList.add("visible");
    }
  });
}

// Trigger on scroll and load
window.addEventListener("scroll", checkFadeIns);
window.addEventListener("load", checkFadeIns);