<x-layout.layout title="Scenarista | Přihlášení">
    <div class="flex min-h-screen flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 space-y-6">
                <h1 class="text-gray-800 text-4xl font-bold">Přihlášení</h1>
                <form class="flex flex-col gap-6 items-stretch" action="{{ route("login.submit") }}" method="POST">
                    @csrf
                    <x-forms.input label="Email" name="email" type="email" required remember/>
                    <x-forms.input label="Heslo" name="password" type="password" required/>

                    <div class="flex items-center justify-between">
                        <x-forms.checkbox name="rememberMe">
                            Zapamatovat
                        </x-forms.checkbox>

                        <div class="text-sm">
                            <a href="{{ route("forgotten-password") }}"
                               class="font-medium text-cyan-600 hover:text-cyan-500">Zapomněli jste heslo</a>
                        </div>
                    </div>

                    <x-buttons.primary-button type="submit">
                        Přihlásit se
                    </x-buttons.primary-button>

                    <div class="text-sm">
                        <p>
                            Ještě nemáte účet?
                            <a href="{{ route("register") }}"
                               class="text-cyan-600 hover:text-cyan-500 underline">Zde se můžete zaregistrovat.</a>
                        </p>

                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout.layout>
