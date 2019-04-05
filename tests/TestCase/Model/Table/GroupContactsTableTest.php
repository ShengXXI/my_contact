<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GroupContactsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GroupContactsTable Test Case
 */
class GroupContactsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GroupContactsTable
     */
    public $GroupContacts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GroupContacts',
        'app.Groups',
        'app.Contacts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GroupContacts') ? [] : ['className' => GroupContactsTable::class];
        $this->GroupContacts = TableRegistry::getTableLocator()->get('GroupContacts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GroupContacts);

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
