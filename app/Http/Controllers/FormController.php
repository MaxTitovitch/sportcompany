<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class FormController extends Controller 
{
	
   	public function index(Request $request) 
	{
		$reviews = Review::select(['id', 'name', 'text', 'created_at'])->get();
		$reviews = $reviews->sortByDesc('id');
		$id = $request ["id"];
		$count = count($reviews); 

		return view('form')->with(['reviews' => $reviews, 'count' => $count, 'id' => $id]);
	}
	
	public function show(Request $request)
	{	
		$name = $request ["name"];
		$mail = $request ["mail"];
		$number = $request ["number"];
		$message = strip_tags(preg_replace('/[ \t]+/', ' ', preg_replace('/[\r\n]+/', "\n", $request ["message"]))); 

		if (($answer = $this->handlingOfErrors($request, $name, $mail, $number, $message)) != NULL) {
			return $answer;
		}
		
		$this->addData($name, $mail, $number, $message);
		$this->sendMail($name, $mail, $number, $message);
		$request->session()->put ('not2Post', "PostIsNotTheFirstTime");
		
		return view ('formok')->with(['name' => $name, 'mail' => $mail, 'number' => $number, 'message' =>  $message]);
	}
	
	private function handlingOfErrors($request, $name, $mail, $number, $message) 
	{
		if (empty($_POST) || !empty($request->session()->get('not2Post'))) {
			$request->session()->flush();
			
			return view ('errors.404');
		}
		
		if( ($errors = $this->validation($name, $mail, $number, $message)) != NULL ) 
		{
			$request->session()->put ('errors', $errors);	
			$request->session()->put ("name", $name);
			$request->session()->put ("mail", $mail);
			$request->session()->put ("number", $number);
			$request->session()->put ("message", $message);

			return redirect('form');
		}
		
		return NULL;
	}
	
	private function validation($name, $mail, $number, $message) 
	{
		$answer = null;
		
		if (strlen($name) > 30) {
			$answer[1] = 'Слигком длинное имя, введите меньше 30 символов!';
		}
		
		if (!preg_match(" /^([a-z0-9_-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/ ", $mail) ) {
			$answer[2] = 'Введён не email!';
		}
		
		if ( (!is_numeric($number) || $number < 100000000 || $number > 999999999) && $number != null )  {
			$answer[3] = 'Номер должен быть 7-ми значным числом!';
		}
		
		if (strlen($message) > 500)  {
			$answer[4] = 'Введите сообщение до 500 символов!';
		}

		return $answer;
	}
	
	private function addData($name, $mail, $number, $message) 
	{
		$review = new review;
		
		$review->name = $name;
		$review->email = $mail;
		if(!empty ($number)) {
			$review->phone = "375" . $number;
		}
		$review->text = $message;
		
		$review->save();
	}
	
	private function sendMail($name, $mail, $number, $message) 
	{
		$headers  = 'MIME-Version: 1.0' . "\r\n" . "Content-type: text/html; charset=utf-8 \r\n";

		$miMessage = "<H2>Здраствуйте, уважаемый разработчик!</h2>На веб сайте компании SportCompany новый новый отзыв:<br>";
		$miMessage .= "<b>Имя пользователя</b>: $name.<br>";
		$miMessage .= "<b>Адрес электронной почты</b>: $mail.<br>";
		if(!empty ($number)) {
			$miMessage .= "<b>Номер телефона</b>: +375 $number.<br>";
		}
		$miMessage .= "<b>Оставленное сообщение</b>:<br> \"". nl2br($message) . ".\"<br>";
		$miMessage .= "<b>Дата отправления</b>: " . date("d.m.Y H:i") . "<br><br>";
		$miMessage .= "<i>Письмо создано автоматически на сайте SportCompany!</i>";
		
		mail('sportcompanyminsk@gmail.com', 'Новый Отзыв на Sportcompany', $miMessage, $headers);
	}
	
}