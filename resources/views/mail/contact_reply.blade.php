<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reply from HornTech</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f6f9fc;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        .header {
            background-color: #004161;
            padding: 30px;
            text-align: center;
        }
        .header img {
            max-height: 60px;
            background: white;
            padding: 5px;
            border-radius: 5px;
        }
        .content {
            padding: 40px;
        }
        .footer {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
        .btn {
            display: inline-block;
            background-color: #99CC33;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- Logo -->
             <img src="{{ $message->embed(public_path('upload/Horntech_logo/horntech_icon.jpg')) }}" alt="HornTech Logo">
        </div>
        <div class="content">
            <h2>Hello {{ $data['name'] }},</h2>
            
            <p>{!! nl2br(e($data['message'])) !!}</p>
            
            <p>If you have any further questions, please feel free to reply to this email.</p>
            
            <p>Best regards,<br>
            <strong>The HornTech Team</strong></p>
            <a href="https://thehorntech.com" class="btn">Visit Our Website</a>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} HornTech Ltd. All rights reserved.<br>
            Mogadishu, Somalia | +252 610 777625 | info@thehorntech.com
        </div>
    </div>
</body>
</html>
