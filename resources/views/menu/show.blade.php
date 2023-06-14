@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">

    <div>
        <h3>
            {{$pizza['pizza_name']}}
            <ul>
                <li>
                    Weight: {{$pizza['pizza_weight']}}
                </li>
                <li>
                    Made by: {{$pizza['cook_name']}}
                </li>
            </ul>
        </h3>
    </div>

</div>
@endsection