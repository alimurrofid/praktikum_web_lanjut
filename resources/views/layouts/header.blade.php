<div class="templatemo-header">
    <img class="templatemo-header-img" src="img/header.png" alt="Header">
    <h1 class="templatemo-site-name">Motor</h1>
    <div class="mobile-menu-icon">
        <i class="fa fa-bars"></i>
    </div>
    <div class="templatemo-nav-container">
        <nav class="templatemo-nav">
            <ul>
                <li><a href="{{ route('home') }}" class="{{(Route::currentRouteName() == 'home' || Route::currentRouteName() == '')?'active':''}}">Home</a></li>
                <li><a href="{{ route('product') }}" class="{{(Route::currentRouteName() == 'product')?'active':''}}">Products</a></li>
                <li><a href="{{ route('program') }}" class="{{(Route::currentRouteName() == 'program')?'active':''}}">Services</a></li>
                <li><a href="{{ route('news') }}" class="{{(Route::currentRouteName() == 'news')?'active':''}}">Galery</a></li>
                <li><a href="{{ route('contact-us') }}" class="{{(Route::currentRouteName() == 'contact-us')?'active':''}}">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
