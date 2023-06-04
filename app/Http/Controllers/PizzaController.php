<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    private static function getData() {
        return [
            // ['id' => 1, 'type' => 'Margherita', 'cook' => 'Giovanni'],
            // ['id' => 2, 'type' => 'Chicken Delichips', 'cook' => 'Leonard'],
            // ['id' => 3, 'type' => 'Quatro Stagionni', 'cook' => 'Gaspacio'],
            // ['id' => 4, 'type' => 'Tonno e Cipolla', 'cook' => 'Gordon Ramsy']        
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pizza.index', [
            'pizza' => self::getData(),
            'userInput' => '<script>alert("hello")</script>'
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
