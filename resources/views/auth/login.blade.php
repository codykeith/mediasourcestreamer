@extends('layouts.loggedin')

@section('content')

<section class="login">
    <h3>Login</h3>
    <form role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
        <label for="email">E-Mail Address</label>
        
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="my@email.com">
        
        <div class="clear"></div>
        
        <label for="password">Password</label>

        <input id="password" type="password" class="form-control" name="password" required>
        
        <div class="clear"></div>
        
        <div class="RememberMe">
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
        </div>
        
        <button type="submit">Login</button>
        
    </form>
    <div class="clear"></div>
</section>

@endsection
