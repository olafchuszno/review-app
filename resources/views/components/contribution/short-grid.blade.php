@props(['contributions'])

<div class="lg:grid gap-6 lg:grid-cols-6 sm:grid-cols-3 w-2/3 mt-8">

    @foreach ($contributions as $contribution)

    <div class="col-span-3 border rounded-2xl border-neutralStone bg-primaryIndigo">

        <table class="text-raisinBlack mt-2">

            <tr class="p-2 gap-4 font-bold lg:grid lg:grid-cols-8 flex">
                <td class="col-span-2 lg:text-lg p-2 sm:text-md text-center">
                    <a href="contributions/{{ $contribution->id }}">
                        {{ $contribution->answers->first()->question->body }}
                    </a>
                </td>
                <td class="col-span-5 pb-1 flex items-center sm:text-md overflow-hidden">
                    <a href="contributions/{{ $contribution->id }}" class="break-words">
                        {{ $contribution->answers->first()->body }}
                    </a>
                </td>
                <td class="flex items-center">
                    <a href="contributions/{{ $contribution->id }}" class="p-3 flex min-w-full justify-center">
                        <x-style.back-arrow transform="rotate(180)"></x-style.back-arrow>
                    </a>
                </td>
            </tr>

        </table>

    </div>

    @endforeach

</div>