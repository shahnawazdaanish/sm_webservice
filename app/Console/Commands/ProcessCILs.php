<?php

namespace App\Console\Commands;

use App\Entity\CILorderRequest;
use App\Models\TempCILRequests;
use App\Service\Processor\RequestToCILFileProcessor;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ProcessCILs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'process:cils';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process Stored CILs';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $tempCilRequest = TempCILRequests::where(['synced' => 0])->orderBy('id', 'desc')
            ->first()
        ;
        Log::info('Took CIL Temp Request: ' . ( $tempCilRequest !== null ? $tempCilRequest->id : 'N/A') );

        if($tempCilRequest !== null) {
            $logPrefix = "cilOrderRequest ==> " . $tempCilRequest->id . ' <=== ';
            try {
                $isProcessed = (new RequestToCILFileProcessor())->process($tempCilRequest);
                Log::info($logPrefix . "isProcessed: ". $isProcessed);
                return $isProcessed ? Command::SUCCESS : Command::FAILURE;
            } catch (Exception $exception) {
                Log::warning($logPrefix . 'Exception', [$exception]);
                return Command::FAILURE;
            }
        } else {
            Log::info("No cilOrderRequest available to process");
            return Command::FAILURE;
        }
    }
}
