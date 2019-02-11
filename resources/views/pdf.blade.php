<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Download PDF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css.css" />
    <script src="js/app.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
    
    @font-face {
        font-family: 'Lato';
        font-style: black;
        font-weight: normal;
        src: url("{{ url('fonts/Lato-Regular.ttf') }}") format('truetype');
    }

    @font-face {
        font-family: 'Lato';
        font-style: bold;
        font-weight: bold;
        src: local('Lato Bold'), local('Lato-Bold'), url("{{ url('fonts/Lato-Bold.ttf') }}") format('truetype');
    }

    @font-face {
        font-family: 'Lato';
        font-style: italic;
        font-weight: normal;
        src: local('Lato Italic'), local('Lato-Italic'), url("{{ url('fonts/Lato-Italic.ttf') }}") format('truetype');
    }

    body {
        font-family: Lato;
        font-style: normal;
        font-weight: normal;
    }
  </style>
</head>
<body>
    <table class="table table-bordered">
        <tr>
            <p>{{ url('fonts/Lato2OFL/Lato-Regular.ttf') }}</p>
            <td style="font-style: bold; font-weight: bold;">{{ $user->full_name }}</td>
            <td style="font-style: italic; font-weight: normal;">{{ $user->street_address }}</td>
            <td style="font-style: normal; font-weight: normal;">{{ $user->city }}</td>
            <td>{{ $user->zip }}</td>
        </tr>
    </table>
    <img style="-webkit-filter: drop-shadow(0 0 0.75rem crimson); filter: drop-shadow(0 0 0.75rem crimson);"  src="{{ public_path('logo.png') }}" alt="Trial Image" width="auto" height="auto">
</body>
</html>