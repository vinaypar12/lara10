<x-guest-layout>
    <!-- Session Status -->
    <h1 class="text-white text-center">Support tickets</h1>
    <div>
        @foreach($tickets as $ticket)
                <div class="text-white flex justify-between py-4">
                    <a href= "{{route('ticket.show', $ticket->id)}}" ><p>{{$ticket->title}}</p></a>
                    <p>{{$ticket->created_at->diffForHumans()}}</p>
                </div>
        @endforeach
    </div>
</x-guest-layout>
