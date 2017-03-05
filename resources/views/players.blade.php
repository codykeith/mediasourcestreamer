<!--All Player Page-->

@extends('layouts.loggedin')

@section('content')

    <section class="playerList">
        <table>
            <tr>
                <th>Type</th>
                <th>Serial</th>
                <th>Location Name</th>
                <th>Address</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>MUSIC</td>
                <td>UNIT-0002</td>
                <td>Headquarters</td>
                <td>12345 South 5th St, Austin, TX 78745</td>
                <td><a href="edit/?playernumber">Edit</a></td>
                <td><a href="launch/?playernumber">Launch</a></td>
            </tr>
            <tr>
                <td>DIGITAL SIGNAGE</td>
                <td>UNIT-0002</td>
                <td>Headquarters</td>
                <td>12345 South 5th St, Austin, TX 78745</td>
                <td><a href="edit/?playernumber">Edit</a></td>
                <td><a href="launch/?playernumber">Launch</a></td>
            </tr>
        </table>
    </section>

@endsection