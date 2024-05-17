<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\LocalAi;
use Illuminate\Support\Facades\File;

class DocsEnhancer extends Command
{
    protected $signature = 'docsenhancer {prompt}';

    protected $description = 'Enhance documentation based on a prompt';

    private $localAi;

    public function __construct(LocalAi $localAi)
    {
        parent::__construct();

        $this->localAi = $localAi;
    }

    public function handle()
    {
        $prompt = $this->argument('prompt');

        $fileName = $this->argument('name');

        $docPath = resource_path('views/livewire/docs');

        $docFiles = File::files($docPath);

        $content = File::get($file->getPathname());

        $context = 'You are a senior engineer with a goal to enhance the documentation for the Livewire Volt components. ';

        $context .= 'Your objective is make a better docs , so that the users can easily understand the components. ';

        $content .= 'This is the documentation for the Livewire Volt components. ';
        $content .= '--------------------------------------------';
        $content .= $content;
        $content .= '--------------------------------------------';

        $enhancedContent = $this->localAi->execute($context, $prompt);

        File::put($file->getPathname(), $enhancedContent);
    
        $this->info('Documentation enhanced successfully!');
    }
}
