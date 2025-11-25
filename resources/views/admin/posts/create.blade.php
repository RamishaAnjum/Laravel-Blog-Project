@section('title', 'Write a New Post')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Write a new post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <form method="post" action="{{ route('admin.posts.store') }}" class="space-y-6" novalidate>

                   <div>
            <x-input-label for="title" value="Title" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" 
            required autofocus autocomplete="title" />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>
       
       
                   <div>
            <x-input-label for="body" value="Body" />
          <textarea 
    id="body" 
    name="body" 
    rows="4" 
    class="block p-2.5 mt-1 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-indigo-500 dark:focus:ring-indigo-500" 
    placeholder="Write your thoughts here..." 
    required 
    autocomplete="body"
>{{ old('body') }}</textarea>

            <x-input-error class="mt-2" :messages="$errors->get('body')" />
        </div>
       

        
                   <div>
            <x-input-label for="categories" value="Category" />
             <select id="categories" name="category_id" class="block p-2.5 mt-1 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-indigo-500 dark:focus:ring-indigo-500"  
            required>
            <option selected>Choose a category</option>
    @foreach ($categories as $category)
    <option value="{{$category->id}}" @selected(old('category_id')==$category->id)>{{$category->name}}</option>
        @endforeach

  </select>
         
            <x-input-error class="mt-2" :messages="$errors->get('category_id')" />
        </div>
       
       
            <x-primary-button>Create</x-primary-button>

              @csrf

    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
