<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Photo Album</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <style>
    header {
      background-color: #d9b382;
      color: white;
      padding: 20px 0;
      text-align: center;
      font-size: 26px;
      box-shadow: 0 3px 8px rgba(0,0,0,0.25);
    }
    nav a {
      display: inline-block;
      margin: 6px;
      padding: 8px 16px;
      background: #fffbe3;
      border: 2px dashed #c59a70;
      border-radius: 8px;
      color: #6b4d33;
      font-weight: bold;
      text-decoration: none;
      transition: 0.35s ease;
      box-shadow: 2px 3px 0px #b48a63;
    }
    nav a:hover {
      background: #ffe8b5;
      transform: rotate(-2deg) scale(1.05);
      box-shadow: 4px 5px 0px #a37148;
    }
    main {
      padding: 20px;
    }
    footer {
      text-align: center;
      padding: 20px;
      background: #fff8e1;
      color: #6b4d33;
      font-size: 16px;
    }
  </style>
</head>
<body style="
  @if(isset($activePage) && $activePage == 'page1')
    background-image: url('{{ asset('images/page1/nature_bg.png') }}');
  @elseif(isset($activePage) && $activePage == 'page2')
    background-image: url('{{ asset('images/page2/sc_bg.png') }}');
  @elseif(isset($activePage) && $activePage == 'page3')
    background-image: url('{{ asset('images/page3/ani_bg.png') }}');
  @elseif(isset($activePage) && $activePage == 'page4')
    background-image: url('{{ asset('images/page4/event_bg.png') }}');
  @elseif(isset($activePage) && $activePage == 'page5')
    background-image: url('{{ asset('images/page5/spots_bg.avif') }}');
  @else
    background-image: url('{{ asset('images/background-paper.jpg') }}');
  @endif
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
">
  <header>
    <h1>My Photo Album</h1>
  </header>

  <main>
    @yield('content')
  </main>

  
  @if (!request()->is('/'))
  <nav>
  <a href="{{ url('/') }}" 
     @if(isset($activePage) && $activePage == 'home') style="display:none" @endif>
     Home
  </a>

  @if(!isset($activePage) || $activePage != 'page1')
    <a href="{{ url('/page1') }}">Page 1</a>
  @endif

  @if(!isset($activePage) || $activePage != 'page2')
    <a href="{{ url('/page2') }}">Page 2</a>
  @endif

  @if(!isset($activePage) || $activePage != 'page3')
    <a href="{{ url('/page3') }}">Page 3</a>
  @endif

  @if(!isset($activePage) || $activePage != 'page4')
    <a href="{{ url('/page4') }}">Page 4</a>
  @endif

  @if(!isset($activePage) || $activePage != 'page5')
    <a href="{{ url('/page5') }}">Page 5</a>
  @endif
</nav>

  @endif

  <footer>
    © 2025 My Photo Album
  </footer>
</body>
</html>
