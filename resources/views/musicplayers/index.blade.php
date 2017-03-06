<!--Music Player List Page-->

@extends('layouts.loggedin')

@section('content')

    <section class="playerList">
        <table>
            <tr>
                <th>Serial</th>
                <th>Location Name</th>
                <th>Address</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>UNIT-0002</td>
                <td>Headquarters</td>
                <td>12345 South 5th St, Austin, TX 78745</td>
                <td><a href="music/edit/?playernumber">Edit</a></td>
                <td><a href="music/launch/?playernumber">Launch</a></td>
            </tr>
            <tr>
                <td>UNIT-0002</td>
                <td>Headquarters</td>
                <td>12345 South 5th St, Austin, TX 78745</td>
                <td><a href="music/edit/?playernumber">Edit</a></td>
                <td><a href="music/launch/?playernumber">Launch</a></td>
            </tr>
        </table>
    </section>

@endsection
