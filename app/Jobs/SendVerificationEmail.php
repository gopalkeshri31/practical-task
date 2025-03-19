<?php

namespace App\Jobs;

use App\Mail\UserEmailVerification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendVerificationEmail implements ShouldQueue
{
    use Queueable;
    public $details;
    /**
     * Create a new job instance.
     */
    public function __construct($details)
    {
        //
        $this->details = $details;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        Mail::to($this->details['email'])->send(new UserEmailVerification($this->details));
    }
}
