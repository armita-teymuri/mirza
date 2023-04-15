@extends('layout2') @section('content')

<section id="welcome-section">
    <div class="container-fluid content m-auto text-center mt-4">
        <h5>welcom to my website</h5>
        <div class="line mt-2 mb-4"></div>
        <h1>WE GO ON AHEAD IN CIRCULAR KNITTING!</h1>
        <p class="">
            Mayer & Cie. is a world leading supplier of circular knitting
            machines. We also develop, manufacture and supply braiding machines.
            On our website, we invite you to learn more about our machines for
            producing single jersey and double jersey fabrics as well as
            reinforcements. We are more than happy to personally assist you in
            any query you may have.
        </p>
    </div>
</section>

<section id="product-section">
    <div class="text-center card-container">
        <h3 class="pt-4">Pruduct</h3>
        <hr />
        <div class="row row-cols-1 row-cols-md-2 d-flex text-center card-box">
            <div class="col">
                <div class="card my-product">
                    <div class="my-product-img">
                        <img
                            src="../media/3.jpg"
                            class="card-img-top"
                            alt="..."
                        />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-center">
                            This is a longer card with supporting text below as
                            a natural lead-in to additional content. This
                            content is a little bit longer.
                        </p>
                        <div class="btn-g">
                            <a href="#" class="btn btn-primary my-btn"
                                >Go somewhere to my web site</a
                            >
                            <a href="#" class="btn btn-primary my-btn">
                                Find your Circular knitting machine</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card my-product">
                    <div class="my-product-img">
                        <img
                            src="../media/4.jpg"
                            class="card-img-top"
                            alt="..."
                        />
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-center">
                            This is a longer card with supporting text below as
                            a natural lead-in to additional content. This
                            content is a little bit longer. This is a longer
                            card with supporting text below as a natural lead-in
                            to additional content. This content is a little bit
                            longer.
                        </p>
                        <div class="btn-g">
                            <a href="#" class="btn btn-primary my-btn"
                                >Go somewhere to my web site</a
                            >
                            <a href="#" class="btn btn-primary my-btn">
                                Find your Circular knitting machine</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="news-section">
    <div class="text-center card-container">
        <h3>News</h3>
        <hr />
        <div class="row row-cols-1 row-cols-md-2 g-5 d-flex text-center">
            <div class="col row-flex">
                <div class="card my-product">
                    <div class="card-body">
                        <h5 class="card-title text-success p-4">
                            Longer-lasting means more sustainable: Mayer & Cie.
                            is to focus on longer life and greater efficiency at
                            ITMA
                        </h5>
                        <p class="card-text text-center p-4">
                            At ITMA 2023, Mayer & Cie. will present its two
                            business units circular knitting and braiding. For
                            the first time, the manufacturer will exhibit at
                            braiding machine at ITMA. The company focuses on
                            similar features in both areas: sound machines
                            fitted out with solutions that make braiders and
                            circular knitting machines more efficient,
                            longer-lasting and thereby more valuable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col row-flex">
                <div class="card my-product">
                    <div class="card-body">
                        <h5 class="card-title text-success p-4">
                            “Selling textile machines is a men’s world”: TTS
                            director Anna Tsoy from Uzbekistan Mayer & Cie.
                            representation on her success in the circular
                            knitting world
                        </h5>
                        <p class="card-text text-center p-4">
                            Anna Tsoy is director of TTS, Mayer & Cie.’s
                            representaiton in Uzbekistan. On the occassion of
                            the company’s tenth anniversary, she talks about the
                            challenges of being a women in a men’s world.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
