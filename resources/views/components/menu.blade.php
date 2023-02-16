<!-- Menu -->
<section id="menu">
    @guest
    <!-- Actions -->
    <section>
        <ul class="actions vertical">
            <li><h3>Login</h3></li>
            @if($errors->any())
                <li class="errors">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </li>
            @endif
            <li>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <input value="{{ old('username') }}" type="text" name="username" placeholder="Username"><br>
                    <input type="password" name="password" placeholder="Password"><br>
                    <input type="submit" class="button big fit" value="Log In">
                </form>
            </li>

            <li><h3>Registration</h3></li>

            @if($errors->any())
            <li class="errors">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </li>
            @endif

            <li>
                <form enctype="multipart/form-data" action="{{route('register')}}" method="post">
                    @csrf
                    <input value="{{ old('username') }}" type="text" name="username" placeholder="Username"><br>
                    <input type="password" name="password" placeholder="Password"><br>
                    <input type="password" name="re_password" placeholder="Pepeat Password"><br>
                    <input style="opacity: 1; width: 20px; height: 20px; -webkit-appearance: checkbox" type="checkbox" name="policy" placeholder="policy)"><br>
                    <input type="file" name="file"><br><br>
                    <input type="submit" class="button big fit" value="Sign up">
                </form>
            </li>
        </ul>
    </section>
    @endguest

    @auth
    <!-- Links -->
    <section>
        <ul class="links">
            <li>
                <a href="#">
                    <h3>Add Post</h3>
                </a>
            </li>
            <li>
                <a href="#">
                    <h3>Profile</h3>
                </a>
            </li>
            <li>
                <a href="{{ route('exit') }}"><h3>Log Out</h3></a>
            </li>
        </ul>
    </section>
        @endauth

</section>
