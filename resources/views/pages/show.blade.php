@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-100">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="{{asset('img/parasite.jpg')}}" alt="parasite" class="w-96">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                <div class="flex items-center text-gray-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.94 47.94" style="enable-background:new 0 0 47.94 47.94" xml:space="preserve"><path style="fill:#ed8a19" d="m26.285 2.486 5.407 10.956a2.58 2.58 0 0 0 1.944 1.412l12.091 1.757c2.118.308 2.963 2.91 1.431 4.403l-8.749 8.528a2.582 2.582 0 0 0-.742 2.285l2.065 12.042c.362 2.109-1.852 3.717-3.746 2.722l-10.814-5.685a2.585 2.585 0 0 0-2.403 0l-10.814 5.685c-1.894.996-4.108-.613-3.746-2.722l2.065-12.042a2.582 2.582 0 0 0-.742-2.285L.783 21.014c-1.532-1.494-.687-4.096 1.431-4.403l12.091-1.757a2.58 2.58 0 0 0 1.944-1.412l5.407-10.956c.946-1.919 3.682-1.919 4.629 0z"/></svg>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2021</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab adipisci alias aliquid animi assumenda dicta dolor earum et eveniet,
                    id incidunt iste laudantium libero numquam placeat provident quidem quisquam ratione
                    recusandae repellat reprehenderit suscipit unde velit veritatis voluptatem? Delectus dolorum
                    et ex harum magni quas quod sapiente soluta suscipit voluptate. A ad, corporis debitis deleniti
                    dicta eaque eum facilis fuga fugiat id natus nemo non odio possimus quasi quia veritatis? Amet,
                    architecto at atque consequatur corporis debitis deleniti dolorum excepturi expedita harum hic,
                    inventore ipsa iste iusto nihil, nobis omnis provident
                    quas recusandae reiciendis rem saepe sed similique soluta voluptates?
                </p>
            </div>
        </div>

    </div>
@endsection
