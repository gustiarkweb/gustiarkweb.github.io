<x-home>
   
        <!-- hero  -->

        @foreach ($artikel as $item)
            
       
        <section class="service-details">
          <div class="container pt-120 pb-120">
            <div class="top-title">
              <p class="fade_up_anim mb-3"><span class="text-primary fw-semibold">Artikel</span> / {{ $item->judul }}</p>
              <h2 data-delay=".2" class="title-anim display-3 mb-30 fw-bolder">{{ $item->judul }}</h2>
              <div data-delay=".4" class="fade_up_anim d-flex justify-content-center flex-wrap align-items-center gap-3">
                <img src="./assets/images/blog-author.png" alt="" />
                <span class="fs-5 fw-semibold text-black">{{ $item->user->name }}</span> | <span>{{ $item->created_at->diffForHumans() }}</span> |
                <span class="badge rounded-pill bg-white px-3 py-2 text-black fw-normal border border-dark-subtle">{{ $item->created_at->format('d-m-y') }}</span>
              </div>
            </div>
          </div>
          <div class="container-big">
            <div class="mb-60">
              <img src="{{ $item->picture }}" class="w-100 img-fluid" alt="" />
            </div>
            <div class="container">
              <h2 class="display-4 mb-30 fw-bold title-anim">{{ $item->judul }}</h2>
              <p class="mb-60">
               {!! $item->des !!}
              </p>
             
            <div class="row g-4 mb-60">
              <div class="col-md-6">
                <img src="./assets/images/blog-details-2.png" alt="" />
              </div>
              <div class="col-md-6">
                <img src="./assets/images/blog-details-3.png" alt="" />
              </div>
            </div>
           
          </div>
        </section>

        @endforeach
  
     
  
     
</x-home>