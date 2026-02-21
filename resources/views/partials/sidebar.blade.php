 <div class="col-2 bg-light shadow-sm border-end">
     <div class="sticky-top">
         <div class="p-5 d-flex justify-content-start align-items-center">
             <img class="" style="height:60px;" src="{{ Vite::asset('resources/img/logo-gt.png') }}" alt="Logo">
         </div>
         <h4 class="px-5 pb-0 fw-bold">Menu</h4>
         <ul class="p-5 pt-2 list-unstyled">
             <li class="mb-2"><a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-dark">Home</a>
             </li>
             <li class="mb-2"><a href={{ route('admin.profile') }} class="text-decoration-none text-dark">Gestisci
                     profilo</a></li>
             <li class="mb-2"><a href={{ route('admin.projects.index') }} class="text-decoration-none text-dark">Gestisci
                     progetti</a></li>
              <li class="mb-2"><a href={{ route('admin.types.index') }} class="text-decoration-none text-dark">Gestisci
                     tipologie progetti</a></li> 
                      <li class="mb-2"><a href={{ route('admin.technologies.index') }} class="text-decoration-none text-dark">Gestisci
                     tecnologie</a></li>       
         </ul>
     </div>
 </div>
