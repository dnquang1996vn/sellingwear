@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="auth-box panel panel-default">
                <div class="auth-title panel-heading">Add product</div>

                <div class="panel-body">
                    <form class="form-horizontal" id = "create-product-form" method="POST" action="{{ route('create_product') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

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
                        <div class="form-group{{ $errors->has('label') ? ' has-error' : '' }}">
                            <label for="label" class="col-md-4 control-label">Lable</label>

                            <div class="col-md-6">
                                <input id="label" type="text" class="form-control" name="label" value="{{ old('label') }}"  autofocus>

                                @if ($errors->has('label'))
                                    <span class="help-block">
                                        @foreach ($errors->get('label') as $message)
                                            <ul>
                                                {{$message}}
                                            </ul>
                                        @endforeach
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price (VND)</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}"  autofocus>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        @foreach ($errors->get('price') as $message)
                                            <ul>
                                                {{$message}}
                                            </ul>
                                        @endforeach
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="feature-image-input" class="col-md-4 control-label">Feature Image</label>

                            <div class="col-md-6" style="margin-top: 8px">
                                <span style="color: red" id = "image-error"></span>
                                <input type="file" name="feature-image-input" id="feature-image-input">
                                <img src="" id="feature-image-display" width="200px" />
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea  id="description" type="text" class="form-control" name="description" value="{{ old('description') }}"  autofocus></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        @foreach ($errors->get('description') as $message)
                                            <ul>
                                                {{$message}}
                                            </ul>
                                        @endforeach
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('information') ? ' has-error' : '' }}">
                            <label for="information" class="col-md-4 control-label">Detail Information</label>

                            <div class="col-md-6">
                                <input id="information" type="text" class="form-control" name="information" value="{{ old('information') }}"  autofocus>

                                @if ($errors->has('information'))
                                    <span class="help-block">
                                        @foreach ($errors->get('information') as $message)
                                            <ul>
                                                {{$message}}
                                            </ul>
                                        @endforeach
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
@endsection
@section('js')
    <script src="{{ asset('js/create_product.js') }}"></script>
@endsection