<x-layout>
    <x-main-logo>

        <div class="flex justify-center mt-10">
            <div class="w-1/6">
                <ul role="list" class="divide-y divide-stone-200">
                    <x-profile.li href="profile">
                        Profile
                    </x-profile.li>

                    <x-profile.li href="account">
                        Account
                    </x-profile.li>

                    <x-profile.li href="posts">
                        Posts
                    </x-profile.li>

                    <x-profile.li href="contributions">
                        Contributions
                    </x-profile.li>
                </ul>
            </div>
            <div class="flex justify-center w-1/3 bg-indigo-200">
                <div class="">
                    <h1>
                        Your profile
                    </h1>
                </div>
            </div>
        </div>

    </x-main-logo>
</x-layout>