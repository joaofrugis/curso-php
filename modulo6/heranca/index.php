<?php
class Post {
    private int $id;
    private int $likes = 0;

    public function setId($i){
        $this->id = $i;
    }

    public function getId(){
        return $this->id;
    }

    public function setLikes($i){
        $this->likes = $i;
    }

    public function getLikes(){
        return $this->likes;
    }
}

class Foto extends Post {
    private $url;

    public function __construct($id){
        $this->setId($id);
    }

    public function setUrl($url){
        $this->url = $url;
    }

    public function getUrl(){
        return $this->url;
    }
}

class Texto extends Post {
    private $body;

    public function setBody($body){
        $this->body = $body;
    }

    public function getBody(){
        return $this->body;
    }
}

$foto = new Foto(20);

$foto->setLikes(12);
$foto->setUrl('abs');

echo "Foto: #".$foto->getId()." - ".$foto->getLikes()." likes - URL: ".$foto->getUrl()."<br/>";
