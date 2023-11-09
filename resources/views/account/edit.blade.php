<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="">
            <x-style.logo />

            <h1 class="text-center text-primaryOrange text-3xl font-bold leading-9 tracking-tight">
                Change password
            </h1>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="/profile/edit" method="POST" class="flex flex-col gap-4">
                @csrf
                @method('patch')

                <x-form.input-field name="current_password" label="current_password"
                    autocomplete="current-password" required type="password" placeholder="old">
                    Current password
                </x-form.input-field>
                <x-form.error name="current_password" />

                <x-form.input-field name="new_password" label="new_password"
                    autocomplete="new-password" required type="password" placeholder="new">
                    New password
                </x-form.input-field>
                <x-form.error name="new_password" />

                <x-form.input-field name="confirm_password" label="confirm_password"
                    autocomplete="new-password" required type="password" placeholder="new">
                    Confirm new password
                </x-form.input-field>
                <x-form.error name="confirm_password" />

                <div class="mt-2">
                    <button type="submit" class="flex w-full justify-center rounded-xl bg-primaryOrange px-3 py-1.5 text-md font-extrabold leading-6 text-stone-100 shadow-sm hover:text-indigo-500 hover:bg-stone-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Update profile!
                    </button>
                </div>
            </form>

            

        </div>
    </div>
</x-layout>
