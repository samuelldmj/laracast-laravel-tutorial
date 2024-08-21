<x-layouts>
    <x-slot:header>
        Login
    </x-slot:header>
    <form method="POST" action="/login">
        @csrf

        <div>
            <div class="border-gray-900/10 pb-7">
                <x-form-label for='email'>E-mail</x-form-label>
                <x-form-input id="email" name="email" placeholder="E-mail" />
                <x-form-error name="email"></x-form-error>
            </div>
        </div>
        
            {{-- label component --}}
            <x-form-label for='password'>Password</x-form-label>
            <div class="mt-2">
                <x-form-input id="password" name="password" placeholder="Password"/>
                <x-form-error name="password"></x-form-error>
            </div>

            <div class="mt-4 flex items-center justify-end gap-x-6">
                <a type="button" href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-button>Login</x-form-button>
             </div>
        </div>
 
    </form>
</x-layouts>
