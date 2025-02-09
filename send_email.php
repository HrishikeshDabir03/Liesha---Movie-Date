<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedOption = $_POST['selectedOption'];

    // Check if a valid option was selected
    if (!empty($selectedOption)) {
        $to = "hrishikesh.dabir333.hd@gmail.com";  // Replace with your recipient's email address
        $subject = "Date Movie option Selected";
        $message = "The selected option is: " . $selectedOption;
        $headers = "From: lieshadnaik24@gmail.com"; // Replace with your email address

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "There was an error sending the email.";
        }
    } else {
        echo "No option selected.";
    }
} else {
    echo "Invalid request.";
}
?>
