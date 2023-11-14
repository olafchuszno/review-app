<x-layout>
    <x-main-logo heading="Log in to your account">

        <section class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="/login" method="POST" class="flex flex-col gap-4">
                @csrf

                <x-form.input-field name="email_or_username" value="{{ old('email_or_username') ?? '' }}" type="text" required>
                    Email or Username
                </x-input-field>
                <x-form.error name="email_or_username" />

                <x-form.input-field name="password" label="password"
                    autocomplete="current-password" required type="password">
                    Password
                </x-form.input-field>
                <x-form.error name="password" />

                <div class="mt-2">
                    <button type="submit" class="flex w-full justify-center rounded-xl bg-primaryOrange px-3 py-1.5 text-md font-extrabold leading-6 text-stone-100 shadow-sm hover:text-indigo-500 hover:bg-stone-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Log in
                    </button>
                </div>
            </form>
        </section>
    </x-main-logo>
</x-layout>