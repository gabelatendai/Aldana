<?php

namespace App\Console\Commands;

use App\Attendance;
use Illuminate\Console\Command;

class ImportAttendance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:attendance';

    /**
     * The console command description.
     *
     * @var string
     */

    protected $description = 'import attendances from stored csv files';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //set the path for the csv files
        $path = "upload/database/attendance/*.csv";
        //run 2 loops at a time
        foreach (array_slice(glob($path),0,3) as $file) {

            //read the data into an array
            $data = array_map('str_getcsv', file($file));

            //loop over the data
            foreach($data as $row) {
                //insert the record or update if the email already exists
                Attendance::updateOrCreate([
                    'user_id' => $row[6],
                ],
                    [
                        'email' => $row[6],
                        'checktime' => $row[6],
                        'checktype' => $row[6],
                        'verifycode' => $row[6],
                        'sensorid' => $row[6],
                        'workcode' => $row[6],
                        'sn' => $row[6],
                    ]
                );
                $this->info('Display this on the screen');

            }
            $this->error('Something went wrong!');
            //delete the file
            unlink($file);
        }
    }
}
