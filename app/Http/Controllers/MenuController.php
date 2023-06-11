<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class MenuController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('menu.index', [
            'pizzas' => Pizza::all()
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
        // POST
        $pizza = new Pizza();

        $pizza->pizza_name = $request->input('pizza-name');
        $pizza->pizza_weight = $request->input('pizza-weight');
        $pizza->cook_name = $request->input('cook-name');

        $pizza->save();

        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     */
    private static function getData() {
        return [
            ['id' => 1, 'type' => 'Margherita', 'cook' => 'Giovanni'],
            ['id' => 2, 'type' => 'Chicken Delichips', 'cook' => 'Leonard'],
            ['id' => 3, 'type' => 'Quatro Stagionni', 'cook' => 'Gaspacio'],
            ['id' => 4, 'type' => 'Tonno e Cipolla', 'cook' => 'Gordon Ramsy']        
        ];
    }

    public function show(string $menu)
    {
        $pizzas = self::getData();

        $index = array_search($menu, array_column($pizzas, 'id'));

        if ($index === false) {
            abort(404);
        }

        return view('menu.show', [
            'pizza' => $pizzas[$index]
        ]);
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
