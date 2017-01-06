<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KokyodbsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KokyodbsTable Test Case
 */
class KokyodbsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KokyodbsTable
     */
    public $Kokyodbs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.kokyodbs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Kokyodbs') ? [] : ['className' => 'App\Model\Table\KokyodbsTable'];
        $this->Kokyodbs = TableRegistry::get('Kokyodbs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Kokyodbs);

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
