<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .confirmation-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .confirmation-icon {
            font-size: 80px;
            color: #4CAF50;
            margin-bottom: 20px;
        }
        
        .confirmation-title {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }
        
        .confirmation-message {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #666;
        }
        
        .home-button {
            display: inline-block;
            padding: 12px 30px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }
        
        .home-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="confirmation-container">
        <div class="confirmation-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <h1 class="confirmation-title">Booking Confirmed!</h1>
        <p class="confirmation-message">
            Thank you for your booking. We have sent a confirmation email with all the details.
            Our team will contact you shortly to finalize your reservation.
        </p>
        <a href="index.html" class="home-button">Return to Home</a>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>