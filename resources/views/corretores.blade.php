@extends('layouts.main')

@section('title', 'Corretores')

@section('content')

<main>
    <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light">
        <div class="col-md-7 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Seu corretor aqui</h1>
            <p class="lead font-weight-normal">Encontre os melhores corretores para seu negócio.</p>
        </div>
    </div>

    <div class="py-5">
        <div class="container">

          <div class="row">
            @if(count($users) > 0)
                @foreach($users as $user)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <p class="card-text fw-bold">{{ $user->name }}</p>
                                <p class="card-text">{{ $user->email }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Ainda não há corretores</p>
            @endif
          </div>
        </div>
      </div>
</main>



 @endsection
