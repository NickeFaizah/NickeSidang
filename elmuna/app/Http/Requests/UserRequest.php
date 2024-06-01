<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return [
            // 'nik'           => 'nik',
            // 'name'          => 'nama',
            // 'email'         => 'email',
            // 'password'      => 'password',
            // 'alamat'        => 'alamat',
            // 'tlp'           => 'tlp',
            // 'role'          => 'role',
            // 'tglLahir'      => 'tglLahir',
            // 'foto'          => 'mimes:jpg,png,jpeg',
        ];
    }
}
