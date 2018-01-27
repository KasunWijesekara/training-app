<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BrochuresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BrochuresTable Test Case
 */
class BrochuresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BrochuresTable
     */
    public $Brochures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.brochures',
        'app.courses',
        'app.quotations',
        'app.registrations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Brochures') ? [] : ['className' => BrochuresTable::class];
        $this->Brochures = TableRegistry::get('Brochures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Brochures);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
