<x-layout>
    <x-main-logo heading="Create an New account" class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

        <section class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="/register" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf

                <div class="flex gap-6 justify-between">
                    <x-form.input-field name="first_name" required>
                        First name
                    </x-input-field>

                    <x-form.input-field name="last_name" required>
                        Surname
                    </x-input-field>
                </div>
                @if ($errors->get('first_name') || $errors->get('last_name'))
                    <div class="flex justify-between text-xs">
                        <x-form.error name="first_name" />
                        <x-form.error name="last_name" />
                    </div>
                @endif
                
                <x-form.input-field name="avatar" type="file" input_class="text-stone-700">
                    Avatar
                </x-input-field>
                <x-form.error name="avatar" />

                <x-form.input-field name="username" required>
                    username
                </x-input-field>
                <x-form.error name="username" />

                <x-form.input-field name="email" type="email" required>
                    email
                </x-input-field>
                <x-form.error name="email" />

                <x-form.input-field name="password" label="password"
                    autocomplete="current-password" required type="password">
                    password
                </x-form.input-field>
                <x-form.error name="password" />

                <div class="mt-2">
                    <button type="submit" class="flex w-full justify-center rounded-xl bg-primaryOrange px-3 py-1.5 text-md font-extrabold leading-6 text-stone-100 shadow-sm hover:text-indigo-500 hover:bg-stone-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
                </div>
            </form>

        </section>
    </x-main-logo>
</x-layout>