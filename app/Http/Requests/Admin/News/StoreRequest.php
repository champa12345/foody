<?php

namespace App\Http\Requests\Admin\News;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title'=>'required|max:255',
            'date'=>'required|date_format:Y-m-d H:i:s',
            'content'=>'required',
            'thumbnail'=>'required',
            'status'=>'required|integer|max:1|min:0',
        ];
    }
}
