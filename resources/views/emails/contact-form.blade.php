<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .email-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #1976d2;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #1976d2;
            margin: 0;
            font-size: 24px;
        }
        .contact-details {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .contact-details h2 {
            color: #1976d2;
            margin-top: 0;
            font-size: 18px;
        }
        .detail-row {
            display: flex;
            margin-bottom: 10px;
        }
        .detail-label {
            font-weight: bold;
            width: 120px;
            color: #555;
        }
        .detail-value {
            flex: 1;
        }
        .message-section {
            background-color: #e3f2fd;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #1976d2;
        }
        .message-section h3 {
            color: #1976d2;
            margin-top: 0;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 14px;
        }
        .highlight {
            color: #1976d2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>HairTransPro Clinic</h1>
            <p>New Contact Form Submission</p>
        </div>
        
        <div class="contact-details">
            <h2>Contact Information</h2>
            <div class="detail-row">
                <span class="detail-label">Name:</span>
                <span class="detail-value">{{ $name }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Email:</span>
                <span class="detail-value">{{ $email }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Phone:</span>
                <span class="detail-value">{{ $phone }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Preferred Date:</span>
                <span class="detail-value">{{ $preferred_date }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Service:</span>
                <span class="detail-value">{{ $service }}</span>
            </div>
        </div>
        
        <div class="message-section">
            <h3>Message</h3>
            <p>{{ $formMessage }}</p>
        </div>
        
        <div class="footer">
            <p>This message was sent from the HairTransPro website contact form.</p>
            <p>Please respond to <span class="highlight">{{ $email }}</span> to get in touch with the customer.</p>
            <p>&copy; {{ date('Y') }} HairTransPro Clinic. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
