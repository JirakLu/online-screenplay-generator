<x-layout.layout title="Scenarista | Ověření emailu">
    <div class="flex min-h-screen flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 space-y-6">
                <h1 class="text-gray-800 text-4xl font-bold">Ověření emailu</h1>
                <p class="text-sm">
                    Děkujeme za přihlášení, ale ještě před tím, než začnete vytvářet luxusní scénáře, ověřte prosím Váš
                    email.
                </p>
                <div class="flex items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <x-buttons.primary-button type="submit">
                            Poslat email znovu
                        </x-buttons.primary-button>
                    </form>


                    <x-buttons.secondary-button type="link" :href="route('logout')">
                        Odhlásit se
                    </x-buttons.secondary-button>
                </div>
            </div>
        </div>
    </div>
</x-layout.layout>



