<<<<<<< HEAD
<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use  App\User;

class AdminMildware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check())
        {

              return $next($request);
            return redirect('/home');

        }


        else
            {

                return redirect('/auth/login');
            }


    }
}
=======
<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use  App\User;

class AdminMildware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check())
        {

              return $next($request);
            return redirect('/home');

        }


        else
            {

                return redirect('/auth/login');
            }


    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
