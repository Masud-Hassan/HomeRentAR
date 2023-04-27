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
        <a href="{{url('')}}">Check posts</a>
        <a href="{{url('')}}">Check post from other sites</a>
        <a href="{{url('')}}">Logout</a>
    </div>
    <div class="content">
        @foreach ($reference as $key => $item)

        <div style="border-color: black; border-width: 5px;">
            <p>City: {{$item['City']}}</p><br>
            <p>Post-Code: {{$item['Post-Code']}}</p><br>
            <p>Description: {{$item['Description']}}</p><br><br><br>
        </div>

        @endforeach
    </div>
</body>
</html>
