<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Download PDF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
    <script src="js/app.js"></script>
</head>
<body>
    <table class="table table-bordered">
        <tr>
            <td>{{ $user->full_name }}</td>
            <td>{{ $user->street_address }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->zip }}</td>
        </tr>
    </table>
</body>
</html>