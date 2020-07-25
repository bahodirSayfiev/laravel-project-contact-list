<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function store(ContactStoreRequest $request)
    {
    	$contact = new Contact();

    	$contact->username = $request->input('username');
    	$contact->user_email = $request->input('user_email');
    	$contact->user_call = $request->input('user_call');
        $contact->group = $request->input('group');

    	$contact->save();

    	return response()
    			->json([
    				'status' => true
    			])->setStatusCode(201, 'This contacts is created');
    }

    public function index()
    {
    	$contacts = Contact::all();
    	return response()
    			->json([
    				'status' => true,
    				'contacts' => $contacts
    			])->setStatusCode(200, 'This contacts list');
    }

    public function getContact($id)
    {
    	$contact = Contact::find($id);
    	return response()
    			->json([
    				'status' => true,
    				'contact' => $contact
    			])->setStatusCode(200, 'This contact page');
    }

    public function editPage($id)
    {
    	$contact = Contact::find($id);
    	return response()
    			->json([
    				'status' => true,
    				'contact' => $contact
    			])->setStatusCode(200, 'This contact page update');
    }

    public function update($id, ContactStoreRequest $request)
    {
    	$contact = new Contact::find($id);

    	$contact->username = $request->input('username');
    	$contact->user_email = $request->input('user_email');
    	$contact->user_call = $request->input('user_call');
        $contact->group = $request->input('group');

    	$contact->save();

    	return response()
    			->json([
    				'status' => true
    			])->setStatusCode(201, 'This contacts is update');
    }

    public function delete($id)
    {
    	Contact::find($id)->delete();
    	return response()
    			->json([
    				'status' => true
    			])->setStatusCode(201, 'This contact is delete'
    }
}
