<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Account Visit Planner' }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f8fafc; color: #111827; }
        nav { background: #111827; color: #fff; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; }
        nav a { color: #fff; text-decoration: none; margin-right: 1rem; }
        nav a:last-child { margin-right: 0; }
        main { max-width: 900px; margin: 2rem auto; background: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 1px 6px rgba(0,0,0,.08); }
        .btn { background: #2563eb; color: #fff; border: none; border-radius: 6px; padding: .55rem 1rem; cursor: pointer; text-decoration: none; display: inline-block; }
    </style>
</head>
<body>
@if(auth()->check())
    <nav>
        <div><strong>Account Visit Planner</strong></div>
        <div>
            <a href="{{ route('plans.index') }}">Plans</a>
            <a href="{{ route('settings.sugar') }}">Sugar Settings</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button class="btn" type="submit">Logout</button>
            </form>
        </div>
    </nav>
@endif

<main>
    @if ($errors->any())
        <div style="margin-bottom:1rem; color:#b91c1c;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ $slot }}
</main>
</body>
</html>
