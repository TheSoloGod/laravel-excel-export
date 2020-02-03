<?php


namespace App\Http\Controllers;


use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\Exportable;

class DataExport implements WithDrawings
{
    use Exportable;

    /**
     * @inheritDoc
     */
    public function drawings()
    {
        // TODO: Implement drawings() method.
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/img/logo.jpg'));
        $drawing->setWidth(200);
        $drawing->setCoordinates('B5');

        $drawing2 = new Drawing();
        $drawing2->setName('Logo');
        $drawing2->setDescription('This is my logo');
        $drawing2->setPath(public_path('/img/bg.png'));
        $drawing2->setWidth(350);
        $drawing2->setCoordinates('A1');

        return [$drawing, $drawing2];
    }
}
