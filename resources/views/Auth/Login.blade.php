@extends('Index')

@section('title','Login')

@section('content')
  <div class="container">
       <div class="row">
           <div class="col-10">
            <h1 class="mt-3">Login</h1>
            <form method="post" action=" {{ route('login')}} ">
            @csrf
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" id="username" name="username">
                @if ($errors->has('username'))
                  <div class="invalid-feedback">
                    {{ $errors->first('username') }}
                  </div>
                @endif
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password">
                @if ($errors->has('password'))
                  <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                  </div>
                @endif
                <br>
              </div>
              @if (session('status'))
                <div class="alert alert-danger">
                  {{ session('status') }}
                </div>
              @endif
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
           </div>
       </div>
  </div>
@endsection