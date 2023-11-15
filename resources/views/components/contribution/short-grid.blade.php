@props(['contributions'])

<div class="lg:grid gap-6 lg:grid-cols-6 sm:grid-cols-3 w-2/3 mt-8">

    @foreach ($contributions as $contribution)

        <div class="col-span-3 border rounded-2xl border-neutralStone bg-indigo-300">

            <table class="text-primaryIndigo mt-2">
                
                <tr class="p-2 gap-4 font-bold lg:grid lg:grid-cols-3">
                    <td class="col-span-1 lg:text-lg p-2 sm:text-md text-center">
                        <a href="contributions/{{ $contribution->id }}">
                            {{ $contribution->answers->first()->question->body }}
                        </a>
                    </td>
                    <td class="col-span-2 pb-1 sm:text-md">
                        <a href="contributions/{{ $contribution->id }}">
                            {{ $contribution->answers->first()->body }}
                        </a>
                    </td>
                </tr>
                
            </table>

        </div>

    @endforeach
    
</div>