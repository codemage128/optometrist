@extends('layouts.user.header')

@section('content')
    <div class="page-content">

        <!-- Inner Banner -->
        <section class="inner-banner">
            <div class="titlebar-main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <h1 class="inner-page-title">Blog Details</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 text-lg-right">
                            <nav aria-label="breadcrumb"
                                 class="breadcrumb-section d-flex justify-content-center  justify-content-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Optico</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end -->

        <!-- Blog -->
        <section class="section-sm">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 blog-right-col">
                        <div class="row">
                            <!-- Blog 01 -->
                            <div class="col-md-12">
                                <div class="blog-box blog-style-1 blog-single-detail">
                                    <div class="blog-thumbnail mb-4">
                                        <img src="{{asset('assets/users/images/blog/blog-03.jpg')}}" class="img-fluid" alt=""/>
                                    </div>
                                    <div class="blog-entry-meta">
                                        <ul class="list-inline">
                                            <li class="blog-categories"><a href="#">Lasik</a></li>
                                            <li class="blog-date"><i class="optico-icon-clock"></i><a href="#">September
                                                    29, 2017</a></li>
                                            <li class="blog-author"><i class="optico-icon-user"></i><a
                                                    href="#">admin</a></li>
                                            <li class="blog-comments"><i class="optico-icon-tag"></i><a href="#">Holography‎</a>,
                                                <a href="#">Optics‎</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-content">
                                        <p>If you have ever been interested in the way that your eyes. Suspendisse
                                            potenti. Fusce libero velit, tristique eu mauris vitae, convallis facilisis
                                            sapien. Mauris urna diam, fringilla sit amet eleifend id, commodo ac lorem.
                                            Curabitur at erat justo. Curabitur dapibus hendrerit dui, vel sagittis
                                            lectus laoreet et. Cras vitae purus dictum, fringilla urna sit amet,
                                            elementum leo. Etiam blandit enim eu arcu blandit sagittis. Aliquam ligula
                                            mi, luctus ut est non.</p>
                                        <p>Having your eyes examined periodically <strong>Lorem Ipsum
                                                available,</strong> but the majority have suffered alteration in some
                                            form, by injected humour, or randomised words which don’t look even slightly
                                            believable. Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.</p>
                                        <h4>Modern Equipment</h4>
                                        <p>An initial eye exam at six months old helps, semper molestie lorem. <a
                                                class="skincolor" href="#">Maecenas in posuere justo.</a> Quisque non
                                            condimentum augue, ac luctus diam. Integer semper, lectus at ornare euismod,
                                            purus est placerat nisi, quis vehicula mi urna sed orci. Etiam lacinia
                                            aliquet augue vitae auctor. Curabitur in blandit leo. Pellentesque
                                            pellentesque ac sem id dictum. Morbi nec justo sed metus rhoncus
                                            facilisis.Sed eleifend ligula vitae ligula euismod porta. Donec in accumsan
                                            tellus. Curabitur ullamcorper odio metus, sit amet egestas neque fringilla
                                            eget. Nulla facilisi. Cras suscipit massa in diam rutrum, ac pulvinar tellus
                                            accumsan. Vestibulum consectetur accumsan eros, quis accumsan eros luctus
                                            mollis. Aenean feugiat nisi id diam commodo dapibus.</p>
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna ala. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute or in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur.</p>
                                        </blockquote>
                                        <h4 class="pt-3">Individual Approach</h4>
                                        <p>Sed eleifend ligula vitae ligula euismod porta. Donec in accumsan tellus.
                                            Curabitur ullamcorper odio metus, sit amet egestas neque fringilla eget.
                                            Nulla facilisi. Cras suscipit massa in diam rutrum, ac pulvinar tellus
                                            accumsan. Vestibulum consectetur accumsan eros, quis accumsan eros luctus
                                            mollis. Aenean feugiat nisi id diam commodo dapibus.</p>
                                        <p>Aenean ac erat nulla. Phasellus et dolor varius, fermentum nisi quis, blandit
                                            nunc <strong>Vestibulum</strong> eu feugiat felis. Mauris ut aliquam dui,
                                            eget cursus velit. In convallis quam vitae nulla auctor mollis. Nulla sit
                                            amet mauris nisi. Interdum et malesuada fames ac ante ipsum primis in
                                            faucibus. Nullam quis eros maximus, fringilla arcu sit amet, consequat
                                            purus. Donec dignissim venenatis velit, non scelerisque sapien faucibus
                                            quis. Maecenas id urna pulvinar, consectetur nibh ut, sodales ligula.
                                            Suspendisse eleifend tellus ac orci dapibus, ac egestas enim imperdiet.
                                            Vestibulum interdum ante non nisi dignissim rhoncus. Nunc a sapien massa.
                                            Nulla facilisi.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('assets/users/images/blog/blogsingle.jpg')}}" class="img-fluid alignleft" alt=""/>
                                        </div>
                                        <div class="col-md-6 pr-0">
                                            <p>Vestibulum rhoncus consequat aliquet. Mauris varius posuere mattis. Duis
                                                vitae molestie arcu. Curabitur sollicitudin, velit ut eleifend auctor,
                                                nibh orci pharetra risus, a malesuada nisi felis vel turpis. Aliquam
                                                fermentum nulla felis, sed molestie libero porttitor in.</p>
                                            <p>Vivamus gravida felis et nibh tristique viverra. Sed vel tortor id ex
                                                accumsan lacinia. Interdum et malesuada fames ac ante ipsum primis in
                                                faucibus. Quisque iaculis rutrum magna. Sed id lectus id tortor
                                                condimentum aliquam. Etiam volutpat rhoncus quam, eu malesuada justo
                                                varius ut. Donec dignissim eget risus ut fringilla.</p>
                                            <p>Nullam quis eros maximus, fringilla arcu sit amet, consequat purus. Donec
                                                dignissim venenatis velit, non scelerisque.</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p>Ophthalmology is a very important field of medicine, non sodales ex
                                            porttitor. <strong>Mauris tempus accumsan massa.</strong> Integer non tellus
                                            pretium urna porta luctus ut sed sapien. Sed maximus imperdiet ipsum, id
                                            scelerisque nisi tincidunt vitae. In lobortis neque nec dolor vehicula, eget
                                            vulputate ligula lobortis. Aliquam diam nibh, malesuada vitae tincidunt vel,
                                            aliquet id est. In auctor diam ac arcu efficitur tempus quis nec risus. Nunc
                                            fringilla laoreet odio, nec mattis eros mattis a. Quisque ullamcorper rutrum
                                            lobortis. Nullam laoreet porta orci eget scelerisque. Etiam non massa lorem.
                                            Curabitur interdum massa id dui fermentum pulvinar. Donec a tincidunt
                                            tortor. Nunc purus tellus, placerat id mi ut, egestas tincidunt odio.
                                            Suspendisse potenti. Nam lectus tortor, fringilla efficitur mollis eu,
                                            condimentum sed ex.</p>
                                    </div>
                                    <div class="entry-contant">
                                        <div class="entry-contant-left">
                                            <span class="entry-contant-title">Share this post</span>
                                        </div>
                                        <div class="entry-social-right">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="entry-np-nav">
                                                <nav>
                                                    <div class="nav-links">
                                                        <div class="nav-previous">
                                                            <a href="#" rel="prev">
                                                                <span class="meta-nav"
                                                                      aria-hidden="true">Previous</span>
                                                            </a>
                                                        </div>
                                                        <div class="nav-next">
                                                            <a href="#" rel="next">
                                                                <span class="meta-nav" aria-hidden="true">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-author-box">
                                        <div class="entry-author-image">
                                            <img class="img-fluid" src="{{asset('assets/users/images/author.png')}}" alt="">
                                        </div>
                                        <div class="entry-author-content">
                                            <h4 class="entry-author-name">Author: admin</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium
                                                eius, sunt porro corporis maiores ea, voluptatibus omnis maxime<a
                                                    class="skincolor" href="#">View all posts by admin</a></p>
                                            <div class="entry-author-social">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-classic-box-content">
                                    <div class="comments-area">
                                        <h3 class="comments-title">3 Replies to “What Can You Do To Reduce Dry
                                            Eyes”</h3>
                                        <div class="comments-box">
                                            <div class="media">
                                                <div class="comment-author">
                                                    <img class="img-fluid" src="{{asset('assets/users/images/avatar/01.png')}}" alt="">
                                                </div>

                                                <div class="media-body comment-meta">
                                                    <div class="mt-0 comment-owner">John Doe</div>
                                                    <a class="comment-time-date" href="#">May 29, 2018 at 9:47 am</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Laudantium eius, sunt porro corporis maiores ea, voluptatibus
                                                        omnis maxime</p>
                                                    <div class="reply">
                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="children">
                                                <div class="media even depth-2">
                                                    <div class="comment-author">
                                                        <img class="img-fluid" src="{{asset('assets/users/images/avatar/02.png')}}" alt="">
                                                    </div>

                                                    <div class="media-body comment-meta">
                                                        <div class="mt-0 comment-owner">Leona Spencer</div>
                                                        <a class="comment-time-date" href="#">May 29, 2018 at 9:51
                                                            am</a>
                                                        <p>Sed maximus imperdiet ipsum, id scelerisque nisi tincidunt
                                                            vitae. In lobortis neque nec dolor vehicula, eget vulputate
                                                            ligula lobortis.</p>
                                                        <div class="reply">
                                                            <a href="#" class="comment-reply-link">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="comment-author">
                                                    <img class="img-fluid" src="{{asset('assets/users/images/avatar/01.png')}}" alt="">
                                                </div>

                                                <div class="media-body comment-meta">
                                                    <div class="mt-0 comment-owner">John Doe</div>
                                                    <a class="comment-time-date" href="#">May 29, 2018 at 10:45 am</a>
                                                    <p>Vivamus gravida felis et nibh tristique viverra. Sed vel tortor
                                                        id ex accumsan lacinia. Interdum et malesuada fames ac ante
                                                        ipsum primis in faucibus.</p>
                                                    <div class="reply">
                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">LEAVE A REPLY</h3>
                                    <div class="comment-form">
                                        <p class="comment-notes">Your email address will not be published. </p>
                                        <form>
                                            <div class="form-group">
                                                <textarea id="comment" class="form-control" placeholder="Comment"
                                                          name="comment" cols="45" rows="8"
                                                          aria-required="true"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input id="name" type="text" placeholder="Name (required)"
                                                       class="form-control" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input id="email" class="form-control" placeholder="Email (required)"
                                                       name="email" type="email" value="" aria-required="true">
                                            </div>
                                            <div class="form-group">
                                                <input id="url" class="form-control" placeholder="Website" name="url"
                                                       type="text" value="">
                                            </div>
                                            <div class="form-group">
                                                <a href="#" class="btn">Post Comment</a>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 blog-left-col mb-25 mb-xs-20 mt-md-50">
                        <div class="sidebar">
                            <div class="widget widget-categories">
                                <h3 class="widget-title">Categories</h3>
                                <ul>
                                    <li><a href="#">Eye treatment</a><span>1</span></li>
                                    <li><a href="#">Glaucoma</a><span>3</span></li>
                                    <li><a href="#">Lasik</a><span>4</span></li>
                                    <li><a href="#">Ocular</a><span>2</span></li>
                                    <li><a href="#">Ophthalmology</a><span>1</span></li>
                                    <li><a href="#">Paediatric</a><span>3</span></li>
                                </ul>
                            </div>
                            <div class="widget widget-recent-post">
                                <h3 class="widget-title">Recent Posts</h3>
                                <ul class="recent-post-list">
                                    <li class="recent-post-list-li">
                                        <div class="media">
                                            <a class="recent-post-thum" href="#">
                                                <img src="{{ asset('assets/users/images/recent-post/blog-01.jpg') }}" class="img-fluid" alt=""/>
                                            </a>
                                            <div class="media-body">
                                                <a href="#">That’s why it is so important to see an ophthalmologist</a>
                                                <span class="post-date">February 18, 2019</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="recent-post-list-li">
                                        <div class="media">
                                            <a class="recent-post-thum" href="#">
                                                <img src="{{ asset('assets/users/images/recent-post/blog-02.jpg') }}" class="img-fluid" alt=""/>
                                            </a>
                                            <div class="media-body">
                                                <a href="#">Signs or risk factors for eye disease</a>
                                                <span class="post-date">January 21, 2019</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="recent-post-list-li">
                                        <div class="media">
                                            <a class="recent-post-thum" href="#">
                                                <img src="{{ asset('assets/users/images/recent-post/blog-03.jpg') }}" class="img-fluid" alt=""/>
                                            </a>
                                            <div class="media-body">
                                                <a href="#">What Can You Do To Reduce Dry Eyes</a>
                                                <span class="post-date">September 29, 2018</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-tag-cloud">
                                <h3 class="widget-title">Tag Cloud</h3>
                                <div class="tagcloud">
                                    <a href="#" class="tag-cloud-link">Components‎</a>
                                    <a href="#" class="tag-cloud-link">Devices‎</a>
                                    <a href="#" class="tag-cloud-link">Fiber Optics‎</a>
                                    <a href="#" class="tag-cloud-link">Geometrical</a>
                                    <a href="#" class="tag-cloud-link">Holography‎</a>
                                    <a href="#" class="tag-cloud-link">Optics‎</a>
                                </div>
                            </div>
                            <div class="widget widget-flickr">
                                <h3 class="widget-title">Flickr</h3>
                                <script
                                    src="https://www.flickr.com/badge_code_v2.gne?count=9&#038;display=latest&#038;size=s&#038;layout=v&#038;source=user&#038;user=142401196%40N02"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->
    </div>
@endsection
