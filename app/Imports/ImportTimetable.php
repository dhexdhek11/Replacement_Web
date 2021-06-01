<?php

namespace App\Imports;

use App\Models\Timetable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportTimetable implements ToModel, WithHeadingRow, WithBatchInserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Timetable([
            'timetable_id'      => $row['timetableid'],
            'session'           => $row['session'],
            'activity_id'       => $row['activityid'],
            'unit_code_id'      => $row['unit_code'],
            'day'               => $row['day'],
            'campus'            => $row['campus'],
            'start_time'        => date("H:i:s", strtotime($row['start_time'])),
            'location'          => $row['location'],
            'hrs_per_week'      => $row['hrs_per_week'],
            'staff_id'          => $row['staffid'],
            'position_type'     => $row['casperm'],
        ]);
    }

    public function batchSize(): int
    {
        return 2000;
    }
}
