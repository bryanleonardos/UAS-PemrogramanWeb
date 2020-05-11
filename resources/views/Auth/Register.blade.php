@extends('Index')

@section('title','Register')

@section('content')
  <div class="container">
       <div class="row">
           <div class="col-10">
              <h1 class="mt-3">Register</h1>

              <form method="post" action="{{ route('register') }}">
              @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" id="firstname" name="firstname" placeholder="Input Firstname" value="{{ old('firstname') }}">
                    @if ($errors->has('firstname'))
                      <div class="invalid-feedback">
                        {{ $errors->first('firstname') }}
                      </div>
                    @endif
                  </div>

                  <div class="form-group col-md-6">
                    <label for="lastname">Last Name</label>
                    <input type="lastname" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" id="lastname" name="lastname" placeholder="Input Lastname" value="{{ old('lastname') }}">
                    @if ($errors->has('lastname'))
                      <div class="invalid-feedback">
                        {{ $errors->first('lastname') }}
                      </div>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" id="username" name="username" placeholder="Input Username" value="{{ old('username') }}">
                  @if ($errors->has('username'))
                    <div class="invalid-feedback">
                      {{ $errors->first('username') }}
                    </div>
                  @endif
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" placeholder="Input Email" value="{{ old('email') }}">
                  @if ($errors->has('email'))
                    <div class="invalid-feedback">
                      {{ $errors->first('email') }}
                    </div>
                  @endif
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" placeholder="Input Password">
                  @if ($errors->has('password'))
                    <div class="invalid-feedback">
                      {{ $errors->first('password') }}
                    </div>
                  @endif
                </div>

                <div class="form-group">
                  <label for="password_confirmation">Confirmation Password</label>
                  <input type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="password_confirmation" name="password_confirmation"placeholder="Input Confirmation Password">
                  @if ($errors->has('password_confirmation'))
                    <div class="invalid-feedback">
                      {{ $errors->first('password_confirmation') }}
                    </div>
                  @endif
                </div>

                <div class="form-group">
                  <label for="birthday">Birthday</label>
                  <input type="date" class="form-control {{ $errors->has('birthday') ? 'is-invalid' : '' }}" id="birthday" name="birthday" placeholder="Input Birthday" value="{{ old('birthday') }}">
                  @if ($errors->has('birthday'))
                    <div class="invalid-feedback">
                      {{ $errors->first('birthday') }}
                    </div>
                  @endif
                </div>

                <div class="form-group">
                  <label for="gender">Gender</gender>
                  <select class="custom-select {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender" value="{{ old('gender') }}">
                    <option selected>Choose Your Gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="3">Prefer not to choose</option>
                  </select>
                  @if ($errors->has('gender'))
                    <div class="invalid-feedback">
                      {{ $errors->first('gender') }}
                    </div>
                  @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
           </div>
       </div>
  </div>
@endsection