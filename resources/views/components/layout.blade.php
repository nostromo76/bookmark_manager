
<!DOCTYPE html>
<html>
<head>
    <title>Bookmark Manager</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Your main content goes here -->
        @yield('content')
    </main>
    <footer>
        <!-- Your footer content goes here -->
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>