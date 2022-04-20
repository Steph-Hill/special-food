

@extends("layouts.app")

    @section("content")

    <main  class="w-full overflow-y-auto text-amber-200">

        <h1>Contactez nous</h1>

        <div class="px-10 mt-5">

       {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif --}}

            @if ($enregistrementOk)
                    
                    <h3> Votre inscription est terminée ! </h3>

            @endif

            <form action="{{route("contact")}}" method="POST">

                @csrf
                {{-- affichage de la régle dans une boucle --}}

              
                {{-- le nom du formulaire --}}

                <label for="nom" class="">Votre NOM</label>

                {{-- la zone de texte --}} 

                <input type="text" name="nom">

                {{-- affichage erreur du nom --}}

                @error('nom')

                    <h2  class="bg-rose-500 w-60 pl-8" >{{$message}}</h2>
                    
                @enderror
<br>
<br>
<br>
                <label for="prenom" class="">Votre PRENOM</label>

                {{-- la zone de texte --}} 

                <input type="text" name="prenom">

                {{-- affichage erreur du prenom --}}
                @error('prenom')

                    <h2 class="bg-rose-500 w-60 pl-5">{{$message}}</h2>
                
                @enderror

                {{-- le bouton --}}

                <button type="submit" class="bg-lime-700">Envoyer</button>


            </form>

        </div>

    </main>
    @endsection