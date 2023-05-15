<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenyakitMenularRequest extends FormRequest
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
        $penyakit=$this->route('id');
        return [
            'NamaPenyakit' => 'required|unique:penyakit_menulars,NamaPenyakit,'.$penyakit,
            'TotalPenyakit' => 'required',
            'GejalaPenyakit' => 'required',
            'PengobatanPenyakit' => 'required',
            'PenyebabPenyakit' => 'required',
            
        ];
    }

    public function messages()
    {
        return[
            'NamaPenyakit.required' => 'Nama tidak boleh kosong',
            'NamaPenyakit.unique'=>'Nama Penyakit Tidak Boleh Sama',
            'TotalPenyakit.required' => 'Total Kasus tidak boleh kosong',
            'GejalaPenyakit.required' => 'Kelas tidak boleh kosong',
            'PengobatanPenyakit.required' => 'Alamat tidak boleh kosong',
            'PenyebabPenyakit.required' => 'Semester tidak boleh kosong',
            
        ];
    }
}
