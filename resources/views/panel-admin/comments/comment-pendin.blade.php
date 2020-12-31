@extends('panel-admin.Panel-Admin')

@section('content')

    <div class="row _Margin_padding">
        <div class="col-3"></div>
        <div class="col-6 _Margin_padding">
            <div class="_Create">
                <h2 class="font34"> کامنت در حال انتظار </h2>
                <div class="_Comment_title">
                    <p class="font20">{{$comment->description}}</p>
                </div>
                <div class="row _Margin_padding">
                    <div class="col-6 _Margin_padding">
                        @if($comment->status == 0)
                            <form method="post" action="{{url('admin/comments/commentsall',$comment->id)}}">
                                {{csrf_field()}}
                                <button type="submit" class="_Comment_approved font18">
                                    فعال کردن
                                </button>
                            </form>
                        @else
                            <form method="post" action="{{url('admin/comments/commentsall',$comment->id)}}">
                                {{csrf_field()}}
                                <button type="submit" class="_Comment_rejected font18">
                                    غیر فعال کردن
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="col-6 _Margin_padding">
                        <form method="post" action="{{url('admin/comments/commentsall',$comment->id)}}">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            <button type="submit" class="_Comment_delete font18">
                                پاک کردن
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>




@endsection
