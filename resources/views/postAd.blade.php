<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Ad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/postad.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Create Ad</h1>
        <form action="{{url('/postADStore')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="category">City:</label>
                <select name="citylist" id="citylist">
                    <option>Dhaka</option>
                    <option>Gazipur</option>
                    <option>Narayanganj</option>
                    <option>Narshingdi</option>
                    <option>Tangail</option>
                    <option>Faridpur</option>
                    <option>Rajbari</option>  
                </select>
            </div>
            <div class="form-group">
                <label for="subcategory">Post-Code:</label>
                <input type="text" name="postcode" maxlength="4" minlength="4">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description"></textarea>
            </div>
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" name="photo" id="photo">
                <a href="#">Attach from Phone</a>
            </div>
            <div class="form-group">
                <input type="submit" value="Create">
            </div>
        </form>
    </div>
</body>
</html>
