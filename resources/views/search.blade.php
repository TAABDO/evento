@foreach ($events as $event)
<div
    class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:-translate-y-1">
    <div>
        <img class="w-full h-60 md:h-auto object-cover rounded-lg shadow-lg" name="picture"
            src="{{ $event->getFirstMediaUrl('picture') }}" alt="Event Image">

    </div>
    <div class="px-6 py-4">
        <h2 class="text-xl font-semibold mb-2">{{ $event->title }}</h2>
        <p class="text-gray-600 text-sm">{{ $event->description }}</p>
    </div>
    <div class="border-t border-gray-200 px-6 py-4">
        <p class="text-gray-700 text-sm mb-2"><span class="font-semibold">Location:</span>
            {{ $event->location }}</p>
        <p class="text-gray-700 text-sm mb-2"><span class="font-semibold">Date:</span>
            {{ $event->date }}</p>
        <p class="text-gray-700 text-sm mb-2"><span class="font-semibold">Available
                Places:</span> {{ $event->availablePlaces }}</p>
        <p class="text-gray-700 text-sm mb-2"><span class="font-semibold">Category:</span>
            {{ $event->category->name }}</p>
    </div>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <a href="{{ route('event.show', $event->id) }}">View Details</a>
    </button>
</div>
@endforeach
