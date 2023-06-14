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

    public function show(Pizza $pizza)
    {
        // GET
        return view('menu.show', [
            'pizza' => $pizza
        ]);
    }

    public function edit(Pizza $pizza)
    {
        return view('menu.edit', [
            'pizza' => $pizza
        ]);
    }

    public function update(Request $request, Pizza $pizza)
    {
        $request->validate([
            'pizza-name' => 'required',    
            'pizza-weight' => ['required', 'integer'],    
            'cook-name' => 'required'
        ]);

        // POST
        $pizza->pizza_name = $request->input('pizza-name');
        $pizza->pizza_weight = $request->input('pizza-weight');
        $pizza->cook_name = $request->input('cook-name');

        $pizza->save();

        return redirect()->route('menu.show', $pizza->id);
    }

    public function destroy(string $id)
    {
        //
    }
}
