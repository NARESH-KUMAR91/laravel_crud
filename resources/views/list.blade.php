<table border="1" style="border-collapse: collapse; width: 100%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Image</th> <!-- Add a column for the image -->
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @php $i = 1; @endphp
        @foreach ($list as $data)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->password }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->gender }}</td>
            <td>
                @if($data->image) 
                    <img src="{{ asset('images/' . $data->image) }}" alt="Image" width="100" height="100">
                @else
                    No Image
                @endif
            </td>
            <td><a href="{{ url('studentlist-edit/' . $data->id) }}">Edit</a></td>
            <td><a href="{{ url('studentlist-delete/' . $data->id) }}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
