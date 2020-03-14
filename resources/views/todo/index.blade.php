@extends('layouts.app')

@section('title')
Todo List
@endsection
</head>

<body>
    @section('content')
    @if(session()->has('success'))
    <div class="alert alert-success text-center">
        {{ session()->get('success') }}
    </div>
    @endif
    <h1 class="text-center my-5">The Tasks</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach($todo as $t)
            <div class="card card-default">
                <div class="card-header text-center">
                    {{ $t->name }}

                </div>
                <div class="card-body">
                    {{ $t->description }}
                </div>
                <a href="/show/{{ $t->id }}" class="btn btn-primary">View</a>
                @if(!$t->completed)
                <a href="/complete/{{ $t->id }}" style="color:white;" class="btn btn-warning">Complete</a>
                @endif
            </div>
            <hr class="btn-success">
            @endforeach
        </div>
    </div>

    @endsection('content')