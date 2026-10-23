<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
</head>
<body>
    <div class="floating-box form-container">
        <h2 class="form-title">Login Admin</h2>
        <form action="{{ route('admin.login.submit') }}" method="post">
            @csrf
            <div>
                <label for="email"class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div>
                <label for="password"class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="btn-group">
                <button type="submit" class="btn-submit">Login</button>
                <a href="{{ route('beranda') }}" class="btn-cancel">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
