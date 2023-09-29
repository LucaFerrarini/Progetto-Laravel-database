<x-layout>

  <div class="container log-container">
    <div class="row">
      
      @foreach ($characters as $character)
      <div class="col-12 col-md-4">    
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Nome: {{$character->name}}</h5>
            <h5 class="card-title">Sesso: {{$character->sex}}</h5>
            <h5 class="card-title">Eta: {{$character->age}}</h5>
            <h5 class="card-title">Lavoro: {{$character->job}}</h5>
            <p class="card-text">{{$character->description}}</p>
          </div>
        </div>        
      </div>
      @endforeach
      
    </div>
  </div>
  
  
  
</x-layout>