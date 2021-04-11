@extends('layouts.main')

@section('content')

    <style>
        .gallery{
            margin-top: 150px;
            display: grid !important;
            grid-template-columns: 1fr !important;
            gap: 30px;
        }

        .gallery img{
            width: 100%;
            height: 100%;
        }
        @media screen and (min-width: 700px){
            .gallery{
            grid-template-columns: 1fr 1fr  !important;

            }
        }
        @media screen and (min-width: 1000px){
            .gallery{
            grid-template-columns: 1fr 1fr 1fr !important;

            }
        }
    </style>

    <section class="container gallery">
        <img src="https://images.pexels.com/photos/5837638/pexels-photo-5837638.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img src="https://images.pexels.com/photos/3865895/pexels-photo-3865895.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img src="https://images.pexels.com/photos/5837638/pexels-photo-5837638.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img src="https://images.pexels.com/photos/3865895/pexels-photo-3865895.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img src="https://images.pexels.com/photos/5837638/pexels-photo-5837638.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img src="https://images.pexels.com/photos/3865895/pexels-photo-3865895.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img src="https://images.pexels.com/photos/5837638/pexels-photo-5837638.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img src="https://images.pexels.com/photos/3865895/pexels-photo-3865895.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img src="https://images.pexels.com/photos/5837638/pexels-photo-5837638.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img src="https://images.pexels.com/photos/3865895/pexels-photo-3865895.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img src="https://images.pexels.com/photos/5837638/pexels-photo-5837638.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img src="https://images.pexels.com/photos/3865895/pexels-photo-3865895.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img src="https://images.pexels.com/photos/5837638/pexels-photo-5837638.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <img src="https://images.pexels.com/photos/3865895/pexels-photo-3865895.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        
    </section>
@endsection