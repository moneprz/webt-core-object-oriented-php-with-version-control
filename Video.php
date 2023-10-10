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
        $this->name = $name;<?php

//require_once 'simple_html_dom.php';

$html = file_get_contents('PreviewSite.html');

$dom = new DOMDocument();
$dom->loadHTML($html);

$xpath = new DOMXPath($dom);
$videoElements = $xpath->query('//div[@class="video"]');

$videos = [];

interface VideoInterface
{
    public function getName();

    public function getSource();

    public function getEmbedCode();
}

abstract class Video implements VideoInterface
{
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

class YouTube extends Video
{
    public function __construct($name, $embedCode)
    {
        parent::__construct($name, "YouTube", $embedCode);
    }
}

foreach ($videoElements as $videoElement) {
    $name = $videoElement->getElementsByTagName('h3')->item(0)->textContent;
    $source = "YouTube";
    $embedCodeNode = $videoElement->getElementsByTagName('iframe')->item(0)->getAttribute('src');

    $embedCode = $embedCodeNode ? $embedCodeNode->ownerDocument->saveHTML() : '';

    $videoData = [
        'name' => $name,
        'source' => $source,
        'embedCode' => $embedCode
    ];

    $videos[] = $videoData;

    foreach ($videos as $video) {
        if ($video['source'] === 'YouTube') {
            echo '<div class="video-preview">';
            echo '<h2>' . $video['name'] . '</h2>';
            echo '<p>Source: ' . $video['source'] . '</p>';
            echo '<div class="embed-container">' . $video['embedCode'] . '</div>';
            echo '</div>';
        }
    }

    class Vimeo extends Video
    {
        public function __construct($name, $embedCode)
        {
            parent::__construct($name, "Vimeo", $embedCode);
        }
    }

    /*
    $videosVimeo = [
        new Vimeo("Video 1", '<iframe src="https://player.vimeo.com/video/332578678?h=271134a240&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>'),
        new Vimeo("Video 2", '<iframe src="https://player.vimeo.com/video/214989553?h=5867287d57" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>'),
        new Vimeo("Video 3", '<iframe src="https://player.vimeo.com/video/89610339?h=a145b904b3" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>'),
        new Vimeo("Video 4", '<iframe src="https://player.vimeo.com/video/6459552?h=973d411cfb" width="640" height="480" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>'),
        new Vimeo("Video 5", '<iframe src="https://player.vimeo.com/video/170554161?h=d6880e319c" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>')
    ];

    foreach ($videosVimeo as $video) {
        echo '<div class="video-preview">';
        echo '<h2>' . $video->getName() . '</h2>';
        echo '<p>Source: ' . $video->getSource() . '</p>';
        echo '<div class="embed-container">' . $video->getEmbedCode() . '</div>';
        echo '</div>';
    }

    $homepage = file_get_contents('PreviewSite.html');
    echo "Video 1" . $homepage;
    */
}

//$videos = [];
/* $videos = [
    new YouTube("Video 1", '<iframe width="560" height="315" src="https://www.youtube.com/embed/f3cQEMLnd_k?si=YXjLAcM3hwsxyNo8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'),
    new YouTube("Video 2", '<iframe width="560" height="315" src="https://www.youtube.com/embed/0KjKKiOI4a8?si=0GwTw88MFHE48xuh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'),
    new YouTube("Video 3", '<iframe width="560" height="315" src="https://www.youtube.com/embed/OJxMsypwnqg?si=kyt0bigDLvqmXiOv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'),
    new YouTube("Video 4", '<iframe width="560" height="315" src="https://www.youtube.com/embed/dfI7nJFXaFA?si=Kpj-3ZjleULtFOmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'),
    new YouTube("Video 5", '<iframe width="560" height="315" src="https://www.youtube.com/embed/d58QpQhdE9o?si=aw_dXhK_bG3Rb9Uq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>')
];
*/

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

