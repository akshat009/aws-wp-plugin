<?php

namespace AwsWpLab\Tests;

use AwsWpLab\AwsWpLabPlugin;
use PHPUnit\Framework\TestCase;

final class PluginTest extends TestCase
{
    public function testPluginVersionReturnsString(): void
    {
        // INTENTIONALLY BROKEN: Testing CI/CD Gate
        $this->assertSame('9.9.9', AwsWpLabPlugin::getVersion());
    }

    public function testPluginStatusIsActive(): void
    {
        $this->assertStringContainsString('Active', AwsWpLabPlugin::getStatus());
    }
}
