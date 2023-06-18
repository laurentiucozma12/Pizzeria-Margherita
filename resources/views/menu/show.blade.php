@extends('layout')

@section('title', 'Menu - Show | Pizzeria Margherita')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">

    <form method="POST" action="{{ route('menu.destroy', ['menu' => $pizza->id]) }}">

        @csrf
        @method('DELETE')
        <h3>{{ $pizza['pizza_name'] }}</h3>

        <ul>
            <li>
                Weight: {{ $pizza['pizza_weight'] }}
            </li>
            <li>
                Made by: {{ $pizza['cook_name'] }}
            </li>
        </ul>

        <div class="btn-container">
            <button><a href="{{ route('menu.edit', ['menu' => $pizza->id]) }}">Edit</a></button>
            <button class="delete-btn" type="submit">Delete</button>
        </div>

    </form>

</div>
@endsection