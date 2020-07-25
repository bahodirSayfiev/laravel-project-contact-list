<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Contact;

class ContactController extends Controller
{
    public function add(ContactRequest $request)
    {
    	$contact = new Contact();

    	$contact->username = $request->input('username');
    	$contact->user_email = $request->input('user_email');
    	$contact->user_call = $request->input('user_call');
        $contact->group = $request->input('group');
        $contact->icons = substr($request->input('user_email'), 0, 1);

    	$contact->save();

    	return redirect()->route('all-contact');
    }

    public function addComment(CommentRequest $request)
    {
        $comment = new Comment();

        $comment->title = $request->input('title');
        $comment->message = $request->input('message');

        $comment->save();

        return redirect()->route('all-contact');
    }

    public function getAll()
    {
        $contact = new Contact();
        $contacts = $contact->orderBy('id', 'desc')->get();
        $count = $contact->count();

        $comment = new Comment();
        $comments = $comment->orderBy('id', 'desc')->get();
        $countComments = $comment->count();
       
    	return view('all', 
                ['contacts' => $contacts,
                'count' => $count,
                'comments' => $comments,
    		    'countComments' => $countComments
    	]);
    }

    public function PageDeleteContact()
    {
        $contact = new Contact();
        return view('delete', 
            ['contacts' => $contact->orderBy('id', 'desc')->get(),
                'count' => $contact->count(),
        ]);
    }

    public function one($id)
    {
   		$contact = new Contact();
   		return view('one', ['elem' => $contact->find($id)]);
    }

    public function edit($id)
    {
    	$contact = new Contact();
   		return view('update', ['edit' => $contact->find($id)]);
    }

    public function update($id, ContactRequest $request)
    {
    	$contact = Contact::find($id);

    	$contact->username = $request->input('username');
    	$contact->user_email = $request->input('user_email');
    	$contact->user_call = $request->input('user_call');
        $contact->group = $request->input('group');

    	$contact->save();

    	return redirect()->route('one-contact', $id);
    }

    public function delete($id)
    {
    	Contact::find($id)->delete();
    	return redirect()->route('all-contact');
    }

    public function groupAdd()
    {
        $contact = new Contact();
        return view('group', 
            ['contacts' => $contact->orderBy('id', 'desc')->get(),
                'count' => $contact->count(),
        ]);
    }

    //  Разделение групп для контактов

    public function getFamillyGroup()
    {
        $contact = new Contact();
        return view('family-group', 
        ['contacts' => $contact->where('group', '=', 'Семья')->orderBy('id', 'desc')->get(),
            'count' => $contact->where('group', '=', 'Семья')->count(),
        ]);
    }

    public function getFrandsGroup()
    {
        $contact = new Contact();
        return view('frands-group', 
        ['contacts' => $contact->where('group', '=', 'Друзья')->orderBy('id', 'desc')->get(),
            'count' => $contact->where('group', '=', 'Друзья')->count(),
        ]);
    }

    public function getJobsGroup()
    {
        $contact = new Contact();
        return view('jobs-group', 
        ['contacts' => $contact->where('group', '=', 'Работа')->orderBy('id', 'desc')->get(),
            'count' => $contact->where('group', '=', 'Работа')->count(),
        ]);
    }

    public function search (Request $request)
    {
        $search = $request->get('search');
        $contact = new Contact();
        $contacts = $contact->where('username', 'like', '%'.$search.'%')->get();
        $comments = Comment::all();

        return view('all', ['contacts' => $contacts, 'comments' => $comments]);
    }

}
