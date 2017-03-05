<!--Music Player Page-->

@extends('layouts.loggedin')

@section('content')

<section class="playerEdit">
    <h1>Edit Player</h1>
    <h2>Serial Number: <b>UNIT-0000001</b></h2>
    <div class="clear"></div>
    <form>
        <h3 class="first">Location Information</h3>
        <label for="LocationName">Location Name</label>
        <input type="text" name="LocationName" id="LocationName">
        <div class="clear"></div>
        <label for="LocationAddressStreet">Location Street Address</label>
        <input type="text" name="LocationAddressStreet" id="LocationAddressStreet">
        <div class="clear"></div>
        <label for="LocationAddressCity" class="half">Location City</label>
        <input type="text" name="LocationAddressCity" id="LocationAddressCity" class="half">
        <label for="LocationAddressState" class="half">Location State</label>
        <input type="text" name="LocationAddressState" id="LocationAddressState" class="half">
        <label for="LocationAddressZip" class="half">Location Zip</label>
        <input type="text" name="LocationAddressZip" id="LocationAddressZip" class="half last">
        <div class="clear"></div>
        <h3>Player Information</h3>
        <label for="PlayerName">Player Name</label>
        <input type="text" name="PlayerName" id="PlayerName">
        <label for="PlayerCode">Player Code</label>
        <input type="text" name="PlayerCode" id="PlayerCode" disabled placeholder="5616061663">
        <label for="PlayerType">Player Type</label>
        <select name="PlayerName" id="PlayerName">
            <option>Music Player</option>
            <option>Digital Signage Player</option>
            <option>Interactive Display Player</option>
        </select>
        <div class="clear"></div>
    </form>
</section>

@endsection