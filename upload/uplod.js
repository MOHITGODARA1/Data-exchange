document.getElementById('file-input').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        if (file.size > 5 * 1024 * 1024) {
            alert("File size exceeds 5MB limit!");
            event.target.value = "";
            return;
        }
        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview').src = e.target.result;
                document.getElementById('preview').style.display = 'block';
            }
            reader.readAsDataURL(file);
        } else {
            document.getElementById('preview').style.display = 'none';
        }
    }
});

document.getElementById('upload-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'upload.php', true);
    
    xhr.upload.onprogress = function(e) {
        if (e.lengthComputable) {
            const percentComplete = (e.loaded / e.total) * 100;
            document.getElementById('progress-bar').style.display = 'block';
            document.getElementById('progress-bar').firstElementChild.style.width = percentComplete + '%';
        }
    };
    
    xhr.onload = function() {
        if (xhr.status === 200) {
            alert('File uploaded successfully!');
            document.getElementById('file-input').value = ""; // Reset file input
            document.getElementById('preview').style.display = 'none'; // Hide preview
        } else {
            alert('Upload failed. Please try again.');
        }
        document.getElementById('progress-bar').style.display = 'none';
    };
    
    xhr.send(formData);
});

// Add a reset button functionality
document.getElementById('reset-button').addEventListener('click', function() {
    document.getElementById('file-input').value = ""; // Clear file input
    document.getElementById('preview').style.display = 'none'; // Hide preview
    document.getElementById('progress-bar').style.display = 'none'; // Hide progress bar
});