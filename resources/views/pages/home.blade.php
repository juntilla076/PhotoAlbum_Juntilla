@extends('layout.app', ['activePage' => '/'])

@section('content')
<style>
  .home-container {
    min-height: 75vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
  }
  .home-container h2 {
    font-family: "Trebuchet MS", sans-serif;
    font-size: 26px;
    color: #6b4d33;
    margin-bottom: 25px;
  }
  .page-links a {
    display: inline-block;
    margin: 8px;
    padding: 10px 18px;
    background: #fffbe3;
    border: 2px dashed #c59a70;
    border-radius: 8px;
    color: #6b4d33;
    font-weight: bold;
    text-decoration: none;
    transition: 0.35s ease;
    box-shadow: 2px 3px 0px #b48a63;
  }
  .page-links a:hover {
    background: #ffe8b5;
    transform: rotate(-2deg) scale(1.05);
    box-shadow: 4px 5px 0px #a37148;
  }
  .album-image {
    max-width: 600px;
    border-radius: 10px;
    border: 6px solid #fffdf4;
    box-shadow: 6px 8px 20px rgba(0,0,0,0.3);
    margin: 20px 0 15px;
  }
  p {
    font-size: 16px;
    margin-bottom: 15px;
    color: #6b4d33;
  }
</style>

<div class="home-container">
  <h2><strong>Welcome to My Photo Album</strong></h2>
  <img src="{{ asset('images/photo_album.jpg') }}" alt="My Album Cover" class="album-image">
  <p>Select a category to view the photos:</p>
  <div class="page-links">
    <a href="{{ url('/page1') }}">Page 1 - Nature Photos</a>
    <a href="{{ url('/page2') }}">Page 2 - Photos of Sports Cars</a>
    <a href="{{ url('/page3') }}">Page 3 - Animal Photos</a>
    <a href="{{ url('/page4') }}">Page 4 - Event Photos</a>
    <a href="{{ url('/page5') }}">Page 5 - Photos of Tourist Spots</a>
  </div>
</div>
@endsection
