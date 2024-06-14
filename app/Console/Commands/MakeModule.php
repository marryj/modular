<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class MakeModule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-module {name : The name of the module}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Laravel module';

    protected string $module_name;

    public function __construct(protected Filesystem  $filesystem)
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->module_name = Str::kebab($this->argument('name'));
    }

    protected function createModulesDirectory()
    {
        if (! $this->filesystem->isDirectory($this->base_path)) {
            $this->filesystem->makeDirectory($this->base_path, 0777, true);
            $this->line(" - Created <info>{$this->base_path}</info>");
        }
    }

}
