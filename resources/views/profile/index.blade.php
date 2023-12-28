<x-layout>
    <x-main-logo heading="Profile details">
        <section class="mt-4 flex justify-center">

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
                        <table>
                            <x-tr-settings>
                                <x-td-settings>
                                    First name
                                </x-td-settings>
                                <x-td-settings>
                                    {{ auth()->user()->first_name }}
                                </x-td-settings>
                            </x-tr-settings>
                            <x-tr-settings>
                                <x-td-settings>
                                    Last name
                                </x-td-settings>
                                <x-td-settings>
                                    {{ auth()->user()->last_name }}
                                </x-td-settings>
                            </x-tr-settings>
                            <x-tr-settings>
                                <x-td-settings>
                                    Username
                                </x-td-settings>
                                <x-td-settings>
                                    {{ auth()->user()->username }}
                                </x-td-settings>
                            </x-tr-settings>
                            <tr class="flex justify-evenly py-1 mt-4 mb-2">
                                <td>
                                    <a href="/profile/edit" class="bg-raisinBlack text-primaryIndigo font-bold hover:bg-primaryIndigo hover:text-raisinBlack hover:border hover:border-raisinBlack px-5 py-2 rounded-xl text-lg">
                                        Edit your profile
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </span>

        </section>
    </x-main-logo>
</x-layout>