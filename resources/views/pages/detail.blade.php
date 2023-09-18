@extends('layouts.app')
@section('title')
    Page-{{$data->id}}
@endsection



@section('content')
<x-BasicNav />
<div class="d-flex h-60 bg-1">
    <img src="https://picsum.photos/1981/1080" alt="" srcset="">
    <div class="bg-bl-trans w-full h-60 position-absolute ">
    </div>
</div>
<div class="container h-60 align-items-center py-5">
    <div class="content">
        <h1>{{$data->title}}</h1>
        <p>{{$data->author_id}}</p>
        <p>{{$data->description}}</p>
    </div>
</div>
<div class="container my-4 p-4 ">
    <div class="row border rounded shadow p-4">
        <div class="col-md-12">
            <h3>Comments</h3>
        </div>
        <div class="col-md-12 px-2">
            <div class=" bg-1 h-20 border rounded opacity-25 overflow-y-auto justify-content-center p-4">
                List Comment
            </div>

              <label for="" class="form-label"></label>
              <textarea class="form-control mb-2" name="" id="" rows="3"></textarea>
              <button class="btn btn-primary float-end" type="submit">Kirim</button>

        </div>
    </div>

</div>



<x-footer />
    
@endsection