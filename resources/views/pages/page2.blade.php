@extends('layout.app', ['activePage' => 'page2'])

@section('content')
<style>
  body {
    background: url('{{ asset("images/page2/car_bg.jpg") }}') no-repeat center center fixed;
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

<h2>Page 2 - Photos of Sports Cars</h2>
<div class="photo-grid">
@php
$captions = [
  "Ferrari 488 GTB",
  "Lamborghini Huracán EVO",
  "Porsche 911 Turbo S",
  "Chevrolet Corvette C8",
  "Nissan GT-R Nismo",
  "Ford Mustang Shelby GT500",
  "Dodge Viper ACR",
  "BMW M4 Competition",
  "Audi R8 V10 Performance",
  "Mercedes-AMG GT R",
  "McLaren 720S",
  "Toyota GR Supra",
  "Mazda RX-7 (FD)",
  "Acura NSX (Gen 2)",
  "Aston Martin Vantage",
  "Subaru BRZ",
  "Jaguar F-Type R",
  "Lotus Evora GT",
  "Koenigsegg Agera R",
  "Bugatti Chiron"
];
@endphp
 @foreach(range(1, 20) as $i)
        <figure>
            <img 
    src="{{ asset('images/page2/sc' . $i . '.jpg') }}" 
    onerror="
        this.onerror=null;
        this.src='{{ asset('images/page2/sc' . $i . '.jpeg') }}';
        this.onerror=function(){
            this.src='{{ asset('images/page2/sc' . $i . '.png') }}';
            this.onerror=function(){
                this.src='{{ asset('images/page2/sc' . $i . '.webp') }}';
                this.onerror=function(){
                    this.src='{{ asset('images/page2/sc' . $i . '.avif') }}';
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

