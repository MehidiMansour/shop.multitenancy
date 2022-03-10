@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.dash') ? 'actived' : '' }}" href="{{ route(ADMIN . '.dash') }}">
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.users') ? 'actived' : '' }}" href="{{ route(ADMIN . '.users.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-user"></i>
        </span>
        <span class="title">Users</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.companies') ? 'actived' : '' }}" href="{{ route(ADMIN . '.companies.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-layout-grid3"></i>
        </span>
        <span class="title">Companies</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.tenants') ? 'actived' : '' }}" href="{{ route(ADMIN . '.tenants.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-package"></i>
        </span>
        <span class="title">Tenants</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.shops') ? 'actived' : '' }}" href="{{ route(ADMIN . '.shops.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-package"></i>
        </span>
        <span class="title">Shops</span>
    </a>
</li>
