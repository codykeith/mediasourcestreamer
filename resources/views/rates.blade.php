<!--Rates Page-->

@extends('layouts.loggedin')

@section('content')
    <section class="rates">
        <h3>Rate Information</h3>
        <table>
            <tr>
                <th>Player On Account</th>
                <th>Type</th>
                <th>Term</th>
                <th>Price</th>
                <th>Notes / Alerts</th>
            </tr>
            <tr>
                <td>UNIT-0000001</td>
                <td>Digital Signage</td>
                <td>M2M</td>
                <td>$75.95</td>
                <td></td>
            </tr>
            <tr>
                <td>UNIT-0000002</td>
                <td>Music Player</td>
                <td>M2M</td>
                <td>$46.95</td>
                <td></td>
            </tr>
            <tr>
                <td>Total</td>
                <td>-></td>
                <td>-></td>
                <td>$122.90</td>
                <td></td>
            </tr>
        </table>
    </section>
@endsection