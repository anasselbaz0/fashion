<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CommandesFixture
 *
 */
class CommandesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'clients_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pieces_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_commandes_clients1' => ['type' => 'index', 'columns' => ['clients_id'], 'length' => []],
            'fk_commandes_pieces1' => ['type' => 'index', 'columns' => ['pieces_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_commandes_clients1' => ['type' => 'foreign', 'columns' => ['clients_id'], 'references' => ['clients', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_commandes_pieces1' => ['type' => 'foreign', 'columns' => ['pieces_id'], 'references' => ['pieces', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'date' => '2019-03-03 12:42:57',
                'clients_id' => 1,
                'pieces_id' => 1
            ],
        ];
        parent::init();
    }
}
