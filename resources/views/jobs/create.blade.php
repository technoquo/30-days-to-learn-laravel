<x-layout>

    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of details from you.
                    what you share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                       <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                           <x-form-input id="title" name="title" type="text" value="{{ old('title') }}" aria-placeholder="Shift Leader" placeholder="Shift Leader"  />
                           <x-form-error name="title" />
                        </div>
                    </x-form-field>
                     <x-form-field>
                       <x-form-label for="title">Salary</x-form-label>
                        <div class="mt-2">
                           <x-form-input id="salary" name="salary" type="text" value="{{ old('salary') }}" aria-placeholder="$50,000 per year" placeholder="$50,000 per year"  />
                           <x-form-error name="salary" />
                        </div>
                    </x-form-field>
                
                {{-- </div>
                <div class="mt-10">
                @if ($errors->any())
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li class="text-red-500 text-xs">{{ $error }}</li>
                    @endforeach
                  </ul>
                @endif
            </div> --}}
            </div>          
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>






</x-layout>
