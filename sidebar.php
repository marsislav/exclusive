<div class="col-lg-4">
    <?php if (is_active_sidebar('primary-sidebar')) {
        dynamic_sidebar('primary-sidebar');
    }?>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="p-3 rounded border">
                                    <div class="input-group w-100 mx-auto d-flex mb-4">
                                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                        <span id="search-icon-1" class="btn btn-primary input-group-text p-3"><i class="fa fa-search text-white"></i></span>
                                    </div>

                                    <h4 class="mb-4">Popular Categories</h4>
                                    <div class="row g-2">
                                        <div class="col-12">  
                                            <?php
                                                $categories = get_categories(array(
                                                'orderby' => 'count',
                                                'order' => 'DESC',
                                                'number' => 10
                                            ));
                                                foreach ($categories as $category) {
                                                echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a> (' . $category->count . ')</li>';
                                             }
                                            ?>
                                    
                                        </div>
                                        
                                    </div>
                                    <h4 class="my-4">Stay Connected</h4>
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <a href="#" class="w-100 rounded btn btn-primary d-flex align-items-center p-3 mb-2">
                                                <i class="fab fa-facebook-f btn btn-light btn-square rounded-circle me-3"></i>
                                                <span class="text-white">13,977 Fans</span>
                                            </a>
                                            <a href="#" class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
                                                <i class="fab fa-twitter btn btn-light btn-square rounded-circle me-3"></i>
                                                <span class="text-white">21,798 Follower</span>
                                            </a>
                                            <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-2">
                                                <i class="fab fa-youtube btn btn-light btn-square rounded-circle me-3"></i>
                                                <span class="text-white">7,999 Subscriber</span>
                                            </a>
                                            <a href="#" class="w-100 rounded btn btn-dark d-flex align-items-center p-3 mb-2">
                                                <i class="fab fa-instagram btn btn-light btn-square rounded-circle me-3"></i>
                                                <span class="text-white">19,764 Follower</span>
                                            </a>
                                            <a href="#" class="w-100 rounded btn btn-secondary d-flex align-items-center p-3 mb-2">
                                                <i class="bi-cloud btn btn-light btn-square rounded-circle me-3"></i>
                                                <span class="text-white">31,999 Subscriber</span>
                                            </a>
                                            <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-4">
                                                <i class="fab fa-dribbble btn btn-light btn-square rounded-circle me-3"></i>
                                                <span class="text-white">37,999 Subscriber</span>
                                            </a>
                                        </div>
                                    </div>
                                    <h4 class="my-4">Popular News</h4>
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center features-item">
                                                <div class="col-4">
                                                    <div class="rounded-circle position-relative">
                                                        <div class="overflow-hidden rounded-circle">
                                                            <img src="img/features-sports-1.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                        </div>
                                                        <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Sports</p>
                                                        <a href="#" class="h6">
                                                            Get the best speak market, news.
                                                        </a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center features-item">
                                                <div class="col-4">
                                                    <div class="rounded-circle position-relative">
                                                        <div class="overflow-hidden rounded-circle">
                                                            <img src="img/features-technology.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                        </div>
                                                        <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Technology</p>
                                                        <a href="#" class="h6">
                                                            Get the best speak market, news.
                                                        </a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center features-item">
                                                <div class="col-4">
                                                    <div class="rounded-circle position-relative">
                                                        <div class="overflow-hidden rounded-circle">
                                                            <img src="img/features-fashion.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                        </div>
                                                        <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Fashion</p>
                                                        <a href="#" class="h6">
                                                            Get the best speak market, news.
                                                        </a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center features-item">
                                                <div class="col-4">
                                                    <div class="rounded-circle position-relative">
                                                        <div class="overflow-hidden rounded-circle">
                                                            <img src="img/features-life-style.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                        </div>
                                                        <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Life Style</p>
                                                        <a href="#" class="h6">
                                                            Get the best speak market, news.
                                                        </a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <a href="#" class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">View More</a>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="border-bottom my-3 pb-3">
                                                <h4 class="mb-0">Trending Tags</h4>
                                            </div>
                            <?php display_popular_tags(); ?>           
                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>