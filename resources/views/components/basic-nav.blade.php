<div class="d-flex p-3 bg-black text-white justify-content-between   align-items-center ">
    <h4>
        <a href="{{URL("/")}}"><span class="text-orange">Culinary</span> Catalog</a>
    </h4>
    <ul class="d-flex text-white gap-3">
        @if (Auth::user())
        <form action="{{route("logout")}}" method="post">
            @csrf
            <button  type="submit" class=" btn bg-none rounded link text-white">Logout</button>
        </form>
        @else
        
    <li class="nolist"><a class="link" href="{{route("login")}}">Login</a></li>
    <li class="nolist"><a class="link" href="{{route("register")}}">Register</a></li>
            
        @endif

    </ul>
</div>