<nav class="bg-temptress w-full fixed pin-l pin-b text-center">
  <button class="bg-transparent js-nav-trigger">
    <span></span>
  </button>
</nav>
<section class="nav bg-stormDust w-full flex justify-center items-center">
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu([
      'theme_location' => 'primary_navigation', 
      'menu_class' => 'menu',
    ]) 
    !!}
  @endif    
</section>

{{-- <header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header> --}}