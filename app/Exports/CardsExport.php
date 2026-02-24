<?php

namespace App\Exports;

use App\Models\Card;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CardsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Card::select('name', 'email', 'phone', 'role')->get();
    }

    public function headings(): array
    {
        return [
            'Nom',
            'Email',
            'Téléphone',
            'Rôle'
        ];
    }
}