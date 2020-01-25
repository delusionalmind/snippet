public function handle($request, Closure $next)
    {
        if (Auth::user()) {
            switch (Auth::user()->type) {
                case 'Admin':
                    return redirect(route('adm.home'));
                    break;

                case 'User':
                    return redirect(route('home'));
                    break;
            }
        }
        return $next($request);
    }
