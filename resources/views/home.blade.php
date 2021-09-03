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
            <div class="container">
                @foreach($comics as $comic)
                    {{ $comic['title'] }}
    
                @endforeach

            </div>
        </div>
        <div class="row-blue">

        </div>

    </main>

@endsection