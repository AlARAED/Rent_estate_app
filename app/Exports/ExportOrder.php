<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportOrder implements FromCollection, WithHeadings
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return collect($this->data);
    }

    public function headings() :array
    {

        return [
            __("ID"),
            __("serial number"),
            __("Account Name"),
            __("Phone To"),
            __("Price To"),
            __("price currency "),
            __("exchange rate"),
            __("Service"),
            __("Coin"),
            __("sender name"),
            __("sender address"),
            __("Note"),
            __("Status"),

        ];
    }
}
