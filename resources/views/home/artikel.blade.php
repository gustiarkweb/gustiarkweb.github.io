<x-home>
    <main>
        <!-- hero  -->
        <section class="hero pt-120 pb-120">
            <div class="hero-inner d-block">
                <div class="container">
                    <div class="text-center">
                        <h1 class="fade_up_anim display-1 hero-name">
                            <span class="first">Artikel</span>
                            <span class="last">Smk</span> <br />
                        </h1>
                    </div>
                    <div class="max-w-620 text-center">
                        <p data-delay=".2" class="fade_up_anim fw-medium fs-5">Infomasi Dan Artikel Terbaru.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- blog section -->
        <section class="blogs pb-120">
            <div class="container">
                <div
                    class="d-flex justify-content-between align-content-center gap-3 flex-wrap pb-60 mb-60 border-bottom border-black">
                    <p class="fw-semibold text-uppercase">(Blogs &amp; resources)</p>


                </div>


                <div class="tab-content mb-60" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="row gy-4">


                            @foreach ($artikel as $item)
                                <div class="col-md-6 col-xl-4">
                                    <div class="fade_up_anim blog-card">
                                        <div class="inner">
                                            <div class="d-flex align-items-center gap-3 mb-30">
                                                <p>Admin</p>
                                                <p>—</p>
                                                <p>{{ $item->created_at ->diffForHumans() }}</p>
                                            </div>
                                            <h3 class="mb-30 fw-bolder h3">{{ $item->judul }}</h3>
                                            <a href="{{ route('artikeldetail', $item->slug) }}" class="img-wrapper rounded-3 mb-30">
                                                <img src="{{  $item->picture }}" class="img-fluid w-100 rounded-3"
                                                    alt="" />
                                            </a>
                                            <p class="mb-30">{!! $item->des !!}</p>
                                            <a href="{{ route('artikeldetail', $item->slug) }}"
                                                class="d-flex fw-semibold align-items-center gap-2">Read More <i
                                                    class="ph ph-arrow-up-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                    </div>

                 <br>
                    <!-- pagination -->
                    <div class="pagination">
                </div>
                   {{ $artikel->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </section>






    </main>
</x-home>





