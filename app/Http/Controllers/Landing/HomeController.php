<?php
namespace  App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SeoController;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class HomeController extends Controller {

    public function index(){
        SeoController::seoManager();
        return view('pages.home');
    }

    public function contact(){
        SeoController::seoManager('Contact');
        return view('pages.contact');
    }

    public function sendMail(Request $request){
        $mail = new PHPMailer(true);

        $to = 'contact@rtojo.me';
		$email = $request->email;
		$name = ucwords($request->name);
		$subject = ucwords($request->subject);
		$message = $request->message;
		$view = view('emails.contact', compact('email', 'name', 'subject', 'message'));

        try{
            $mail->CharSet = 'utf-8';
            $mail->isSMTP();
            $mail->SMTPAuth = true;

            $mail->Host = 'in-v3.mailjet.com'; //host mail
            $mail->Port = 587; //port mail
            $mail->Username = '1430ccfc2e25352adca1d594d0fc5855'; //your username. actually your email
            $mail->Password = '214063c50e700f27fcf8d1da92ff960b'; // your password. your mail password
            $mail->setFrom('noreply@rtojo.me');

            $mail->Subject = $subject;
            $mail->MsgHTML($view);
            $mail->addAddress($to);
            $mail->send();

            return 200;
        }catch(Exception $e){
            return "Message could not be sent. Mailer Error: {$e}";
        }
    }
}
