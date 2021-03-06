@extends ('forum::master', ['breadcrumb_other' => trans('forum::threads.new_thread')])

@section ('content')
    <h2>{{ trans('forum::threads.new_thread') }} ({{ $category->title }})</h2>

    <form method="POST" action="{{ Forum::route('thread.store', $category) }}">
        {!! csrf_field() !!}
        {!! method_field('post') !!}

        <div class="form-group">
            <label for="title">{{ trans('forum::general.title') }}</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
        </div>

        <div class="form-group">
            <textarea name="content" rows="13" class="form-control simplemde">{{ old('content') }}</textarea>
        </div>

        <button type="submit" class="btn small champ pull-right">{{ trans('forum::general.create') }}</button>
        <a href="{{ URL::previous() }}" class="btn btn-default">{{ trans('forum::general.cancel') }}</a>
    </form>
@stop
