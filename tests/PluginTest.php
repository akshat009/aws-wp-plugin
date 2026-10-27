<?php

namespace AwsWpLab\Tests;

use AwsWpLab\AwsWpLabPlugin;
use PHPUnit\Framework\TestCase;

final class PluginTest extends TestCase
{
    public function testPluginVersionReturnsString(): void
    {
        $this->assertSame('1.0.0', AwsWpLabPlugin::getVersion());
    }

    public function testPluginStatusIsActive(): void
    {
        $this->assertStringContainsString('Active', AwsWpLabPlugin::getStatus());
    }
}
