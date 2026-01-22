<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 30px;
            color: #333;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #3085d6;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #3085d6;
        }
        .title {
            font-size: 20px;
            margin-top: 10px;
            color: #666;
        }
        .content {
            margin-top: 20px;
        }
        .review-info {
            width: 100%;
            border-collapse: collapse;
        }
        .review-info td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        .label {
            font-weight: bold;
            background-color: #f9f9f9;
            width: 30%;
        }
        .image-container {
            text-align: center;
            margin-top: 20px;
        }
        .review-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #ddd;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #888;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">HORNTECH INVENTORY</div>
        <div class="title">Review Detail Report</div>
    </div>

    <div class="content">
        <!-- <div class="image-container">
            @if(!empty($review->image))
                <img src="{{ public_path($review->image) }}" class="review-image">
            @else
                <img src="{{ public_path('upload/no_image.jpg') }}" class="review-image">
            @endif
        </div> -->

        <table class="review-info" style="margin-top: 30px;">
            <tr>
                <td class="label">Reviewer Name</td>
                <td>{{ $review->name }}</td>
            </tr>
            <tr>
                <td class="label">Position</td>
                <td>{{ $review->position }}</td>
            </tr>
            <tr>
                <td class="label">Date</td>
                <td>{{ $review->created_at->format('d M Y') }}</td>
            </tr>
            <tr>
                <td class="label" colspan="2">Review Message</td>
            </tr>
            <tr>
                <td colspan="2" style="height: 100px; vertical-align: top;">{{ $review->message }}</td>
            </tr>
        </table>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} HornTech Inventory. All rights reserved.
    </div>
</body>
</html>
