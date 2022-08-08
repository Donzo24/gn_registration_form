<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendRequest extends FormRequest
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
            "TYPE" => "required",
            "ORGANIZATION_NAME" => "required",
            "ADDRESS_LINE_1" => "required",
            "ADDRESS_LINE_2" => "required",
            "CITY_NAME" => "required",
            "POSTAL_CODE" => "required",
            "COUNTRY_NAME" => "required",
            "DATE_OPERATION" => "required",
            "CONTACT_NIC_HANDLE" => "required",
            "CONTACT_WHOLE_NAME" => "required",
            "CONTACT_ORGANIZATION_NAME" => "required",
            "CONTACT_ADDRESS_LINE_1" => "required",
            "CONTACT_ADDRESS_LINE_2" => "required",
            "CONTACT_CITY_NAME" => "required",
            "CONTACT_POSTAL_CODE" => "required",
            "CONTACT_COUNTRY_NAME" => "required",
            // "CONTACT_PHONE" => "required",
            "CONTACT_EMAIL" => "required",
            "TECHNICAL_NIC_HANDLE" => "required",
            "TECHNICAL_WHOLE_NAME" => "required",
            "TECHNICAL_ORGANIZATION_NAME" => "required",
            "TECHNICAL_ADDRESS_LINE_1" => "required",
            "TECHNICAL_ADDRESS_LINE_2" => "required",
            "TECHNICAL_CITY_NAME" => "required",
            "TECHNICAL_POSTAL_CODE" => "required",
            "TECHNICAL_COUNTRY_NAME" => "required",
            "TECHNICAL_PHONE" => "required",
            "TECHNICAL_EMAIL" => "required",
            "TECHNICAL_REGISTRATION_MAIL" => "required",
            "TECHNICAL_FAX_NUM" => "required",
            "PRIMARY_SERVER_HOSTNAME" => "required",
            "PRIMARY_SERVER_IP" => "required",
            "SECONDARY_SERVER_HOSTNAME" => "required",
            "SECONDARY_SERVER_IP" => "required",
            "RESOURCE_IP_RECORDS_IP" => "required",
            "RESOURCE_IP_RECORDS_HARDWARE" => "required",
            "RESOURCE_IP_RECORDS_OS" => "required",
            "RESOURCE_IP_RECORDS_MX" => "required",
            "FORWARDING_HOST" => "required",
            "FORWARDING_CONTACT_NAME" => "required",
            "FORWARDING_CONTACT_EMAIL" => "required",
            "RESOURCE_RECORDS_DOMAINE_NAME" => "required",
            "RESOURCE_RECORDS_HARDWARE" => "required",
            "RESOURCE_RECORDS_OS" => "required",
            "RESOURCE_RECORDS_MX" => "required",
        ];
    }
}
