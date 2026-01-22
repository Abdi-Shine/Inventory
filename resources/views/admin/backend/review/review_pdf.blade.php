<!DOCTYPE html>
<html>
<head>
    <title>Review List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Customer Reviews</h2>
        <p>Report Generated on: {{ date('d M Y, h:i A') }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th width="5%">Sl</th>
                <th width="20%">Name</th>
                <th width="20%">Position</th>
                <th width="55%">Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->position }}</td>
                <td>{{ $item->message }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
