<?php

require_once 'PreviewSite.html';

interface VideoInterface{
    public function getName();
    public function getSource();
    public function getEmbedCode();
}

abstract class Video implements VideoInterface{
    private $name;
    private $source;
    private $embedCode;


    public function __construct($name, $source, $embedCode)
    {
        $this->name = $name;
        $this->source = $source;
        $this->embedCode = $embedCode;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getSource()
    {
        return $this->source;
    }

    public function getEmbedCode()
    {
        return $this->embedCode;
    }




}

class YouTube extends Video {
    public function __construct($name, $embedCode)
    {
        parent::__construct($name, "YouTube", $embedCode);
    }
}

$videos = [
    new YouTube("Video 1", '<iframe width="560" height="315" src="https://www.youtube.com/embed/f3cQEMLnd_k?si=YXjLAcM3hwsxyNo8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'),
    new YouTube("Video 2", '<iframe width="560" height="315" src="https://www.youtube.com/embed/0KjKKiOI4a8?si=0GwTw88MFHE48xuh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'),
    new YouTube("Video 3", '<iframe width="560" height="315" src="https://www.youtube.com/embed/OJxMsypwnqg?si=kyt0bigDLvqmXiOv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'),
    new YouTube("Video 4", '<iframe width="560" height="315" src="https://www.youtube.com/embed/dfI7nJFXaFA?si=Kpj-3ZjleULtFOmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'),
    new YouTube("Video 5", '<iframe width="560" height="315" src="https://www.youtube.com/embed/d58QpQhdE9o?si=aw_dXhK_bG3Rb9Uq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>')
];

foreach ($videos as $video) {
    echo '<div class="video-preview">';
    echo '<h2>' . $video->getName() . '</h2>';
    echo '<p>Source: ' . $video->getSource() . '</p>';
    echo '<div class="embed-container">' . $video->getEmbedCode() . '</div>';
    echo '</div>';
}

class Vimeo extends Video{
    public function __construct($name, $embedCode)
    {
        parent::__construct($name, "Vimeo", $embedCode);
    }
}
$videosVimeo = [
    new Vimeo("Video 1", '<iframe width="560" height="315" src="https://www.youtube.com/embed/f3cQEMLnd_k?si=YXjLAcM3hwsxyNo8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'),
    new Vimeo("Video 2", '<iframe width="560" height="315" src="https://www.youtube.com/embed/0KjKKiOI4a8?si=0GwTw88MFHE48xuh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'),
    new Vimeo("Video 3", '<iframe width="560" height="315" src="https://www.youtube.com/embed/OJxMsypwnqg?si=kyt0bigDLvqmXiOv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'),
    new Vimeo("Video 4", '<iframe width="560" height="315" src="https://www.youtube.com/embed/dfI7nJFXaFA?si=Kpj-3ZjleULtFOmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'),
    new Vimeo("Video 5", '<iframe src="https://player.vimeo.com/video/170554161?h=d6880e319c" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>')
];

foreach ($videosVimeo as $video) {
    echo '<div class="video-preview">';
    echo '<h2>' . $video->getName() . '</h2>';
    echo '<p>Source: ' . $video->getSource() . '</p>';
    echo '<div class="embed-container">' . $video->getEmbedCode() . '</div>';
    echo '</div>';
}

