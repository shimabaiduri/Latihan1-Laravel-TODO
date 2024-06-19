@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="container-fluid bg-success-subtle pb-5">
        <div class="row">
            <div class="col-12 mt-4">
                <h2 class="text-center mb-4">WELCOME TO OUR RESTAURANT MADE WITH LOVE</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-23" style="background-color: rgb(199, 224, 199)">
                        <img style="height: 342px" src="/food.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">FOODS</h5>
                          {{-- <p class="card-text">Non Halal</p> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-23" style="background-color: rgb(199, 224, 199)">
                        <img style="height: 342px" src="/dessert.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">DESSERTS</h5>
                          {{-- <p class="card-text">Hidangan Penutup</p> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-23" style="background-color: rgb(199, 224, 199)">
                        <img style="height: 342px" src="/drink.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">DRINKS</h5>
                          {{-- <p class="card-text">Non Halal</p> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection