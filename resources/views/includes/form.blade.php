@yield('form')

@if ($errors->any())
    <div class="alert alert-danger" >
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="form-group">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value=" {{old('title')}} " required>
        </div>
    <div class="form-group">
        <label for="content" class="form-label">Descrizione</label>
        <textarea class="form-control" id="content" name="content" rows="5" placeholder="Contenuto" required>{{old('content')}}</textarea>                    
    </div>
    <div class="form-group">
        <label for="image" class="form-label">URL Immagine</label>
        <input type="url" class="form-control" id="image" name="image" placeholder="URL" value=" {{old('thumb')}} " required>
    </div>

