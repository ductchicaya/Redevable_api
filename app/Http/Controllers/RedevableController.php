<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Redevable;

class RedevableController extends Controller
{

    protected $redevable;

    public function __construct(){
        $this ->redevable = new Redevable();

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this ->redevable ->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->redevable->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->redevable->find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $redevable = $this->redevable->find($id);
        $redevable->update($request->all());
        return $redevable;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $redevable = $this->redevable->find($id);
        return $redevable->delete();
    }
}
