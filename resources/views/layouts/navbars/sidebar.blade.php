<div class="sidebar" data-color="green">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <img class="img-fluid ml-5" width="150px" src="{{ asset('assets') }}/img/mainsite/logos/logo-200.png" alt="">
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'products') active @endif">
        <a href="{{ route('products') }}">
          <i class="now-ui-icons design-2_ruler-pencil"></i>
          <p>{{ __('Gestor de productos') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'articles') active @endif">
        <a href="{{ route('articles') }}">
          <i class="now-ui-icons design-2_ruler-pencil"></i>
          <p>{{ __('Gestor de Blog') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
