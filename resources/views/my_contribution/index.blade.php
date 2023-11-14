<x-layout>
    <x-main-logo heading="Your contributions!">

        <section class="flex flex-col items-center mt-8">

            <x-navigation.buttons :contributions="$contributions" />

            <x-contribution.grid :contributions="$contributions" />


            <div class="flex items-center">
                {{ $contributions->links() }}
            </div>

        </section>
        
    </x-main-airport>
</x-layout>