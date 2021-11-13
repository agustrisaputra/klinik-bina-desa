<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'report_type'   => 'required|in:pengaduan_masalah,tatap_muka',
            'division'      => 'required_if:report_type,tatap_muka',
            'date'          => 'required_if:report_type,tatap_muka|date',
            'title'         => 'required|min:3',
            'description'   => 'required',
            'file'          => 'sometimes|file|max:2048'
        ];
    }

    public function attributes()
    {
        return [
            'report_type'   => 'Type Laporan',
            'division'      => 'Bidang',
            'date'          => 'Tanggal Konsultasi',
            'title'         => 'Judul Laporan',
            'description'   => 'Isi laporan',
            'file'          => 'File'
        ];
    }
}
