<x-guest-layout class="body">

        <x-slot name="logo">
             LOGO
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm">
                {{ session('status') }}
            </div>
        @endif
        <div class="painel w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mt-4 wrapperNome">
                <input id="email" class="shadow appearance-none border border-blue-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" type="email" name="email" :value="old('email')" required  />
                <label class=" labelNome" for="email" value="{{ __('Email') }}"><span class="contentNome">Email</span></>
            </div>

            <div class="mt-4 wrapperNome">
                <input class="shadow appearance-none border border-blue-200 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" class="block mt-1 w-full" type="password" name="password"  required autocomplete="off" />
                <label class="labelNome" for="password" value="{{ __('Senha') }}"><span class="contentNome">Senha</span></>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-800">{{ __('Lembre de mim') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                    <a class="text-sm text-gray-600 hover:underline" href="{{ route('register') }}">
                        {{ __('Não possuo uma conta') }}
                    </a>

                <button class="transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 transition ease-in-out duration-300
                ml-4 items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest">
                    {{ __('Entrar') }}
                </button>
            </div>

            <div class="flex items-center justify-start mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif
            </div>
        </form>
        </div>
    </div>
    
</x-guest-layout>

