<?php

namespace App\Http\Controllers;

use App\Models\organisators;
use Illuminate\Http\Request;

class OrganisatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return organisators::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new organisators();
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return organisators::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $record = organisators::find($id);
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        organisators::find($id)->delete();
    }
}
