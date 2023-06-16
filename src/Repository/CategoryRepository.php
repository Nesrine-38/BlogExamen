<?php

namespace App\Repository;

use App\Entity\Category;


class CategoryRepository
{


    public function findAll($page = 1, $pageSize = 10): array
    {
        $list = [];
        $connection = DataBase::getConnection();
        $offset = ($page - 1) * $pageSize;
        $query = $connection->prepare("SELECT * FROM category  LIMIT :pageSize OFFSET :page");
        $query->bindValue('pageSize', $pageSize, \PDO::PARAM_INT);
        $query->bindValue('page', $offset, \PDO::PARAM_INT);

        $query->execute();
        foreach ($query->fetchAll() as $line) {
            $list[] = new Category($line["id"], $line["namecategory"]);
        }
        return $list;
    }

    public function findById(int $id): ?Category
    {
        $connection = DataBase::getConnection();

        $query = $connection->prepare("SELECT * FROM category WHERE id=:id");
        $query->bindValue(":id", $id);
        $query->execute();
        foreach ($query->fetchAll() as $line) {
            return new Category($line["id"], $line["namecategory"]);
        }
        return null;
    }

    public function persist(Category $category): void
    {
        $connection = DataBase::getConnection();

        $query = $connection->prepare("INSERT INTO category (namecategory) VALUES (:namecategory)");
        $query->bindValue(':namecategory', $category->getNamecategory());
        $query->execute();

        $category->setId($connection->lastInsertId());
    }

    public function delete(int $id): void
    {
        $connection = DataBase::getConnection();

        $query = $connection->prepare("DELETE FROM category WHERE id=:id");
        $query->bindValue(":id", $id);
        $query->execute();
    }

    public function update(Category $category): void
    {

        $connection = DataBase::getConnection();

        $query = $connection->prepare("UPDATE category SET namecategory=:namecategory WHERE id=:id");
        $query->bindValue(':namecategorie', $category->getNamecategory());
        $query->execute();
    }


    public function search(string $term): array
    {
        $list = [];
        $connection = DataBase::getConnection();

        $query = $connection->prepare("SELECT * FROM category WHERE namecategory LIKE :term");
        $query->bindValue(":term", "%" . $term . "%");
        $query->execute();
        foreach ($query->fetchAll() as $line) {
            $list[] = new Category($line["id"], $line["namecategory"]);
        }
        return $list;
    }
}