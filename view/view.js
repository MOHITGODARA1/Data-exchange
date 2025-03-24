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
        },
        {
            title: 'Tesla, Inc.',
            date: 'Uploaded: Mar 18, 2025',
            description: 'Tesla, Inc. is an American electric vehicle and clean energy company based in Palo Alto, California.',
            link: 'https://www.tesla.com'
        },
        {
            title: 'Google LLC',
            date: 'Uploaded: Mar 20, 2025',
            description: 'Google LLC is an American multinational technology company specializing in Internet-related services and products.',
            link: 'https://www.google.com'
        },
        {
            title: 'Meta Platforms, Inc.',
            date: 'Uploaded: Mar 22, 2025',
            description: 'Meta Platforms, Inc., formerly Facebook, Inc., is an American multinational technology conglomerate.',
            link: 'https://www.meta.com'
        },
        {
            title: 'Netflix, Inc.',
            date: 'Uploaded: Mar 25, 2025',
            description: 'Netflix, Inc. is an American subscription streaming service and production company.',
            link: 'https://www.netflix.com'
        },
        {
            title: 'NVIDIA Corporation',
            date: 'Uploaded: Mar 28, 2025',
            description: 'NVIDIA Corporation is an American multinational technology company known for its GPUs for gaming and professional markets.',
            link: 'https://www.nvidia.com'
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