<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=> 'required|max:100',
            'description'=> 'nullable',
            'thumb'=> 'required|url',
            'skill'=> 'required',
            'git_url'=> 'required|url',
        ];
    }

    public function messages(): array{
        return [
            'name.required' => 'Il nome deve essere inserito',
            'name.max' => "Il nome deve avere massimo :max caratteri",
            'thumb.required' => "L'immagine di copertina deve essere inserita",
            'thumb.url' => "Il link della immagine di copertina deve essere un URL valido",
            'skill.required' => "Le tecnologie utilizzate devono essere inserite",
            'git_url.required' => "Il link alla repo di GitHub deve essere inserito",
            'git_url.url' => "Il link alla repo di GitHub deve essere un URL valido",
        ];
    }
}
