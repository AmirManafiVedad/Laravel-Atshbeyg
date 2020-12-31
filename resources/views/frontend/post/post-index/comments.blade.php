<div class="row _Margin_padding">
    <div class="col-12 _Margin_padding">
        <div class="_Post_comment">
            <nav class="font22">نظرات</nav>
            <nav class="font22">ثبت نظر جدید</nav>
            <div class="_Comment_post">
                <form method="post" action="{{url('home/post/comment/'.$post->id)}}">
                    {{csrf_field()}}
                    <textarea name="description" class="_Create_description font18" placeholder="لطفا کامنت خود را وارد کنید ...">
                </textarea>
                    <button type="submit" class="_Comment_submit font16">
                        ذخیره کردن
                    </button>
                    <button type="reset" class="_Comment_reset font16">
                        پاک کردن
                    </button>
                </form>
            </div>
                @foreach($comments as $comment)
                        <div class="_Post_comment_box">
                            <div class="_Post_comment_information_top">
                                <i class="fa fa-user"></i>
                                <p class="font18"></p>
                            </div>
                            <p class="font18">{{$comment->description}}</p>
                            <div class="row _Margin_padding _Post_comment_information">
                                <div class="col-6 _Margin_padding">
                                    <div class="_Post_comment_information_bottom">
                                        <i class="fal fa-calendar-alt font18"></i>
                                        <p class="font17">1399/07/15</p>
                                        <i class="far fa-clock  font18"></i>
                                        <p class="font17">18:45:20</p>
                                    </div>
                                </div>
                                <div class="col-6 _Margin_padding">
                                    <div class="_Post_comment_information_bottom">
                                        <a href="#" class="font16"> پاسخ دادن</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                @endforeach
        </div>

    </div>
</div>
