<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateComponentableRequest extends FormRequest
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

        $validation = [
            'section_id' => 'required_without:post_id|integer|exists:sections,id',
            'post_id' => 'required_without:section_id|integer|exists:posts,id',
            'component_id' => 'required|integer|exists:components,id',
            'active' => 'nullable|boolean',
        ];
        foreach (config('app.locales') as $locale) {
            $validation = $validation + [
                "{$locale}" => 'array',
                "{$locale}.title" => 'nullable|string|max:255',
                "{$locale}.short_title" => 'nullable|string|max:255',
            ];
        }

        return $validation;
    }
}
