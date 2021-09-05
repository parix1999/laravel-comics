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
                        <!-- Quindi ora devo collegare il link per aprire la pagina del prodotto
                        tramite il click sulla immagine del comics, con un href e il suo route,
                        passandoli un'id e dicendoli che è una loop iteration: per mostrare
                        la pagina del prodotto del singolo fumetto. Gli devo passare però
                        il suo id per capire a che fumetto si riferisce per stampare poi i dati: 
                        il link va scritto senza le graffe iniziali, solo la variabile va scritta cosi
                        e è come se si scrivesse il percorso dell'url-->

                        <!-- Si sta dicendo: Per la rotta product li invio l'id che è esattamente
                        loop iteration. -->
                        <a href="{{ route('product', [ 'id' => $loop->iteration ]) }}">
                            <div class="box-copertina">
                                <img src="{{ $comic['thumb'] }}" alt="copertina fumetto">
                            </div>
                        </a>
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