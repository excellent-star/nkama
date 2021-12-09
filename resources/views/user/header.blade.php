<header  @if($__env->yieldContent('page_title')=='home')  class="main-header header-transparent" @else  class="main-header"   @endif >
    <div  class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href={{ route('home') }}>
                {{--  <img src="img/logos/logo.png" alt="logo">  --}}
                <img src="{{ asset('img/logos/nkama1a.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tenant
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="index-2.html">Search rentals</a></li>
                            <li><a class="dropdown-item" href="index-3.html">Create tenant profile</a></li>
                            <li><a class="dropdown-item" href="index-4.html">Create SearchAgent</a></li>
                            <li><a class="dropdown-item" href="index-5.html">FAQ</a></li>
                            @if(!session()->has('loggedInUser'))
                            <li><a class="dropdown-item"  href={{ route('login') }}>Log in</a></li>
                            @endif

                        </ul>
                    </li>

                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Landlord
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="index-2.html">Find tenant</a></li>
                            <li><a class="dropdown-item" href={{ route('submit-property') }}>Add Listing</a></li>

                            @if(!session()->has('loggedInUser'))
                                 <li><a class="dropdown-item"  href={{ route('login') }}>Log in</a></li>
                            @endif


                        </ul>
                    </li>


                    <li class="nav-item">
                        <a  class="nav-link link-color">SearchAgent</a>
                    </li>

                    @if(session()->has('loggedInUser'))



                            <li class="nav-item">
                                <a href={{ route('logout') }} class="nav-link link-color">Log out</a>
                            </li>
                    @else

                    <li class="nav-item">
                        <a href={{ route('login') }} class="nav-link link-color">Log in</a>
                    </li>

                    @endif


                    <li class="nav-item">
                        <a href={{ route('submit-property') }} class="nav-link link-color"><i class="fa fa-plus"></i> Add  Listing</a>
                    </li>
                    <li class="nav-item">
                        <a href="submit-property.html" class="nav-link link-color"><i class="fa fa-plus"></i> Search Properties</a>
                    </li>
                    {{--  <li class="nav-item">
                        <a href="#full-page-search" class="nav-link link-color"><i class="fa fa-search"></i></a>
                    </li>  --}}
                </ul>
            </div>
        </nav>
    </div>
</header>
