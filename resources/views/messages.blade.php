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
                    @foreach($chatUsers as $cUser)
                        <form method="get" action="{{ url('iMessages') }}">
                            <input type="hidden" name="id" value="{{$cUser->id}}">
                            <button type="submit" class="btn @if($cUser->id == $chatUser->id) btn-primary @else btn-success @endif btn-block my-3">
                                <strong>{{$cUser->first_name}} {{$cUser->last_name}}</strong>
                                <div>{{$cUser->email}}</div>
                            </button>
                        </form>
                    @endforeach
                </div>
                <div class="col-12 col-md-8 border-left border-success">
                    @if($chatUser->id != null)
                        <h5 class="card-title"><strong>{{$chatUser->first_name}} {{$chatUser->last_name}}</strong> ({{$chatUser->email}})</h5>
                        @if(count($messages))
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
                        @endif
                        <div class="card-footer">
                            <form method="post" action="{{ url('sendMessage') }}">
                                <div class="input-group mb-3">
                                    @csrf
                                    <input type="hidden" name="to" value="{{$chatUser->id}}">
                                    <input type="text" name="message" id="message" class="form-control form-control-success" placeholder="Write your message..." required>
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif
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
