@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')
            @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="title">Post</label>
                    <input readonly type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                    @error('title')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    </div>
                    <div class="form-group col-md-6">
                    <label for="url_clean">URL</label>
                    <input readonly type="text" class="form-control" id="url_clean" name="url_clean" value="{{$post->url_clean}}">
                    @error('title')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="content">Contenido</label>
                    <textarea readonly class="form-control" name="content"  id="content" rows="4">
                        {{$post->content}}
                    </textarea>
                    @error('title')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    </div>
                </div>
                <a class="btn btn-success mt-3 mb-3" href="{{ URL::previous() }}">
                    Crear
                </a>
@endsection