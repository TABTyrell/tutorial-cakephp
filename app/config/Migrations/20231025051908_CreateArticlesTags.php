<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateArticlesTags extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('articles_tags');
        $table
            ->addColumn('article_id', 'integer')
            ->addColumn('tag_id', 'integer')
            ->addIndex(['article_id', 'tag_id'], ['unique' => true])
            ->addForeignKey('tag_id', 'tags', 'id')
            ->addForeignKey('article_id', 'articles', 'id')
            ->create();
    }
}
