<x-guest-layout>
    <!-- Session Status -->
    <h1 class="text-white text-center">{{$ticket->title}}</h1>
    <div>
        <div class="text-white flex justify-between py-4">
            <p>{{$ticket->description}}</p>
            <p>{{$ticket->created_at->diffForHumans()}}</p>
            @if($ticket->attachment)
                <a href= "{{ '/storage/ticket/'. $ticket->attachment}}" ><p>attachment</p></a>
            @endif
        </div>
    </div>
</x-guest-layout>
