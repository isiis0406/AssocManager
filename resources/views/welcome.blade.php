@extends('layouts.app')

@section('content')

<section>
    <div 
    style=" background-image: url('{{ asset('images/banner.PNG') }}');
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;">
        <div class="header-text">
          <h1 class="text-6xl text-white font-bold text-center pt-20 ">Assoc Manager</h1>
          <h4 class="text-2xl text-white items-baseline text-center align-text-bottom pt-2 ">La gestion de votre association devient facile</h4>
        </div>
        <div class=" flex justify-center" >
           
                @guest
                    <h4 class=" text-2xl rounded-2xl bg-slate-700 text-white text-center my-32 py-2 px-6 ml-2 hover:bg-gray-900 transition duration-700 ease-out  cursor-pointer  ">
                        <a href="{{ route('register') }}">                
                            Commencer
                        </a>
                    </h4>
                    <h4 class=" text-2xl rounded-2xl bg-slate-700 text-white text-center my-32 py-2 px-6 ml-2 hover:bg-gray-900 transition duration-700 ease-out  cursor-pointer  ">
                        <a href="{{ route('login') }}">                
                            S'identifier
                        </a>
                    </h4>
                   
                @endguest
                
                @auth()
                    <h4 class=" text-2xl rounded-2xl bg-slate-700 text-white text-center my-32 py-2 px-6 hover:bg-gray-900 transition duration-700 ease-out  cursor-pointer  ">
                        <a href="{{ route('association.index') }}">                
                            Gerer mon Asso
                        </a>
                    </h4>
                @endauth
          

                   
              


           
        </div>
    </div>

    


</section>
@endsection