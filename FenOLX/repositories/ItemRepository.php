<?php


class ItemRepository extends Db
{
    public function create($data) {
        $sql = "
            INSERT INTO items(id, item, description, gender, price,razmer,  thumbnail)
            VALUES(NULL, :item, :description, :gender, :price, :razmer, :thumbnail)
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":item", $data["item"], PDO::PARAM_STR);
        $stmt->bindValue(":description", $data["description"], PDO::PARAM_STR);
        $stmt->bindValue(":gender", $data["gender"], PDO::PARAM_STR);
        $stmt->bindValue(":razmer", $data["razmer"], PDO::PARAM_STR);
        $stmt->bindValue(":price", $data["price"], PDO::PARAM_STR);
        $stmt->bindValue(":thumbnail", $data["thumbnail"], PDO::PARAM_STR);
        header('location: localhost/FenOLX/index.php');
        return $stmt->execute();

    }

    public function getAll() {
        $sql = "
            SELECT * FROM items
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAllByTopic($item) {
        $sql = "
            SELECT
                *
            FROM
                items
            WHERE
                item LIKE CONCAT('%', :item , '%') OR
                description LIKE CONCAT('%', :item , '%')
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":item", $item, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function getById($id) {
        $sql = "
            SELECT * FROM items WHERE id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function update($data) {
        $sql = "
            UPDATE
                items
            SET
                item = :item,
                description = :description,
                price = :price,
                gender = :gender,
                razmer = :razmer,
                thumbnail = :thumbnail
            WHERE
                id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $data["id"], PDO::PARAM_INT);
        $stmt->bindValue(":item", $data["item"], PDO::PARAM_STR);
        $stmt->bindValue(":description", $data["description"], PDO::PARAM_STR);
        $stmt->bindValue(":price", $data["price"], PDO::PARAM_STR);
        $stmt->bindValue(":gender", $data["gender"], PDO::PARAM_INT);
        $stmt->bindValue(":razmer", $data["razmer"], PDO::PARAM_INT);
        $stmt->bindValue(":thumbnail", $data["file_to_upload"], PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "
            DELETE FROM items WHERE id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}