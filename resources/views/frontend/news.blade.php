@extends('layouts.frontend')

@section('content')
<main class="main">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

            <section id="" class="blog-posts section">
        <div class="container section-title" data-aos="fade-up">
            <h2>รูปแบบการจัดงานหลัก</h2>
            <p style="color: black;">รายละเอียดการจัดงาน</p>
        </div><!-- End Section Title -->

        @foreach ($bignew as $new)

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <article class="d-flex">
                        <!-- Image on the Left -->
                        <div class="post-img">
                            <img src="{{ asset('/backend/product/'. $new->image) }}" alt="" class="img-fluid">
                        </div>
                        <!-- Content on the Right -->
                        <div class="post-content">
                            <h2 class="title">
                                <a>{{ $new->name }}</a>
                            </h2>
                            <div class="content">
                                <p>
                                    {{ $new->detail }}
                                </p>
                            </div>
                        </div>
                    </article>
                </div><!-- End post list item -->
            </div><!-- End blog posts list -->
        </div>

        @endforeach

    </section><!-- /Blog Posts Section -->

                <!-- <section id="blog-pagination" class="blog-pagination section">

                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <ul>
                                <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li>...</li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </section> -->


</main>

@endsection
