@extends('auth.auth-master')

@section('content')
    <div class="container mt-5">
        <form method="post" action="{{ route('login.perform') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <img class="mb-4" src="{!! url('https://icons.getbootstrap.com/assets/img/icons-hero.png') !!}" alt="" width="72" height="57">

            <h1 class="h3 mb-3 fw-normal">Login</h1>

            @include('components.messages')

            <div class="form-group form-floating mb-3">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email"
                    required="required" autofocus>
                <label for="floatingEmail">Email</label>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                    placeholder="Password" required="required">
                <label for="floatingPassword">Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

            @include('components.copy')
        </form>
    </div>
@endsection
