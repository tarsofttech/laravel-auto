<?php

namespace Tarsoft\LaravelAuto\Helpers;

use Illuminate\Support\Facades\File;

class FileCreator
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function createModel()
    {
        $stub = $this->getStub('Model.stub');
        $modelContent = str_replace('{{ modelName }}', $this->name, $stub);
        $this->saveFile("app/Models/{$this->name}.php", $modelContent);
    }

    public function createMigration()
    {
        $stub = $this->getStub('migration.stub');
        $migrationContent = str_replace('{{ tableName }}', strtolower($this->name) . 's', $stub);
        $this->saveFile("database/migrations/" . date('Y_m_d_His') . "_create_" . strtolower($this->name) . "s_table.php", $migrationContent);
    }

    public function createController()
    {
        $stub = $this->getStub('Controller.stub');
        $controllerContent = str_replace('{{ modelName }}', $this->name, $stub);
        $this->saveFile("app/Http/Controllers/{$this->name}Controller.php", $controllerContent);
    }

    public function createViews()
    {
        $views = ['index', 'show', 'create', 'edit'];
        foreach ($views as $view) {
            $stub = $this->getStub("views/{$view}.stub");
            $viewContent = str_replace('{{ modelName }}', strtolower($this->name), $stub);
            $this->saveFile("resources/views/{$this->name}/{$view}.blade.php", $viewContent);
        }
    }

    protected function getStub($file)
    {
        return File::get(__DIR__ . "/../stubs/{$file}");
    }

    protected function saveFile($path, $content)
    {
        File::ensureDirectoryExists(dirname(base_path($path)));
        File::put(base_path($path), $content);
    }
}
