
    <div class="container-fluid pt-5 pb-5" style="background: #ffffff">
        <div class="container pt-5 pb-5">
            <div class="row text-center">
                <div class="col-md-12 pb-5">
                    <h6 class="display-4 text-primary">Coded with <i class="fas fa-heart"></i></h6>
                    <h6 class="text-accent">OUR PRODUCTS</h6>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme">
                    @foreach ($products as $product)
                    <div class="card">
                        <div class="card-img-top"
                        style="background-image: url('{{ $product->featured_image }}'); background-size:cover; background-position:center; background-repeat:no-repeat; height:200px; with:100%;">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{ $product->name }}</h3>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>