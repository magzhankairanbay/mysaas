<?php
/**
 * Tests for: I want to have a web page where there will be written text "Hello World"
 *
 * @ticket SCRUM-8
 * @generated DevFlow Pipeline
 */

namespace Tests\Features;

use PHPUnit\Framework\TestCase;
use App\Features\IWantToHaveAWebPageWhereThereWillBeWrittenTextHelloWorld;

class IWantToHaveAWebPageWhereThereWillBeWrittenTextHelloWorldTest extends TestCase
{
    private $feature;

    protected function setUp(): void
    {
        $this->feature = new IWantToHaveAWebPageWhereThereWillBeWrittenTextHelloWorld();
    }

    /**
     * Test successful execution
     */
    public function testExecuteSuccess(): void
    {
        $result = $this->feature->execute();
        $this->assertTrue($result['success']);
        $this->assertNotEmpty($result['message']);
    }

    /**
     * Test validation with valid data
     */
    public function testValidateWithValidData(): void
    {
        $result = $this->feature->validate(['key' => 'value']);
        $this->assertTrue($result);
    }

    /**
     * Test validation with empty data
     */
    public function testValidateWithEmptyData(): void
    {
        $result = $this->feature->validate([]);
        $this->assertFalse($result);
    }
}
