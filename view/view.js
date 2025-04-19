const data = [
    { title: "Project Report", desc: "Final year report for data storage system." },
    { title: "Game Analytics", desc: "Metrics gathered from player achievements." },
    { title: "Survey Results", desc: "Collected data from user feedback." },
    { title: "Demo Upload", desc: "Sample file to demonstrate system." }
  ];
  
  const dataList = document.getElementById("dataList");
  const searchInput = document.getElementById("search");
  
  function renderData(items) {
    dataList.innerHTML = "";
    items.forEach(item => {
      dataList.innerHTML += `
        <div class="data-card">
          <div class="info">
            <h3>${item.title}</h3>
            <p>${item.desc}</p>
          </div>
          <div class="actions">
            <button onclick="alert('Diving into ${item.title}')">Dive In</button>
            <button onclick="alert('Sharing ${item.title}')">Share</button>
          </div>
        </div>
      `;
    });
  }
  
  searchInput.addEventListener("input", () => {
    const value = searchInput.value.toLowerCase();
    const filtered = data.filter(item =>
      item.title.toLowerCase().includes(value) || item.desc.toLowerCase().includes(value)
    );
    renderData(filtered);
  });
  
  renderData(data);
  