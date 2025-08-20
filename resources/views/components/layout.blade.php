<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piexel Positions</title>
        {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}

    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <nav class="flex justify-between">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" />
                </a>
            </div>
            <div>
                <a href="#">Jobs</a>
                <a href="#">Carrier</a>
                <a href="#">Salary</a>
                <a href="#">Company</a>
            </div>
            <div>Post a Job</div>
        </nav>
        <main>
            {{$slot}}
        </main>
    </div>
    
</body>
</html>