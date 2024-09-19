<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
</head>
<body>
    <form action="{{url('home')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="name" placeholder="enter yor name">
        <br>
        <br>
        <input type="text" name="email" id="email" placeholder="enter your email">
        <br>
        <br>
        <input type="password" name="password" id="password" placeholder="enter your password">
        <br>
        <br>
        <input type="text" name="phone" id="phone" placeholder="enter your phone">
        <br>
        <br>
        <input type="text" name="address" id="address" placeholder="enter your address">
        <br>
        <br>
        <input type="file" name="image" id="image" placeholder="select your image">
        <br>
        <br>
        <select name="gender" id="gender">
        <option>select your gender</option>
            <option value="male">male</option>
            <option value="female">female</option>
            <option value="others">others</option>
        </select>
        <br>
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html> 