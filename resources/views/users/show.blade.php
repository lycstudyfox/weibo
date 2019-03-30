@extends('layouts.default')
@section('title','个人中心')

@section('content')
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <div class="col-md-12">
                <div class="offset-md-2 col-md-8">
                    <section class="user_info">
                        @include('users._user_info', ['user' => $user])
                    </section>

                    @if (Auth::check())
                        @include('users._follow_form', ['user' => $user])
                    @endif

                    <section class="stats mt-2">
                        @include('users._stats', ['user' => $user])
                    </section>
                    <section class="status">
                        @if ($statuses->count() > 0)
                            <ul class="list-unstyled">
                                @foreach ($statuses as $status)
                                    @include('users._status')
                                @endforeach
                            </ul>
                            <div class="mt-5">
                                {!! $statuses->render() !!}
                            </div>
                        @else
                            <p>还没有发过微博哦~</p>
                        @endif
                    </section>
                </div>
            </div>
        </div>
    </div>
@stop
