<x-layout>
    <x-main-logo heading="Your contributions!">

        <section class="flex flex-col items-center mt-8">

            <x-navigation.buttons :contributions="$contributions" />

            <x-contribution.short-grid :contributions="$contributions" />


            <div class="flex items-center mt-10">
                {{ $contributions->links() }}
            </div>

        </section>
        
    </x-main-airport>
</x-layout>