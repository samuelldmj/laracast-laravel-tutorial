<x-layouts>
     <x-slot:header>
        Register
     </x-slot:header>
<form method="POST" action="/register">
  @csrf


  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

      <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          {{-- label component --}}
          <x-form-label for='name'>Full Name</x-form-label>
          <div class="mt-2">

            {{-- input component --}}
           <x-form-input   id="name" name="name" placeholder="Full Name" required  />
           <x-form-error name="name"></x-form-error>
          </div>
        </div>


          <div class="sm:col-span-4">
          {{-- label component --}}
          <x-form-label for='email'>E-mail</x-form-label>
          <div class="mt-2">
            {{-- input component --}}
           <x-form-input id="email" name="email" placeholder="E-mail"  required   />
           <x-form-error name="email"></x-form-error>
          </div>
        </div>


        
          <div class="sm:col-span-4">
          {{-- label component --}}
          <x-form-label for='password'>Password</x-form-label>
          <div class="mt-2">

            {{-- input component --}}
           <x-form-input   id="password" name="password" placeholder="Password"  type="password"  required  />
           <x-form-error name="password"></x-form-error>
          </div>
        </div>

         <div class="sm:col-span-4">
          {{-- label component --}}
          <x-form-label for='password_confirmation'>Confirm Password</x-form-label>
          <div class="mt-2">

            {{-- input component --}}
           <x-form-input   id="password_confirmation" name="password_confirmation" placeholder="confirm password" type="password" required   />
           <x-form-error name="password_confirmation"></x-form-error>
          </div>
        </div>
      </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a type="button" href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
    <x-form-button>Register</x-form-button>
  </div>
</form>

</x-layouts>