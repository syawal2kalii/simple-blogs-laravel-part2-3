    @section("title","Article")
    @extends("master.master")
    @section("content")

        <!-- Blog And News Area Start -->
        <div id="blog" class="blog-area">
            <div class="container">

                <div class="row">
                    @foreach($articles as $article => $data)
                        <div class="col-sm-12 col-md-4">
                            <div class="single-blog">
                                <div class="card">
                                    <div class="overflow">
                                        <img style="height: 300px" class="card-img-top" src="{{Storage::url($data->imgurl)}}" alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <a href="#"><p class="blog-date">Dec 17 2019 <br> Posted bycccccccsdx </p> </a>
                                        {{--                                    <p>Posted By</p>--}}
                                        <a href="#"><h6 class="card-title text-dark text-uppercase font-weight-bold">{{$data->title}}</h6></a>
                                        <p class="card-text mb-30">{{Str::limit($data->content,200)}}</p>
                                        <a href="#" class="btn btn-outline-primary style-3 text-dark">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endsection
