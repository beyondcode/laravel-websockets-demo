@extends('layouts.app')

@section('content')

    <div class="container chats">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card card-default">
                    <div class="card-header">Chats</div>

                    <div class="card-body">
                        <chat-messages :messages="messages"></chat-messages>
                    </div>
                    <div class="card-footer">
                        <chat-form
                                @messagesent="addMessage"
                                :user="{{ auth()->user() }}"
                        ></chat-form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item" v-for="user in users">
                        @{{ user.name }} <span v-if="user.typing" class="badge badge-primary">typing...</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection