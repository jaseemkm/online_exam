<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
        public function admin()
    {
        return view('admin');
    }


    public function add_qstn()
    {
        return view('add_qstn');
    }


    public function add_student()
    {
        return view('add_student');
    }
    public function add_student_post(Request $student)
    {
      $studentname=$student->input('student_name');
          $rollnumber=$student->input('rollnumber');
        DB::table('students')->insert(['student_name'=>$studentname,'roll_no'=>$rollnumber]);
        return redirect('/add_student');
    }


    public function remove_edit()
    {
        $details = DB::table('questions')->get();
        return view('remove_edit',['details' => $details]);
    }


    public function removeq($id)
    {
        DB::table('questions')->where('qstnid',$id)->delete();
        DB::table('answers')->where('qstnid',$id)->delete();
        return redirect('/remove_edit');
    }


    public function edit_qstn($id)
    {

        $question = DB::table('questions')->where('qstnid',$id)->first();
        $answers = DB::table('answers')->where('qstnid',$id)->get();

        return view('edit_qstn',['answers' => $answers],['question' => $question]);
    }



    public function add_instruction()
    {

        return view('add_instruction');
    }


    public function add_instruction_post(Request $details)
    {
        $instruction=$details->input('instruction');
        DB::table('instruction')->insert(['instruction'=>$instruction]);
        return redirect('/home');
    }



    public function remove_edit_instruction()
    {

        $instruction = DB::table('instruction')->get();
        return view('remove_edit_instruction',['instruction' => $instruction]);
    }

    public function remove_delete_instruction($id)
    {

      DB::table('instruction')->where('id',$id)->delete();
      return redirect('/remove_edit_instruction');


    }
    public function edit_instruction($id)
    {
      $instruction=DB::table('instruction')->where('id',$id)->first();
      return view('edit_instruction',['instruction' => $instruction]);

    }

    public function edit_instruction_post(Request $details)
    {
      $id=$details->input('id');
      $instruction=$details->input('instruction');
      DB::table('instruction')->where('id',$id)->update(
    ['instruction' => $instruction]);

      return redirect('/remove_edit_instruction');

    }

    public function type($id)
    {

        DB::table('type')->where('id','1')->update(['type' => $id]);
        return redirect('/home');
    }


    public function edit_qstn_post(Request $details)
    {
        $id=$details->input('id');
        $qstn=$details->input('question');
        $type=$details->input('type');
        $answer=$details->input('canswr');
        $an1=$details->input('answer1');
        $an2=$details->input('answer2');
        $an3=$details->input('answer3');
        $an4=$details->input('answer4');
        DB::table('questions')->where('qstnid',$id)->delete();
        DB::table('answers')->where('qstnid',$id)->delete();


        DB::table('questions')->insert(
    ['qstnid' => $id, 'question' => $qstn,'type'=>$type]);

            if($answer=='1')
            {
            DB::table('answers')->insert(
['qstnid' => $id, 'answers' => $an1,'correct_answer'=>'1']);
            DB::table('answers')->insert(
['qstnid' => $id, 'answers' => $an2,'correct_answer'=>'0']);
            DB::table('answers')->insert(
['qstnid' => $id, 'answers' => $an3,'correct_answer'=>'0']);
            DB::table('answers')->insert(
['qstnid' => $id, 'answers' => $an4,'correct_answer'=>'0']);
            }

            if($answer=='2')
            {
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an1,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an2,'correct_answer'=>'1']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an3,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an4,'correct_answer'=>'0']);
            }
            if($answer=='3')
            {
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an1,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an2,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an3,'correct_answer'=>'1']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an4,'correct_answer'=>'0']);
            }
            if($answer=='4')
            {
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an1,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an2,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an3,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an4,'correct_answer'=>'1']);
            }


        return redirect('/remove_edit');

    }

    public function add_qstn_post(Request $details)
    {

    $type=$details->input('type');
    $qstn=$details->input('qstn');
    $id=uniqid();
    $answer=$details->input('canswr');
    $an1=$details->input('answer1');
    $an2=$details->input('answer2');
    $an3=$details->input('answer3');
    $an4=$details->input('answer4');
            DB::table('questions')->insert(
    ['qstnid' => $id, 'question' => $qstn,'type'=>$type]);

            if($answer=='1')
            {
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an1,'correct_answer'=>'1']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an2,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an3,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an4,'correct_answer'=>'0']);
            }

            if($answer=='2')
            {
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an1,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an2,'correct_answer'=>'1']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an3,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an4,'correct_answer'=>'0']);
            }
            if($answer=='3')
            {
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an1,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an2,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an3,'correct_answer'=>'1']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an4,'correct_answer'=>'0']);
            }
            if($answer=='4')
            {
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an1,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an2,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an3,'correct_answer'=>'0']);
                DB::table('answers')->insert(
    ['qstnid' => $id, 'answers' => $an4,'correct_answer'=>'1']);
            }


            return redirect('/add_qstn');


        }

        public function student_login(Request $login)
    {
        $studentname=$login->input('studentname');
        $rollnumber=$login->input('rollnumber');
        $result=DB::table('students')->where('student_name',$studentname)->where('roll_no',$rollnumber)->first();


        if(isset($result->student_name))
        {
            return redirect('/einstruction');

        }
        else
        {
            return redirect("/");
        }
    }
        public function einstruction()
        {
            $instructions=DB::table('instruction')->get();
            return view('einstruction',['instructions' => $instructions]);
        }

        public function exam()
        {
            $type = DB::table('type')->where('id','1')->first();

            $questions = DB::table('questions')->where('type', $type->type)->get();

            foreach ($questions as $question) {
                $question->answers = DB::table('answers')->where('qstnid', $question->qstnid)->get();
            }

            /*$query = DB::table('questions')->where('type', $type->type)
                ->join('answers', 'answers.qstnid', '=', 'questions.qstnid')
                ->select([
                    'questions.qstnid as question_id',
                    'questions.question as question',
                    'answers.answers as answer',
                    'answers.correct_answer as correct_answer'
                ])
                ->get()
                ->groupBy('question_id');

            $questions = [

            ];

            foreach ($query as $question_id => $answers) {
                $question = [
                    'question_id' => $answers[0]->question_id,
                    'question' => $answers[0]->question,
                    'answers' => []
                ];

                foreach ($answers as $answer) {
                    $question['answers'][] = $answer->answer;
                }

                $questions[] = $question;
            }*/

            return view('exam',['questions' => $questions]);
        }

        public function score(Request $score)
        {
            $type = DB::table('type')->where('id','1')->first();
            $count = DB::table('questions')->where('type', $type->type)->count();
            $myscore=0;
            $answer=[];
            for($i=0;$i<=$count;$i++)
            $answer[]=$score->input('answer'.($i));
            for($i=0;$i<=$count;$i++)
            {
              if($answer[$i]==1)
               $myscore=$myscore+1;
             }







            return view('score',['count'=>$count],['myscore'=>$myscore]);
        }


    }
