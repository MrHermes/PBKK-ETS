<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <div class="w-fit mx-auto p-5 space-y-4 my-7 flex flex-col justify-center bg-pink-700 rounded-xl">
            @foreach ($item as $key => $item)
            <div class="space-y-1.5">
                <p class="font-bold text-pink-300">{{ ucwords($key) }}</p>
                <p class="w-full text-pink-300">{{ $item }}</p>
                @if ($key == 'gambar')
                <img class="mx-auto" src="{{ asset('storage/images/'.$result) }}" alt="Images">
                @endif
            </div>
            @endforeach

            @if (session('status'))
                <p class="w-full text-center px-3 py-2.5 rounded-md bg-mint font-bold text-pink-300">{{ session('status') }}</p>
            @endif
        </div>
        <div>
            <p class="w-full text-pink-300">{{ $item }}</p>
            <form method="POST" action="/" class="w-fit space-y-5" enctype="multipart/form-data">
          @csrf
          <h1 class="text-center font-bold my-2 bg-white">Simple Form for PBKK Assignment</h1>

          <div class="w-[100%]">
            <div class="">
              <label for="name" class="font-bold text-pink-800">Name : </label>
              <input type="text" id="name" name="name" placeholder="Enter name" class="bg-transparent placeholder-pink-300 w-full" />
              @error('name')
              <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <div class="">
              <label for="email" class="font-bold text-pink-800">Email : </label>
              <input type="email" id="email" name="email" placeholder="Enter your email" class="bg-transparent placeholder-pink-300 w-full" />
              @error('email')
              <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <div class="">
              <label for="password" class="font-bold text-pink-800">Password : </label>
              <input type="password" id="password" name="password" placeholder="Enter password" class="bg-transparent placeholder-pink-300 w-full" />
              @error('password')
              <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <div class="">
              <label for="value" class="font-bold text-pink-800">Value (From 2.50 to 99.99) : </label>
              <input type="text" id="value" name="value" placeholder="Enter value" class="bg-transparent placeholder-pink-300 w-full" />
              @error('float')
              <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <div class="">
              <label for="image" class="font-bold text-pink-800">Image : </label>
              <input type="file" id="image" name="image" accept="image/*" class="bg-transparent placeholder-pink-300 w-full" />
              @error('image')
              <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="w-full flex justify-center">
              <button type="submit" class="bg-pink-300 p-3 my-3 w-1/2 rounded-xl">Submit</button>
            </div>
            
        </div>
      </form>
        </div>
    </div>
</x-app-layout>
