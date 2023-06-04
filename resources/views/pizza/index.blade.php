@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">

    @if (count($pizza) > 0) 

        @foreach ($pizza as $pizzaType)

            <div>
                <h3>
                    {{$pizzaType['type']}}
                    <ul>
                        <li>
                            Made by: {{$pizzaType['cook']}}
                        </li>
                    </ul>
                </h3>
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