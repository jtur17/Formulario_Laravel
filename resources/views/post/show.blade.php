<x-app-layout>
    <div class="container mt-4">
        <div class="card p-4">
            <p>@lang('titulo'){{ $post->titulo }}</p>
            <p>@lang('extracto'){{ $post->extracto }}</p>
            <p>@lang('contenido'){{ $post->contenido }}</p>
            <p>@lang('titulo'){{ $post->titulo }}</p>
            <p>@lang('caducable'){{ $post->caducable ? "Si" : "No" }}</p>
            <p>@lang('comentable'){{ $post->comentable ? "Si" : "No" }}</p>
            <p>@lang('acceso'){{ $post->acceso }}</p>
        </div>  
    </div>
</x-app-layout>