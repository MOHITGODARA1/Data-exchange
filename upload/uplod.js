const fileInput = document.getElementById("file-input");
const fileList = document.getElementById("file-list");
const uploadBtn = document.getElementById("upload-btn");
const dataName = document.getElementById("data_name");
const description = document.getElementById("description");
const category = document.getElementById("category");
const dataInfoForm = document.getElementById("data-info-form");

// Handle file selection
fileInput.addEventListener("change", () => {
  const files = fileInput.files;
  fileList.innerHTML = "";
  for (let i = 0; i < files.length; i++) {
    const file = files[i];
    const div = document.createElement("div");
    div.textContent = `📁 ${file.name} - ${Math.round(file.size / 1024)} KB`;
    fileList.appendChild(div);
  }
});

// Upload button logic
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

  // If all validations pass, show success message and submit the form
  alert("✅ Your file and information have been uploaded successfully!");
  dataInfoForm.submit(); // Submit the form
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