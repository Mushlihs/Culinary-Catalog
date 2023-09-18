@extends('layouts.app')
@section('title')
@endsection



@section('content')
<x-BasicNav />


<div class="d-flex h-min-screen align-items-center p-4">

    <div id="product" class="container py-4 px-4">
        <div class="row gy-4">
            <div class="d-flex justify-content-between ">
                <h4>Browse Culinary</h4>
            <a href="{{URL("page/?id=1")}}" class="text-orange">find Data</a>
            </div>
            @foreach ($data as $item)
            <div class="col-lg-3 col-md-6">
                <x-card :data="$item" />
            </div>
            @endforeach
        {{$data->links()}}
            
        </div>
    </div>

</div>



    
@endsection