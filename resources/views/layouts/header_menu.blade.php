@auth
    <!--<li><a href="">Profile</a></li>-->
    
    <form action="{{route('logout')}}" method="POST">
    @csrf
        <li>
            <button type="submit">logout</button>           
        </li>
    </form>
@endauth

@guest
    <li><a href="{{route('login')}}">login</a></li>
    <li><a href="{{route('register')}}">新規登録</a></li>
@endguest