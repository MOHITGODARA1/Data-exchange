<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $userMessage = strtolower(trim($_POST["message"]));

//     // Predefined responses
//     $responses = [
//         "hello" => "Hi there! How can I help you?",
//         "help" => "Sure! Let me know what you need help with.",
//         "upload" => "To upload data, click on the 'Upload Data' link in the navigation menu.",
//         "view" => "To view and share data, click on the 'View & Share' link in the navigation menu.",
//         "bye" => "Goodbye! Have a great day!",
//         "features" => "Our platform offers features like secure file sharing, real-time collaboration, and data encryption.",
//         "pricing" => "Our pricing plans are flexible. Please visit the 'Pricing' section for more details.",
//         "contact" => "You can contact us via the 'Contact Us' page or email us at support@example.com.",
//         "security" => "We use end-to-end encryption and follow industry standards to ensure your data is secure.",
//         "reset password" => "To reset your password, click on 'Forgot Password' on the login page.",
//         "register" => "To register, click on the 'Sign Up' button on the homepage and fill out the form.",
//         "dashboard" => "Your dashboard provides an overview of your activities and quick access to key features.",
//         "support" => "For support, visit the 'Help Center' or contact our support team.",
//     ];

//     // Default response
//     $botResponse = $responses[$userMessage] ?? "I'm sorry, I didn't understand that. Can you rephrase?";

//     // Return the bot's response
//     echo $botResponse;
//     exit;
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userMessage = strtolower(trim($_POST["message"]));

    // Predefined responses
    $responses = [
        "hello" => "Hi there! How can I help you?",
        "help" => "Sure! Let me know what you need help with.",
        "upload" => "To upload data, click on the 'Upload Data' link in the navigation menu.",
        "view" => "To view and share data, click on the 'View & Share' link in the navigation menu.",
        "bye" => "Goodbye! Have a great day!",
        "features" => "Our platform offers features like secure file sharing, real-time collaboration, and data encryption.",
        "pricing" => "Our pricing plans are flexible. Please visit the 'Pricing' section for more details.",
        "contact" => "You can contact us via the 'Contact Us' page or email us at support@example.com.",
        "security" => "We use end-to-end encryption and follow industry standards to ensure your data is secure.",
        "reset password" => "To reset your password, click on 'Forgot Password' on the login page.",
        "register" => "To register, click on the 'Sign Up' button on the homepage and fill out the form.",
        "dashboard" => "Your dashboard provides an overview of your activities and quick access to key features.",
        "support" => "For support, visit the 'Help Center' or contact our support team.",
    ];

    // Check if the user message matches a predefined response
    if (array_key_exists($userMessage, $responses)) {
        $botResponse = $responses[$userMessage];
    } elseif ($userMessage === "weather") {
        // Example API integration: Fetch weather data
        $apiKey = "AIzaSyCOvSw2V7m8Bvop_IiX-38nkGUOz2465cQ"; // Replace with your API key
        $city = "Punjab"; // Replace with the desired city
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

        // Fetch data from the API
        $apiResponse = file_get_contents($apiUrl);
        if ($apiResponse) {
            $weatherData = json_decode($apiResponse, true);
            if (isset($weatherData["main"]["temp"])) {
                $temperature = $weatherData["main"]["temp"];
                $description = $weatherData["weather"][0]["description"];
                $botResponse = "The current temperature in {$city} is {$temperature}°C with {$description}.";
            } else {
                $botResponse = "Sorry, I couldn't fetch the weather data right now.";
            }
        } else {
            $botResponse = "Sorry, I couldn't connect to the weather service.";
        }
    } else {
        // Default response
        $botResponse = "I'm sorry, I didn't understand that. Can you rephrase?";
    }

    // Return the bot's response
    echo $botResponse;
    exit;
}
?>