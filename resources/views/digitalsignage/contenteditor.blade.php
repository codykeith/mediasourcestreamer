<!--Digital Signage Content Editor Page-->

@extends('layouts.loggedin')

@section('content')

<section class="playerEdit">
    
    <h1>Edit Player</h1>
    
    <h2>Serial Number: <b>UNIT-0000001</b></h2>
    
    <div class="clear"></div>
    
    <form>
        
        <h3 class="first">Digital Signage Content</h3>
        
        <label for="PlayerType">Top Content</label>
        
        <select name="PlayerName" id="PlayerName">
            <option>Slideshow</option>
            <option>Uploaded Video</option>
            <option>Embeded Video (Youtube, Vimeo, etc)</option>
            <option>Menu Board</option>
        </select>
        
        <div class="clear"></div>
        
        <label for="PlayerType">Bottom Content</label>
        
        <select name="PlayerName" id="PlayerName">
            <option>Weather</option>
            <option>Random Facts</option>
            <option>Custom Message</option>
        </select>
        
        <div class="clear"></div>
        
        <button>Submit Changes</button>
        
        <div class="clear"></div>
        
    </form>
    
</section>

@endsection