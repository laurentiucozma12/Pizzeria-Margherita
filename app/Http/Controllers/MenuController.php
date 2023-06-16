<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Http\Requests\MenuFormRequest;

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
    // Cleaner but does not work yet
    // public function store(Request $request)
    // {
    //     $data = $request->validated();

    //     // POST
    //     $pizza = new Pizza();

    //     $pizza->pizza_name = $data['pizza-name'];
    //     $pizza->pizza_weight = $data['pizza_weight'];
    //     $pizza->cook_name = $data['cook_name'];

    //     $pizza->save();

    //     return redirect()->route('menu.index');
    // }

    public function show($pizza)
    {
        // GET
        return view('menu.show', [
            'pizza' => Pizza::findOrFail($pizza)
        ]);
    }
    // Cleaner but does not work yet
    // public function show(Pizza $pizza)
    // {
    //     // GET
    //     return view('menu.show', [
    //         'pizza' => $pizza
    //     ]);
    // }

    public function edit($pizza)
    {
        return view('menu.edit', [
            'pizza' => Pizza::findOrFail($pizza)
        ]);
    }
    // Cleaner but does not work yet
    // public function edit(Pizza $pizza)
    // {
    //     // GET
    //     return view('menu.edit', [
    //         'pizza' => $pizza
    //     ]);
    // }

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
    // Cleaner but does not work yet
    // public function update(MenuFormRequest $request, Pizza $pizza)
    // {
    //     // POST
    //     $data = $request->validated();

    //     // POST
    //     $pizza->pizza_name = $data['pizza-name'];
    //     $pizza->pizza_weight = $data['pizza_weight'];
    //     $pizza->cook_name = $data['cook_name'];

    //     $pizza->save();

    //     return redirect()->route('menu.show', $pizza->id);
    // }

    public function delete($pizza)
    {
        return view('menu.delete', [
            'pizza' => Pizza::findOrFail($pizza)
        ]);
    }

    // public function destroy(string $pizza)
    // {
    //     // return view('menu.delete', [
    //     //     'pizza' => Pizza::findOrFail($pizza)
    //     // ]);
    // }
}