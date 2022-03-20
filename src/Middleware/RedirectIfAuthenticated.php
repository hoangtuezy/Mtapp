<?php
	
	namespace Tuezy\Middleware;
	
	use Closure;
	
	class RedirectIfAuthenticated
	{
		/**
		 * Handle an incoming request.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @param  \Closure  $next
		 * @param  string|null  $guard
		 * @return mixed
		 */
		public function handle($request, Closure $next, $guard = null)
		{
			if (isset($_SESSION['user'])) {
				return 'Error Authenticate';
			}
			
			return $next($request);
		}
	}