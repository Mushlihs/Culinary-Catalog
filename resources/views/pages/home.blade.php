@extends('layouts.app')
@section('title')
    Homepage
@endsection



@section('content')
<x-DashNav />
<div id="home" class="d-flex h-screen">
    <img src="{{asset("img/dashboard.jpg")}}" alt="Image alter">
    <div class="bg-bl-trans text-white  w-full h-100 position-absolute d-flex flex-column  justify-content-center align-items-center ">
        <h1 class="font-head"><span class="text-orange">Culinary</span> Catalog</h1>
        <p class="opacity-50">Welcome to finest Culinary in Indonesia <span class="blink">|</span></p>
    </div>
</div>


<div id="product" class="container py-4 px-4">
    <div class="row gy-4">
        <div class="d-flex justify-content-between ">
            <h4>Browse Culinary</h4>
        <a href="{{URL("page/?id=1")}}" class="text-orange">More</a>
        </div>
        @foreach ($data as $item)
        <div class="col-lg-3 col-md-6">
            <x-card :data="$item" />
        </div>
        @endforeach
        
    </div>
</div>

<div id="about" class="bg-1 d-flex  align-items-center  px-4 border">
    <div class="row align-items-center">
        <div class="col-md-7 px-4 ">
        <img class="rounded-full shadow" src="https://picsum.photos/1981/1080" alt="Image alter">
        </div>
        <div class="col-md-4 offset-md-1 mt-4">
            <h3>Whats We Offer</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos optio inventore neque provident molestiae natus mollitia nobis autem adipisci dolorum, laborum nam impedit, ab quod vitae ratione! Iusto, corrupti eius.</p>
        </div>
    </div>

</div>


<x-footer />
    
@endsection