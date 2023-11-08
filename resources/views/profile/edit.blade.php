<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="">
            <x-style.logo />

            <h1 class="text-center text-primaryOrange text-3xl font-bold leading-9 tracking-tight">
                Edit your profile
            </h1>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="/profile/edit" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf
                @method('patch')

                <div class="flex gap-6 justify-between">
                    <x-form.input-field name="first_name" required value="{{ old('first_name') ?? $user->first_name }}" placeholder="{{ $user->first_name }}">
                        First name
                    </x-input-field>

                    <x-form.input-field name="last_name" required value="{{ old('last_name') ?? $user->last_name }}" placeholder="{{ $user->last_name }}" >
                        Surname
                    </x-input-field>
                </div>
                @if ($errors->get('first_name') || $errors->get('last_name'))
                    <div class="flex justify-between text-xs">
                        <x-form.error name="first_name" />
                        <x-form.error name="last_name" />
                    </div>
                @endif
                
                <x-form.input-field name="avatar" type="file" input_class="text-stone-700" div_class="mt-0.5">
                    Avatar (leave empty if you wish to keep your old one)
                </x-input-field>
                <x-form.error name="avatar" />

                <x-form.input-field name="username" required value="{{ old('username') ?? $user->username }}" placeholder="{{ $user->username }}">
                    Username
                </x-input-field>
                <x-form.error name="username" />

                <x-form.input-field name="password" label="password"
                    autocomplete="current-password" required type="password">
                    Current password
                </x-form.input-field>
                <x-form.error name="password" />

                <div class="mt-2">
                    <button type="submit" class="flex w-full justify-center rounded-xl bg-primaryOrange px-3 py-1.5 text-md font-extrabold leading-6 text-stone-100 shadow-sm hover:text-indigo-500 hover:bg-stone-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Update profile!
                    </button>
                </div>
            </form>

        </div>
    </div>
</x-layout>
