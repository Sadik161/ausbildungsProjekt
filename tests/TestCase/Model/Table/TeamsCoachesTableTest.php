<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeamsCoachesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeamsCoachesTable Test Case
 */
class TeamsCoachesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TeamsCoachesTable
     */
    public $TeamsCoaches;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TeamsCoaches',
        'app.Coaches',
        'app.Teams',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TeamsCoaches') ? [] : ['className' => TeamsCoachesTable::class];
        $this->TeamsCoaches = TableRegistry::getTableLocator()->get('TeamsCoaches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TeamsCoaches);

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
