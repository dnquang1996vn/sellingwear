@section('css')
    <link href="{{ asset('css/content/categoryList.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
        <div class="auth-box panel panel-default">
                <div class="auth-title panel-heading">Manage category</div>

                <div class="panel-body">
                    <form class="form-horizontal" id = "create-product-form" method="POST" action="{{ route('create_category') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Name</label>

                            <div class="col-md-4">
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
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Add new category
                                </button>
                            </div>
                        </div>
                    </form>
                    <h1>Category table</h1>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Quantity of product</th>
                            <th>ss</th>
                        </tr>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->products->count()}}</td>
                            <td>
                                <a href="{{route('delete_category', $category->id)}}" class="btn btn-danger" role="button">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
    </div>
@endsection
@section('js')
@endsection