<x-layouts>
     <x-slot:header>
        Job listing
     </x-slot:header>
     
     <h1>Need a job?</h1>

     <ul>
      @foreach ( $jobs as $job )
      <a href="/job/{{$job['id']}}">
          <li> <strong> {{$job['decs']}}: </strong> earns {{$job['salary']}} per year</li>
      </a>
     @endforeach
     </ul>
</x-layouts>