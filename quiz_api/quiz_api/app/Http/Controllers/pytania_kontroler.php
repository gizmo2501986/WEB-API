<?php

namespace App\Http\Controllers;

use App\Models\pytania;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class pytania_kontroler extends Controller
{


    public function fetch_insert(){

        $response = Http::get('https://quizapi.io/api/v1/questions', [

            'apiKey' => 'EO9hmONfRafMOE0dw5EB2iXbBcN50S4a3CJNXWaH',
            'limit' => 30,


        ]);

        $questions = json_decode($response->body());

        foreach($questions as $q ){

            $question = new pytania();


            // questionXXX nasz baza danych utworzona,     $q->question jest to nazwa z bazy danych pobieranych !!!!!
            $question->questionXXX=$q->question;
            $question->answer_a=$q->answers->answer_a;
            $question->answer_b=$q->answers->answer_b;
            $question->answer_c=$q->answers->answer_c;

            $question->save();



        }

        return view('zapisane');

    }





    public function show(){

       $data = pytania::all();

       return view('show', compact('data') );

    }


    public function pokaz(){

        $data = pytania::all();

        return view('witaj', compact('data'));



    }

    public function delete(){



        DB::table('pytanias')->delete();

        return redirect()->back();



    }

}
