<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../aws-wp-plugin.php';

final class PluginTest extends TestCase
{
    public function testPluginVersionReturnsString(): void
    {
        $this->assertSame('1.0.0', AwsWpLabPlugin::get_version());
    }

    public function testPluginStatusIsActive(): void
    {
        $this->assertStringContainsString('Active', AwsWpLabPlugin::get_status());
    }
}
