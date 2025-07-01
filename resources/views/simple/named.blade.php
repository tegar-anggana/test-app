<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Named Route Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .content {
            text-align: center;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #6366f1;
        }
    </style>
</head>
<body>
<div class="content">
    <h1>Named Route</h1>
    <p>This is the named route page rendered by <code>SimpleController</code>.</p>
    <span>
        You can use
    </span>
    <a href="{{ route('named') }}"> route('route_name')</a>
    <span>
         to the href attribute in blade.
    </span>
</div>
</body>
</html>
