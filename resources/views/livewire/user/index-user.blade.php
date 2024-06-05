<div>
  <a href="{{route('user.create')}}">Agregar Usuario</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre del Usuario</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Pais</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->city->name }}</td>
                    <td>{{ $user->city->country->name }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('user.show', $user->id) }}">Show</a>
                        <form wire:submit="delete({{ $user->id }})" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm mt-1" type="submit">Elminar</button>
                        </form>
                        <a class="btn btn-primary btn-sm mt-1" href="{{ route('user.edit', $user->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
            {{ $users->links() }}
        </tbody>
    </table>
</div>
