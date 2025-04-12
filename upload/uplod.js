
  const fileInput = document.getElementById("file-input");
  const fileList = document.getElementById("file-list");
  const uploadBtn = document.getElementById("upload-btn");

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
  uploadBtn.addEventListener("click", () => {
    if (fileInput.files.length > 0) {
      alert("✅ Your file has been uploaded successfully!");
      fileInput.value = "";
      fileList.innerHTML = "";
    } else {
      alert("⚠️ Please select a file first.");
    }
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
  window.addEventListener("load", checkFadeIns); // <- runs animation on first load if already in view

