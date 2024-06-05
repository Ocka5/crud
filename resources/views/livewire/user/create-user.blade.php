<div>
    <form action="" wire:submit="create()" method="post">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre del Usuario</th>
                <th scope="col">Correo</th>
                <th scope="col">Clave</th>
                <th scope="col">Pais</th>
                <th scope="col">Ciudad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" wire:model="name"></td>
                <td><input type="email" wire:model="email"></td>
                <td><input type="password" wire:model="password"></td>
                <td>
                    <select wire:model.live='country'>
                        <option value="" selected>--</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select wire:model.live='city'>
                        <option value="" selected>--</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <button class="btn btn-success" >Crear</button>
                </td>
            </tr>
        </tbody>
    </table>
    </form>
</div>
