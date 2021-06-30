<?php

namespace App\Http\Requests;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class AccountTypeRequest extends FormRequest
{
    private $baseControllerApi;
    public $validator = null;

    public function __construct(BaseController $baseControllerApi)
    {
        $this->baseControllerApi = $baseControllerApi;
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'bail|required',
            'sub_type_id' => 'bail|nullable',
            'logo' => 'bail|required|string',


        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute is required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name Account Type',
            'sub_type_id' => 'Account Type Parent',
            'logo' => 'Logo icon',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $this->validator=$validator;
    }
}
