<?php
class Post{
    public int $id;
    public int $likes = 0;
    public array $comments = [];    
    public string $author;

    public function __construct($qtdLikes) {
        $this->likes = $qtdLikes;
    }

    public function aumentarLike(){
        $this->likes++;
    }

    public function setAuthor($nome){
        $this->author = $nome;
    }

    public function getAuthor() {
        return $this->author;
    }

}

$post1 = new Post(25);
$post1->aumentarLike();
$post1->setAuthor('João');

$post2 = new Post(10);
$post2->aumentarLike();
$post2->setAuthor('Frugis');

echo "Post 1: ".$post1->likes." likes - Autor: ".$post1->getAuthor()."<br/>";
echo "Post 2: ".$post2->likes." likes - Autor: ".$post2->getAuthor()."<br/>";
