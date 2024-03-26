<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
        'title' => 'required|string|max:255',
        // 'slug' => 'required|regex:/^[0-9a-z\-]+$/',
        'description' => 'required|string',
        'prix' => 'required|numeric',
        'url_video' => 'required',
        'image' => 'required|mimes:png,jpg,jpeg',
        'level_id' => 'required|exists:levels,id',
        'category_id' => 'required|exists:categories,id',
        ];
    }
}

