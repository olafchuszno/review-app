<x-layout>
    <x-main-logo>

    <div class="text-center text-secondaryOrange text-4xl font-bold leading-7 ml-2">
        <h1>
            Account details
        </h1>
    </div>

    <div class="mt-4 flex justify-center">
        <span class="flex justify-center mt-10 w-1/2">
            <div class="w-1/5 rounded-3xl">
                <x-profile.menu />
            </div>
            <div class="flex justify-center items-center w-2/3 bg-primaryIndigo rounded-2xl ml-6">
                <table class="">
                    <tr class="flex justify-evenly py-1 border-b border-secondaryIndigo">
                        <td class="p-2 text-lg font-semibold text-center">
                            Email address
                        </td>
                        <td class="p-2 text-lg font-semibold text-center">
                            <a class="flex justify-center items-center gap-1 hover:text-primaryOrange">
                                {{ auth()->user()->email }}
                            </a>
                        </td>
                    </tr>
                    <tr class="flex justify-evenly py-1 mt-6 mb-2">
                        <td>
                            <a href="/account/change_password" class="bg-secondaryIndigo border font-medium hover:bg-secondaryIndigo hover:border hover:border-primaryOrange px-5 py-2 rounded-xl text-lg">
                                Change password
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </span>
    </div>

    </x-main-logo>
</x-layout>