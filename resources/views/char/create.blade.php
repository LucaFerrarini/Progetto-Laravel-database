<x-layout>

    <div class="container log-container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiungi un elemento alla Wiki:</h1>
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif

                <form action="{{route('add_post')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Nome:</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    {{-- Info Umani --}}
                    <div class="mb-3 infoU">
                        <label class="form-label">Sesso:</label>
                        <input type="text" class="form-control" name="sex">
                      </div>
                      <div class="mb-3 infoU">
                        <label class="form-label">Età:</label>
                        <input type="text" class="form-control" name="age">
                      </div>
                      <div class="mb-3 infoU">
                        <label class="form-label">Lavoro:</label>
                        <input type="text" class="form-control" name="job">
                      </div>
                      {{-- Fine info umani --}}
                      {{-- info angeli --}}
                      <div id="infoA" class="mb-3 d-none">
                        <label class="form-label">Numerazione:</label>
                        <input type="text" class="form-control" name="number">
                      </div>
                      {{-- fine info angeli --}}

                      <div class="mb-3">
                        <label class="form-label">Descrizione:</label>
                        <textarea class="form-control" cols="30" rows="5" name="description"></textarea>
                      </div>

                      {{-- Radios --}}
                      <div class="mb-3">
                        <label class="form-label">Razza:</label>

                      <div class="form-check">
                        <input checked class="form-check-input" type="radio" name="toggleRadio" id="infoURadio">
                        <label class="form-check-label" for="infoURadio">
                          Umano
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="toggleRadio" id="infoARadio" >
                        <label class="form-check-label" for="infoARadio">
                          Angelo
                        </label>
                      </div>
                      </div>
                      {{-- fine radios --}}

                    <button type="submit" class="btn btn-success">Crea</button>
                  </form>
            </div>
        </div>
    </div>
    
</x-layout>