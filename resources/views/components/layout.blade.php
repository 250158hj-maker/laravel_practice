<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice PHP Laravel</title>
</head>

<body>
    <header>
        <a href="/">Home</a>
        <a href="/about">About</a>
    </header>

    <!-- Contents -->
    {{ $slot }}

    <footer>
        <ul>
            <li><a href="/product/1">Coffee</a></li>
            <li><a href="/product/2">Tea</a></li>
            <li><a href="/product/3">Green Tea</a></li>
        </ul>
    </footer>
</body>

</html>