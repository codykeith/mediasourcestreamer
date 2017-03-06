<!--Music Player Page-->

@extends('layouts.loggedin')

@section('content')

    <section class="playerControls">
        
        <div class="column add-bottom">
            <div id="mainwrap">
                <div id="nowPlay">
                    <span class="left" id="npAction">Paused...</span>
                    <span class="right" id="npTitle"></span>
                </div>
                <div id="audiowrap">
                    <div id="audio0">
                        <audio preload id="audio1" controls="controls">Your browser does not support HTML5 Audio!</audio>
                    </div>
                    <div id="tracks">
                        <a id="btnPrev">&laquo;</a>
                        <a id="btnNext">&raquo;</a>
                    </div>
                </div>
                <div id="plwrap">
                    <ul id="plList"></ul>
                </div>
            </div>
        </div>
        
    </section>


@endsection