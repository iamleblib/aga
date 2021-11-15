<?php

namespace App\Console\Commands;

use App\Models\Investment;
use App\Models\Roi;
use Carbon\Carbon;
use Illuminate\Console\Command;

class PaymentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Payment Command is a console command created to execute investors payment at their speculated time';

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
     * @return int
     */
    public function handle()
    {
        // enterprice
        $enterPrices = Investment::where([
            ['plan', 'Enterprise'],
            ['completed', false],
            ['updated_at', '<=',  Carbon::now()->subWeek()],
        ])->get();

        Investment::where([
            ['plan', 'Enterprise'],
            ['completed', false],
            ['updated_at', '<=',  Carbon::now()->subWeek()],
        ])->update([
            'status' => 'processed'
        ]);

        foreach ($enterPrices as $enterPrice) {
            Roi::create([
                'user_id' => $enterPrice->user_id,
                'ref' => $enterPrice->ref,
                'amount' => (($enterPrice->amount / 100) * 10),
                'plan' => $enterPrice->plan,
            ]);
        }



        // worldClass
        $worldClasses = Investment::where([
            ['plan', 'World Class'],
            ['completed', false],
            ['updated_at', '<=',  Carbon::now()->subWeek()],
        ])->get();

        Investment::where([
            ['plan', 'World Class'],
            ['completed', false],
            ['updated_at', '<=',  Carbon::now()->subWeek()],
        ])->update([
            'status' => 'processed'
        ]);

        foreach ($worldClasses as $worldClass) {
            Roi::create([
                'user_id' => $worldClass->user_id,
                'ref' => $worldClass->ref,
                'amount' => (($worldClass->amount / 100) * 15),
                'plan' => $worldClass->plan,
            ]);
        }

        // Unlimited
        $unlimiteds = Investment::where([
            ['plan', 'Unlimited'],
            ['completed', false],
            ['updated_at', '<=',  Carbon::now()->subWeek()],
        ])->get();

        Investment::where([
            ['plan', 'Unlimited'],
            ['completed', false],
            ['updated_at', '<=',  Carbon::now()->subWeek()],
        ])->update([
            'status' => 'processed'
        ]);

        foreach ($unlimiteds as $unlimited) {
            Roi::create([
                'user_id' => $unlimited->user_id,
                'ref' => $unlimited->ref,
                'amount' => (($unlimited->amount / 100) * 20),
                'plan' => $unlimited->plan,
            ]);
        }



        //  Update enterprise as completed
        Investment::where([
            ['plan', 'Enterprise'],
            ['created_at', '<=', Carbon::now()->subWeeks(3)],
            ['completed', false],
        ])->update([
            'completed' => true,
        ]);

        //  Update worldclass as completed
        Investment::where([
            ['plan', 'World Class'],
            ['created_at', '<=', Carbon::now()->subWeeks(4)],
            ['completed', false],
        ])->update([
            'completed' => true,
        ]);

        //  Update Unlimited as completed
        Investment::where([
            ['plan', 'Unlimited'],
            ['created_at', '<=', Carbon::now()->subWeeks(5)],
            ['completed', false],
        ])->update([
            'completed' => true,
        ]);


        // Kill enterprice

        Investment::where([
            ['plan', 'Enterprise'],
            ['completed', true],
            ['active', true],
            ['created_at', '<=', Carbon::now()->subWeeks(3)],
        ])->update([
            'active' => false
        ]);

        // Kill worldclass

        Investment::where([
            ['plan', 'World Class'],
            ['completed', true],
            ['active', true],
            ['created_at', '<=', Carbon::now()->subWeeks(4)],
        ])->update([
            'active' => false
        ]);

        // Kill Unlimited

        Investment::where([
            ['plan', 'Unlimited'],
            ['completed', true],
            ['active', true],
            ['created_at', '<=', Carbon::now()->subWeeks(5)],
        ])->update([
            'active' => false
        ]);
    }
}
