<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login</h1>

    <form method="POST" action="{{ route('logo') }}">
        @csrf
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="name">
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>
