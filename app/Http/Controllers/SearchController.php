<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
   
    public function autocomplete(Request $request)
    {
        
        $search = ['search'];
        if ($search=!'') {
            $data ['product'] = Product::where('name','LIKE','$search%')->get();
        } else {
             $data ['product'] = Product::all();
        }

        return view('/products/autocomplete')->with($data);
    }

        
        
} 

//-->


// public function autocomplete(Request $request)
// {

//     $search = $request['search'] ?? "";
//     if ($search!= "") {

//         //where
//         $products = Product::where('name' , '=' ,'$search')->get();

//     }else {

//         $products = Product::all();
//                }

//     return view('/products/autocomplete',$data);

// }



// public function autocomplete(Request $request)
// {
    
//     $search = request()->query('search');
//     if ($search) {
//         $data ['product'] = Product::where('name','LIKE','$search%');
//     } else {
//          $data ['product'] = Product::all();
//     }

//     return view('/products/autocomplete',$data);
// }