<x-section-link 
    href="/airports/{{ $airport->code }}/basic_info"
    requestIs="*basic_info"
    class="mr-1"
    >
    Basic info.
</x-section-link>
<x-section-link
    href="/airports/{{ $airport->code }}/main_topics" 
    requestIs="*main_topics"
    class="mr-1"
>
    Main topics.
</x-section-link>
<x-section-link
    href="/airports/{{ $airport->code }}/contribute"
    requestIs="*contribute*"
    class="mr-1"
>
    Contribute
</x-section-link>