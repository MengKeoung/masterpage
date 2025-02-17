<div class="sidebar" id="sidebar">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
        <i class="fa fa-home"></i> Dashboard
    </a>
    <a href="{{ route('product') }}" class="{{ request()->routeIs('product') ? 'active' : '' }}">
        <i class="fa fa-box"></i> Products
    </a>
    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">
        <i class="fa fa-users"></i> About Us
    </a>
    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
        <i class="fa fa-envelope"></i> Contact Us
    </a>
    <a href="#"><i class="fa fa-sign-out-alt"></i> Logout</a>
</div>
