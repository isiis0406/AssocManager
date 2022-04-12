<header class="flex justify-between  bg-slate-800 p-4">
    <span class="text-2xl font-bold text-slate-100">
        ASM
    </span>
    <nav>
        <ul>
            <li>
                <a class="text-base  text-slate-100 mr-2 hover:text-slate-300" href="{{ route('home') }}">Accueil</a>
                <a class="text-base  text-slate-100 mr-2 hover:text-slate-300" href="">Evênements</a>
            
            @guest
            <a class="text-base  text-slate-100 mr-2 hover:text-slate-300" href="{{ route('login') }}">Se connecter</a>
            <a class="text-base  text-slate-100 mr-2 hover:text-slate-300" href="{{ route('register') }}">S'enregistrer</a>

            @endguest    
           

            @auth
            <a class="text-base  text-slate-100 mr-2 hover:text-slate-300" href="{{ route('association.index') }}">Admin</a>
            <a class="text-base  text-slate-100 mr-2 hover:text-slate-300" href="{{ route('leave') }}">Se déconnecter</a>
            @endauth
            </li>
        </ul>
    </nav>
</header>