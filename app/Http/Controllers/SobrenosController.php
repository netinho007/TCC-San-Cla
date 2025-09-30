<?php

namespace App\Http\Controllers;

use App\Models\sobrenos;
use App\Http\Requests\StoresobrenosRequest;
use App\Http\Requests\UpdatesobrenosRequest;

class SobrenosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function sobrenos()
        {
            return view ('Sobrenos');
        }
        
        public function run()
    {
        $images = ['product1.jpg', 'product2.jpg'];

        foreach ($images as $image) {
            $newName = Str::random(10) . '_' . $image;
            Storage::disk('public')->put(
                'products/' . $newName,
                file_get_contents(database_path('seeders/images/' . $image))
            );
            Product::create([
                'name' => 'Produto Exemplo',
                'image_path' => 'products/' . $newName,
            ]);
        }
    }
}
