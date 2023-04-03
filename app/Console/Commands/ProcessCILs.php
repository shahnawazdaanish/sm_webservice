<?php

namespace App\Console\Commands;

use App\Entity\CILorderRequest;
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
        $cilOrderRequest = CILorderRequest::where(['synced' => 0])
            ->firstOrFail()
        ;

        if($cilOrderRequest !== null) {
            try {
                $isProcessed = (new RequestToCILFileProcessor())->process($cilOrderRequest);
                return $isProcessed ? Command::SUCCESS : Command::FAILURE;
            } catch (Exception $exception) {
                Log::warning("Error processing: cilOrderRequest ==> " . $cilOrderRequest->id, [$exception]);
                return Command::FAILURE;
            }
        } else {
            Log::info("No cilOrderRequest available to process");
            return Command::FAILURE;
        }
    }
}
