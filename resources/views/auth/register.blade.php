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
          <x-form-label for='fname'>First Name</x-form-label>
          <div class="mt-2">

            {{-- input component --}}
           <x-form-input   id="fname" name="fname" placeholder="First Name" required  />
           <x-form-error name="fname"></x-form-error>
          </div>
        </div>


        <div class="sm:col-span-4">
          {{-- label component --}}
          <x-form-label for='lname'>Last Name</x-form-label>
          <div class="mt-2">

            {{-- input component --}}
           <x-form-input   id="lname" name="lname" placeholder="Last Name"   required  />
           <x-form-error name="lname"></x-form-error>
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
           <x-form-input   id="password" name="password" placeholder="Password"   required  />
           <x-form-error name="password"></x-form-error>
          </div>
        </div>

         <div class="sm:col-span-4">
          {{-- label component --}}
          <x-form-label for='cpassword'>Confirm Password</x-form-label>
          <div class="mt-2">

            {{-- input component --}}
           <x-form-input   id="cpassword" name="cpassword" placeholder="confirm password"  required   />
           <x-form-error name="cpassword"></x-form-error>
          </div>
        </div>
      </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a type="button" href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
    <x-form-button>Register</x-form-button>
  </div>
</form>

</x-layouts>