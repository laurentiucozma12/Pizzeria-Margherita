@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="flex justify-center">
        <h1>Contact Us</h1>
    </div>

    <div class="mt-16">
        <p>This is Contact page</p>
    </div>
</div>
@endsection

@section('scripts')
<script>
    alert("Script works in contact page!");
</script>
@endsection