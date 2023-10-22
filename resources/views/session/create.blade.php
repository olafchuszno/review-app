<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="">
            <x-style.logo />


            <h2 class="text-center text-2xl font-bold leading-9 tracking-tight">Log in to your account</h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="/login" method="POST" class="flex flex-col gap-4">
                @csrf

                <x-form.input-field name="email_or_username" type="text" required>
                    Email or Username
                </x-input-field>
                <x-form.error name="email_or_username" />

                <x-form.input-field name="password" label="password"
                    autocomplete="current-password" required type="password">
                    Password
                </x-form.input-field>
                <x-form.error name="password" />

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-400 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log in</button>
                </div>
            </form>

        </div>
    </div>
</x-layout>