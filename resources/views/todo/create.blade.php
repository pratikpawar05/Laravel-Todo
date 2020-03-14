@extends('layouts.app')

@section('title')
Create Todo
@endsection
</head>

<body>
    @section('content')

    <div class="container">
        @if(session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
        @endif
        <h1 class="text-center my-5">Create Todo</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Create A Todo List
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                <li class="list-group-item">
                                    {{ $error }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="/create-todo" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Description" name="desc" rows="5" cols="5"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success ">Create Todo</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- @if($msg ?? '')
    <script>
        alert({{ $msg ?? '' }})
    </script> -->
    @endif
    @endsection