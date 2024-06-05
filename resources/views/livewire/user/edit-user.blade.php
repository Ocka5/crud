<div>
    <form wire:submit.prevent="update" method="post">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre del Usuario</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Pais</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" wire:model="name">
                    </td>
                    <td>
                        <select wire:model="city" wire:change="updateCityList">
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="text" wire:model="country" disabled>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit">Actualizar</button>
    </form>
</div>
