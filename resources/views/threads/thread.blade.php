@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: bisque">{{$thread->title}}</div>

                    <div class="panel-body">
                       <p>{!! $thread->body !!}</p>
                    </div>
                </div>
                @include('replies.replies')
            </div>
            @include('sidebar.sidePanel')
        </div>
    </div>
@endsection
