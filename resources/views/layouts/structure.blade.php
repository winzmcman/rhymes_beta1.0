@section('styles')
    <link href="{{ asset('css/app.css')   }}"  rel="stylesheet">
    <link href="{{ asset('css/bootstrap-mine.css')   }}"  rel="stylesheet">
    <link href="{{ asset('css/main.css')   }}"  rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection

<!DOCTYPE HTML>
<html>
  <head>
  @yield('styles')
  <title>{{ config('app.name') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
@section('header')
  <div class="container">
    <div class="row">
        <h1>{{ config('app.name', 'Rhymer') }}</h1>
    </div>
  </div>
@endsection
@yield('header')

@section('nav')

<nav class="col-12 navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

  <div class="row">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('rhymes')  }}">Все рифмы</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="{{ url('/login')  }}">Регистрация/Авторизация</a>
      </li>-->
      @if(Auth::check())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('feed') }}">Новости</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('profile', ['id' => Auth::id()])  }}">Профиль</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{ route('new')  }}">Новая рифма</a>
        </li>

      @else
         <li class="nav-item">
            <a class="nav-link" href="{{ route('login')  }}">Авторизация/регистрация</a>
        </li>
      @endif
    </ul>
  </div>
  </div>
</div>
</nav>
@endsection
@yield('nav')

@section('content')
  <div class="container">
    <div class="row">
      <h1>content</h1>
    </div>
  </div>
@endsection
@yield('content')

@section('footer')
  <div class="container">
    <div class="row">
      <h6>Copyright 2018 all rights reserved</h6>
    </div>
  </div>
@endsection
@yield('footer')
  </body>
  @yield('scripts')
</html>
