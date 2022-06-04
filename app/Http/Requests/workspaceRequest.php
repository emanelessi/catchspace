<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class workspaceRequest extends FormRequest
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
            'Address' => 'required|string',
            'WorkspaceType' => 'required|in:Open room,Closed room,Meetings room,Skype room',
//            'Workspace Type' => 'required|in:Open room,Closed room,Meetings room,Skype room',
            'Date' => 'required',
            'Capacity' => 'required',
        ];

    }
}
