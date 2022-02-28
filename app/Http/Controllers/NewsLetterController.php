<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsLetterController extends Controller
{
    // public function create()
    // {
    //     return view('newsletter');
    // }

    public function store(Request $request)
    {
        try {
        
            if(Newsletter::isSubscribed($request->email)) {

                return redirect()->back();
            }else
            {
                Newsletter::subscribe($request->email);
                echo '<script type="text/javascript">alert("Mail has been subscribed!");</script>';
            }
        }

        catch(\Exception $e) {

            echo '<script type="text/javascript">alert("Ooops! ' . $e . '");</script>';
        }
    }
}
