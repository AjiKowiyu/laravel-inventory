@extends('template/index')
@section('konten')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link text-capitalize {{ (Request::segment(2) == 'role') ? 'active' : '' }}"
        href="{{ route('account-role') }}">
            <i class="fa-solid fa-user-tag"></i> role management
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-capitalize {{ (Request::segment(2) == 'user') ? 'active' : '' }}"
        href="{{ url('account-user') }}">
            <i class="fa-solid fa-user"></i> user management
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-capitalize {{ (Request::segment(2) == 'menu-permission') ? 'active' : '' }}"
        href="{{ url('account-menu-permission') }}">
            <i class="fa-solid fa-user-check"></i> menu permission
        </a>
    </li>
</ul>
<div class="tab-content p-4">
    @yield('account-konten')
</div>
@endsection