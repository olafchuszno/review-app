<x-section-link 
    href="/airports/{{ $airport->code }}/basic_info"
    requestIs="*basic_info"
    >
    Basic info.
</x-section-link>
<x-section-link
    href="/airports/{{ $airport->code }}/main_topics" 
    requestIs="*main_topics"
>
    Main topics.
</x-section-link>