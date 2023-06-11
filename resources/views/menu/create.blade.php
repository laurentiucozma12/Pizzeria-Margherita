@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">

    <form method="POST" action="{{route('menu.store')}}">
        <div>
            <label class="text-sm" for="pizza-name">Pizza name</label>
            <input class="text-lg border-1" type="text" id="pizza-name" name="pizza-name">
        </div>
        <div>
            <label class="text-sm" for="pizza-weight">Pizza weight</label>
            <input class="text-lg border-1" type="text" id="pizza-weight" name="pizza-weight">
        </div>
        <div>
            <label class="text-sm" for="cook-name">Cook name</label>
            <input class="text-lg border-1" type="text" id="cook-name" name="cook-name">
        </div>
    </form>

</div>
@endsection