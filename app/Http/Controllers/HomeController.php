<?php

namespace App\Http\Controllers;

use App\Http\Node\Model\RequestNodeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('page.home');
    }

    public function createRequest(Request $request, RequestNodeModel $requestNodeModel)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:10000',
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->messages()->toJson()

            ), 200);
        }

        $requestNodeModel->name = $request->name;
        $requestNodeModel->email = $request->email;
        $requestNodeModel->subject = $request->subject;
        $requestNodeModel->message = $request->message;
        $requestNodeModel->save();

        Mail::to(env('MAIL_USERNAME'))->send(new \App\Mail\Request($requestNodeModel));

        return response()->json(array('success' => true, 'message' => "Ми зв'яжемся звами найблищім часом."), 200);
    }
}
