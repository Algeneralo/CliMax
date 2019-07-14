@extends('admin.layout')
@section('style')
    <style>
        .inbox-rightbar {
            margin: -1.5rem 0 -1.5rem 250px;
            border-left: 5px solid #f5f6f8;
            padding: 1.5rem 0 1.5rem 25px;
        }
    </style>
@endsection
@section('body')
    <div class="row"><!-- Right Sidebar -->
        <div class="col-lg-12">
            <div class="card-box"><!-- Left sidebar -->
                <div class="inbox-leftbar">
                    <a href="#"
                       class="btn btn-danger btn-block waves-effect waves-light">
                        Inbox
                    </a>
                    <div class="mail-list mt-4">
                        <a href="{{route('mails.index')}}" class="list-group-item border-0 text-danger">
                            <i class="mdi mdi-inbox font-18 align-middle mr-2"></i>Inbox
                            <span class="badge badge-danger float-right ml-2 mt-1">{{$unReadCount}}</span>
                        </a>
                    </div>
                </div>
                <div class="inbox-rightbar">
                    <div class="mt-4">
                        <ul class="message-list">
                            @foreach($mails as $mail)
                                <li class="{{$mail->is_read?'':'unread'}}">
                                    <div class="col-mail col-mail-1">
                                        <a href="{{route("mails.show",$mail->id)}}" class="title">{{$mail->name}}</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="{{route("mails.show",$mail->id)}}" class="subject">
                                            {{$mail->message}}
                                        </a>
                                        <div class="date">{{$mail->created_at->toDateString()}}</div>
                                    </div>
                                </li>
                            @endforeach
                            @if(count($mails)==0)
                                <li>
                                    <div class=" col-mail-12 text-center">
                                        <a class="title">No Data To Show</a>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div><!-- end .mt-4 -->

                    <!-- end row-->
                </div><!-- end inbox-rightbar-->
                <div class="clearfix"></div>
            </div><!-- end card-box -->
        </div><!-- end Col -->
    </div>
@endsection
