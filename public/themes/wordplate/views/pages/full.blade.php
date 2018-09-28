@extends('layouts.main')
@section('content')

@if (have_posts())
    @while (have_posts())
        {{ the_post() }}
        @include('partials.mast')
        <main class="sizable">
            <div class="container">
                {{ yoast_breadcrumb( '<p class="breadcrumbs">','</p>' ) }}

                <article class="support">
                    <header class="text-primary">
                        <h1>{{ $headline != '' ? $headline : the_title() }}</h1>
                    </header>
                    {{ the_content() }}
                </article>

            </div>
        </main>
    @endwhile
@else
    @include('pages.404')
@endif

@endsection