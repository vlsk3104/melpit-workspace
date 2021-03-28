<?php

namespace App\Http\Requests\Mypage\profile;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     * 
     * リソースを操作する権限を持っているかを調べる処理を書く
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * 
     * バリデーションルールを組み立て返します。
     */
    public function rules()
    {
        return [
            'avatar' => ['file', 'image'],
            'name' => ['required', 'string', 'max:255'],
        ];
    }
}
