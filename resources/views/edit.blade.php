<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register  edit form</title>
</head>
<body>
<form action="{{ url('studentlist-update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
        <input type="text" name="name" value="{{ $data->name }}" id="name" placeholder="enter your name">
        <br>
        <br>
        <input type="text" name="email" value="{{ $data->email }}" id="email" placeholder="enter your email">
        <br>
        <br>
        <input type="password" name="password" value="{{ $data->password }}" id="password" placeholder="enter your password">
        <br>
        <br>
        <input type="text" name="phone" value="{{ $data->phone }}" id="phone" placeholder="enter your phone">
        <br>
        <br>
        <input type="text" name="address"  value ="{{ $data->address }}" id="address" placeholder="enter your address">
        <br>
        <br>
        <input type="file" name="image" value ="{{ $data->image }}" id="image" placeholder="select your image">
        <br>
        <br>
        <select name="gender">
        <option value="Male" {{ $data->gender == 'Male' ? 'selected' : '' }}>Male</option>
        
        <option value="Female" {{ $data->gender == 'Female' ? 'selected' : '' }}>Female</option>

        <option value="others" {{ $data->gender == 'others' ? 'selected' : '' }}>others</option>
    </select><br><br>
        <br>
        <br>
        <label>Image:</label>
    <input type="file" name="image"><br><br>
    <img src="{{ asset('images/' . $data->image) }}" alt="Student Image" width="100"><br><br>

        <input type="submit" value="submit">
    </form>
</body>
</html> 