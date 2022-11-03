@extends('layout.app')
@section('content')
<br><br>
<section class="bg-secondary-accent section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="topic-border color-scampi mb-30 width-100">
                    <div class="topic-box-lg color-scampi">Popular</div>
                </div>
            </div>
        </div>
        <div class="ne-carousel nav-control-top2 color-scampi" data-loop="true" data-items="4" data-margin="20" data-autoplay="true"
            data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false"
            data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true"
            data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3"
            data-r-medium-nav="true" data-r-medium-dots="false" data-r-Large="4" data-r-Large-nav="true" data-r-Large-dots="false">
            @foreach ($popular_news as $popular)                
            <div class="hover-show-play-btn item-shadow-gray mb-30">
                <div class="">
                    <img src="{{ asset('news/storage/app/public/'.$popular->image) }}" alt="news" class="img-fluid">
                </div>
                <div class="box-padding30 bg-body item-shadow-gray">
                    <div class="post-date-dark">
                        <ul>
                            <li>
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>{{ $popular->upload_date }}
                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </span>{{ $popular->visitors }}
                            </li>
                        </ul>
                    </div>
                    <h3 class="title-medium-dark">
                        <a href="{{ route('post', $popular->id) }}">{{ Str::limit($popular->title, 40, '...') }}</a>
                    </h3>
                </div>
            </div>
            @endforeach  
        </div>
    </div>
</section>

<section class="container">
    <div class="bg-body box-layout">
        <div class="section-space-less30"></div>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="topic-border color-scampi mb-30 width-100">
                    <div class="topic-box-lg color-scampi">World</div>
                </div>
                @foreach ($worldnews as $world)                    
                <div class="media mb-30">
                    <a class="img-opacity-hover" href="single-news-3.html">
                        <img src="{{ asset('news/storage/app/public/'.$world->image) }}" style="width: 119px; height: 83px;" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body">
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>{{ $world->upload_date }}</li>
                                <li>
                                    <span>
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </span>{{ $world->visitors }}
                                </li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-md mb-none">
                            <a href="{{ route('post', $world->id) }}">{{ Str::limit($world->title, 50, '...') }}</a>
                        </h3>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="topic-border color-scampi mb-30 width-100">
                    <div class="topic-box-lg color-scampi">Politics</div>
                </div>
                @foreach ($politics as $politic)                    
                <div class="media mb-30">
                    <a class="img-opacity-hover" href="single-news-3.html">
                        <img src="{{ asset('news/storage/app/public/'.$politic->image) }}" style="width: 119px; height: 83px;" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body">
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>{{ $politic->upload_date }}
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </span>{{ $politic->visitors }}
                                </li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-md mb-none">
                            <a href="{{ route('post', $politic->id) }}">{{ Str::limit($politic->title, 50, '...') }}</a>
                        </h3>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="topic-border color-scampi mb-30 width-100">
                    <div class="topic-box-lg color-scampi">Tech</div>
                </div>
                @foreach ($technews as $tech)                    
                <div class="media mb-30">
                    <a class="img-opacity-hover" href="single-news-1.html">
                        <img src="{{ asset('news/storage/app/public/'.$tech->image) }}" style="width: 119px; height: 83px;" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body">
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>{{ $tech->upload_date }}
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </span>{{ $tech->visitors }}
                                </li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-md mb-none">
                            <a href="{{ route('post', $tech->id) }}">{{ Str::limit($tech->title, 50, '...') }}</a>
                        </h3>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<br>

<!--Latest Article Area Start Here -->
<section class="container">
    <div class="bg-body box-layout">
        <div class="section-space-less30">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="topic-border color-scampi mb-30">
                        <div class="topic-box-lg color-scampi">News</div>
                    </div>
                    <div class="row">
                        @foreach ($daily_news as $news)                                        
                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                            <div class="media media-none--lg mb-30">
                                <div class="position-relative width-40">
                                    <a href="{{ route('post', $news->id) }}" class="img-opacity-hover">
                                        <img src="{{ asset('news/storage/app/public/'.$news->image) }}" alt="news" style="width: 262px; height: 151px;">
                                    </a>
                                </div>
                                <div class="media-body p-mb-none-child media-margin30">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>{{ $news->upload_date }}
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                                </span>{{ $news->category->name }}
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </span>{{ $news->visitors }}
                                            </li>   
                                        </ul>
                                    </div>
                                    <h3 class="title-semibold-dark size-lg mb-15">
                                        <a href="{{ route('post', $news->id) }}">{{ Str::limit($news->title, 70, '...') }}</a>
                                    </h3>
                                    <p>{{ strip_tags(html_entity_decode(Str::limit($news->desc_ka, 200, '...'))) }} </p>
                                </div>
                            </div>
                        </div>       
                        @endforeach                            
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
                                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                                </span>{{ $new->category->name }}
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
    </div>
    <br>
</section>
@endsection