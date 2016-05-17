@extends('client.app')

@section('page')
<div class="mainWrapper">
    <div class="container">
       <div class="pageContentArea clearfix">
            <main>
                <h5 class="mb-20">Berita terbaru</h5>
                <article>
                    <figure class="multiImages">
                        <img src="{{ asset('/demo-data/img1.jpg') }}" width="1200" height="570" alt=""/>
                    </figure>
                    <header>
                        <h1><a href="#">Wisuda 28 Maret 2015</a></h1>
                        <time datetime="2015-01-31 08:30:45.687">25 november, 2014</time>
                        <div class="specialContent">
                            <div class="shareWrapper">
                                <ul class="social-list">
                                    <li><a target="_blank" class="icon-twitter twitter-bg btn-twitter" href="https://twitter.com/intent/tweet?url=YOUR-URL"></a>
                                    </li>
                                    <li><a target="_blank" class="icon-facebook facebook-bg" href="http://www.facebook.com/sharer/sharer.php?u=YOUR-URL"></a></li>
                                    <li><a target="_blank" class="icon-google-plus gplus-bg" href="https://plus.google.com/share?url=YOUR-URL"></a></li>
                                </ul>
                                <button><i class="icon-next-1-f"></i></button>
                            </div>
                        </div>
                    </header>
                    <p>Deskripsi kegiatan yang ditampilkan, hanya review terdiri dari 1 paragraf sebagai penjelasan. 
                    Penjelasan lebih detai terdapat jika link sudah di klik.</p>
                    <footer>
                        <a href="#"><i class="icon-like2"></i> 52</a>
                    </footer>
                </article>
                <article>
                    <figure>
                        <img src="assets/demo-data/img2.jpg" width="1200" height="570" alt=""/>
                    </figure>
                    <header>
                        <h1><a href="#">Bakti Sosial</a></h1>
                        <time datetime="2015-01-31 08:30:45.687">25 november, 2014</time>
                        <div class="specialContent">
                            <div class="shareWrapper">
                                <ul class="social-list">
                                    <li><a target="_blank" class="icon-twitter twitter-bg btn-twitter" href="https://twitter.com/intent/tweet?url=YOUR-URL"></a>
                                    </li>
                                    <li><a target="_blank" class="icon-facebook facebook-bg" href="http://www.facebook.com/sharer/sharer.php?u=YOUR-URL"></a></li>
                                    <li><a target="_blank" class="icon-google-plus gplus-bg" href="https://plus.google.com/share?url=YOUR-URL"></a></li>
                                </ul>
                                <button><i class="icon-next-1-f"></i></button>
                            </div>
                        </div>
                    </header>
                    <p>Deskripsi kegiatan yang ditampilkan, hanya review terdiri dari 1 paragraf sebagai penjelasan. 
                    Penjelasan lebih detai terdapat jika link sudah di klik.</p>
                    <footer>
                        <a href="#"><i class="icon-like2"></i> 52</a>
                    </footer>
                </article>
                <article>
                    <figure>
                        <img src="assets/demo-data/img3.jpg" width="1200" height="570" alt=""/>
                    </figure>
                    <header>
                        <h1><a href="#">Makrab Anggota</a></h1>
                        <time datetime="2015-01-31 08:30:45.687">25 november, 2014</time>
                        <div class="specialContent">
                            <div class="shareWrapper">
                                <ul class="social-list">
                                    <li><a target="_blank" class="icon-twitter twitter-bg btn-twitter" href="https://twitter.com/intent/tweet?url=YOUR-URL"></a>
                                    </li>
                                    <li><a target="_blank" class="icon-facebook facebook-bg" href="http://www.facebook.com/sharer/sharer.php?u=YOUR-URL"></a></li>
                                    <li><a target="_blank" class="icon-google-plus gplus-bg" href="https://plus.google.com/share?url=YOUR-URL"></a></li>
                                </ul>
                                <button><i class="icon-next-1-f"></i></button>
                            </div>
                        </div>
                    </header>
                    <p>Deskripsi kegiatan yang ditampilkan, hanya review terdiri dari 1 paragraf sebagai penjelasan. 
                    Penjelasan lebih detai terdapat jika link sudah di klik.</p>
                    <footer>
                        <a href="#"><i class="icon-like2"></i> 52</a>
                    </footer>
                </article>
            </main><!--main content of current page-->
            @include('client.partials.sidebar')
        </div><!--pageContentArea-->
    </div>   
</div>

<!-- MOST POPULAR -->
<div class="container">   
    <section class="most_visited">
        <header><h2>Most viewed</h2></header>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <article>
                    <figure>
                        <img src="assets/demo-data/img1.jpg" width="1200" height="570" alt=""/>
                     </figure>
                    <header>
                        <h3><a href="#">Wisuda 28 Marel 2015</a></h3>
                        <time datetime="2015-01-26 08:30:45.687">26 jan, 2015</time>
                    </header>
                    <div class="article_content">
                        <p>Deskripsi kegiatan.</p>
                    </div>
                    <footer>
                        <a href="#" class="readMore">read</a>
                    </footer>
                </article>
            </div><!--column-->
            
            <div class="col-xs-12 col-sm-4">
                <article>
                    <figure>
                        <img src="assets/demo-data/img4.jpg" width="1200" height="570" alt=""/>
                     </figure>
                    <header>
                        <h3><a href="#">HMJSi Traveling</a></h3>
                        <time datetime="2015-01-26 08:30:45.687">26 jan, 2015</time>
                    </header>
                    <div class="article_content">
                        <p>Deskripsi kegiatan.</p>
                    </div>
                    <footer>
                        <a href="#" class="readMore">read</a>
                    </footer>
                </article>
            </div><!--column-->
            
            <div class="col-xs-12 col-sm-4">
                <article>
                    <figure>
                        <img src="assets/demo-data/img3.jpg" width="1200" height="570" alt=""/>
                     </figure>
                    <header>
                        <h3><a href="#">Makrab Anggota</a></h3>
                        <time datetime="2015-01-26 08:30:45.687">26 jan, 2015</time>
                    </header>
                    <div class="article_content">
                        <p>Deskripsi kegiatan.</p>
                    </div>
                    <footer>
                        <a href="#" class="readMore">read</a>
                    </footer>
                </article>
            </div><!--column-->
        </div><!--row-->
        <footer>
            <a class="viewAllPopular btn" href="#">More</a>
        </footer>
    </section>
</div><!--container-->
@endsection