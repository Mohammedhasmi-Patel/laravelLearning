<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/style.css') }}">
  <title>Hasmi - @yield('title')</title>
</head>
<body>
  <div id="wrapper">
    <header>
      HasmiDeveloepr
    </header>

    <nav>
      <a href="/">Home</a>
      <a href="/about">About</a>
      <a href="/post">Post</a>
    </nav>

    <main>
      <article>
        @yield('content')
      </article>
      <aside>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li>
              <a href="/post">Post</a>

            </li>
        </ul>
      </aside>
    </main>
    <footer>
      hasmicopyright@gmail.com
    </footer>
  </div>
</body>
</html>