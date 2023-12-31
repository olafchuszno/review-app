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
                <x-section-link href="/my/contributions/{{$contribution->id}}/edit" class="text-primaryOrange hover:bg-raisinBlack">
                    Edit
                </x-section-link>
                <x-section-link class="text-primaryOrange hover:bg-raisinBlack">
                    <form method="POST" action="/my/contributions/{{$contribution->id}}">
                        @csrf
                        @method('DELETE')
                        <button>
                            Delete
                        </button>
                    </form>
                </x-section-link>
            </div>
        </section>

        <section class="w-2/3 p-5 border rounded-2xl border-neutralStone bg-primaryIndigo flex justify-center items-center mb-10">

            <table class="divide-y divide-gray-100 text-raisinBlack mt-2">

                @foreach ($answers as $answer)
                <x-basic-info class="{{ $loop->last ? '' : 'border-b-2 border-indigo-200' }}">
                    <x-td-first>{{ $answer->question->body }}</x-td-first>
                    <x-td-second>{{ $answer->body }}</x-td-second>
                </x-basic-info>
                @endforeach

            </table>

        </section>

    </x-main-logo>
</x-layout>