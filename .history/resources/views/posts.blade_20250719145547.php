<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ( @posts as @post  )
    
    @endforeach
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Article 1</h2>
        <div class="text-base text-gray-500">
            <a href="#">Seniccc</a> | 1 January 2024
        </div>
        <p class="my-4 font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque id excepturi itaque ab minus consectetur maiores, dolores iste quasi accusantium, inventore, non fugit laboriosam error quia iure praesentium. Consequuntur, repellat!</p>
        <a href="#" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
    </article>



</x-layout>