<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TwoslidersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TwoslidersTable Test Case
 */
class TwoslidersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TwoslidersTable
     */
    public $Twosliders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.twosliders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Twosliders') ? [] : ['className' => TwoslidersTable::class];
        $this->Twosliders = TableRegistry::get('Twosliders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Twosliders);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
