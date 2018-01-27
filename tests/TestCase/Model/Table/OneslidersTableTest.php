<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OneslidersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OneslidersTable Test Case
 */
class OneslidersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OneslidersTable
     */
    public $Onesliders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.onesliders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Onesliders') ? [] : ['className' => OneslidersTable::class];
        $this->Onesliders = TableRegistry::get('Onesliders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Onesliders);

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
