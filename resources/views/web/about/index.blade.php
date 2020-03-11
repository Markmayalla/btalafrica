@extends('layouts.web')

@section('content')

    @component('web.components.title_block.index', [
        'name' => "About Us",
        'background' => "https://www.voluntarystrikeoff.ie/wp-content/uploads/2017/05/banner-handshake.jpg"
    ]) 
    @endcomponent

    <div class="container">
        <div class="row">
            <div class="col text-justify lead">
                <h1>Our Story</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, odit. Eius eveniet natus voluptatibus illo delectus odit, distinctio nemo placeat rerum fugiat perferendis quisquam, quo modi, repudiandae atque dignissimos nisi?</p>
                <p>Ex minus eligendi aspernatur quaerat, quia assumenda delectus ipsam ratione nisi dolorem sunt omnis, amet temporibus asperiores sequi nulla ipsum tempora unde explicabo repellat sed quisquam sint placeat. Esse, voluptatum?</p>
                <p>Temporibus consequuntur et natus autem tenetur laborum sunt maiores aperiam labore alias molestias quam itaque reprehenderit illo incidunt voluptatibus, saepe vero enim adipisci ad nisi tempora at? Maiores, expedita tenetur.</p>
                <p>Quisquam accusantium at nobis, et minima nisi pariatur officia error est dolorum quo eum voluptatem nostrum animi eius saepe quas atque reprehenderit. Quasi non est facilis molestiae minus dolorem dolore.</p>

                <h1>Our Experience</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore reiciendis porro sapiente impedit, ipsum explicabo nemo illo architecto excepturi officia deserunt dignissimos vero. Obcaecati earum iste nesciunt recusandae sapiente odit.</p>
                <p>Temporibus sint voluptatem dignissimos, perspiciatis quam placeat quo voluptatibus? Nisi expedita at quisquam illum maxime cumque earum eaque odio, atque officia mollitia assumenda alias repudiandae quibusdam obcaecati magni? Voluptates, ut!</p>
            </div>
        </div>
    </div>
@endsection