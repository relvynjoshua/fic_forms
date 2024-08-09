<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Management Form PDF</title>
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
        <h1>ACTIVITY MANAGEMENT FORM</h1>
    </div>

    <table>
        <tr>
            <th>Activity Name</th>
            <th>Activity Manager</th>
            <th>Activity Leader</th>
            <th>Activity Partner/Client</th>
        </tr>
        <tr>
            <td><span class="value">{{ $activity_name }}</span></td>
            <td><span class="value">{{ $activity_manager }}</span></td>
            <td><span class="value">{{ $activity_leader }}</span></td> 
            <td><span class="value">{{ $activity_partner }}</span></td>
        </tr>
    </table>

    <div class="form-group">
        <label>Project Summary:</label>
        <span class="value">{{ $project_summary }}</span>
    </div>

    <div class="form-group">
        <label>Project Objectives:</label>
        <div class="columns">
            @for ($i = 1; $i <= 6; $i++)
                @php
                    $objective = 'project_objective_' . $i;
                @endphp
                @if (!empty($$objective))
                    <ul>
                        <li><span class="value">{{ $$objective }}</span></li>
                    </ul>
                @endif
            @endfor
        </div>
    </div>

    <div class="form-group">
        <label>Scope of Work:</label>
        <span class="value">{{ $scope_of_work }}</span>
    </div>

    <div class="form-group">
        <label>Key Deliverables:</label>
        <div class="columns">
            @for ($i = 1; $i <= 6; $i++)
                @php
                    $deliverables = 'key_deliverables_' . $i;
                @endphp
                @if (!empty($$deliverables))
                    <ul>
                        <li><span class="value">{{ $$deliverables }}</span></li>
                    </ul>
                @endif
            @endfor
        </div>
    </div>

    <label><strong>Project Timeline:</strong></label>

    <table>
        <tr>
            <th>Open</th>
            <th>Phase</th>
        </tr>
        <tr>
            <td><span class="value">{{ $open_date }}</span></td>
            <td><span class="value">{{ $phase }}</span></td>
        </tr>
    </table>

    <div class="form-group">
        <label>Gantt Chart:</label>
        @if($upload_gantt)
        <img src="{{ storage_path('app/public/storage' . $upload_gantt) }}" alt="0" style="width:100%; max-width:600px;"/>
        @else
            <span class="value">No Gantt Chart uploaded</span>
        @endif
    </div>

    <table>
        <tr>
            <th>Activity Team</th>
            <th>Role</th>
            <th>Responsibility</th>
            <th>Others</th>
        </tr>
        <tr>
            <td><span class="value">{{ $activity_team }}</span></td>
            <td><span class="value">{{ $role }}</span></td>
            <td><span class="value">{{ $responsibility }}</span></td>
            <td><span class="value">{{ $team_others }}</span></td>
        </tr>
    </table>

    <div class="form-group">
        <label>Comments:</label>
        <span class="value">{{ $comments }}</span>
    </div>
</div>
</body>
</html>
