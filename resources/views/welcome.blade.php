<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>LaravelModelController</title>

            {{-- Includiamo gli assets con la direttiva @vite --}}
            @vite('resources/js/app.js')
      </head>
      <body>

            <main>
                  <div class="container">
                        <div class="row">

                              @foreach ($movies as $movie)
                                    <div class="col-3 text-center">
                                          <div class="card mt-3 mb-3 bg-warning">
                                                <div class="card-body">
                                                      <img src="{{ $movie['img'] }}" class="card-img-top" alt="{{ $movie['title'] }}">
                                                      <div class="card-header fw-bold bg-danger">
                                                            {{ $movie['title'] }}
                                                      </div>
                                                      <ul class="list-group list-group-flush">
                                                            <li class="list-group-item bg-warning">{{ $movie['original_title'] }}</li>
                                                            <li class="list-group-item bg-warning">{{ $movie['nationality'] }}</li>
                                                            <li class="list-group-item bg-warning">{{ $movie['date'] }}</li>
                                                            <li class="list-group-item bg-warning">{{ $movie['vote'] }}</li>
                                                      </ul>
                                                </div>
                                          </div>                                          
                                    </div>
                              @endforeach

                        </div>
                  </div>
            </main>

      </body>
</html>
