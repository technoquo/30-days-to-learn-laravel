<x-layout>

    <x-slot:heading>
      Job
    </x-slot:heading>


    <h1 class="text-3xl font-semibold">{{ $job->title }}</h1>
    <p>

        This job pays {{ $job->salary }} por year
    </p>

    @can('edit', $job)
    <p class="mt-6">
      <x-button href="/jobs/{{ $job->id }}/edit">Edit</x-button>    
    </p>
    @endcan

   

</x-layout>
