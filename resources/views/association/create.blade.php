@extends('layouts.app')
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>

@section('content')
    



<h1 class="text-center text-2xl font-bold  mt-10">Bienvenu sur ASM</h1>
<p class="pb-4 text-center text-xl ">A présent créons votre association </p>


  <form method="POST" action="{{ route('association.store') }}"  >

    @csrf
    


  <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
    <div class=" bg-slate-700 rounded-md px-6 py-10 max-w-2xl mx-auto">

    
      <h1 class="text-center text-2xl font-bold text-white mb-10">Créer mon Espace Asso</h1>
      <div class="space-y-4">
        {{-- nom --}}
        <div>
          
          <label for="nom" class="text-lx text-white font-serif">Nom</label>
          <input type="text" name="nom" id="title"  value="{{ old('nom') }}"class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        
          @error('nom')
          <p class="pb-4 text-red-600">
            {{ $message }}
          </p>               
           
          @enderror

        </div>

         {{-- Domaine --}}
         <div>
          <label for="domaine" class="text-lx text-white font-serif">Domaine</label>
          <input type="text" name="domaine" id="domaine"  value="{{ old('domaine') }}"class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
 
          @error('domaine')
          <p class="pb-4 text-red-600">
            {{ $message }}
          </p>                  
          @enderror
        </div>
        {{-- Presentation --}}
        <div>
          <label for="presentation" class="block mb-2 text-white text-lg font-serif">Présentation:</label>
          <textarea id="presentation" name="presentation" cols="30" rows="10" class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md">{{ old('presentation') }}</textarea>
          {{-- CK Controller --}}
          <script>
            CKEDITOR.replace( 'presentation' );
          </script>
          
          @error('presentation')
          <p class="pb-4 text-red-600">
            {{ $message }}
          </p>                  
          @enderror
        </div>
       
     
     
        {{-- submit button --}}
        <button class=" px-6 py-2 mx-auto block rounded-xl text-lg font-semibold text-indigo-100 bg-gray-400 hover:bg-gray-900 transition duration-300 ease-out  cursor-pointer  ">Creer</button>
      </div>
    </div>
  </div>
</form>


@endsection
    
