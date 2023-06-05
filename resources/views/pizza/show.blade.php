@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">

    <div>
        <h3>
            {{$pizza['type']}}
            <ul>
                <li>
                    Made by: {{$pizza['cook']}}
                </li>
            </ul>
        </h3>
    </div>

</div>
@endsection