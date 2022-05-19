<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>
            <button class="btn btn-warning" onclick="show({{ $item->id }})">Edit</button>
            <button class="btn btn-danger" onclick="destroy({{ $item->id }})">Delete</button>
        </td>
    </tr>
    @endforeach
</table>