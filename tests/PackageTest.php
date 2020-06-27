<?php namespace Eamirgh\LaravelStaticPages\Tests;

use Orchestra\Testbench\TestCase;
use Eamirgh\LaravelStaticPages\LaravelStaticPagesServiceProvider;

class PackageTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelStaticPagesServiceProvider::class];
    }

    /** @test */
    public function can_parse_a_blade_file_including_layout_and_partials()
    {
	$title = 'Laravel is awesome.';
	$content = 'My awesome content is here!';
	$view = view('laravel-static-pages::page', compact('title', 'content'))->render();
	$this->assertStringContainsString($title, $view);
	$this->assertStringContainsString($content, $view);
    }
}
