@extends('layouts.loggedin')

@section('content')

    <a href="/players/music">
        <section class="homeButton"> View Music Players </section>
    </a>
        
    <a href="/players/digitalsignage">
        <section class="homeButton"> View Digital Signage Players </section>
    </a>
    
    <a href="/players/interactivedisplay">
        <section class="homeButton"> View Interactive Display Players </section>
    </a>

@endsection
