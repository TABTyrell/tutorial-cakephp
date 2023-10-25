<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class InsertData extends AbstractMigration
{
    public function change()
    {
        // Insert data into the 'users' table
        $usersData = [
            [
                'email' => 'cakephp@example.com',
                'password' => 'secret',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->table('users')->insert($usersData)->save();

        // Insert data into the 'articles' table
        $articlesData = [
            [
                'user_id' => 1,
                'title' => 'First Post',
                'slug' => 'first-post',
                'body' => 'This is the first post.',
                'published' => 1,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->table('articles')->insert($articlesData)->save();
    }
}
