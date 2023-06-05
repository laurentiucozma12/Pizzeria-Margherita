@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">

    @if (count($pizzas) > 0) 

        @foreach ($pizzas as $pizza)

            <div>
                <h3>
                    <a href="{{ route('pizza.show', ['pizza' => $pizza['id']])}}">{{$pizza['type']}}</a>
                </h3>                
                <ul>
                    <li>
                        Made by: {{$pizza['cook']}}
                    </li>
                </ul>
            </div>

        @endforeach

    @else
        <h2>There is no Pizza to display :^(</h2>
    
    @endif

    <div>
        User input: {{$userInput}}
    </div>

</div>
@endsection