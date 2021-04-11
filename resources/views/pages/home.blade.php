@extends('layouts.main')

@section('content')
    {{-- <section id="hero">

        

    </section> --}}
    <section>
        <div class="your-class">
            <div class="bgimg">
                <h1 id="tag0" style="position: absolute;top: 200px;left:20px;font-family: 'Lobster Two', cursive;font-size:55px;color:#fff;opacity:0" class="">Capturing the grandure in 
                    <br>little things</h1>
            </div>
            <div class="bgimg">
                <h1 id="tag1" style="position: absolute;bottom: 200px;right:70px;opacity:0;font-family: 'Lobster Two', cursive;font-size:55px;color:#fff" class="">Hello World2!</h1>

            </div>
            <div class="bgimg"></div>
          </div>
          <div class="dot-container"></div>
    </section>

    <section id="works" class="py-5">
        <h1 class="text-center">WORKS</h1>
        <div id="grid-gallery">
            <img src="https://images.pexels.com/photos/5837638/pexels-photo-5837638.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            <img src="https://images.pexels.com/photos/3865895/pexels-photo-3865895.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            <img src="https://images.pexels.com/photos/3865895/pexels-photo-3865895.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            <img src="https://images.pexels.com/photos/3865895/pexels-photo-3865895.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        </div>
        <br>
        <br>
        <br>
        <p id="msg" class="container mt-5">
            A picture is worth thousand words they say, but we feel wedding photographs are more than that. For the amount of love, joy, promise, dreams and memories they carry within, it is an endless journey of emotions that the couple gets to experience on the big day.we make sure not a moment is missed when you are in the flow of the occasion.
        </p>
        <div class="d-flex justify-content-center" >
            <a href="#" class="btn btn-my mt-3">View Gallery</a>
        </div>
    </section>

    <section id="videowork" class=" py-5">
        <iframe 
         width="100%"
         style=""
        src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
        <div class="le p-4" >
            <h1 class="s-font">WEDDING WORKS</h1>
            <p class="mt-4">
                We love moving pictures as much as we love stills. With the cuts and callouts, every wedding film we make is a collage of all those memorable moments that you didn’t want to miss. More importantly, we take pleasure in giving you a wedding film that is a perfect accompaniment to our style of photography.
            </p>
            <a href="#" class="btn btn-my2 mt-3">View Gallery</a>

        </div>
    </section>

@endsection

@section('scripts')
<script>
    $(document).ready(function(){
  $('.your-class').slick({
    // setting-name: setting-value
    arrows:false,
    autoplay:true,
    dots:true,
    customPaging: function(slider, i) { 
        return '<button class="tab cdot"></button>';
    },
  });
  gsap.fromTo('#tag0', {opacity:0,x:-300}, {duration: 1, opacity:1,x:0,delay: 1});
  $(".your-class").on("afterChange", function (t,i){
        gsap.fromTo('#tag0', {opacity:0,x:-300}, {duration: 1, opacity:1,x:0,delay: 0.6});
        gsap.fromTo('#tag1', {opacity:0,x:300}, {duration: 1, opacity:1,x:0,delay: 0.6});
    });
    $(".your-class").on("beforeChange", function (t,i){
        gsap.fromTo('#tag0', {opacity:0,x:-300}, {duration: 1, opacity:1,x:0,delay: 0.6}).reverse();
        gsap.fromTo('#tag1', {opacity:0,x:300}, {duration: 1, opacity:1,x:0,delay: 0.6}).reverse();
    });
});
</script>
@endsection