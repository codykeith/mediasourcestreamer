<!--Digital Signage Content Editor Page-->

@extends('layouts.loggedin')

@section('content')

<section class="playerEdit">
    
    <h1>Edit Player</h1>
    
    <h2>Serial Number: <b>UNIT-0000001</b></h2>
    
    <div class="clear"></div>
    
    <form>
        
        <h3 class="first">Music Content</h3>
        
        <label for="PlayerType">Top Content</label>
        
        <select name="PlayerName" id="PlayerName">
            <option>01. Top 100</option>
            <option>02. Hip Hop</option>
            <option>03. Current Hits</option>
            <option>04. Coffee House</option>
            <option>05. D & B</option>
        </select>
        
        <div class="clear"></div>
        
        <h3 class="first">Playlist Edit</h3>
        
        <table>
            <tr>
                <th>Artist</th>
                <th>Song</th>
                <th>Time</th>
                <th class="right">Remove</th>
            </tr>
            <tr>
                <td>Ed Sheeren</td>
                <td>Photograph</td>
                <td>5:45</td>
                <td class="right"><input type="radio"></td>
            </tr>
            <tr>
                <td>Ed Sheeren</td>
                <td>Photograph</td>
                <td>5:45</td>
                <td class="right"><input type="radio"></td>
            </tr>
            <tr>
                <td>Ed Sheeren</td>
                <td>Photograph</td>
                <td>5:45</td>
                <td class="right"><input type="radio"></td>
            </tr>
            <tr>
                <td>Ed Sheeren</td>
                <td>Photograph</td>
                <td>5:45</td>
                <td class="right"><input type="radio"></td>
            </tr>
            <tr>
                <td>Ed Sheeren</td>
                <td>Photograph</td>
                <td>5:45</td>
                <td class="right"><input type="radio"></td>
            </tr>
            <tr>
                <td>Ed Sheeren</td>
                <td>Photograph</td>
                <td>5:45</td>
                <td class="right"><input type="radio"></td>
            </tr>
            <tr>
                <td>Ed Sheeren</td>
                <td>Photograph</td>
                <td>5:45</td>
                <td class="right"><input type="radio"></td>
            </tr>
            <tr>
                <td>Ed Sheeren</td>
                <td>Photograph</td>
                <td>5:45</td>
                <td class="right"><input type="radio"></td>
            </tr>
        </table>
        
        <div class="clear"></div>
        
        <button>Submit Changes</button>
        
        <div class="clear"></div>
        
    </form>
    
</section>

@endsection