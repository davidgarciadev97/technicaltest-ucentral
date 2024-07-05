<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ReservaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ReservaController extends Controller
{
    /**
     * Mostrar una lista del recurso.
     */
    public function index(Request $request): View
    {
        $reservas = Reserva::paginate();

        return view('reserva.index', compact('reservas'))
            ->with('i', ($request->input('page', 1) - 1) * $reservas->perPage());
    }

    /**
     * Mostrar el formulario para crear un nuevo recurso.
     */
    public function create(): View
    {
        $reserva = new Reserva();

        return view('reserva.create', compact('reserva'));
    }

    /**
     * Almacene un recurso recién creado en el almacenamiento.
     */
    public function store(ReservaRequest $request): RedirectResponse
    {
        Reserva::create($request->validated());

        return Redirect::route('reservas.index')
            ->with('success', 'Reserva created successfully.');
    }

    /**
     * Muestra el recurso especificado.
     */
    public function show($id): View
    {
        $reserva = Reserva::find($id);

        return view('reserva.show', compact('reserva'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit($id): View
    {
        $reserva = Reserva::find($id);

        return view('reserva.edit', compact('reserva'));
    }

    /**
     * Actualice el recurso especificado en el almacenamiento.
     */
    public function update(ReservaRequest $request, Reserva $reserva): RedirectResponse
    {
        $reserva->update($request->validated());

        return Redirect::route('reservas.index')
            ->with('success', 'Reserva updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Reserva::find($id)->delete();

        return Redirect::route('reservas.index')
            ->with('success', 'Reserva deleted successfully');
    }
}


// Este controller gestiona la informacion de todo el crud dentro de la funcionalidad del sistema de reservas