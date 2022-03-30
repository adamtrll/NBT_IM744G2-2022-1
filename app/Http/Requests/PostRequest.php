<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:2|max:240',
            'topic_id' => 'required|exists:topics,id',
            'description' => 'required',
            'content' => 'required',
            'cover' => 'file|image',
        ];
    }
}
