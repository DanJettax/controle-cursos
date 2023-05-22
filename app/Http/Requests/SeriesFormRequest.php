<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'color_nome' => ['required'],
            'bc_batch' => ['required'],
            'vin' => ['required'],
            'model' => ['required'],
            'part' => ['required'],
            'delta' => ['required'],
            'result_15' => ['required'],
            'result_25' => ['required'],
            'result_45' => ['required'],
            'result_75' => ['required'],
            'result_110' => ['required'],
        ];
    }
}
