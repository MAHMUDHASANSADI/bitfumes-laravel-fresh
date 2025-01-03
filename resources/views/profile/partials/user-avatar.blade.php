<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Avatar Form
        </h2>
        <img width='50' hight='50' class="w-1 h-1 rounded-full" src="{{ asset("storage/$user->avatar") }}" alt="avatar" />

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
           Avatar add or update here
        </p>
    </header>
    <form method="post" action="{{route('profile.avatar')}}" enctype='multipart/form-data'>
        @method('patch')
        <!-- <input type="hidden" name="_token" value='{{csrf_token()}}'> -->
         @csrf
        <div>
            <x-input-label for="avatar" value="Avatar" />
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" :value="old('avatar', $user->avatar)"  autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        </div>

    
        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

          
        </div>
    </form>
</section>
