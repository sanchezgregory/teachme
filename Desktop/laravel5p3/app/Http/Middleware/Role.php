<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    protected $level = [
        'admin' => '3',
        'editor' => '2',
        'user' => '1'
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $user = auth()->user();

        if ($this->level[$user->role] < $this->level[$role]) {

            // return redirect()->route('home')->with('alert', 'No tiene privilegios de admin'); //retorna con mensaje de error
            abort(404);
        }
        return $next($request);
    }
}
