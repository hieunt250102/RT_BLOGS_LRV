<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        if ($this->route('blog')) {
            return [
                'title' => 'required|min:10',
                'thumb' => 'required|image',
                'content' => 'required|min:50',
                'category_id' => 'required'
            ];
        }

        return [
            'title' => 'required|min:10',
            'thumb' => 'required|image',
            'content' => 'required|min:50',
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
