<x-layouts>
    <x-slot:header>
        Edit Job: {{ $job->decs }}
    </x-slot:header>
    <form method="POST" action="/job/{{ $job->id }}">
        @csrf
        @method('PATCH')


        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="decs" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="decs" id="decs" value="{{ $job->decs }}"
                                    class=" px-3 block flex-1 border-0 bg-transparent py-1.5  text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Job Title" required>
                            </div>
                            {{-- @if ($errors->any())
              <ul class="mt-5">
                @foreach ($errors->all() as $error)
                  <li class="text-red-500 italic">{{$error}}</li>
                @endforeach
              </ul>
            @endif --}}

                            @error('decs')
                                <p class=" mt-1 text-xs font-semi-bold text-red-500 italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="salary" value="{{ $job->salary }}" id="salary"
                                    class=" px-3 block flex-1 border-0 bg-transparent py-1.5  text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="$50,000 per year" required>
                            </div>
                            @error('salary')
                                <p class=" mt-1 text-xs font-semi-bold text-red-500 italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="mt-4 flex items-center justify-between gap-x-6">
                    <div class="flex item-center">
                        <button href="/job/{{ $job->id }}"
                            class="text-sm text-red-500 font-bold leading-6 text-gray-900" form="delete-form">Delete</button>

                    </div>

                    <div class="flex items-center gap-x-4">
                        <div>
                            <a href="/job/{{ $job->id }}"
                                class="text-sm font-semibold leading-6 text-gray-900">Back</a>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                        </div>
                    </div>
                </div>
    </form>
 
  <form action="/job/{{$job->id}}" method="post" class="hidden" id="delete-form">
    @csrf
    @method('DELETE')
  </form>
</x-layouts>
