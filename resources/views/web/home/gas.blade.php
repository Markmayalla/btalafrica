
    <div class="container-fluid pt-5 pb-5" style="background: #ffffff">
        <div class="container pt-5 pb-5">
            <div class="row text-center">
                <div class="col-md-12 pb-5">
                    <h6 class="display-4 text-primary">Coded with <i class="fas fa-heart"></i></h6>
                    <h6 class="text-accent">OUR PRODUCTS</h6>
                </div>
            </div>
            <div class="row text-center flex flex-nowrap overflow-auto">
                @foreach ($products as $product)
                <div class="col-md-3 col-sm-12" style="min-width: 200px">
                    <div class="product">
                        <img src="{{ $product->featured_image }}" alt="" height="150px">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ $product->description }}</p>
                        <a href="" class="btn btn-link">Learn More</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>