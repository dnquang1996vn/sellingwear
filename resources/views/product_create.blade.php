@extends('layouts.app')
@section('css')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
        <div class="auth-box panel panel-default">
                <div class="auth-title panel-heading">Add product</div>

                <div class="panel-body">
                    @if (count($errors) > 0)
                      <div class="alert alert-danger">
                            Input is not corret
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                      </div>
                    @endif
                    <form id="file-upload" class="dropzone"></form>
                    <form class="form-horizontal" id = "create-product-form" method="POST" action="{{ route('create_product') }}" enctype="multipart/form-data">
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
                            <label for="price" class="col-md-4 control-label">Price (USD)</label>

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
                                <input type="file" name="feature_image_input" id="feature_image_input">
                                <img src="" id="feature-image-display" width="200px" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Description Image</label>

                            <div class="col-md-6" style="margin-top: 8px">
                                <div id="dZUpload" class="dropzone">
                                    <div class="dz-default dz-message"></div>
                                </div>
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
                                <textarea  id="information" class="form-control summernote" name="information" value="{{ old('information') }}"  autofocus>

                                </textarea>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
    <script src="{{ asset('js/create_product/display_upload_image.js') }}"></script>
    <script src="{{ asset('js/create_product/dropzone.js') }}"></script>
@endsection