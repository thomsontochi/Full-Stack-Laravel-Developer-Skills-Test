
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceContainer extends Controller
{
    
. Service Container
  Consider the following Laravel controller:

   class MyController extends Controller
   {
       private $provider;
       
       public function __construct(MyContentProvider $provider)
       {
           $this->provider = $provider;
       }
       
       public function getContent()
       {
          return view('index', [ 'content' => $this->provider->get() ]);
       }
   }
When this controller is instantiated, a fresh instance of MyContentProvider is passed to the controller without any other code changes.
 How does Laravel know how to construct the Controller? What if MyServiceProvider has dependencies on its own? Explain how this works.


// SOLUTION

            
 The function ___construct() is a core PHP function and not specific to Laravel alone.
  In any PHP class if you define __construct() function it acts as the default constructor, that is, whenever a new object of the class is created, this function will be called.




}

