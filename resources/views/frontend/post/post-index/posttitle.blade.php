

    <div class="row _Margin_padding">
        <div class="col-12">
            <div class="_Post">
                <div class="_Post_title">
                    <h2 class="font35"><b>{{$post->title}}</b></h2>
                </div>
                <div class="_Post_categories font18">
                    <span class="font19">دسته بندی ها :</span>
                    @foreach($post->categories as $categories)
                        {{$categories->title}}
                        <span class="font16"> - </span>
                    @endforeach
                </div>
                <div class="_Post_image">
                    <img src="{{url('Image/PostImage',$post->photo->path)}}">
                </div>
                <div class="_Post_text font18">
                    {!! $post->desc !!}
                </div>
            </div>
        </div>





