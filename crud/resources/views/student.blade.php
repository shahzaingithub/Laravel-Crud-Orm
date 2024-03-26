<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('insert.data') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Your Name">

        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Enter Your Title">

        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Enter Your Description">
        
        <input type="submit" value="Submit">
    </form>

    @if(isset($std))
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach($std as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->title }}</td>
            <td>{{ $data->description }}</td>
            <td><a href="{{route('student.update',['id'=>$data->id])}}">update</a></td>
            <td><a href="{{route('student.delete',['id'=>$data->id])}}">delete</a></td>
        </tr>
        @endforeach
    </table>
    @endif

</body>
</html>
