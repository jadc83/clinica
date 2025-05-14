<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Carbon::setLocale('es');

        $citas = Auth::user()->citas;
        $primero = Carbon::now()->startOfMonth();
        $ultimo = Carbon::now()->endOfMonth();

        $mes = CarbonPeriod::create($primero, $ultimo);
        return view('citas.index', ['citas' => $citas, 'mes' => $mes]);
    }

    public function horas($dia)
    {
        $horarios = [];
        $inicio = Carbon::createFromTime(9, 0, 0);

        for ($i = 0; $i < 5; $i++) {
            $horario = $inicio->copy()->addHours($i)->format('H:i');
            $horarios[] = $horario;
        }

        return view('citas.horas', ['dia' => $dia, 'horarios' => $horarios]);
    }

    public function confirmacion($dia, $hora)
    {
        Carbon::setLocale('es');

        return view('citas.confirmacion', ['dia' => $dia, 'hora' => $hora]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        //
    }
}
