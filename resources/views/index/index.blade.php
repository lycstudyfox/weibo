@extends('layouts.default')
@section('title','studyfox.cn')

@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('users._status_create')
                </section>
                <h4>微博列表</h4>
                <hr>
                <section class="status">
                    @if ($status_items->count() > 0)
                        <ul class="list-unstyled">
                            @foreach ($status_items as $status)
                                @include('users._status', ['user' => $status->user])
                            @endforeach
                        </ul>
                        <div class="mt-5">
                            {!! $status_items->render() !!}
                        </div>
                    @else
                        <p>还没有微博哦~</p>
                    @endif
                </section>
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('users._user_info', ['user' => Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <h1>首页</h1>
    @endif
@stop
