@extends('layouts.guest')

@section('content')
    <div class="container-cards">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3 border border-white bg-black my-5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center">
                        <h6 class="mt-2 text-uppercase">movie</h6>
                        <img src="https://fastly.picsum.photos/id/17/200/300.jpg?hmac=a_Eowf7JMfHVEQi6MENyokjh5hhzVOqoXH6pUXxYKtU" alt="" class="path">
                        <h6 class="mt-3">{{ $movie->title }}</h6>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection