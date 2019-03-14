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
                @include('users._status_feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('users._user_info', ['user' => Auth::user()])
                </section>
                <section class="stats mt-2">
                    @include('users._stats', ['user' => Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div>
            <h4>微博列表</h4>
            <hr>
            @include('users._status_feed')
        </div>
    @endif
@stop
