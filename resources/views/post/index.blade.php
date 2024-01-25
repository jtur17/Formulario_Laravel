<x-app-layout>
    <div class="container mt-4 w-50">
        @foreach ($posts as $post)
            <div class="card m-4">
                <div class="card-title mt-2 ml-4">
                    <a href="{{ route('post.show', $post->id)}}">{{ $post->titulo }}</a>
                </div>
                <div class="card-body d-flex justify-content-end">
                    {{-- Boton de eliminar --}}
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger bg-danger">
                            <p>@php echo __('app.eliminar') @endphp</p>
                        </button>
                    </form>

                    {{-- Boton de actualizar --}}
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-warning ml-3">@php echo __('app.actualizar') @endphp</a>
                </div>

            </div>
            

        @endforeach


    </div>

</x-app-layout>