<x-layout.layout title="Scenarista | Registrace">
    <div class="flex min-h-screen flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 space-y-6">
                <h1 class="text-gray-800 text-4xl font-bold">Registrace</h1>
                <form class="flex flex-col gap-6 items-stretch" action="{{ route("register.submit") }}" method="POST">
                    @csrf
                    <x-forms.input label="Přezdívka" name="name" type="text" required remember/>
                    <x-forms.input label="Email" name="email" type="email" required remember/>
                    <x-forms.input label="Heslo" name="password" type="password" required/>
                    <x-forms.input label="Heslo znovu" name="password_confirmation" type="password" required/>

                    <x-buttons.primary-button type="submit">
                        Registrovat se
                    </x-buttons.primary-button>

                    <div class="text-sm">
                        <p>
                            Již máte účet?
                            <a href="{{ route("login") }}"
                               class="text-cyan-600 hover:text-cyan-500 underline">Zde se můžete přihlásit.</a>
                        </p>

                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout.layout>
