<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/Dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="header">
        <h1>Hello User</h1>
    </div>
    <div class="menu">
        <a href="{{url('postAD')}}">Post an Advert</a>
        <a href="{{url('showOwnPosts')}}">Check posts</a>
        <a href="{{url('')}}">Check post from other sites</a>
        <a href="{{url('')}}">Logout</a>
    </div>
    <div class="content">
        <h2>Welcome to the Dashboard</h2>
        <p>This is where you can manage your account and settings.</p>
    </div>
</body>
</html>
