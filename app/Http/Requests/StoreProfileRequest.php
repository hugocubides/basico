<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreProfileRequest extends Request {

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
			'first_name'    => 'required|min:3',
            'last_name'     => 'required|min:3',
            'display_name'  => 'required|min:3',
            'birthday'      => 'date',
            'bio'           => 'max:160',
            'profession'    => 'string',
            'organization'  => 'string',
            'address'       => 'alpha_num',
            'city'          => 'string',
            'country'       => 'string',
            'phone'         => 'numeric',
            'mobile'        => 'numeric',
            'website'       => 'url',
            'facebook'      => 'url',
            'twitter'       => 'url',
            'linkedin'      => 'url',
		];
	}

}
