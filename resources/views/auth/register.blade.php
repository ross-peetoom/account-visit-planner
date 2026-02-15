<x-layouts.app :title="'Register'">
    <h1 style="margin-top:0;">Register</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div style="margin-bottom:1rem;">
            <label for="name">Name</label><br>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div style="margin-bottom:1rem;">
            <label for="email">Email</label><br>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div style="margin-bottom:1rem;">
            <label for="password">Password</label><br>
            <input id="password" type="password" name="password" required>
        </div>

        <div style="margin-bottom:1rem;">
            <label for="password_confirmation">Confirm Password</label><br>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>

        <button class="btn" type="submit">Create account</button>
    </form>

    <p style="margin-top:1rem;">Already registered? <a href="{{ route('login') }}">Login</a></p>
</x-layouts.app>
