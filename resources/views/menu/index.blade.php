@extends('layout')

@section('title', 'Menu | Pizzeria Margherita')

@section('content')
<div class="menu-container max-w-7xl mx-auto p-6 lg:p-8">
<div class="small-menu-container">

    @if (count($pizzas) > 0)

        @foreach ($pizzas as $pizza)

            <div class="pizza">
                <h3>
                    <a href="{{ route('menu.show', ['menu' => $pizza['id']])}}">{{ $pizza['pizza_name'] }}</a>
                </h3>
                <ul>
                    <li>
                        Weight: {{ $pizza['pizza_weight'] }}
                    </li>
                    <li>
                        Made by: {{ $pizza['cook_name'] }}
                    </li>
                </ul>
            </div>

        @endforeach

    @endif

</div>
</div>
@endsection