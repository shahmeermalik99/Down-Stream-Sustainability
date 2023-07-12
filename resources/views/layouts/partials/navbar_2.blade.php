@php
    $cur_route = Route::current()->getName();
@endphp
<nav class="navbar navbar-expand-xl">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="">
            </a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-grow-1">
                        @if(Auth::user())
                        <li class="nav-item">
                            <a class="nav-link  {{ $cur_route=='dashboard' ? 'active' : ''}}" href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $cur_route=='pages.exhibition_hall' ? 'active' : ''}}" href="{{ route('pages.exhibition_hall' )}}">Exhibition Hall</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ $cur_route=='pages.mainstage' ? 'active' : ''}}" href="{{ route('pages.mainstage') }}">Main Stage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal1"
                                href="#">Agenda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                href="#">Speakers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ $cur_route=='pages.replay' ? 'active' : ''}}" href="{{ route('pages.replay') }}">Replay</a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ route('logout') }}" class="nav-link"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                     Log Out
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                        </li>
                        @else
                        <!--<li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal1"
                                href="#">Agenda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                href="#">Speakers</a>
                        </li>-->
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link  {{ $cur_route=='pages.replay' ? 'active' : ''}}" href="{{ route('pages.replay') }}">Replay</a>-->
                        <!--</li>-->
                        @endif
                    </ul>
                </div>
            </div>
            <div class="nav-right text-center ">
                <div class="dot-sus">
                    <span class="blue">•</span> You <span class="green">•</span> Me <span class="orange">•</span> Sustainability <span class="purple">•</span>
                </div>
                <div class="brought"> Brought to you by DBE & PCG (PC MTBE)</div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>