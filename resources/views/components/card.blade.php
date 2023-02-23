<!-- Single -->
<div class="properties pb-20">
  <div class="properties__card">
      <div class="properties__img overlay1">
          <a href="{{ $link }}"><img src="{{ $image }}" alt="{{ $imageAlt}}"></a>
      </div>
      <div class="properties__caption">
          <p>{{ $category }}</p>
          <h3><a href="{{ $link }}">{{ $title }}</a></h3>
          <p>{{ $description }}</p>
          <div class="properties__footer d-flex justify-content-between align-items-center">
              <div class="restaurant-name">
                  <div class="rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half"></i>
                  </div>
                  <p><span>(4.5)</span> based on 120</p>
              </div>
             {{-- <div class="price">
                  <span>$135</span>
              </div>--}}
          </div>
          <a href="{{ $link }}" class="border-btn border-btn2">Find out more</a>
      </div>

  </div>
</div>
<!-- Single -->