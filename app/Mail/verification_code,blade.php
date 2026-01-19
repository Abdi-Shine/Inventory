<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Code</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7fa;
            padding: 20px;
            line-height: 1.6;
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
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .email-header p {
            font-size: 16px;
            opacity: 0.9;
        }
        
        .email-body {
            padding: 40px 30px;
        }
        
        .greeting {
            font-size: 18px;
            color: #333333;
            margin-bottom: 20px;
        }
        
        .message {
            font-size: 16px;
            color: #666666;
            margin-bottom: 30px;
            line-height: 1.8;
        }
        
        .verification-code-container {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            margin: 30px 0;
            border: 2px dashed #667eea;
        }
        
        .verification-code-label {
            font-size: 14px;
            color: #666666;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .verification-code {
            font-size: 42px;
            font-weight: 700;
            color: #667eea;
            letter-spacing: 8px;
            font-family: 'Courier New', monospace;
            margin: 10px 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .expiry-notice {
            font-size: 13px;
            color: #999999;
            margin-top: 15px;
            font-style: italic;
        }
        
        .warning-box {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px 20px;
            margin: 25px 0;
            border-radius: 4px;
        }
        
        .warning-box p {
            font-size: 14px;
            color: #856404;
            margin: 0;
        }
        
        .footer-message {
            font-size: 14px;
            color: #666666;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eeeeee;
        }
        
        .email-footer {
            background-color: #f8f9fa;
            padding: 25px 30px;
            text-align: center;
            color: #999999;
            font-size: 13px;
        }
        
        .email-footer p {
            margin: 5px 0;
        }
        
        .email-footer a {
            color: #667eea;
            text-decoration: none;
        }
        
        .email-footer a:hover {
            text-decoration: underline;
        }
        
        @media only screen and (max-width: 600px) {
            .email-container {
                border-radius: 0;
            }
            
            .email-header {
                padding: 30px 20px;
            }
            
            .email-header h1 {
                font-size: 24px;
            }
            
            .email-body {
                padding: 30px 20px;
            }
            
            .verification-code {
                font-size: 36px;
                letter-spacing: 6px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>🔐 Verification Code</h1>
            <p>Secure Login Authentication</p>
        </div>
        
        <!-- Body -->
        <div class="email-body">
            <div class="greeting">
                Hello!
            </div>
            
            <div class="message">
                You have requested to log in to your account. To complete the authentication process, 
                please use the verification code below:
            </div>
            
            <!-- Verification Code Box -->
            <div class="verification-code-container">
                <div class="verification-code-label">Your Verification Code</div>
                <div class="verification-code">{{ $code }}</div>
                <div class="expiry-notice">⏱️ This code will expire in 10 minutes</div>
            </div>
            
            <!-- Warning Box -->
            <div class="warning-box">
                <p>
                    <strong>⚠️ Security Notice:</strong> If you did not request this code, 
                    please ignore this email and ensure your account is secure.
                </p>
            </div>
            
            <div class="footer-message">
                <p>
                    For your security, never share this code with anyone. Our team will never 
                    ask you for this code via email, phone, or any other means.
                </p>
                <p style="margin-top: 15px;">
                    Thank you for using our service!
                </p>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="email-footer">
            <p><strong>Inventory Management System</strong></p>
            <p>This is an automated message, please do not reply to this email.</p>
            <p style="margin-top: 10px;">
                © {{ date('Y') }} All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
