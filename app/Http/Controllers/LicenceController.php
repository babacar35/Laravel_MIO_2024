<?php

namespace App\Http\Controllers;

use App\Models\Licence;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LicenceRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LicenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $licences = Licence::paginate();

        return view('licence.index', compact('licences'))
            ->with('i', ($request->input('page', 1) - 1) * $licences->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $licence = new Licence();

        return view('licence.create', compact('licence'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LicenceRequest $request): RedirectResponse
    {
        Licence::create($request->validated());

        return Redirect::route('licences.index')
            ->with('success', 'Licence created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $licence = Licence::find($id);

        return view('licence.show', compact('licence'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $licence = Licence::find($id);

        return view('licence.edit', compact('licence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LicenceRequest $request, Licence $licence): RedirectResponse
    {
        $licence->update($request->validated());

        return Redirect::route('licences.index')
            ->with('success', 'Licence updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Licence::find($id)->delete();

        return Redirect::route('licences.index')
            ->with('success', 'Licence deleted successfully');
    }
}
