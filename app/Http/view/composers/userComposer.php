<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class UserComposer
{
    
     public function compose(View $view): void
    {
        // Ambil username dari session
        $username = session('user', 'guest');
        
        $view->with([
            'currentUsername' => $username,
        ]);
    }
}