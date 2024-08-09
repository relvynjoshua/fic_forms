<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomplishment Report Word</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f0f0f0;
        }
        .container {
            width: 90%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .form-header {
            display: flex;
            align-items: center;
            background-color: #f58220;
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
        }
        .form-header img {
            width: 50px;
            margin-right: 20px;
        }
        .form-header h1 {
            font-size: 24px;
            margin: 0;
        }
        .form-group {
            margin: 20px 0;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group span.value {
            display: block;
            padding: 10px;
            background: #f5f5f5;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        .columns {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            align-items: start;
        }
        .column {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.1);
        }
        .form-group.activity-team, .form-group.project-timeline, .form-group.key-deliverables, .form-group.project-objectives {
        grid-template-columns: repeat(4, 1fr); /* Change the number based on the number of columns needed */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #dddddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="form-header">
        <img src="{{ public_path('logo.png') }}" alt="FIC Logo">
        <h1>ACCOMPLISHMENT REPORT</h1>
    </div>

    <div class="form-group">
        <label>Strategic Performance Management System:</label>
        <span class="value">{{ $accomplishment_type }}</span>
    </div>

    <table>
        <tr>
            <th>Period</th>
            <th>Others</th>
        </tr>
        <tr>
            <td><span class="value">{{ $period }}</span></td>
            <td><span class="value">{{ $acc_others }}</span></td>
        </tr>
    </table>

</div>
</body>
</html>
