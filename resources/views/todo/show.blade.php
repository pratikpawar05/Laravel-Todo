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
        
 

<!-- Modal -->
<!-- <a href="#" id="pop">
    <img id="imageresource" src="{{ asset('/assets/Screenshot from 2020-03-15 10-47-33.png') }}" style="width: 800px; height: 664px;">
    Click to Enlarge
</a> -->
<!-- Creates the bootstrap modal where the image will appear 
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Image preview</h4>
      </div>
      <div class="modal-body">
        <img src="" id="imagepreview" style="width: 400px; height: 264px;" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>      
</div> -->
<!-- <script type="text/javascript">
$("#pop").on("click", function() {
   $('#imagepreview').attr('src', $('#imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link
   $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
});
</script> -->

@endsection