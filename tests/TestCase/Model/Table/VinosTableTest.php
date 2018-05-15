<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VinosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VinosTable Test Case
 */
class VinosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VinosTable
     */
    public $Vinos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vinos',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vinos') ? [] : ['className' => VinosTable::class];
        $this->Vinos = TableRegistry::get('Vinos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vinos);

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
