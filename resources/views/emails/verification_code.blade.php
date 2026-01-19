<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Code</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7fa;
            padding: 20px;
            margin: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 30px;
            text-align: center;
            color: #ffffff;
        }
        .email-header h1 {
            font-size: 28px;
            margin: 0 0 10px 0;
        }
        .email-body {
            padding: 40px 30px;
        }
        .message {
            font-size: 16px;
            color: #666666;
            margin-bottom: 30px;
        }
        .verification-code-container {
            background: #f5f7fa;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            margin: 30px 0;
            border: 2px dashed #667eea;
        }
        .verification-code {
            font-size: 42px;
            font-weight: 700;
            color: #667eea;
            letter-spacing: 8px;
            font-family: 'Courier New', monospace;
        }
        .expiry-notice {
            font-size: 13px;
            color: #999999;
            margin-top: 15px;
        }
        .warning-box {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 25px 0;
        }
        .warning-box p {
            font-size: 14px;
            color: #856404;
            margin: 0;
        }
        .email-footer {
            background-color: #f8f9fa;
            padding: 25px 30px;
            text-align: center;
            color: #999999;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>🔐 Verification Code</h1>
            <p>Secure Login Authentication</p>
        </div>
        <div class="email-body">
            <div class="message">
                You have requested to log in to your account. Use the verification code below:
            </div>
            <div class="verification-code-container">
                <div style="font-size: 14px; color: #666; margin-bottom: 15px;">Your Verification Code</div>
                <div class="verification-code">{{ $code }}</div>
                <div class="expiry-notice">⏱️ This code will expire in 10 minutes</div>
            </div>
            <div class="warning-box">
                <p><strong>⚠️ Security Notice:</strong> If you did not request this code, please ignore this email.</p>
            </div>
        </div>
        <div class="email-footer">
            <p><strong>Inventory Management System</strong></p>
            <p>© {{ date('Y') }} All rights reserved.</p>
        </div>
    </div>
</body>
</html>
