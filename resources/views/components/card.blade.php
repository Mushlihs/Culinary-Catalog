<div class="card text-black bg-white m-2 shadow">
    <img class="card-img-top" src="{{$photo}}" alt="{{$photo}}">
    <div class="card-body">
      <h5 class="card-title text-truncate"><a href="{{URL("post-$id")}}">{{$title}}</a></h5>
      <p>Author-{{$author}}</p>
      <p class="card-text overflow-hidden text-truncate">{{$desc}}</p>
      <a class="btn rounded btn-secondary " href="{{URL("post-$id")}}"> Lanjut Baca</a>
    </div>
</div>