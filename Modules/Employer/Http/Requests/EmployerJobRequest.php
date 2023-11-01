<?php

namespace Modules\Employer\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployerJobRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'j_name' => 'required',
            'j_career_id' => 'required',
            'j_description' => 'required',
            'j_experience_id' => 'required',
            'j_time' => 'required',
            'j_rank_id' => 'required',
            'j_form_of_work_id' => 'required',
            'j_address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'j_name.required' => 'Dữ liệu không được để trống',
            'j_career_id.required' => 'Dữ liệu không được để trống',
            'j_description.required' => 'Dữ liệu không được để trống',
            'j_experience_id.required' => 'Dữ liệu không được để trống',
            'j_time.required' => 'Dữ liệu không được để trống',
            'j_rank_id.required' => 'Dữ liệu không được để trống',
            'j_form_of_work_id.required' => 'Dữ liệu không được để trống',
            'j_address.required' => 'Dữ liệu không được để trống',

        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
