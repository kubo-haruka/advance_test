<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'id' => '',
      'fullname' => 'required | max:255',
      'gender' => 'required',
      'email' => 'required | email | max:255',
      'postcode' => 'required | max:8',
      'address' => 'required | max:255',
      'building' => 'max:255',
      'opinion' => 'required | max:120'
    ];
  }
  
  public function messages()
  {
    return [
      "fullname.required" => "お名前は必須項目です。",
      "fullname.max" => "255文字以内で入力してください",
      "email.required" => "メールアドレスは必須項目です。",
      "email.max" => "255文字以内で入力してください",
      "postcode.required" => "郵便番号は必須項目です。",
      "postcode.max" => "ハイフンありの8文字以内で入力してください",
      "address.required" => "住所は必須項目です。",
      "address.max" => "255文字以内で入力してください",
      "building.max" => "255文字以内で入力してください",
      "opinion.required" => "ご意見は必須項目です。",
      "opinion.max" => "120文字以内で入力してください"
    ];
  }

}
