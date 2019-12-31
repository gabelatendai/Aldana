<?php

namespace App\Providers;
use App\Company;
use App\Holiday;
use App\Schedule;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Calendar;
use App\Event;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $company_info=Company::first();
        $events=Event::all();
        $event_list=[];
        foreach ($events as $key=>$event) {
            $event_list[]=Calendar::event($event->event_name,true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date)
            );
        }

        $holidays=Holiday::all();
        $holiday_list=[];
        foreach ($holidays as $key=>$holiday) {
            $event_list[]=Calendar::event($holiday->holiday_name,true,
                new \DateTime($holiday->start_date),
                new \DateTime($holiday->end_date)
            );
        }

        $calendar_details=Calendar::addEvents($event_list);
        view()->share(compact('calendar_details','events','company_info','holidays'));

        $this->commands([
            \App\Console\Commands\ImportAttendance::class
        ]);

//        Blade::directive('money', function ($amount) {
//
//
//
/*            return "<?php echo '$' . number_format($amount, 2); ?>";*/
//        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
