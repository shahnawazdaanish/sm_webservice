<?php

namespace App\Jobs;

use App\Entity\CILFile;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class StoreCILFilesJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /** @var array|CILFile[]  */
    public array $cilFiles;

    /**
     * Create a new job instance.
     *
     * @param array|CILFile[] $cilFiles
     * @return void
     */
    public function __construct(array $cilFiles)
    {
        $this->cilFiles = $cilFiles;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->cilFiles as $cilFile) {
            $cilFile->save();
        }
    }
}
