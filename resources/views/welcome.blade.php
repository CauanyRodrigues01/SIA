@extends('layouts.main')

@section('title', 'SIA - Seu Imóvel Aqui')

@section('content')
<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active carousel-item-start">
                <img src="https://pixabay.com/get/g557939db2d63904eb96c6d16ed4bd5d7914923a28f0ae18b594b7c1bb0fa912a07185ad72ccfbbcf013ded5ef0328ea8_1920.jpg" alt="" height="450em" class="d-block w-100">
                <div class="container">
                    <div class="carousel-caption text-black">
                        <h1>Encontre seu corretor</h1>
                        <p>Aqui você encontra apenas corretores confiáveis e responsáveis.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item-next carousel-item-start">
                <img src="https://s2.glbimg.com/wQJyDNipsvvTjqGjQkQ87YWfLCE=/0x320:2121x1292/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_f035dd6fd91c438fa04ab718d608bbaa/internal_photos/bs/2021/p/d/OiPcMaSFywCGUQAAtLBw/gettyimages-1170264060.jpg" alt="" height="450em" class="d-block w-100 opacity-80">
                <div class="container">
                    <div class="carousel-caption text-black">
                        <h1>Encontre o lar dos seus sonhos</h1>
                        <p>Aqui você encontra o melhor lugar para você e sua família.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://s2.glbimg.com/wQJyDNipsvvTjqGjQkQ87YWfLCE=/0x320:2121x1292/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_f035dd6fd91c438fa04ab718d608bbaa/internal_photos/bs/2021/p/d/OiPcMaSFywCGUQAAtLBw/gettyimages-1170264060.jpg" alt="" height="450em" class="d-block w-100">
                <div class="container">
                    <div class="carousel-caption text-black">
                        <h1>Encontre o preço ideal</h1>
                        <p>Aqui você encontra preços que cabem no seu bolso.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</main>
@endsection
