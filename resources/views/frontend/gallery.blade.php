@extends('layouts.frontend')

@section('content')

<main class="main">

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>อัลบัมการจัดงาน</h2>
            <p style="color: black;">ผลงานอัลบัมการจัดงาน</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">

                @foreach($event as $news)

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="gallery-item h-100 d-flex flex-column">
                        <!-- Image -->
                        <div class="image-container">
                            <img src="{{ asset('/backend/product/'. $news->image) }}" class="img-fluid" alt="{{ $news->name }}" width="400px" height="auto">
                        </div>
                        <!-- Name at the Bottom of Image -->
                        <div class="gallery-details mt-auto text-left">
                            <h5 class="news-title" style="color: #828282; margin-top: 10px; font-weight: 700; font-size: 18px;">{{ $news->name }}</h5> <!-- Light Grey Text and Margin -->
                        </div>
                        <!-- Light Grey "Read More" Button at the Bottom -->
                        <div class="read-more-btn mt-auto">
                            <a href="{{ url('news/' . $news->id) }}" class="btn w-100" style="color: grey; background-color: f5f5f5; font-weight: 700; font-size: 16px;">Read More</a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->

                @endforeach

            </div>

        </div>

    </section><!-- /Gallery Section -->

</main>

@endsection
