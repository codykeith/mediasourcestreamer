<!--Digital Signage Device Page-->

@extends('layouts.device')

@section('content')

<style>
    .slideshow li:nth-child(1) span { background-image: url(http://24.media.tumblr.com/6ddffd6a6036f61a1f2b1744bad77730/tumblr_mzgz9vJ1CK1st5lhmo1_1280.jpg) }
    .slideshow li:nth-child(2) span {
        background-image: url(http://25.media.tumblr.com/aff8a8a33156a0eda844140764fd4359/tumblr_mzgz3tBAAU1st5lhmo1_1280.jpg);
        -webkit-animation-delay: 6s;
        -moz-animation-delay: 6s;
        -o-animation-delay: 6s;
        -ms-animation-delay: 6s;
        animation-delay: 6s;
    }
    .slideshow li:nth-child(3) span {
        background-image: url('http://24.media.tumblr.com/f87b54bbce49e59debf7606662f54862/tumblr_n0hpxxDOJ91st5lhmo1_1280.jpg');
        -webkit-animation-delay: 12s;
        -moz-animation-delay: 12s;
        -o-animation-delay: 12s;
        -ms-animation-delay: 12s;
        animation-delay: 12s;
    }
    .slideshow li:nth-child(4) span {
        background-image: url(http://24.media.tumblr.com/0df0b55a4615378cf593241bad80a7da/tumblr_n0hpwpZrVc1st5lhmo1_1280.jpg);
        -webkit-animation-delay: 18s;
        -moz-animation-delay: 18s;
        -o-animation-delay: 18s;
        -ms-animation-delay: 18s;
        animation-delay: 18s;
    }
    .slideshow li:nth-child(5) span {
        background-image: url(http://24.media.tumblr.com/b94dbb2a392198d5cc39c19959598229/tumblr_n0hpthN8VH1st5lhmo1_1280.jpg);
        -webkit-animation-delay: 24s;
        -moz-animation-delay: 24s;
        -o-animation-delay: 24s;
        -ms-animation-delay: 24s;
        animation-delay: 24s;
    }
    .slideshow li:nth-child(6) span {
        background-image: url(http://31.media.tumblr.com/67d222ee577fc35faca83f0e08efc48e/tumblr_mzzqt7wyEU1st5lhmo1_1280.jpg);
        -webkit-animation-delay: 30s;
        -moz-animation-delay: 30s;
        -o-animation-delay: 30s;
        -ms-animation-delay: 30s;
        animation-delay: 30s;
    }
    .slideshow li:nth-child(2) div {
        -webkit-animation-delay: 6s;
        -moz-animation-delay: 6s;
        -o-animation-delay: 6s;
        -ms-animation-delay: 6s;
        animation-delay: 6s;
    }
    .slideshow li:nth-child(3) div {
        -webkit-animation-delay: 12s;
        -moz-animation-delay: 12s;
        -o-animation-delay: 12s;
        -ms-animation-delay: 12s;
        animation-delay: 12s;
    }
    .slideshow li:nth-child(4) div {
        -webkit-animation-delay: 18s;
        -moz-animation-delay: 18s;
        -o-animation-delay: 18s;
        -ms-animation-delay: 18s;
        animation-delay: 18s;
    }
    .slideshow li:nth-child(5) div {
        -webkit-animation-delay: 24s;
        -moz-animation-delay: 24s;
        -o-animation-delay: 24s;
        -ms-animation-delay: 24s;
        animation-delay: 24s;
    }
    .slideshow li:nth-child(6) div {
        -webkit-animation-delay: 30s;
        -moz-animation-delay: 30s;
        -o-animation-delay: 30s;
        -ms-animation-delay: 30s;
        animation-delay: 30s;
    }
</style>

<section class="DigitalSignagePlayer">
    
    <ul class="slideshow">
        <li><span>Image 01</span></li>
        <li><span>Image 02</span></li>
        <li><span>Image 03</span></li>
        <li><span>Image 04</span></li>
        <li><span>Image 05</span></li>
        <li><span>Image 06</span></li>
    </ul>
    <div class="container"></div>
    
    <div class="DSInfo">
        
        <aside>
            Weather<br>
            Information
        </aside>
        
        <div class="InformationChannel twenty center">
            <div class="WeatherDay">
                <h1>Austin, TX</h1>
                <h2>Today</h2>
                <div class="icon cloudy">
                    <div class="cloud"></div>
                    <div class="cloud"></div>
                </div>
                <div class="temp">71&#176; | Cloudy</div>
            </div>
        </div>
        
        <div class="InformationChannel twenty center">
            <div class="WeatherDay">
                <h1>Austin, TX</h1>
                <h2>Tomorrow</h2>
                <div class="icon rainy">
                    <div class="cloud"></div>
                    <div class="rain"></div>
                </div>
                <div class="temp">65&#176; | Showers</div>
            </div>
        </div>
        
        <div class="InformationChannel twenty center">
            <div class="WeatherDay">
                <h1>Austin, TX</h1>
                <h2>March 8, 2017</h2>
                <div class="icon sun-shower">
                    <div class="cloud"></div>
                    <div class="sun">
                        <div class="rays"></div>
                    </div>
                    <div class="rain"></div>
                </div>
                <div class="temp">54&#176; | Drizzle</div>
            </div>
        </div>
        
        <div class="InformationChannel twenty center">
            <div class="WeatherDay">
                <h1>Austin, TX</h1>
                <h2>March 9, 2017</h2>
                <div class="icon sunny">
                <div class="sun">
                    <div class="rays"></div>
                </div>
                </div>
                <div class="temp">83&#176; | Sunny</div>
            </div>
        </div>
        
    </div>
</section>

@endsection