<?php

namespace App\Jobs;

use App\Mail\AppMailer;
use App\Mail\BulkEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class NetLogJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

       public $client;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $client)
    {
        $this->client = $client;

        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            Mail::to($this->client['to'])->send(new BulkEmail($this->client));
        }
        catch (\Exception $e) {
            throw $e;
        }
    }
}
