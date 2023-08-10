<!DOCTYPE html>
<html>
<head>
    <title>Birth Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .certificate {
            border: 2px solid #000;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            background-color: #f4f4f4;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
        }
        .info {
            margin-top: 10px;
        }
        .field {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <div class="header">
            <div class="title">Birth Certificate</div>
            <div>Issued on: {{ $date }}</div>
        </div>
        <div class="info">
            <div class="field">Name:</div>
            <div>{{ $name }}</div>
        </div>
        <div class="info">
            <div class="field">Date of Birth:</div>
            <div>{{ $dob }}</div>
        </div>
        <div class="info">
            <div class="field">Place of Birth:</div>
            <div>{{ $location  }}</div>
        </div>
        <div class="info">
            <div class="field">Gender:</div>
            <div>{{ $sex }}</div>
        </div>
        <div class="info">
            <div class="field">Father's Details:</div>
            <div>
                Name: {{ $father_name }}<br/>
                Occupation: {{ $father_occupation }}<br/>
                Nationality: {{ $father_nationality }}<br/>
                Religion: {{ $father_religion }}<br/>
            </div>
        </div>
        <div class="info">
            <div class="field">Mother's Details:</div>
            <div>
                Maiden Name: {{ $mother_name }}<br/>
                Nationality: {{ $mother_nationality }}<br/>
            </div>
        </div>
        <div class="info">
            <div class="field">Registration Number:</div>
            <div>{{ $id }}</div>
        </div>
    </div>
</body>
</html>
