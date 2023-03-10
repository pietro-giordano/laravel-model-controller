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
                                          <div class="card mt-3">
                                                <div class="card-body">
                                                      <div class="card-header">
                                                            {{ $movie['title'] }}
                                                      </div>
                                                      <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">{{ $movie['original_title'] }}</li>
                                                            <li class="list-group-item">{{ $movie['nationality'] }}</li>
                                                            <li class="list-group-item">{{ $movie['date'] }}</li>
                                                            <li class="list-group-item">{{ $movie['vote'] }}</li>
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
