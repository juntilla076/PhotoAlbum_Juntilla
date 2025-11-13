@extends('layout.app', ['activePage' => 'page5'])

@section('content')
<style>
  body {
    background: url('{{ asset("images/page5/spots_bg.jpg") }}') no-repeat center center fixed;
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

<h2>Page 5 - Photos of Tourist Spots</h2>
<div class="photo-grid">
@php
$captions = [
  "Eiffel Tower – Paris, France",
  "Great Wall of China – Beijing, China",
  "Taj Mahal – Agra, India",
  "Statue of Liberty – New York City, USA",
  "Colosseum – Rome, Italy",
  "Machu Picchu – Cusco Region, Peru",
  "Santorini – Greece",
  "Grand Canyon – Arizona, USA",
  "Pyramids of Giza – Egypt",
  "Sydney Opera House – Sydney, Australia",
  "Mount Fuji – Japan",
  "Christ the Redeemer – Rio de Janeiro, Brazil",
  "Niagara Falls – Canada/USA border",
  "Petra – Jordan",
  "Banff National Park – Alberta, Canada",
  "Maldives Islands – Indian Ocean",
  "Serengeti National Park – Tanzania",
  "Angkor Wat – Siem Reap, Cambodia",
  "Stonehenge – Wiltshire, England",
  "Bali – Indonesia"
];
@endphp
 @foreach(range(1, 20) as $i)
        <figure>
            <img 
    src="{{ asset('images/page5/spots' . $i . '.jpg') }}" 
    onerror="
        this.onerror=null;
        this.src='{{ asset('images/page5/spots' . $i . '.jpeg') }}';
        this.onerror=function(){
            this.src='{{ asset('images/page5/spots' . $i . '.png') }}';
            this.onerror=function(){
                this.src='{{ asset('images/page5/spots' . $i . '.webp') }}';
                this.onerror=function(){
                    this.src='{{ asset('images/page5/spots' . $i . '.avif') }}';
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

