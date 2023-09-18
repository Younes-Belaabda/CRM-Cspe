{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
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
        <div class="h-screen w-screen flex items-center justify-center bg-gray-900 text-gray-300 flex-col">
            <div class="w-full max-w-lg flex items-center justify-center flex-col p-16 rounded-sm space-y-9">
                <img src="/assets/images/logo_venom.png" class="h-auto w-auto" alt="Logo Venom">
                <h1 class="text-2xl font-extrabold text-center">Réinitialisation du mot de passe</h1>
                <form  action="{{ route('password.email') }}" method="post" class="space-y-6">
                    @csrf
                    <div><label class="sr-only required"
                            for="reset_password_request_form_email">Identifiant</label>
                            <input type="email" name="email" required="required" placeholder="Identifiant"
                            class="phone w-full text-gray-900 rounded-md py-2 px-3 text-center placeholder-gray-500 rounded-sm border border-solid border-gray-300 focus:border-red-800 outline-none " />
                    </div>
                    <div class="text-center">
                        <small>
                            Entrez votre identifiant pour recevoir un lien de réinitialisation à l'adresse mail associée
                            à votre compte
                        </small>
                    </div>

                    <button
                        class="w-full rounded-md bg-red-900 text-gray-300 hover:text-gray-200 text-white p-2 font-medium">Envoyer
                        le mail de réinitialisation</button>
                </form>
                <a class="text-base text-red-900 hover:text-red-800 font-medium" href="/login"><i
                        class="fa fa-arrow-left"></i> Retour à la connexion</a>
            </div>
        </div>

    </div>
</body>

</html>
