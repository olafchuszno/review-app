<x-layout>
    <x-main-logo heading="Your Contribution" class="flex flex-col items-center gap-6">

        <section>
            <div class="flex gap-1">
                <x-section-link href="/airports/{{$contribution->airport->code}}/basic_info" requestIs="none">
                    {{ $contribution->airport->name }}
                </x-section-link>
                <x-section-link href="/airports/{{$contribution->airport->code}}/topics/{{$contribution->topic->name}}" requestIs="none">
                    {{ $contribution->topic->name }}
                </x-section-link>
            </div>
        </section>

        <section class="w-2/3 p-5 border rounded-2xl border-neutralStone bg-indigo-300 flex justify-center items-center mb-10">

            <table class="divide-y divide-gray-100 text-indigo-800 mt-2">
                
                @foreach ($contribution->answers as $answer)
                    <x-basic-info class="{{ $loop->last ? '' : 'border-b-2 border-indigo-200' }}">
                        <x-td-first>{{ $answer->question->body }}</x-td-first>
                        <x-td-second>{{ $answer->body }}</x-td-second>
                    </x-basic-info>
                @endforeach
                
            </table>

        </section>

    </x-main-logo>
</x-layout>