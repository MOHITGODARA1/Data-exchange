document.addEventListener('DOMContentLoaded', function() {
    const dataContainer = document.getElementById('data-container');

    const marketData = [
        {
            title: 'Apple Inc.',
            date: 'Uploaded: Feb 24, 2025',
            description: 'Apple Inc. is an American multinational technology company headquartered in Cupertino, California.',
            link: 'https://www.apple.com'
        },
        {
            title: 'Microsoft Corporation',
            date: 'Uploaded: Mar 10, 2025',
            description: 'Microsoft Corporation is an American multinational technology company with headquarters in Redmond, Washington.',
            link: 'https://www.microsoft.com'
        },
        {
            title: 'Amazon.com, Inc.',
            date: 'Uploaded: Jan 15, 2025',
            description: 'Amazon.com, Inc. is an American multinational technology company based in Seattle, Washington.',
            link: 'https://www.amazon.com'
        }
    ];

    marketData.forEach(data => {
        const card = document.createElement('div');
        card.className = 'bg-white p-6 rounded-lg shadow-lg';
        card.innerHTML = `
            <h2 class="text-2xl font-semibold mb-2">${data.title}</h2>
            <p class="text-gray-600 mb-4">${data.date}</p>
            <p class="text-gray-600 mb-4">${data.description}</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300" onclick="shareData('${data.title}', '${data.link}')">Share</button>
        `;
        dataContainer.appendChild(card);
    });
});

function shareData(title, link) {
    const shareText = `Check out this market data: ${title}. More details at ${link}`;
    if (navigator.share) {
        navigator.share({
            title: 'Market Databank',
            text: shareText,
            url: link
        }).then(() => {
            console.log('Data shared successfully');
        }).catch(error => {
            console.error('Error sharing data:', error);
        });
    } else {
        alert(shareText);
    }
}