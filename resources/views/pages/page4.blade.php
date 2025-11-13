@extends('layout.app', ['activePage' => 'page4'])

@section('content')
<style>
  body {
    background: url('{{ asset("images/page4/event_bg.jpg") }}') no-repeat center center fixed;
    background-size: cover;
    color: #4a3b2f;
    text-align: center;
  }
  h2 {
    color: #4753f5ff;
    font-size: 22px;
    margin-top: 15px;
  }
  .photo-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 28px;
    justify-items: center;
    padding: 40px;
  }
  .photo-grid figure {
    background: #fffdf4;
    border-radius: 10px;
    box-shadow: 0 6px 16px rgba(0,0,0,0.3);
    padding: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 100%;
    max-width: 300px;
  }
  .photo-grid figure:hover {
    transform: scale(1.06);
    box-shadow: 0 8px 22px rgba(0,0,0,0.28);
  }
  .photo-grid img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 6px;
  }
  .photo-grid figcaption {
    margin-top: 10px;
    font-size: 20px;
    color: #5b4631;
  }
</style>

<h2>Page 4 - Event Photos</h2>
<div class="photo-grid">
@php
$captions = [
  "Wedding",
  "Birthday party",
  "Graduation ceremony",
  "Music concert",
  "Sports tournament",
  "Charity fundraiser",
  "Business conference",
  "Art exhibition",
  "Film festival",
  "Trade Show",
  "Product launch",
  "Fashion show",
  "Seminar",
  "Book signing",
  "Cultural festival",
  "Award ceremony",
  "Community fair",
  "Political rally",
  "Religious service",
  "Networking event"
];
@endphp
 @foreach(range(1, 20) as $i)
        <figure>
            <img 
    src="{{ asset('images/page4/event' . $i . '.jpg') }}" 
    onerror="
        this.onerror=null;
        this.src='{{ asset('images/page4/event' . $i . '.jpeg') }}';
        this.onerror=function(){
            this.src='{{ asset('images/page4/event' . $i . '.png') }}';
            this.onerror=function(){
                this.src='{{ asset('images/page4/event' . $i . '.webp') }}';
                this.onerror=function(){
                    this.src='{{ asset('images/page4/event' . $i . '.avif') }}';
                }
            }
        }
    "
    alt="{{ $captions[$i-1] }}"
>
            <figcaption>{{ $captions[$i-1] }}</figcaption>
        </figure>
    @endforeach
</div>
@endsection
