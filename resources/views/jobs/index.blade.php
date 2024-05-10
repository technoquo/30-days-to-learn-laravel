<x-layout>

    <x-slot:heading>
        Listing Jobs
    </x-slot:heading>


    

    <div class="space-y-4">
        @foreach ($jobs as $job)
         <div>
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
               <div class="text-sm font-semibold text-blue-600">{{ $job->employer->name }}</div>
               <div>
                 <strong class="text-laracasts">{{ $job['title'] }}:</strong> pays {{ $job['salary'] }}
               </div>
            </a>
        </div>
        @endforeach
         <div>
            {{ $jobs->links() }}
         </div>
    </div>
     
</x-layout>
