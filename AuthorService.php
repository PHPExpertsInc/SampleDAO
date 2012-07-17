<?php
interface AuthorService {
  public function getBooksByAuthor($id);
  public function updateAuthor(Author $author);
}

class AuthorServiceDaoImpl implements AuthorService {
  private $authorDao;
  public function getAuthorDao(AuthorDao $dao) {
    $this->authorDao = $authorDao;
  }

  public function getBooks($id) {
      return $this->authorDao->getBooks($id);
  }

  public function updateAuthor(Author $author) {
    try {
      $this->authorDao->getDB()->startTransaction();
      $this->authorDao->updateAuthor($author);
      $this->authorDao->commit();
    } catch(Exception $ex) {
       $this->authorDao->getDB()->rollback();
       throw $ex;
    }
  }
}