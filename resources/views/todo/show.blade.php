@extends('layouts.app')

@section('title')
Todo List
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
        <h1 class="text-center my-5">{{ $id->name }}</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card card-default">
                    <div class="card-header">
                        Details
                    </div>
                    <div class="card-body">
                        {{ $id->description }}
                    </div>
                </div>
                <a href="/update/{{ $id->id }}" class="btn btn-info btn-sm my-5">Update</a>
                <a href="/delete/{{ $id->id }}" class="btn btn-danger btn-md my-5">Delete</a>
            </div>
        </div>
    </div>
    @endsection