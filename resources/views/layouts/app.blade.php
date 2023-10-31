<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">Btu Php</a>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
    <footer class="bg-dark text-light py-5 position-absolute" style="bottom: 0; width: 100%;">
    <div class="container">
        <form method="POST">
            @csrf
            @method('PUT')
            <div class="d-flex justify-content-center">
                <input type="email" name="email" class="form-control" placeholder="Your Email" aria-label="Your Email" aria-describedby="subscribe-btn">
                <button type="submit" class="btn btn-warning ml-4" id="subscribe-btn">Subscribe</button>
            </div>
        </form>
    </div>
</footer>
</body>
</html>