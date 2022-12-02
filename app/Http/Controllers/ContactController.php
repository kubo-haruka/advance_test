<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;

class ContactController extends Controller
{
    // 問い合わせ
    public function contacts()
    {
        return view('contacts');
    }

    public function confim(ContactsRequest $request)
    {
        $contacts = $request->all();
        unset($contacts['_token']);
        return view('confim', compact('contacts'));
    }

    public function tanks(ContactsRequest $request)
    {
        $contacts = $request->all();
        unset($contacts['_token']);
        return view('tanks', compact('contacts'));
    }

    // 管理画面
    public function admin()
    {
        $contact = Contacts::Paginate(10);
        unset($contact['_token']);
        return view('admin', ['contacts'=>$contact]);
    }

    public function search(ContactsRequest $request)
    {
        $contact = Contacts::where('fullname', 'LIKE BINARY', "%{$request->contacts}%")->get();
        $param = [
            'input' => $request->input,
            'contacts' => $contact
        ];
        unset($contact['_token']);
        return view('search', $param);
    }    
}