<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Importar la clase Mail
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function create()
    {
        return view('contacto.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        // Guardar en la base de datos
        Contacto::create($validated);

        // Enviar correo electrónico
        Mail::raw("Nombre: {$validated['nombre']}\nEmail: {$validated['email']}\nMensaje: {$validated['mensaje']}", function ($message) use ($validated) {
            $message->to('t052700920@unitru.edu.pe')
                    ->subject('Contactarse por el Área de Gestión académica');
        });

        return redirect('/contacto')->with('success', 'Mensaje enviado correctamente');
    }
}