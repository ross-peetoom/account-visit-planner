<x-layouts.app :title="'Login'">
    <h1 style="margin-top:0;">Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div style="margin-bottom:1rem;">
            <label for="email">Email</label><br>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div style="margin-bottom:1rem;">
            <label for="password">Password</label><br>
            <input id="password" type="password" name="password" required>
        </div>

        <div style="margin-bottom:1rem;">
            <label>
                <input type="checkbox" name="remember"> Remember me
            </label>
        </div>

        <button class="btn" type="submit">Login</button>
    </form>

    <p style="margin-top:1rem;">No account? <a href="{{ route('register') }}">Register</a></p>
</x-layouts.app>
