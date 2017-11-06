<<<<<<< HEAD
<?php
/**
 * Created by PhpStorm.
 * User: Elie.Ishimwe
 * Date: 2016/12/09
 * Time: 4:01 PM
 */

namespace App\Http\Middleware;

use Closure;
use Session;


class ResetLastActive
{
    public  function handle($request,Closure $next)
    {
        Session::set('lastActive',date('U'));
        Session::forget('idleWarningDisplayed');
        Session::forget('logoutWarningDisplayed');
        return $next($request);
    }

=======
<?php
/**
 * Created by PhpStorm.
 * User: Elie.Ishimwe
 * Date: 2016/12/09
 * Time: 4:01 PM
 */

namespace App\Http\Middleware;

use Closure;
use Session;


class ResetLastActive
{
    public  function handle($request,Closure $next)
    {
        Session::set('lastActive',date('U'));
        Session::forget('idleWarningDisplayed');
        Session::forget('logoutWarningDisplayed');
        return $next($request);
    }

>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
}