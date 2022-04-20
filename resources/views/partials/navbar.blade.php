<nav class="w-24 flex flex-col items-center bg-gray-900 py-4">
    <div class="text-lg font-semibold text-white">Le Festin</div>
    <!-- nav content -->
    <ul class="mt-2 text-gray-300 font-semibold">

      <li class="mt-3 t">
          {{-- Utilisation du helper route "accueil " --}}
        <a href="{{ route("accueil")}}" class="flex flex-col items-center text-sm capitalize">
          
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
          
          <span>Accueil</span>
        </a>
      </li>     

      <li class="mt-3 t">
        {{-- Utilisation du helper route "accueil " --}}
      <a href="{{route("contact")}}" class="flex flex-col items-center text-sm capitalize">
        
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
          </svg>
        
        <span>Contact</span>
      </a>
    </li>     

        
    </ul>
  </nav>