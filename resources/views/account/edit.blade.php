<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="">
            <x-style.logo />

            <h1 class="text-center text-primaryOrange text-3xl font-bold leading-9 tracking-tight">
                Change password
            </h1>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="/account/change_password" method="POST" class="flex flex-col gap-4">
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

                <x-form.input-field name="new_password_confirmation" label="new_password_confirmation"
                    autocomplete="new-password" required type="password" placeholder="new">
                    Confirm new password
                </x-form.input-field>
                <x-form.error name="new_password_confirmation" />

                <div class="mt-2">
                    <button type="submit" class="flex w-full justify-center rounded-xl bg-primaryOrange px-3 py-1.5 text-md font-extrabold leading-6 text-stone-100 shadow-sm hover:text-indigo-500 hover:bg-stone-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Update profile!
                    </button>
                </div>

                @if ($errors->any())
                    <div class="has-tooltip">
                        <span class="tooltip rounded shadow-lg p-1 bg-gray-100 text-red-500 mt-8">
                            @foreach($errors->all() as $error)
                                <p>
                                    {{ $error }}
                                </p>
                            @endforeach
                        </span>
                        <h2 class="text-red-500">
                            There were some problems...
                        </h2>
                    </div>
                @endif

            </form>

            

        </div>
    </div>
</x-layout>
