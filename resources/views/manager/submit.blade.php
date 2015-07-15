@extends('layouts.default')

@section('pageTitle', 'Videos')

@section('content')
    <h1>Submit Video</h1>

    <form class="form-horizontal" method="POST" action="{{ route('video.submit') }}">
        {{ csrf_field() }}
        <div class="form-group @if($errors->has('title')) has-error @endif">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" value="{{ old('title') }}" placeholder="Title" name="title">
            </div>
            <div class="col-sm-push-2 col-sm-10">
                <span class="help-block">{{ $errors->first('title') }}</span>
            </div>
        </div>
        <div class="form-group @if($errors->has('slug')) has-error @endif">
            <label for="slug" class="col-sm-2 control-label">Slug</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="slug" value="{{ old('slug') }}" placeholder="Slug" name="slug">
            </div>
            <div class="col-sm-push-2 col-sm-10">
                <span class="help-block">{{ $errors->first('slug') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->has('description')) has-error @endif">
            <label for="description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" value="{{ old('description') }}" placeholder="Short description" name="description">
            </div>
            <div class="col-sm-push-2 col-sm-10">
                <span class="help-block">{{ $errors->first('description') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->has('url')) has-error @endif">
            <label for="url" class="col-sm-2 control-label">Video URL</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" id="url" value="{{ old('url') }}" placeholder="http://" name="url">
            </div>
            <div class="col-sm-push-2 col-sm-10">
                <span class="help-block">{{ $errors->first('url') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->has('source')) has-error @endif">
            <label for="source" class="col-sm-2 control-label">Source</label>
            <div class="col-sm-10">
                <select class="form-control" id="source" name="source">
                    <option value="youtube" @if(old('source')==="youtube") selected @endif>youtube</option>
                </select>
            </div>
            <div class="col-sm-push-2 col-sm-10">
                <span class="help-block">{{ $errors->first('source') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->has('source_id')) has-error @endif">
            <label for="url" class="col-sm-2 control-label">Source ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="source_id"  value="{{ old('source_id') }}"placeholder="" name="source_id">
            </div>
            <div class="col-sm-push-2 col-sm-10">
                <span class="help-block">{{ $errors->first('source_id') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
            <label for="thumbnail" class="col-sm-2 control-label">Thumbnail URL</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="thumbnail" value="{{ old('thumbnail') }}" placeholder="http://" name="thumbnail">
            </div>
            <div class="col-sm-push-2 col-sm-10">
                <span class="help-block">{{ $errors->first('thumbnail') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->has('status')) has-error @endif">
            <label for="status" class="col-sm-2 control-label">Status</label>
            <div class="col-sm-10">
                <select class="form-control" id="status" name="status">
                    <option value="public" @if(old('status')==="public") selected @endif>public</option>
                </select>
            </div>
            <div class="col-sm-push-2 col-sm-10">
                <span class="help-block">{{ $errors->first('status') }}</span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit Video</button>
            </div>
        </div>
    </form>
@endsection
