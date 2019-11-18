<?php
namespace  App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function index(){
        return view('pages.home');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function sendMail(Request $request){
        $to = 'contact@rtojo.me';
		$email = $request->email;
		$name = ucwords($request->name);
		$subject = ucwords($request->subject);
		$message = $request->message;
		$view = view('emails.contact', compact('name', 'subject', 'message'));
		$headers = 'From: ' . $email . "\r\n" .
		    'Reply-To: ' . $email . "\r\n" .
		    'X-Mailer: PHP/' . phpversion() . "\r\n" .
		    "Content-Type: text/html; charset=UTF-8";

		mail($to, $subject, $view, $headers);
    }
}
