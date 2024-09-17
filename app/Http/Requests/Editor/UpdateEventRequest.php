<?php

namespace App\Http\Requests\Editor;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array {
        return [
            'title'       => 'required|max:155|min:5',
            'province_id' => 'required',
            'district_id' => 'required',
            'city_id'     => 'nullable',
            'address'     => 'required|max:155|min:6',
            'image'       => 'nullable|image',
            'start_date'  => 'required',
            'end_date'    => 'required',
            'start_time'  => 'required',
            'end_time'    => 'required',
            'description' => 'required',
            'tags.*'      => 'required|exists:tags,id',
        ];
    }
}
