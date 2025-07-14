
<h2>Players List</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Retired</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($players as $player)
        <tr>
            <th scope="row">{{$player->id}}</th>
            <td>{{$player->name}}</td>
            <td>{{$player->address}}</td>
            <td>
                @if ($player->retired)
                    <i class="bi bi-emoji-smile-fill text-success"></i>
                @else
                    <i class="bi bi-emoji-frown-fill text-danger"></i>
                @endif
            </td>
            <td>
                <button class="btn btn-success">Show</button>
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>

    @endforeach
  </tbody>
</table>