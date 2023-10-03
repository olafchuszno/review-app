<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create an New account</h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="/register" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf

                <div class="flex justify-between">
                    <x-form.input-field name="first name" required>
                        First name
                    </x-input-field>

                    <x-form.input-field name="last name" required>
                        Surname
                    </x-input-field>
                </div>

                <x-form.input-field name="avatar" type="file">
                    Avatar
                </x-input-field>

                <x-form.input-field name="username" required>
                    username
                </x-input-field>

                <x-form.input-field name="email" type="email" required>
                    email
                </x-input-field>

                <x-form.input-field name="password" label="password"
                    autocomplete="current-password" required type="password">
                    password
                </x-form.input-field>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
                </div>
            </form>

        </div>
    </div>
</x-layout>