@extends('chat.layouts.app')
@push('styles')

@endpush

@section('content')
    <div class="container">
        <div class="row">
            <!--Online Users-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-left">
                        <span>Currently Online</span>
                    </div>
                    <div class="card-body chat-care-2">
                        <ul class="chat">
                            <li class="admin clearfix">
                                <div class="chat-body clearfix">
                                    <div class="header clearfix">
                                        <strong class="right primary-font">Bhaumik Patel</strong>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--Chat Box-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <span>Chat</span>
                    </div>

                    <div class="card-body chat-care"  v-chat-scroll>
                        <chat-form
                            :messages="messages"
                        ></chat-form>
                    </div>

                    <div class="card-footer">
                        <chat-input
                            @message-sent="storeMessages"
                            :user="{{ Auth::user() }}"
                        ></chat-input>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{--<script src="{{ mix('js/custom/ctm-chat.js') }}"></script>--}}
@endpush
