<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'price' => 'required|numeric|min:1000',
            'qty' => 'required|integer|min:0', 
            'user_id' => 'required|exists:users,id', 
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama produk wajib diisi!',
            'price.numeric' => 'Harga harus berupa angka.',
            'price.min' => 'Harga minimal Rp 1.000.',
            'qty.required' => 'Jumlah stok (qty) wajib diisi.',
        ];
    }

}
