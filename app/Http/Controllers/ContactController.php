<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // dd($request);
        // 1. Validasi form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'name'    => $request->input('name'),
            'email'   => $request->input('email'),
            'content' => $request->input('message'),
        ];

        try {
            // 2. Kirim Email ke support@digiped.id
            Mail::raw("Anda menerima pesan baru dari form kontak Digiped.id:\n\n" .
                      "Nama pengirim: {$data['name']}\n" .
                      "Email pengirim: {$data['email']}\n\n" .
                      "Isi Pesan:\n{$data['content']}", function ($message) use ($data) {
                
                $message->to('iptariasa@gmail.com') // Email tujuan (HP Anda)
                        ->subject('Inquiry Baru: ' . $data['name'])
                        ->replyTo($data['email'], $data['name']); // Supaya saat Anda klik 'Reply', langsung terarah ke email client
            });

            // 3. Berhasil, kembali ke halaman kontak dengan pesan sukses
            return redirect('/#contact')->with('success', 'Pesan Anda telah terkirim ke tim support kami!');

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
