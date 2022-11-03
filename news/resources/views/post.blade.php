@extends('layout.app')
@section('content')
<br><br>
<!-- Breadcrumb Area End Here -->
<!-- News Details Page Area Start Here -->
<section class="bg-body section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 mb-30">
                <div class="news-details-layout1">
                    <h2 class="title-semibold-dark size-c30">{{ $single_post->title }}</h2>
                    <div class="position-relative mb-30">
                        <img src="{{ asset('news/storage/app/public/'.$single_post->image) }}" alt="news-details" class="img-fluid">
                        <div class="topic-box-top-sm">
                            <div class="topic-box-sm color-cinnabar mb-20">{{ $single_post->category->name }}</div>
                        </div>
                    </div>
                    <p>{!! $single_post->desc_ka !!} </p>
                    <ul class="post-info-dark mb-30">
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar" aria-hidden="true"></i>{{ $single_post->upload_date }}</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-folder" aria-hidden="true"></i>{{ $single_post->category->name }}</a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fa fa-eye" aria-hidden="true"></i>{{ $single_post->visitors }}</a>
                        </li>
                    </ul>                   
                    <div class="comments-area">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="t2mYdRRX"> </script>
                        <div class="card-body">
                            <div class="fb-comments" data-href="http://yourmedia.ga/{{ $single_post->id }}" data-width="100%" data-numposts="10"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                <div class="sidebar-box">
                    <div class="topic-border color-scampi mb-30">
                        <div class="topic-box-lg color-scampi">Other</div>
                    </div>
                    @foreach($rand_news as $new)                                            
                    <div class="add-item5-lg">
                        <div class="media bg-body item-shadow-gray mb30-list">
                            <a class="img-opacity-hover width40-lg" href="{{ route('post', $new->id) }}">
                                <img src="{{ asset('news/storage/app/public/'.$new->image) }}" alt="news" style="width: 150px; height: 90px;">
                            </a>
                            <div class="media-body">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>{{ $new->upload_date }}
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </span>{{ $new->visitors }}
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark mb-none">
                                    <a href="{{ route('post', $new->id) }}">{{ Str::limit($new->title, 50, '...') }}</a>
                                </h3>
                            </div>
                        </div>    
                    </div>
                    @endforeach           
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Details Page Area End Here -->
@endsection