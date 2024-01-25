<x-app-layout>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="container">
        <form method="POST" action="{{ route('post.store') }}" class="mt-4">
            @csrf
    
            <div class="m-3">
                <label for="titulo" class="form-label">@php echo __('app.titulo'); @endphp</label>
                <input type="text" class="form-control" name="titulo" value={{ old('titulo') }}>
                @error('titulo')
                    <p style="color:red">{{ $message}}</p>
                @enderror
            </div>
    
            <div class="m-3">
                <label for="extracto" class="form-label">@php echo __('app.extracto'); @endphp</label>
                <input type="text" class="form-control" name="extracto" value={{ old('extracto') }}>
                @error('extracto')
                    <p style="color:red">{{ $message}}</p>
                @enderror
            </div>
    
            <div class="m-3">
                <label for="contenido" class="form-label">@php echo __('app.contenido'); @endphp</label>
                <input type="text" class="form-control" name="contenido" value={{ old('contenido') }}>
                @error('contenido')
                    <p style="color:red">{{ $message}}</p>
                @enderror
            </div>
    
            <div class="m-3">
                <label for="caducable">@php echo __('app.caducable'); @endphp</label>
                <input type="checkbox" name="caducable" value=@if(is_array(old('caducable')) && in_array(1, old('caducable'))) checked @endif>
                @error('caducable')
                    <p style="color:red">{{ $message}}</p>
                @enderror
            </div>
    
            <div class="m-3">
                <label for="comentable">@php echo __('app.comentable'); @endphp</label>
                <input type="checkbox" name="comentable" value=@if (is_array(old('comentable')) && in_array(1, old('comentable'))) checked @endif>
                @error('comentable')
                    <p style="color:red">{{ $message}}</p>
                @enderror
            </div>

            <div class="m-3">
                <label for="acceso">@php echo __('app.acceso'); @endphp</label>
                <select name="acceso">
                    <option value="privado" @if (old('acceso') == "privado") selected @endif>@php echo __('app.privado') @endphp</option>
                    <option value="publico" @if (old('acceso') == "publico") selected @endif>@php echo __('app.publico') @endphp</option>
                </select>
                @error('acceso')
                    <p style="color:red">{{ $message}}</p>
                @enderror
            </div>

    
            <button type="submit" class="btn btn-primary m-3 bg-primary ">@php echo __('app.guardar'); @endphp</button>
        </form>
    </div>
    
</x-app-layout>