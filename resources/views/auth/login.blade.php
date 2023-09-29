<x-layout>
<div class="container log-container">
    <div class="row">
        <div class="col-12">

            <h1>ACCEDI AL SITO</h1>
            @if ($errors->any())
              <div class="alert alert-danger">
                 <ul>
                   @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                  @endforeach
                 </ul>
               </div>                   
            @endif

            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Indirizzo Email:</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                <div class="mb-3">
                  <label class="form-label">Password:</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-success">Accedi</button>
              </form>

        </div>
    </div>
</div>
    
</x-layout>