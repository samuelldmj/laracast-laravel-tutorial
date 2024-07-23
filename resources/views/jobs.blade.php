<x-layouts>
     <x-slot:header>
        Job listing
     </x-slot:header>
     
     <h1>List of available jobs and Employer names</h1>

     <div class="space-y-4">
      @foreach ( $jobs as $job )
      <a class="block px-4 py-6 border border-black-200 rounded-lg " href="/job/{{$job['id']}}">
            <div class="font-bold text-blue-500 text-sm">{{$job->employer->name}}</div>
          <div><strong> {{$job['decs']}}: </strong> earns {{$job['salary']}} per year.</div>
      </a>
     @endforeach
        
            <div>
            {{$jobs->links()}}
            </div>
     </div>
</x-layouts>