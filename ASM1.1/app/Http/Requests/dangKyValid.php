<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class dangKyValid extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'ho' => ['required','min:2'],
            'ten' => ['required','min:2','max:20'],
            'email' => 'required|email|unique:users,email',
            'dienthoai' => ['required','min:10','max:11'],
            'matkhau1' => 'required|min:6|same:matkhau2',
            'matkhau2' => 'required|min:6'
            ];
    }
    public function messages() {
        return [
         'ho.required' => '* Phải nhập họ',
         'ho.min' => '* Nhập họ ít nhất 2 ký tự',
         'ten.required' => '* Bạn chưa nhập tên',
         'ten.min' => '* Tên cần dài hơn',
         'ten.max' => '* Tên quá dài',
         'dienthoai.required'=>'* Phải nhập số điện thoại',
         'dienthoai.min'=>'* Số điện thoại không phù hợp',
         'dienthoai.max'=>'* Số điện thoại quá dài',
         'email.required' => '* Chưa nhập email',
         'email.unique' => '* Email đã được sử dụng',
         'email.email' => '* Nhập email chưa đúng',
         'matkhau1.required' => '* Bạn chưa nhập mật khẩu',
         'matkhau1.min' => '* Mật khẩu từ 6 ký tự trở lên',
         'matkhau1.same' => '* Hai mật khẩu không giống nhau',
         'matkhau2.required' => '* Bạn chưa nhập lại mật khẩu',
         'matkhau2.min' => '* Mật khẩu nhập lại cùng từ 6 ký tự trở lên'
       ];
     }
}
