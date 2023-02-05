<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navigations = [
            'Home' => '/',
            'About' => '/about',
            'Profile' => '/profile',
            'Post' => '/post',
            'Tugas' => '/tugas',
        ];

        // return view('components.navbar', [
        //     'navigations' => $navigations
        // ]);

        // return view('components.navbar', compact('navigations'));

        // kita pindah ke folder layouts

        return view('layouts.navbar', compact('navigations'));
    }
}
