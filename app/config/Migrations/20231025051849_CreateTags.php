<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTags extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('tags');
        $table
            ->addColumn('title', 'string', ['limit' => 191])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addIndex(['title'], ['unique' => true])
            ->create();
    }
}
