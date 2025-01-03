<form action="{{$action}}" class="w-full flex flex-col gap-20 justify-center pl-8 mx-auto" method="POST" enctype="multipart/form-data">
     @csrf
    @isset($method)
        @method($method)
    @endisset
    <div>
        <label for="product_name">Product Name:</label>
        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900
         text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
         dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
          dark:focus:ring-blue-500 dark:focus:border-blue-500" id="product_name" name="product_name" value="{{ old('product_name', $product->prodcut_name ?? '') }}">
        @error('product_name')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="price">Price:</label>
        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
        dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
         id="price" name="price" value="{{ old('price', $product->price ?? '') }}">
        @error('price')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="price">Quantity</label>
        <input type="text" class="bg-gray-50 border border-gray-300 
        text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
        block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="price" name="stock_quantity" value="{{ old('price', $product->stock_quantity ?? '') }}">
        @error('price')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="description">{{ old('description', $product->descrioption	 ?? '') }}</textarea>
        @error('description')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div class="flex items-center justify-center w-full">
        
    <label for="imageupload" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
        </div>
        <input name="imageupload" id="imageupload" type="file" class="hidden" />
    </label>
</div> 

    <div>
        <button type="submit" class="bg-[#16a34a] hover:bg-[#bbf7d0] text-white font-bold py-2 px-4 border-b-4 border-[#bbf7d0] hover:border-[#16a34a] rounded">
            {{ $buttonText }}
        </button>
        @error('imageupload')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
      
    </div>
</form>
