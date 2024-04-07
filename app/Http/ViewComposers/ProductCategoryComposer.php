<?php
 namespace App\Http\ViewComposers;

use App\Models\ProductCategory;
use Illuminate\View\View;

 class ProductCategoryComposer
 {
     public function compose(View $view)
     {
         $view->with('productCategories', ProductCategory::all());
     }
 }
