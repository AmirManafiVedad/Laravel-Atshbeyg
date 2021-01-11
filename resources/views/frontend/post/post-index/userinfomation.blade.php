
    <div class="row">
        <div class="col-12">
            <div class="_Informating_user">
                <div class="row _Margin_padding">
                    <div class="col-3 _Margin_padding _Informating_post_text_border"></div>
                    <div class="col-6 _Margin_padding"><h6 class="_Informating_post_text font22">اطلاعات کاربر</h6></div>
                    <div class="col-3 _Margin_padding _Informating_post_text_border"></div>
                </div>
                <div class="row _Margin_padding">
                    <div class="col-12 _Margin_padding">
                        <div class="_Informating_user_pic">
                            <div class="_Informating_user_img">
                                @php
                                    $path = \App\Photo::where('user_id',$post->user->id)->first()->path;
                                @endphp
                                <img src="{{ url('Image/Profileuser/'.$path) }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row _Margin_padding">
                    <div class="col-2"></div>
                    <div class="col-8 _Margin_padding">
                        <div class="_Informating_user_p">
                            <p class="font18">{{$post->user->firstname}} {{$post->user->lastname}}</p>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>

                <div class="row _Margin_padding">
                    <div class="col-3"></div>
                    <div class="col-6 _Margin_padding">
                        <div class="_Informating_user_data_style">
                            <a class="font18">دنبال کردن</a>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>

                <div class="row _Margin_padding">

                    <div class="col-4 _Margin_padding">
                            <div class="_Informating_user_post">
                                <i class="fas fa-sticky-note font36"></i>
                                <h6 class="font17">تعداد پست</h6>
                                <p class="font19">2056</p>
                            </div>
                        </div>

                    <div class="col-4 _Margin_padding">
                            <div class="_Informating_user_post_i">
                                <i class="fas fa-heart font36"></i>
                                <h6 class="font17">تعداد لایک</h6>
                                <p class="font19">2056</p>
                            </div>
                        </div>

                    <div class="col-4 _Margin_padding">
                            <div class="_Informating_user_post">
                                <i class="fas fa-users font36"></i>
                                <h6 class="font17">تعداد دنبال کننده</h6>
                                <p class="font19">2056</p>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
