<?php
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

    // Default response
    $botResponse = $responses[$userMessage] ?? "I'm sorry, I didn't understand that. Can you rephrase?";

    // Return the bot's response
    echo $botResponse;
    exit;
}
?>