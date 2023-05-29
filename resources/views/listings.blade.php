<h1>{{ $heading }}</h1>

@if(count($listings) == 0)
    <p>No listings found</p>
@endif

@foreach($listings as $listing)
    <h2>
        {{-- {{}} e tot una cu <?php echo '' ?> --}}
        <a href="/listings/{{$listing['id']}}">{{$listing['title']}}
        </a>
    </h2>
    <p>
        {{$listing['description']}}
    </p>
@endforeach