<script type="text/javascript">
    (function(){
        var comment = $("._Comment_post_replay");
        comment.hide();

        $("._Btn_open").on('click',function () {
            var service = this.id;
            var serviceid = '#_F'+service;
            $(serviceid).slideDown(700);
            $("._Comment_post_replay").css('display','none')
        })
    })();

    // $("._Btn_open").click(function () {
    //     $("._Comment_post_replay").css('display','none')
    //     var service = this.id;
    //     var serviceid = '#_F'+service;
    //     $(serviceid).show('slow');
    // })
</script>

@foreach($comments as $comment)
    <div class="_Post_comment_box">
        <div class="row _Margin_padding">
            <div class="col-3 _Margin_padding">
                <div class="_Post_comment_user">
                    <div class="_Post_comment_profileimg">
                        <img src="{{url('Image/1.jpg')}}">
                    </div>
                    <div class="_Post_comment_information_top">
                        <i class="fa fa-user"></i>
                        <p class="font18">{{$comment->user->firstname}} &nbsp;{{$comment->user->lastname}}</p>
                    </div>
                </div>

            </div>
            <div class="col-9 _Margin_padding">
                <p class="font18 _Post_comment_text">{{$comment->description}}</p>
            </div>
        </div>

        <div class="row _Margin_padding _Post_comment_information">
            <div class="col-6 _Margin_padding">
                <div class="_Post_comment_time">
                    <i class="fal fa-calendar-alt font18"></i>
                    <p class="font17">1399/07/15</p>
                    <i class="far fa-clock  font18"></i>
                    <p class="font17">18:45:20</p>
                </div>
            </div>

            <div class="col-6 _Margin_padding">

                <div class="_Post_comment_time" id="_Comment_reply_{{$comment->id}}">
                    @auth()
                        <button href="#" class="font16 _Btn_open" id="_Comment_post_replay_{{$comment->id}}"> پاسخ دادن</button>
                    @endauth
                    @guest
                            <button type="button" class="font16" data-toggle="modal" data-target="#exampleModalLong-repaly">
                                        پاسخ دادن
                                </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong-repaly" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title _Model_title font23" id="exampleModalLongTitle">خطا کاربر</h5>
                                                <button type="button" class="close _Btn_like" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body _Model_text font17">
                                                <br>
                                                برای افزودن پست به علاقه مندی ها باید اکانت کاربری داشته باشید .
                                                <br>
                                                <br>
                                                در صورت داشتن اکانت کاربری دکمه ورود را کلیک کنید .
                                                <br>
                                                <br>
                                                در صورت نداشتن اکانت کاربری به دکمه ثبت نام کلیک کنید .
                                                <br>
                                                <br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary _Btn_like_model_close font16" data-dismiss="modal">بستن</button>
                                                <button type="button" class="btn btn-primary _Btn_like_model font16"><a href="{{url('home')}}">ثبت نام</a></button>
                                                <button type="button" class="btn btn-primary _Btn_like_model font16"><a href="{{url('home')}}">ورود</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    @endguest
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="_Comment_post_replay" id="_F_Comment_post_replay_{{$comment->id}}">
                <h3 class="font28">پاسخ خود را نسبت به دیدگاه بیان کنید :</h3>
                <form method="post" action="{{url('home/post/comment/reply')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="parent_id" value="{{$comment->id}}">
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <textarea name="description" maxlength="500" class="font18" placeholder="پاسخ خود را نسبت به دیدگاه بیان کنید : ..."></textarea>
                    <button type="reset" class="font16 _Comment_reset">
                        پاک کردن
                    </button>
                    <button type="submit" class="font16 _Comment_submit">
                        ثبت پاسخ
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="" style="padding-right:5% ">
    @include('frontend.post.post-index.partials-comments' , ['comments'=>$comment->replies])
    </div>

@endforeach
