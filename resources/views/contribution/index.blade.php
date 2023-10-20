<x-layout>

<x-main-logo class="flex flex-col items-center">

    <div class="w-2/3 flex justify-center mt-10">

        @foreach ($contributions as $contribution)

            <div class="mt-6 border-t border-gray-100">

                <table class="divide-y divide-gray-100">
                    
                    @foreach ($contribution->answers as $answer)
                        <x-basic-info>
                            <x-td-first>{{ $answer->question->body }}</x-td-first>
                            <x-td-second>{{ $answer->body }}</x-td-second>
                        </x-basic-info>
                    @endforeach
                    
                </table>
            </div>

        @endforeach
        
    </div>
    
</x-main-logo>

</x-layout>