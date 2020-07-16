   @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="title">Post</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}">
            @error('title')
                <small class="text-danger">{{$message}}</small>
            @enderror
            </div>
            <div class="form-group col-md-6">
            <label for="url_clean">URL</label>
            <input type="text" class="form-control" id="url_clean" name="url_clean" value="{{old('url_clean', $post->url_clean)}}">
            @error('title')
                <small class="text-danger">{{$message}}</small>
            @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="content">Contenido</label>
            <textarea class="form-control" name="content"  id="content" rows="4">
                {{old('content', $post->content)}}
            </textarea>
            @error('title')
                <small class="text-danger">{{$message}}</small>
            @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary" class="btn btn-sucess">Enviar</button>
