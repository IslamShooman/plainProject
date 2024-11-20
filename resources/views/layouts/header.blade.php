<header class="p-3 px-2 px-md-5  bg-success d-flex justify-content-between">
    <!-- menu items -->
    <ul class="center-row text-light">
        <li> <a class="btn btn-success" href="{{route("index")}}">Home</a> </li>
    </ul>

    <!-- user area -->
    <section>
        @if(Auth::check())
            <div class="user">
                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li class="px-2"> <x-button-form class="" method="POST" action="{{ route('logout') }}" csrf="">{{__('Log Out')}}</x-button-form> </li>
                        <li class="px-2"> <x-button-form class="" action="{{route('profile.edit')}}" >{{__('Profile')}}</x-button-form></li>
                    </ul>
                </div>
            </div>
        @else
            <div class="guest">
                <ul class="center-row">
                    <li> <a class="btn btn-success" href="{{route("login")}}">Login</a> </li>
                    <li> <a class="btn btn-success" href="{{route("register")}}">Register</a> </li>
                </ul>
            </div>
        @endif
    </section>
    <!-- end user area -->

</header>
