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
                <ul role="list" class="w-full flex flex-col gap-4">
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
            <div class="flex flex-col w-2/3 items-center pb-8 bg-primaryIndigo rounded-2xl ml-6">

                <div class="flex flex-col items-center gap-3 mt-4 px-4 pt-4 pb-3 border-b border-secondaryIndigo">
                    <a href="change-avatar">
                        <img src="{{ asset('storage/' . auth()->user()->avatar) }}" 
                            alt="user's avatar picture"
                            width="100px"
                            class="rounded-full p-0.5 hover:border-2 hover:border-primaryOrange"
                        />
                    </a>
                    <div class="flex gap-1 justify-center items-center">
                        <a href="change-avatar" class="font-semibold hover:text-primaryOrange">
                            Change avatar
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="#ff6200" d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/></svg>
                    </div>
                </div>
                
                <div>
                    <table class="">
                        <tr class="flex justify-evenly py-1 border-b border-secondaryIndigo">
                            <td class="p-2 text-lg font-semibold text-center">
                                Username
                            </td>
                            <td class="p-2 text-lg font-semibold text-center">
                                <a href="change-username" class="flex justify-center items-center gap-1 hover:text-primaryOrange">
                                    {{ auth()->user()->username }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="#ff6200" d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/></svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="flex justify-evenly py-1">
                            <td class="p-2 text-lg font-semibold text-center">
                                Email
                            </td>
                            <td class="p-2 text-lg font-semibold text-center">
                                <a href="change-email" class="flex justify-center items-center gap-1 hover:text-primaryOrange">
                                    {{ auth()->user()->email }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="#ff6200" d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/></svg>
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