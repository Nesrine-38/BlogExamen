<?php

namespace App\Repository;

use App\Entity\Commentaire;


class CommentaireRepository
{


        /**
     * @return Commentaire[]
     */

    public function findAll($page = 1, $pageSize = 10): array
    {
        $list = [];
        $connection = DataBase::getConnection();
        $offset = ($page - 1) * $pageSize;
        $query = $connection->prepare ("SELECT * FROM commentaire  LIMIT :pageSize OFFSET :page");
        $query->bindValue('pageSize', $pageSize, \PDO::PARAM_INT);
        $query->bindValue('page', $offset, \PDO::PARAM_INT);

        $query->execute();
        foreach ($query->fetchAll() as $line) {
            $list[] = new Commentaire ($line["comment"], $line["id_article"], $line["id"]);
        }
        return $list;
    }

       /**
     * @param $id 
     */

    public function findById(int $id): ?Commentaire
    {
        $connection = DataBase::getConnection();

        $query = $connection->prepare("SELECT * FROM commentaire WHERE id=:id");
        $query->bindValue(":id", $id);
        $query->execute();
        foreach ($query->fetchAll() as $line) {
            return new Commentaire ($line["comment"], $line["id_article"], $line["id"]);
        }
        return null;
    }

        /**
     * @param $Commentaire 
     */
    public function persist(Commentaire $Commentaire): void
    {
        $connection = DataBase::getConnection();

        $query = $connection->prepare("INSERT INTO commentaire (comment,id_article) VALUES (:comment, :id_article)");
        $query->bindValue(':comment', $Commentaire->getComment());
        $query->bindValue(':id_article', $Commentaire->getId_article());
        $query->execute();

        $Commentaire->setId($connection->lastInsertId());
    }
        /**
     * @param $id
     */
    public function delete(int $id): void
    {
        $connection = DataBase::getConnection();

        $query = $connection->prepare("DELETE FROM commentaire WHERE id=:id");
        $query->bindValue(":id", $id);
        $query->execute();
    }

       /**
     * @param Commentaire $Commentaire 
     */

    public function update(Commentaire $Commentaire): void
    {

        $connection = DataBase::getConnection();

        $query = $connection->prepare("UPDATE commentaire SET comment=:comment, id_article=:id_article WHERE id=:id");
        $query->bindValue(':comment', $Commentaire->getComment());
        $query->bindValue(':id_article', $Commentaire->getId_article());
        $query->execute();
    }


    public function search(string $term): array
    {
        $list = [];
        $connection = Database::getConnection();

        $query = $connection->prepare("SELECT * FROM commentaire WHERE comment LIKE :term");
        $query->bindValue(":term", "%" . $term . "%");
        $query->execute();
        foreach ($query->fetchAll() as $line) {
            $list[] = new Commentaire($line["comment"], $line["id_article"], $line["id"]);
        }
        return $list;
    }
}