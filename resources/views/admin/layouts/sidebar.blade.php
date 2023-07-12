@php
    $cur_route = Route::current()->getName();
@endphp
<div id="side_bar" class="side-bar">
    <div class="close-btn d-md-none">
        <i class="bi bi-x"></i>
    </div>
    <div class="text-center">
        {{-- <img src="{{ asset('admin/img/logo.svg') }}" alt=""> --}}
        <h3 class="text-white">Downstream Admin</h3>
    </div>
    <ul class="mt-5">
        <li class="{{ $cur_route=="admin.home" ? 'active' : ''}}">
            <a href="{{ route('admin.home') }}"><img width="16" src="{{ asset('admin/img/home-icon.png') }}" alt=""> Dashboard</a>
        </li>
        <li class="{{ $cur_route=="view_email" ? 'active' : ''}}">
            <a href="{{ route('view_email') }}"><img width="16" src="{{ asset('admin/img/squares.svg') }}" alt=""> Virtual Email List</a>
        </li>
        <li class="{{ $cur_route=="registered_user" ? 'active' : ''}}">
            <a href="{{ route('registered_user') }}"><img width="16" src="{{ asset('admin/img/user-icon.svg') }}" alt=""> Physical Users List</a>
        </li>
        <li class="{{ $cur_route=="logged_user" ? 'active' : ''}}">
            <a href="{{ route('logged_user') }}"><img width="16" src="{{ asset('admin/img/user-icon.svg') }}" alt=""> Logged In User</a>
        </li>
        <li class="{{ $cur_route=="crawling_change" ? 'active' : ''}}">
            <a href="{{ route('crawling_change') }}"><img width="16" src="{{ asset('admin/img/user-icon.svg') }}" alt="">Crawling Text</a>
        </li>
    </ul>
</div>
