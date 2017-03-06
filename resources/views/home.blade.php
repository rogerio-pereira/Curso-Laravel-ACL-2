@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>{{$book->title}} ({{$book->user->name}})</h1>

                    <p>
                        {{$book->description}}
                    </p>

                    @can('update-book', $book)
                        <a href='#' class='btn btn-primary'>
                            Editar
                        </a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
