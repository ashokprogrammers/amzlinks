<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UrlAddToCartRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		switch ($this->method()) {
		case 'GET':
		case 'DELETE':
			{
				return [];
			}
		case 'POST':
			{
				return [
					'title' => 'required|string',
					'asin.*' => 'required|max:10|min:10',
					'quentity.*' => 'required',
					'pixelcodes' => 'required',
					'campaign_id' => 'required',
				];
			}
		case 'PUT':
		case 'PATCH':
			{
				return [
					'title' => 'required|string',
					'asin.*' => 'required|max:10|min:10',
					'quentity.*' => 'required',
					'pixelcodes' => 'required',
					'campaign_id' => 'required',
				];
			}
		default:break;
		}
	}
}
