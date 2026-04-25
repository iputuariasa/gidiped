<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TelegramController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email'=> 'required|email|max:255',
            'message'=>'required|string',
        ]);

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        // Ambil data tambahan
        $time = now()->format('d-m-Y H:i:s');
        $ip = $request->ip();
        $page = url()->previous();

        $telegramMessage =
"🚨 <b>LEAD BARU DIGIPED</b>

👤 <b>Nama:</b>
{$name}

📧 <b>Email:</b>
{$email}

💬 <b>Pesan:</b>
{$message}

🕒 <b>Waktu:</b>
{$time}

🌐 <b>IP:</b>
{$ip}

📍 <b>Halaman:</b>
{$page}";

        $response = Http::post(
            "https://api.telegram.org/bot".env('TELEGRAM_BOT_TOKEN')."/sendMessage",
            [
                'chat_id' => env('TELEGRAM_CHAT_ID'),
                'text' => $telegramMessage,
                'parse_mode' => 'HTML'
            ]
        );

        if($response->successful()){
            return redirect('/#contact')
                ->with('success','Pesan berhasil dikirim. Tim Digiped.id akan segera merespons melalui email Anda.');
        }

        return redirect('/#contact')
            ->with('error','Pesan gagal dikirim.');
    }
}