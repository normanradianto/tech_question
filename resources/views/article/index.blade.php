@extends('base')@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Latest Articles</h1>
        <div>
            <form method="get" action="{{ route('latest-articles.index') }}"> @csrf
                <div class="textbox-container"> <label for="title">Title</label> <input type="text"
                        class="form-control" name="title"/> </div>

        </div> <button type="submit" class="btn btn-primary-outline">Apply</button>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Body</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->body }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
