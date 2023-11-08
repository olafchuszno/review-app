<x-layout>
    <x-main-logo>

    <div class="text-center text-secondaryOrange text-4xl font-bold leading-7 ml-2">
        <h1>
            Your profile information
        </h1>
    </div>

    <div class="mt-4 flex justify-center">
        <span class="flex justify-center mt-10 w-1/2">
            <div class="w-1/5 rounded-3xl">
                <x-profile.menu />
            </div>

            <div class="flex flex-col w-2/3 items-center pb-8 bg-primaryIndigo rounded-2xl ml-6">

                <div class="flex flex-col items-center gap-3 mt-4 px-4 pt-4 pb-3 border-b border-secondaryIndigo">
                    <a href="/profile/edit">
                        <x-user-avatar />
                    </a>
                    <div class="flex gap-1 justify-center items-center">
                        <p class="font-semibold hover:text-primaryOrange">
                            Your Avatar
                        </p>
                    </div>
                </div>
                
                <div>
                    <table class="">
                        <tr class="flex justify-evenly py-1 border-b border-secondaryIndigo">
                            <td class="p-2 text-lg font-semibold text-center">
                                First name
                            </td>
                            <td class="p-2 text-lg font-semibold text-center">
                                <a href="/profile/edit" class="flex justify-center items-center gap-1 hover:text-primaryOrange">
                                    {{ auth()->user()->first_name }}
                                </a>
                            </td>
                        </tr>
                        <tr class="flex justify-between py-1 border-b border-secondaryIndigo">
                            <td class="py-2 w-1/2 text-lg font-semibold text-center flex items-center justify-center">
                                <p>
                                    Last name
                                </p>
                            </td>
                            <td class="py-2 w-1/2 text-lg font-semibold text-center flex items-center justify-center">
                                <a href="/profile/edit" class="flex justify-center items-center gap-1 hover:text-primaryOrange">
                                    {{ auth()->user()->last_name }}
                                </a>
                            </td>
                        </tr>
                        <tr class="flex justify-evenly py-1 border-b border-secondaryIndigo">
                            <td class="p-2 text-lg font-semibold text-center">
                                Username
                            </td>
                            <td class="p-2 text-lg font-semibold text-center">
                                <a href="/profile/edit" class="flex justify-center items-center gap-1 hover:text-primaryOrange">
                                    {{ auth()->user()->username }}
                                </a>
                            </td>
                        </tr>
                        <tr class="flex justify-evenly py-1 mt-6 mb-2">
                            <td>
                                <a href="/profile/edit" class="bg-secondaryIndigo border font-medium hover:bg-secondaryIndigo hover:border hover:border-primaryOrange px-5 py-2 rounded-xl text-lg">
                                    Edit your profile
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </span>
    </div>

    </x-main-logo>
</x-layout>