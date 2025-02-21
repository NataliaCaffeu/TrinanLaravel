<?php

namespace App\Http\Controllers;

use App\Models\Prioridade;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PrioridadeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PrioridadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $prioridades = Prioridade::paginate();

        return view('prioridade.index', compact('prioridades'))
            ->with('i', ($request->input('page', 1) - 1) * $prioridades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $prioridade = new Prioridade();

        return view('prioridade.create', compact('prioridade'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PrioridadeRequest $request): RedirectResponse
    {
        Prioridade::create($request->validated());

        return Redirect::route('prioridades.index')
            ->with('success', 'Prioridade created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $prioridade = Prioridade::find($id);

        return view('prioridade.show', compact('prioridade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $prioridade = Prioridade::find($id);

        return view('prioridade.edit', compact('prioridade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PrioridadeRequest $request, Prioridade $prioridade): RedirectResponse
    {
        $prioridade->update($request->validated());

        return Redirect::route('prioridades.index')
            ->with('success', 'Prioridade updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Prioridade::find($id)->delete();

        return Redirect::route('prioridades.index')
            ->with('success', 'Prioridade deleted successfully');
    }
}
