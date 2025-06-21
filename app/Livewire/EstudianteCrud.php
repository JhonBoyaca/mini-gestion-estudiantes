<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Estudiante;

class EstudianteCrud extends Component
{
    public $nombre, $email;
    public $estudiantes;
    public $contador = 0;

    public function incrementar()
    {
        $this->contador++;
    }

    public function mount()
    {
        $this->estudiantes = Estudiante::all();
    }

    public function guardar()
    {
        $this->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:estudiantes,email',
        ]);

        Estudiante::create([
            'nombre' => $this->nombre,
            'email' => $this->email,
        ]);

        $this->reset(['nombre', 'email']);
        $this->estudiantes = Estudiante::all();
    }

    public function render()
    {
        return view('livewire.estudiante-crud');
    }
}
