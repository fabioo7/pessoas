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
use Redirect;
use Illuminate\Database\Eloquent\Model;
use App\Models\People;
use App\Models\Contacts;

class apiController extends Controller
{
    


    public function list_people() //contato
    {   
        //$people = Contacts::all();
        //Product::find($id);
        //$people = DB::table('people')
        //->JOIN('contacts', 'people.id', '=', 'contacts.id_people')
        //->get();

        $people = DB::table('people')->get();
        return response($people, 200);  
    }

    

    public function check_people($id) //contato
    {   
        $people = People::where('id', $id)->get();
        return response($people, 200);  
    }

    public function check_contact($id) //contato
    {   
        $contact = Contacts::where('id_contact', $id)->get();
        return response($contact, 200);  
    }

    public function list_contact($id) //contato
    {   
        $people = Contacts::where('id_people', $id)->orderBy('name_contact')
        ->take(10)
        ->get();
        return response($people, 200);  
    }


    
    public function insert_people(Request $campos) //cadastra pessoa
    {
        $name_people = $campos->input('name_people');
        $origin = $campos->input('origin');

        $insert_people = People::create(['name_people' => $name_people]);
        
        if($insert_people){
        if($origin != 'site'){
        return http_response_code(200);
        }else{
        return Redirect::to("show_peoples")  ;
        }
       }

    }


    public function update_people(Request $campos) //atualiza pessoas
    {
        $id = $campos->input('id');  
        $name = $campos->input('name');
        $origin = $campos->input('origin');
             
        $update_people = People::where('id', '=', $id)->update(['name_people' => $name]);
       

        if($update_people){
        if($origin != 'site'){
        return http_response_code(200);
        }else{
        return Redirect::to("show_peoples")  ;
        }
       }



    }

    public function del_people(Request $campos) //deleta pessoa e contatos
    
    {

        $id = $campos['id']; 
        $origin = $campos->input('origin');
        $del = People::where('id', '=', $id)->delete();
        $del = Contacts::where('id_people', '=', $id)->delete();
        
        return Redirect::to("show_peoples");
          


    }
    

    ///////////////////////////Contacts///////////////////////////////


    public function insert_contact(Request $campos) //inseet contact
    {

        $insert_contacts = Contacts::insert([
            'id_people' => $campos->input('id_people'),
            'name_contact' => $campos->input('name_contact'),
            'email' => $campos->input('email'),
            'tel' => $campos->input('tel')
        ]);
        return json_decode($insert_contacts,200);
        
    }


    public function contact_update(Request $campos) //update contact
    {
        $id = $campos->input('id');  
            
        $update_contact = Contacts::where('id_contact', '=', $id)->update([
            'name_contact' => $campos->input('name_contact'),
            'email' => $campos->input('email'),
            'tel' => $campos->input('tel'),
        ]);
        return response($update_contact , 200);
    }

    public function del_contact(Request $campos) //deleta pessoa e contatos
        
    {
        $id = $campos->input('id'); 
        $del = Contacts::where('id_contact', '=', $id)->delete();
        return response($del, 200);
    }












}
