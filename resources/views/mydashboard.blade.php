<!DOCTYPE html>
<html>
<head>
    <title>My Dashboard</title>
</head>
<body>
<h1>Welcome, {{ Auth::user()->name }}!</h1>
<p>Email: {{ Auth::user()->email }}</p>

<form method="POST" action="/logout">
    @csrf
    <button type="submit">Logout</button>
</form>
</body>
</html>
