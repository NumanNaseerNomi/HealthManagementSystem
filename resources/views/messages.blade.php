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
                    <h5 class="card-title">user name</h5>
                    <div class="card">
                        @foreach($messages as $message)
                            @if($user->id == $message->from)
                                <div class="card-body text-right">
                                    <span class="border border-success p-2">
                                        <strong>YOU: </strong> {{$message->body}}
                                    </span>
                                </div>
                            @else
                                <div class="card-body">
                                    <span class="border border-primary p-2">
                                        <strong>{{$message->user->first_name}} {{$message->user->last_name}}: </strong>  {{$message->body}}
                                    </span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <form>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-success" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button" id="button-addon2">Send</button>
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
        </script>
    @endsection
