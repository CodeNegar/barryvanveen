@extends('layouts.full-width')

@section('content')

    <div class="page-header">
        <h1>Blog</h1>
    </div>

    {{ Form::open(['route' => ['admin.blog-edit', $blog->id]]) }}

        @include('form.partials.errors', ['title' => 'Fouten in het formulier'])

        <div class="form-group @if($errors->has('title')) has-error @endif">
            {{ Form::label('title', 'Titel', ['class' => 'control-label form__label']) }}
            {{ Form::text('title', $blog->title, ['class' => 'form-control']) }}
        </div>

        <div class="form-group @if($errors->has('publication_date')) has-error @endif">
            {{ Form::label('publication_date', 'Datum', ['class' => 'control-label form__label']) }}
            {{ Form::text('publication_date', $blog->publication_date, ['class' => 'form-control']) }}
        </div>

        <div class="form-group @if($errors->has('online')) has-error @endif">
            {{ Form::label('online', 'Status', ['class' => 'control-label form__label']) }}

            <div class="radio">
                <label>
                    {{ Form::radio('online', '0', ($blog->online == 0)) }}
                    Offline
                </label>
            </div>
            <div class="radio">
                <label>
                    {{ Form::radio('online', '1', ($blog->online == 1)) }}
                    Online
                </label>
            </div>
        </div>

        <div class="form-group @if($errors->has('summary')) has-error @endif">
            {{ Form::label('summary', 'Samenvatting', ['class' => 'control-label form__label']) }}
            {{ Form::textarea('summary', $blog->summary, ['class' => 'form-control']) }}
        </div>

        <div class="form-group @if($errors->has('text')) has-error @endif">
            {{ Form::label('text', 'Tekst', ['class' => 'control-label form__label']) }}
            {{ Form::textarea('text', $blog->summary, ['class' => 'form-control']) }}
        </div>

    {{ Form::submit('Aanpassen', ['class' => 'btn btn-primary']); }}

    {{ Form::close() }}


@stop