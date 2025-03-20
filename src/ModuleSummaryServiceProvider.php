<?php

declare(strict_types=1);

namespace Hanafalah\ModuleSummary;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class ModuleSummaryServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return $this
     */
    public function register()
    {
        $this->registerMainClass(ModuleSummary::class)
            ->registerCommandService(Providers\CommandServiceProvider::class)
            ->registers([
                '*',
                'Services' => function () {
                    $this->binds([
                        Contracts\ModuleSummary::class => ModuleSummary::class,
                        Contracts\Summary::class       => Schemas\Summary::class
                    ]);
                }
            ]);
    }

    /**
     * Get the base path of the package.
     *
     * @return string
     */
    protected function dir(): string
    {
        return __DIR__ . '/';
    }

    protected function migrationPath(string $path = ''): string
    {
        return database_path($path);
    }
}
