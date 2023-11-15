@props(['contributions'])

<div class="lg:grid gap-6 lg:grid-cols-6 sm:grid-cols-3 w-2/3 mt-8">

    @foreach ($contributions as $contribution)

        <div class="col-span-3 border rounded-2xl border-neutralStone bg-indigo-300">

            <table class="text-primaryIndigo mt-2">
                
                <tr class="lg:grid gap-6 lg:grid-cols-3 font-bold p-4">
                    <td class="col-span-1 lg:text-lg sm:text-md text-center">
                        <a href="contributions/{{ $contribution->id }}">
                            {{ $contribution->answers->first()->question->body }}
                        </a>
                    </td>
                    <td class="col-span-2 lg:text-sm sm:text-xs">
                        <a href="contributions/{{ $contribution->id }}">
                            {{ $contribution->answers->first()->body }}
                        </a>
                    </td>
                </tr>
                
            </table>

        </div>

    @endforeach
    
</div>