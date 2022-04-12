@extends('layouts.app')
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>

@section('content')
    



<h1 class="text-center text-2xl font-bold  mt-10">Ajouter un membre</h1>


  <form method="POST" action="{{ route('association.membres.store',$association->slug) }}"  >

    @csrf
    


  <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
    <div class=" bg-slate-700 rounded-md px-6 py-10 max-w-2xl mx-auto">

    
      <div class="space-y-4">
        {{-- nom  prenom adresse--}}
        <div>
          
          <label for="nom" class="text-lx text-white font-serif">Nom</label>
          <input type="text" name="nom" id="nom"  value="{{ old('nom') }}"class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        
          @error('nom')
          <p class="pb-4 text-red-600">
            {{ $message }}
          </p>               
           
          @enderror

        </div>
        <div>
          
          <label for="prenom" class="text-lx text-white font-serif">Prénom</label>
          <input type="text" name="prenom" id="prenom"  value="{{ old('prenom') }}"class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        
          @error('prenom')
          <p class="pb-4 text-red-600">
            {{ $message }}
          </p>               
           
          @enderror

        </div>
        <div>
          
          <label for="adresse" class="text-lx text-white font-serif">Adresse</label>
          <input type="text" name="adresse" id="adresse"  value="{{ old('adresse') }}"class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        
          @error('adresse')
          <p class="pb-4 text-red-600">
            {{ $message }}
          </p>               
           
          @enderror

        </div>

         {{-- Date de naissance --}}
         <div>
          <label for="dateNaissance" class="text-lx text-white font-serif">date de naissance</label>
          <input type="date" name="dateNaissance" id="dateNaissance"  value="{{ old('dateNaissance') }}"class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
 
          @error('dateNaissance')
          <p class="pb-4 text-red-600">
            {{ $message }}
          </p>                  
          @enderror
        </div>

        {{-- Téléphone --}}
        <div>
          
            <label for="telephone" class="text-lx text-white font-serif">téléphone</label>
            <input type="text" name="telephone" id="telephone"  value="{{ old('telephone') }}"class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
          
            @error('telephone')
            <p class="pb-4 text-red-600">
              {{ $message }}
            </p>               
             
            @enderror
  
        </div>
        {{-- Proféssion --}}
        <div>
          
            <label for="profession" class="text-lx text-white font-serif">Profession</label>
            <input type="text" name="profession" id="profession"  value="{{ old('profession') }}"class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
          
            @error('profession')
            <p class="pb-4 text-red-600">
              {{ $message }}
            </p>               
             
            @enderror
  
        </div>
        {{-- Email --}}
        <div>
          
            <label for="email" class="text-lx text-white font-serif">Email</label>
            <input type="email" name="email" id="email"  value="{{ old('email') }}"class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
          
            @error('email')
            <p class="pb-4 text-red-600">
              {{ $message }}
            </p>               
             
            @enderror
  
        </div>

     
     
        {{-- submit button --}}
        <button class=" px-6 py-2 mx-auto block rounded-xl text-lg font-semibold text-indigo-100 bg-gray-400 hover:bg-gray-900 transition duration-300 ease-out  cursor-pointer  ">Ajouter</button>
      </div>
    </div>
  </div>
</form>


@endsection
    
