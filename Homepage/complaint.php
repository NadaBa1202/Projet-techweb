<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $complaint = trim($_POST["complaint"] ?? '');

    if (empty($complaint)) {
        echo "Please describe your issue.";
    } else {
        // Example: Save complaint or send email
        echo "Your complaint has been submitted. Thank you.";
    }
} else {
    echo "Invalid request.";
}
?>
