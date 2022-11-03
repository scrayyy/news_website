@extends('layout.app')
@section('content')
<!-- More News Area Start Here -->
<br><br><br>
<section class="bg-accent section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="ne-isotope">
                    <div class="topic-border color-scampi mb-30">
                        <div class="topic-box-lg color-scampi">{{ $cat->name }}</div>
                    </div>
                    <div class="featuredContainer">
                        <div class="row politics">
                            @foreach ($cat_news as $news)
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
                                        <p>{{ strip_tags(html_entity_decode(Str::limit($news->desc_ka, 135))) }} </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div>
                            {{ $cat_news->links() }} 
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
    <br>
    <br>
    <br>
</section>
<!-- More News Area End Here -->
@endsection