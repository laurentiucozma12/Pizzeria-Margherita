@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">

    @if (count($pizzas) > 0)

        @foreach ($pizzas as $pizza)

            <div>
                <h3>
                    <a href="{{ route('menu.show', ['menu' => $pizza['id']])}}">{{$pizza['pizza_name']}}</a>
                </h3>
                <ul>
                    <li>
                        Weight: {{$pizza['pizza_weight']}}
                    </li>
                    <li>
                        Made by: {{$pizza['cook_name']}}
                    </li>
                </ul>
            </div>

        @endforeach

    @endif

</div>
@endsection