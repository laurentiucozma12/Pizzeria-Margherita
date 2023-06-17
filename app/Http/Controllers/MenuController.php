<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu.index', [
            'pizzas' => Pizza::all()
        ]);
    }

    public function create()
    {
        return view('menu/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pizza-name' => 'required',    
            'pizza-weight' => ['required', 'integer'],    
            'cook-name' => 'required'
        ]);

        // POST
        $pizza = new Pizza();

        $pizza->pizza_name = $request->input('pizza-name');
        $pizza->pizza_weight = $request->input('pizza-weight');
        $pizza->cook_name = $request->input('cook-name');

        $pizza->save();

        return redirect()->route('menu.index');
    }

    public function show($pizza)
    {
        // GET
        return view('menu.show', [
            'pizza' => Pizza::findOrFail($pizza)
        ]);
    }

    public function edit($pizza)
    {
        // GET
        return view('menu.edit', [
            'pizza' => Pizza::findOrFail($pizza)
        ]);
    }

    public function update(Request $request, string $pizza)
    {
        $request->validate([
            'pizza-name' => 'required',    
            'pizza-weight' => ['required', 'integer'],    
            'cook-name' => 'required'
        ]);

        // POST
        $record = Pizza::FindOrFail($pizza);

        $record->pizza_name = $request->input('pizza-name');
        $record->pizza_weight = $request->input('pizza-weight');
        $record->cook_name = $request->input('cook-name');

        $record->save();

        return redirect()->route('menu.show', $pizza);
    }

    public function destroy(string $pizza)
    {
        $record = Pizza::find($pizza);
 
        $record->delete();
        
        return redirect()->route('menu.index', $pizza);
    }
}