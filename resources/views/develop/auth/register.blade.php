@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="auth-box panel panel-default">
                <div class="auth-title panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" id = "register-form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name (*)</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                <span class="help-block" id="name-error">
                                </span>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        @foreach ($errors->get('name') as $message)
                                            <ul>
                                                {{$message}}
                                            </ul>
                                        @endforeach
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address (*)</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                <span class="help-block" id="email-error">
                                </span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        @foreach ($errors->get('email') as $message)
                                            <ul>
                                                {{$message}}
                                            </ul>
                                        @endforeach
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email-confirmation" class="col-md-4 control-label">Confirm email (*)</label>

                            <div class="col-md-6">
                                <input id="email-confirmation" type="email" class="form-control" name="email_confirmation" required>
                                <span class="help-block" id="email-confirmation-error">
                                </span>
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password (*)</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <span class="help-block" id="password-error">
                                </span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        @foreach ($errors->get('password') as $message)
                                            <ul>
                                                {{$message}}
                                            </ul>
                                        @endforeach
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirmation" class="col-md-4 control-label">Confirm Password (*)</label>

                            <div class="col-md-6">
                                <input id="password-confirmation" type="password" class="form-control" name="password_confirmation" required>
                                <span class="help-block" id="password-confirmation-error">
                                </span>
                            </div>

                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <select id = "gender" name = "gender" class="form-control">
                                    <option value="2">None</option>
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                               
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
                            <label for="adress" class="col-md-4 control-label">Adress</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control" name="adress" value="{{ old('adress') }}"  autofocus>

                                @if ($errors->has('adress'))
                                    <span class="help-block">
                                        @foreach ($errors->get('adress') as $message)
                                            <ul>
                                                {{$message}}
                                            </ul>
                                        @endforeach
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">Birthday</label>

                            <div class="col-md-6">
                                <input id="birthday" type="text" class="form-control" name="birthday" value="{{ old('birthday') }}"  autofocus>

                                <!-- @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>
                        <div class="form-group{{ ($errors->has('phone')&& (old('phone') != null)) ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}"  autofocus >

                                @if ($errors->has('phone')&& (old('phone') != null))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{ asset('js/auth/register.js') }}"></script>
@endsection
