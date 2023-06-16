@extends('layout')

@section('title', 'Menu - Edit | Pizzeria Margherita')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">

    <form method="POST" action="{{ route('menu.update', ['menu' => $pizza->id]) }}">
        
        @csrf
        @method('PUT')
        <div class="input-container">
            <label class="text-sm" for="pizza-name">Pizza name</label>
            <input class="text-lg border-1" type="text" id="pizza-name" value="{{ $pizza->pizza_name }}" name="pizza-name">
            @error('pizza-name')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-container">
            <label class="text-sm" for="pizza-weight">Pizza weight</label>
            <input class="text-lg border-1" type="text" id="pizza-weight" value="{{ $pizza->pizza_weight }}" name="pizza-weight">
            @error('pizza-weight')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-container">
            <label class="text-sm" for="cook-name">Cook name</label>
            <input class="text-lg border-1" type="text" id="cook-name" value="{{ $pizza->cook_name }}" name="cook-name">
            @error('cook-name')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>     
        <div class="container">
            <button class="border-1">Submit</button>
        </div>
        
    </form>

</div>
@endsection