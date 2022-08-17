@extends('layouts.master-layouts')
@section('title')
    iMessages
@endsection
@section('body')
    <body data-topbar="dark" data-layout="horizontal">
    @endsection
    @section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-4 border-right border-success">
                    <h5 class="card-title">Chats</h5>
                    @foreach($chatUsers as $chatUser)
                        <div class="card" type="button" onclick="alert({{$chatUser->id}})">
                            <div class="card-body border border-success">
                                <strong>{{$chatUser->first_name}} {{$chatUser->last_name}}</strong>
                                <div>{{$chatUser->email}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-12 col-md-8 border-left border-success">
                    <h5 class="card-title"><strong>{{$messages[0]->user->first_name}} {{$messages[0]->user->last_name}}</strong> ({{$messages[0]->user->email}})</h5>
                    <div class="card">
                        @foreach($messages as $message)
                            @if($user->id == $message->from)
                                <div class="card-body text-right">
                                    <span class="bg-success text-white p-2 d-inline-block">
                                        <strong>YOU:</strong> {{$message->created_at}} <br/>
                                        {{$message->body}}
                                    </span>
                                </div>
                            @else
                                <div class="card-body">
                                    <span class="bg-primary text-white p-2 d-inline-block">
                                        <strong>{{$message->user->first_name}} {{$message->user->last_name}}:</strong> {{$message->created_at}} <br/> 
                                        {{$message->body}}
                                    </span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <form method="post" action="{{ url('sendMessage') }}">
                            <div class="input-group mb-3">
                                @csrf
                                <input type="hidden" name="to" value="{{$messages[0]->user->id}}">
                                <input type="text" name="message" id="message" class="form-control form-control-success" placeholder="Write your message..." required>
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    @endsection
    @section('script')
        <script>
            window.setTimeout(
                () =>
                {
                    if(!document.querySelector("#message").value.length)
                    {
                        location.reload();
                    }
                },
                10000
            );
        </script>
    @endsection
