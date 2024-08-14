<x-layouts>
     <x-slot:header>
        Job 
     </x-slot:header>
     
     <h1>Available Role:</h1>
     <h2 class="font-bold"> {{$job->decs}} </h2>

     <p>
        Job pays {{$job->salary}} per year.
     </p>

     <p class="mt-6">
     <x-button href="{{ $job->id}}/edit">Edit Job</x-button>
     </p>

</x-layouts>