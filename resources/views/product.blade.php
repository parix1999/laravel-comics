@extends('templetes.base')

<!-- Qua si fa la sezione che poi sarà mostrata sullo yield con il nome title
e homepage è una specie di variabile che li si passa, che prenda il posto di title dentro a base -->
@section('title', 'product')

@section('principale')

    <!-- Qui ci va il codice del main dei singoli prodotti -->
    <!-- jumbo -->
    <div class="jumbo">
        <div class="box-jumbo">
            <div class="container posizione">
                <div class="p-box-image">
                    <img src="{{ $comics[$arrayIndex]['thumb'] }} " alt="comic image">
                </div>
            </div>
        </div>
        <div class="blue"></div>
    </div>

    
    <div class="container">
        <main class="space">
            <div class="text-part">
                <div class="title">
                    {{ $comics[$arrayIndex]['title'] }}
                </div>
                <div class="buttons">
                    <div class="button-price">
                        U.S Price: <span>{{ $comics[$arrayIndex]['price'] }}</span>
                        <span class="available">AVAILABLE</span>
                    </div>
                    <div class="button-check">
                        Check Availability
                    </div>
                </div>
                <div class="testo">
                {{ $comics[$arrayIndex]['description'] }}
                </div>
            </div>

            <div class="advertasing-part">

            </div>
        </main>
    </div>

    <!-- descrizione -->
    <div class="gray-bg">
        <div class="container">
            <div class="sotto">
                <div class="talent">
                    Talent
                    <div class="art">
                        <div class="artisti-tile">
                            <span>Arts by:</span>
                        </div>
                        <div class="spec">
                            @foreach($comics[$arrayIndex]['artists'] as $author)
                                <a href="#">{{ $author }}</a>,
                            @endforeach
                        </div>
                    </div>

                    <div class="art due">
                        <div class="artisti-tile">
                            <span>Written by:</span>
                        </div>
                        <div class="spec">
                            @foreach($comics[$arrayIndex]['writers'] as $author)
                                <a href="#">{{ $author }}</a>,
                            @endforeach
                        </div>
                    </div>
                </div>
    
                <div class="specs">
                    Specs
                    <div class="art tre">
                        <div class="artisti-tile">
                            <span>Series:</span>
                        </div>
                        <div class="spec">
                            <a href="#">{{ $comics[$arrayIndex]['series'] }}</a>, 
                        </div>
                    </div>

                    <div class="art tre">
                        <div class="artisti-tile">
                            <span>U.S. Price:</span>
                        </div>
                        <div class="spec">
                            <a href="#">{{ $comics[$arrayIndex]['price'] }}</a>, 
                        </div>
                    </div>

                    <div class="art tre">
                        <div class="artisti-tile">
                            <span>On Sale Date:</span>
                        </div>
                        <div class="spec">
                            <a href="#">{{ $comics[$arrayIndex]['sale_date'] }}</a>, 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection