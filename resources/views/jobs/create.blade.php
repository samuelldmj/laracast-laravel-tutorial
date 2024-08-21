<x-layouts>
     <x-slot:header>
        Create
     </x-slot:header>
<form method="POST" action="/jobs">
  @csrf


  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new job</h2>
      <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          {{-- label component --}}
          <x-form-label for='decs'>Title</x-form-label>
          <div class="mt-2">

            {{-- input component --}}
           <x-form-input   id="decs" name="decs" placeholder="Job Title"  />

            {{-- @if ($errors->any())
              <ul class="mt-5">
                @foreach ( $errors->all() as $error)
                  <li class="text-red-500 italic">{{$error}}</li>
                @endforeach
              </ul>
            @endif --}}

           <x-form-error name="decs"></x-form-error>
          </div>
        </div>
      </div>


       <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="salary" id="salary" class=" px-3 block flex-1 border-0 bg-transparent py-1.5  text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="$50,000 per year"  >
            </div>
             @error('salary')
              <p class=" mt-1 text-xs font-semi-bold text-red-500 italic">{{$message}}</p>
            @enderror
          </div>
        </div>
    </div>


  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    <x-form-button>Save</x-form-button>
  </div>
</form>

</x-layouts>