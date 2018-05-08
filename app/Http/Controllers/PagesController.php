<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('about');
    }
    
    public function offer()
    {
        return view('offer');
    }
    
    public function pricing()
    {
        return view('pricing');
    }
    
    public function shop()
    {
        return view('shop');
    }
    
    public function sale()
    {
        return view('sale');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function save(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        Message::create($request->all());
        return back()->with('success', 'Dziękujemy za wysłanie wiadomości!');
    }
}
