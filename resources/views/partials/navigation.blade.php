<nav class="navbar navbar-default navbar-dark bg-dark text-white">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('recipes.index') }}">Ricepies</a>
        </div>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline text-white">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline text-white">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline text-white">Register</a>
                @endif
                @endauth
            </div>
        @endif
    </div>
  </nav>