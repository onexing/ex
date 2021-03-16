<?php
//simple php code with framework (ex. Laravel)

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Modules\Any\Module as AnyModule;

/**
 * The best class when you need integration
**/
Class ApiController extends BaseController 
{
    public function __construct(Request $request) {
        $this->middleware(['auth:api']); // Secure API by user token
    }
    
    use AnyTrait; // Trait of Any additional functional 
    
    /**
     * Create Any action
     * 
     * @param Illuminate\Http\Request $request
     * 
     * @return json
     */
    public function createAny(Request $request) 
    {
        return response()->json(self::anyMakeFunctionFromTrait(AnyModule::createAny($request->all())));
    }
    
    //TODO: except this function from API class
    public static function getVersions() 
    {
        phpinfo();
        echo '
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script>
                function getVersion() {
                    return (Math.random() <= 0.5) ? "php " + $("h1.p").html() : "браузера " + window.navigator.userAgent;
                }
                alert("Версия " + getVersion());
            </script>
        ';
    }
}
