<div>
    <div class="input-group mb-3">
        <input wire:model="cari" type="text" class="form-control" placeholder="cari nama.."
            aria-label="Recipient's username" aria-describedby="basic-addon2">
        <span class="input-group-text" id="basic-addon2">Cari</span>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('users.show', $user->id) }}" class="badge bg-primary">Detail</a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="badge bg-success">Update</a>
                                    <button onclick="return confirm('Delete entry?')"
                                        wire:click='delete({{ $user->id }})' class="badge bg-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </div>

                    <div class="container d-flex justify-content-center">
                        {{ $users->links() }}
                    </div>
                </tbody>
            </table>
        </div>
    </div>
</div>
