<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\cars;
use stdClass;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\Middleware;
use App\Mail\SendgridMail;
use Mail;
use Auth;
use Illuminate\Database\Eloquent\Model;
use App\Models\People;
use App\Models\Contacts;
class pagesController extends Controller
{
    
    public function show_peoples(Request $campos) 
    {
    
        $total_people = DB::table('people')->count();
        $total_contact = DB::table('contacts')->count();

        $url="https://fabiorangel.com.br/api_people/api/people";
        $output=file_get_contents($url);
        $lista=json_decode($output);
        return view('show_peoples')->with('lista', $lista)->with('total_people', $total_people)
        ->with('total_contact', $total_contact);
    }

    public function modal_list_contacts(Request $campos) 
    {
        $id = $campos->input('id');
        return view('modal_list_contacts')->with('id', $id);
    }

    public function modal_update_pessoa(Request $campos) 
    {
        $id = $campos->input('id');
        $url="https://fabiorangel.com.br/api_people/api/check_people/$id";
        $output=file_get_contents($url);
        $pessoa=json_decode($output);
        return view('modal_update_pessoa')->with('pessoa', $pessoa);
    }

    public function view_lita_contacts($id) 
    {
        $url="https://fabiorangel.com.br/api_people/api/list_contact/$id";
        $output=file_get_contents($url);
        $lista=json_decode($output);
        return view('view_lita_contacts')->with('lista', $lista);
    }


    public function modal_update_contact(Request $campos) 
    {
        $id = $campos->input('id');
        $url="https://fabiorangel.com.br/api_people/api/check_contact/17";
        $output=file_get_contents($url);
        $contact=json_decode($output);
        return view('modal_update_contact')->with('contact', $contact);
      
    }

    

}



