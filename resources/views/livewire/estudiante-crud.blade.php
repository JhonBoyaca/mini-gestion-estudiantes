<div>
    <form wire:submit.prevent="guardar" class="mb-10">
        <input wire:model="nombre" type="text" placeholder="Nombre" class="form-control mb-2">
        <input wire:model="email" type="email" placeholder="Email" class="form-control mb-2">
        <button class="btn btn-primary">Guadar</button>
    </form>

    <table class="table table-sm table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $i => $estudiante)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
