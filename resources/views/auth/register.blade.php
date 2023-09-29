<x-layout>

    <div class="container log-container">
        <div class="row">
            <div class="col-12">
    
                <h1>REGISTRATI AL SITO</h1>
                @if ($errors->any())
                   <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                   </div>                   
                @endif

                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Indirizzo Email:</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Password:</label>
                      <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Conferma Password:</label>
                        <input type="password" class="form-control" name="password_confirmation">
                      </div>
                    <button type="submit" class="btn btn-success">Registrati</button>
                  </form>
    
            </div>
        </div>
    </div>
</x-layout>