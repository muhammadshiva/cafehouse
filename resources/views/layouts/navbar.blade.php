<div class="tm-top-header-inner">
  <div class="tm-logo-container">
    <img src="img/logo.png" alt="Logo" class="tm-site-logo">
    <h1 class="tm-site-name tm-handwriting-font">Cafe House</h1>
  </div>
  <div class="mobile-menu-icon">
    <i class="fa fa-bars"></i>
  </div>
  <nav class="tm-nav">
    <ul>
      <li><a href="{{url('/')}}" class="{{ Request::is('/') ? 'active' : ''}}">Home</a></li>
      <li><a href="{{url('/today')}}" class="{{ Request::is('today') ? 'active' : ''}}">Today Special</a></li>
      <li><a href="{{url('/menu')}}" class="{{ Request::is('menu') ? 'active' : ''}}">Menu</a></li>
      <li><a href="{{url('/contact')}}" class="{{ Request::is('contact') ? 'active' : ''}}">Contact</a></li>
    </ul>
  </nav>   
</div>