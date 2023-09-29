<x-layout>
    
    <div class="container log-container">
        <div class="row">
            <div class="col-12">
                <h1>Contatta lo staff del sito:</h1>
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <form action="{{route('contact_send')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Indirizzo Email:</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nome e Cognome:</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="mb-3 mt-5">
                        <label class="form-label">Scrivi qui potenziali feedback su come poter migliorare il sito:</label>
                        <textarea name="body" cols="30" rows="5" class="form-control mt-2">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Invia</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>