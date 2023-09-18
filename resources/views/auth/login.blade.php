<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="/assets/images/favicon.png" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Connexion | CALL</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-sans">
    <div id="main">
        <div
            class="min-h-screen w-screen flex items-center justify-center bg-gray-900 text-gray-300 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <div>
                    <img class="mx-auto h-auto w-auto" src="{{ asset('images/logo-transparent.png') }}" alt="CSPE">
                    <h2 class="text-center mt-12 text-3xl font-extrabold">
                        Connexion à votre compte
                    </h2>
                    @if($errors->any())
                        {{-- @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach --}}
                        <h3 class="text-center mt-6 text-red-600">
                            Identifiants invalides.
                        </h3>
                    @endif
                </div>
                <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="rounded-md shadow-sm -space-y-px">
                        <div>
                            <label for="username-address" class="sr-only">Email address</label>
                            <input id="username-address" value="{{ old('email') }}" name="email" type="email"
                                autocomplete="email" autofocus required
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-red-500 focus:border-gray-900 focus:z-10 sm:text-sm"
                                placeholder="Identifiant">
                        </div>
                        <div>
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-red-500 focus:border-gray-900 focus:z-10 sm:text-sm"
                                placeholder="Mot de passe">
                        </div>
                    </div>
                    <div class="text-sm">
                        <a href="{{ route('password.request') }}" class="font-medium text-gray-500 hover:text-gray-400">
                            Mot de passe oublié / Première connexion
                        </a>
                    </div>
                    <div>
                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-gray-300 hover:text-gray-200 bg-violet-100 focus:outline-none focus:ring-2 focus:ring-offset-gray-900 focus:ring-offset-2 focus:ring-violet-100">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-300 group-hover:text-gray-200"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            Connexion
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
