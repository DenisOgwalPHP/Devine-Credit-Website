<div>
    <!-- Start Page Title Area -->
<div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>Service Details</h2>
            <p>{{ $service->name }}</p>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details">
                    <div class="article-image">
                        <img src="{{ asset('assets/img/category') }}/{{ $service->image }}" alt="{{ $service->name }}" style="border-radius: 10px">
                    </div>
                    <div class="article-content">
                        <h3>{{ $service->name }}</h3>
                        <p>{{ $service->description }}</p>
                        <blockquote class="wp-block-quote">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <cite>Tom Cruise</cite>
                        </blockquote>
                    </div>
                    <div class="article-footer">
                        <div class="article-tags">
                            <span><i class="fas fa-bookmark"></i></span>
                            {{-- <a href="#">Fashion</a>,
                            <a href="#">Games</a>,
                            <a href="#">Travel</a> --}}
                        </div>
                        <div class="article-share">
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area" id="secondary">
                    <section class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </section>


                    <section class="widget widget_categories">
                        <h3 class="widget-title">Services</h3>

                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="{{ route('service.detail',['slug' =>$category->slug]) }}">{{ $category->name }}</a></li>
                            @endforeach


                        </ul>
                    </section>



                    {{-- <section class="widget widget_tag_cloud">
                        <h3 class="widget-title">Tags</h3>

                        <div class="tagcloud">
                            <a href="#">IT <span class="tag-link-count"> (3)</span></a>
                            <a href="#">Luvion <span class="tag-link-count"> (3)</span></a>
                            <a href="#">Games <span class="tag-link-count"> (2)</span></a>
                            <a href="#">Fashion <span class="tag-link-count"> (2)</span></a>
                            <a href="#">Travel <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Smart <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Marketing <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                        </div>
                    </section> --}}
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Details Area -->
</div>
