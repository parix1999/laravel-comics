@extends('templetes.base')

<!-- Qua si fa la sezione che poi sarà mostrata sullo yield con il nome title
e homepage è una specie di variabile che li si passa, che prenda il posto di title dentro a base -->
@section('title', 'homepage')

@section('principale')

    <!-- Qui ci va il codice del main in home -->
    <main>
        <!-- jumbo -->
        <div class="jumbo">
            <div class="box-jumbo">
                
            </div>
        </div>

        <div class="bg-main">
            <div class="container align">
                @foreach($comics as $comic)
                    <div class="comic-item">
                        <div class="box-copertina">
                            <img src="{{ $comic['thumb'] }}" alt="copertina fumetto">
                        </div>

                        <div class="text">
                            {{ $comic['series'] }}
                        </div>
                    </div>
    
                @endforeach

            </div>
        </div>
        <div class="row-blue">

        </div>

    </main>

@endsection