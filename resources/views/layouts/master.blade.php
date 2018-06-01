<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>
      <link rel="icon" href="{{ asset('favicon.ico')}}">

      <title>Blog Template for Bootstrap</title>

      <!-- Bootstrap core CSS -->
      <link href="{{ asset('css/app.css')}}" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
      <link href="{{ asset('css/blog.css')}}" rel="stylesheet">
  </head>

  <body>
    @auth
    <div class="container mt-3">
          <div class="row">
              <div class="col-12">
                  <center>
                        <a href="/posts" class="btn btn-sm btn-outline-primary">Back To List Posts</a>
                  </center>
            </div>
        </div>
    </div>
    @endauth
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="/">{{ config('app.name', 'Laravel') }}</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
              @guest
                  <a class="btn btn-sm btn-outline-secondary" href="{{ route('register')}}">Sign up</a> &nbsp;
                  <a class="btn btn-sm btn-outline-secondary" href="{{ route('login')}}">Login</a>
              @else
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      Username <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/profile">Profile</a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>

                  </div>
              @endguest

          </div>
        </div>
      </header>
      <div class="nav-scroller py-1 mb-2">
          <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="#">World</a>
            <a class="p-2 text-muted" href="#">U.S.</a>
            <a class="p-2 text-muted" href="#">Technology</a>
            <a class="p-2 text-muted" href="#">Design</a>
            <a class="p-2 text-muted" href="#">Culture</a>
            <a class="p-2 text-muted" href="#">Business</a>
            <a class="p-2 text-muted" href="#">Politics</a>
            <a class="p-2 text-muted" href="#">Opinion</a>
            <a class="p-2 text-muted" href="#">Science</a>
            <a class="p-2 text-muted" href="#">Health</a>
            <a class="p-2 text-muted" href="#">Style</a>
            <a class="p-2 text-muted" href="#">Travel</a>
          </nav>
        </div>

        @yield('content')

      </div>

      <footer class="blog-footer">
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
          <a href="#">Back to top</a>
        </p>
      </footer>

      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="{{ asset('js/jquery.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="{{ asset('js/jquery.slim.min.js')}}"><\/script>')</script>
      <script src="{{ asset('js/popper.js')}}"></script>
      <script src="{{ asset('js/app.js')}}"></script>
      <script src="{{ asset('js/holder.min.js')}}"></script>
      <script>
        Holder.addTheme('thumb', {
          bg: '#55595c',
          fg: '#eceeef',
          text: 'Thumbnail'
        });
      </script>

    </body>
  </html>
