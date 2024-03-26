<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('update.insert', ['id' => $std->id]) }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Your Name" value="{{$std->name}}">

        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Enter Your Title" value="{{$std->title}}">

        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Enter Your Description" value="{{$std->description}}">
        
        <input type="submit" value="Submit">
    </form>

 

</body>
</html>
