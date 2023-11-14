@props(['contributions'])

<div class="lg:grid gap-6 lg:grid-cols-6 w-2/3 mt-8">

    @foreach ($contributions as $contribution)

        <div class="col-span-3 border rounded-2xl border-neutralStone bg-indigo-300">

            <table class="text-primaryIndigo mt-2">
                
                <x-basic-info class="grid grid-cols-2">
                    <x-td-first class="col-span-1">
                        <a href="contributions/{{ $contribution->id }}">
                            {{ $contribution->answers->first()->question->body }}
                        </a>
                    </x-td-first>
                    <x-td-second class="col-span-1">
                        <a href="{{ $contribution->id }}">
                            {{ $contribution->answers->first()->body }}
                        </a>
                    </x-td-second>
                </x-basic-info>
                
            </table>

        </div>

    @endforeach
    
</div>