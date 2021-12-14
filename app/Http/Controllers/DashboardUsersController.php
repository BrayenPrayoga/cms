<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardUsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['user'] = Auth::user();
        return view('users.dashboard_users', $data);
    }

    public function index_chat()
    {
        return view('users.chatting');
    }

    public function getContact()
    {
        $wa = 'http://27.112.78.169/api/getChats?apiKey=83fb913dd5ad3b25e1dc3d6066832bfe';
        // curl
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $wa);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT,3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
        $response = curl_exec($ch);
        curl_close($ch);
        // end curl
        $data = json_decode($response);

        if ($response) {
            echo json_encode($data->results);
        }else{
            echo json_encode(false);
        }
    }

    public function sendMessage(Request $request)
    {
        $number = $request->number;
        $message = $request->message;
        
        // $array = array('apiKey' => '83fb913dd5ad3b25e1dc3d6066832bfe', 'phone' => $number,'message' => $message);
        // $wa = 'http://27.112.78.169/api/sendMessage';
        // curl
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $wa);
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($array));
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
        // end curl
        // $data = json_decode($response);

        // if ($response) {
            $value = [
                'id_users' => Auth::guard('user')->user()->id,
                'number' => $number,
                'message' => $message,
                'time' => date('H:i'),
                'tanggal' => date('Y-m-d'),
                'class' => 'outgoing_msg'
            ];
            DB::table('chat_history')->insert($value);
            $history = DB::table('chat_history')->where('number', $number)->orderBy('id','ASC')->get();
            echo json_encode($history);
        // }else{
        //     echo json_encode(false);
        // }
    }

    public function getMessage()
    {
        $id_users = $_GET['id_users'];
        $number = $_GET['number'];
        $history = DB::table('chat_history')->where('id_users', $id_users)->where('number', $number)->orderBy('id','ASC')->get();

        echo json_encode($history);
    }
}
