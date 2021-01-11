

<div class="col-12 _Margin_padding">
        <div class="_Post_comment">
            <nav class="font22">نظرات</nav>
            <nav class="font22 _Post_comment_nav1">ثبت نظر جدید</nav>


            <div class="_Comment_post_new">
                <h4>دیدکاه خود را نسبت به این مطلب بیان کنید :</h4>
                <form method="post" action="{{url('home/post/comment/'.$post->id)}}">
                    {{csrf_field()}}
                    <textarea name="description" maxlength="500" class="_Create_description font18" placeholder="لطفا کامنت خود را وارد کنید ...">
                </textarea>
                    <button type="reset" class="_Comment_reset font16">
                        پاک کردن
                    </button>
                    <button type="submit" class="_Comment_submit font16">
                        ذخیره کردن
                    </button>

                </form>
            </div>

            @include('frontend.post.post-index.partials-comments' , ['comments'=>$comments , 'post'=>$post])

        </div>

    </div>
