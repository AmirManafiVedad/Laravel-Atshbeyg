@php
    $avg=intval($avgScore);
    if ($isScore){
        $score_1=($score_1*100)/$isScore;
        $score_2=($score_2*100)/$isScore;
        $score_3=($score_3*100)/$isScore;
        $score_4=($score_4*100)/$isScore;
        $score_5=($score_5*100)/$isScore;

    }
    $score_1 = sprintf("%01.2f", $score_1);
    $score_2 = sprintf("%01.2f", $score_2);
    $score_3 = sprintf("%01.2f", $score_3);
    $score_4 = sprintf("%01.2f", $score_4);
    $score_5 = sprintf("%01.2f", $score_5);
@endphp
@if($avg==1)
    <style>
        #_post_star1{
            color: #ffe502!important;
        }
    </style>
@elseif($avg==2)
    <style>
        #_post_star1, #_post_star2{
            color: #ffe502!important;
        }
    </style>
@elseif($avg==3)
    <style>
        #_post_star1, #_post_star2, #_post_star3{
            color: #ffe502!important;
        }
    </style>
@elseif($avg==4)
    <style>
        #_post_star1, #_post_star2, #_post_star3, #_post_star4{
            color: #ffe502!important;
        }
    </style>
@elseif($avg==5)
    <style>
        #_post_star1, #_post_star2, #_post_star3, #_post_star4, #_post_star5{
            color: #ffe502!important;
        }
    </style>
@endif
    <div class="row _Margin_padding">
        <div class="col-12">
            <div class="_Post">
                <div class="_Post_title">
                    <h2 class="font35"><b>{{$post->title}}</b></h2>
                </div>
                <div class="_Post_categories font19">
                    <span class="font20">دسته بندی ها&nbsp; :&nbsp;</span>
                    @foreach($post->categories as $categories)
                        #&nbsp;{{$categories->title}}&nbsp;
                    @endforeach
                </div>
                <div class="_Post_image">
                    <img src="{{url('Image/PostImage',$post->photo->path)}}">
                </div>
                <div class="_Post_text font19">
                    {!! $post->desc !!}
                </div>
                <div class="_Post_tag">
                    <ul>
                        <span class="font22">بر چسب :</span>
                        <li class=""><a href="#" class="font16">اشعار</a></li>
                        <li class=""><a href="#" class="font16">اشعار</a></li>
                        <li class=""><a href="#" class="font16">اشعار</a></li>
                        <li class=""><a href="#" class="font16">اشعار</a></li>
                        <li class=""><a href="#" class="font16">اشعار</a></li>
                        <li class=""><a href="#" class="font16">اشعار</a></li>
                        <li class=""><a href="#" class="font16">اشعار</a></li>
                        <li class=""><a href="#" class="font16">اشعار</a></li>
                        <li class=""><a href="#" class="font16">اشعار</a></li>
                        <li class=""><a href="#" class="font16">اشعار</a></li>
                        <li class=""><a href="#" class="font16">اشعار</a></li>
                        <li class=""><a href="#" class="font16">اشعار</a></li>
                        <li class=""><a href="#" class="font16">اشعار</a></li>
                        <li class=""><a href="#" class="font16">تاریخچه</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                        <li class=""><a href="#" class="font16">گالری عکس</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row _Margin_padding">
        <div class="col-12">
            <div class="_Post_score">
                <div class="row _Margin_padding">
                    <div class="col-8 _Margin_padding">
                        <div class="_Post_score_information">
                            <div class="_Post_score_left">
                                <div class="row">
                                    <div class="col-3 _Margin_padding">
                                        <div class="point_score_star">
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" ></i>
                                            <i class="fas fa-star font21" ></i>
                                            <i class="fas fa-star font21" ></i>
                                            <i class="fas fa-star font21" ></i>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="point_score_span">
                                            <span class="font20">%&nbsp;{{$score_1}}</span>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="point_score_border">
                                            <div class="point_score_false">
                                            </div>
                                            <div class="point_score_true" style="width: 50%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_Post_score_middel">
                                <div class="row">
                                    <div class="col-3 _Margin_padding">
                                        <div class="point_score_star">
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" ></i>
                                            <i class="fas fa-star font21" ></i>
                                            <i class="fas fa-star font21" ></i>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="point_score_span">
                                            <span class="font20">%&nbsp;{{$score_2}}</span>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="point_score_border">
                                            <div class="point_score_false">
                                            </div>
                                            <div class="point_score_true" style="width: 50%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_Post_score_middel">
                                <div class="row">
                                    <div class="col-3 _Margin_padding">
                                        <div class="point_score_star">
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" ></i>
                                            <i class="fas fa-star font21" ></i>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="point_score_span">
                                            <span class="font20">%&nbsp;{{$score_3}}</span>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="point_score_border">
                                            <div class="point_score_false">
                                            </div>
                                            <div class="point_score_true" style="width:13.75%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_Post_score_middel">
                                <div class="row">
                                    <div class="col-3 _Margin_padding">
                                        <div class="point_score_star">
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" ></i>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="point_score_span">
                                            <span class="font20">%&nbsp;{{$score_4}}</span>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="point_score_border">
                                            <div class="point_score_false">
                                            </div>
                                            <div class="point_score_true" style="width: 21.98%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_Post_score_middel">
                                <div class="row">
                                    <div class="col-3 _Margin_padding">
                                        <div class="point_score_star">
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                            <i class="fas fa-star font21" id="_post_star"></i>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="point_score_span">
                                            <span class="font20">%&nbsp;{{$score_5}}</span>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="point_score_border">
                                            <div class="point_score_false">
                                            </div>
                                            <div class="point_score_true" style="width: 0%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 _Margin_padding">
                        <div class="_Post_score_avg">
                            <p class="font36 _Post_score_avg_p_top">{{$avg}}</p>
                            <div>
                                <div class="_Informating_post_score" onmouseout="Informatingpostpointstar0()">
                                    <button>
                                        <i class="fas fa-star font32" id="_post_star1"></i>
                                        <i class="fas fa-star font32" id="_post_star2"></i>
                                        <i class="fas fa-star font32" id="_post_star3"></i>
                                        <i class="fas fa-star font32" id="_post_star4"></i>
                                        <i class="fas fa-star font32" id="_post_star5"></i>
                                    </button>
                                </div>
                            </div>
                            <p class="font22 _Post_score_avg_p_bottom">میانگین رای</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




