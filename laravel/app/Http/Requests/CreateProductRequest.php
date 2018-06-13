<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'nazwa' => 'required|min:1|max:100',
            'opis' => 'min:1|max:5000',
            'img' => 'required|min:1|max:60',
            'img_opis' => 'min:1|max:5000',
            'img_thumb' => 'required|min:1|max:60',
            'kategoria_id' => 'required|integer'
        ];
    }
    
    public function messages()
    {
        return[
          'nazwa.required' => 'Pole "Nazwa" jest wymagane',  
          'img.required' => 'Pole "Ścieżka obrazu" jest wymagane',  
          'img_thumb.required' => 'Pole "Ścieżka miniatury" jest wymagane',  
          'kategoria_id.required' => 'Pole "Kategoria" jest wymagane',  
          'opis.min' => 'Pole "Opis" powinno mieć przynajmniej :min znaki(ów)',   
          'img_opis.min' => 'Pole "Opis obrazka" powinno mieć przynajmniej :min znaki(ów)',   
        ];
    }
}
