<?php
class AuthorDao extends Dao {
    public function getBooks($id) {
       $stmt = $this->db->prepare('...');
       $stmt->execute(array($id));
       return SomeMapper::mapResultToBooks($stmt);
    }

    public function updateAuthor(Author $author) {
      $stmt = $this->db->prepare('..');
      $stmt->execute(array($author->name, $author->penNames));
    }
}