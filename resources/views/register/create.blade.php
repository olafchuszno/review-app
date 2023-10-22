<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="">
            <x-style.logo />


            <h2 class="text-center text-2xl font-bold leading-9 tracking-tight">Create an New account</h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="/register" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf

                <div class="flex gap-2 justify-between">
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
                
                <x-form.input-field name="avatar" type="file" input_class="text-indigo-100">
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

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
                </div>
            </form>

        </div>
    </div>
</x-layout>