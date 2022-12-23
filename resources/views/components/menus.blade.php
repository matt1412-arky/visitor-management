<div class="row">
    @forelse ($menus as $menu)
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="new-arrival-product">
                        <div class="new-arrivals-img-contnent">
                            <img class="img-fluid"
                                src="https://recipes.timesofindia.com/thumb/61589069.cms?width=1200&amp;height=900"
                                alt="">
                        </div>
                        <div class="new-arrival-content text-center mt-3">
                            <h4><a href="ecom-product-detail.html">{{ $menu->name }}</a></h4>
                            <ul class="star-rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-empty"></i></li>
                                <li><i class="fa fa-star-half-empty"></i></li>
                            </ul>
                            <span class="price">{{ $menu->harga }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p>No Food Found</p>
    @endforelse

</div>
