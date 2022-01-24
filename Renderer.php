<?php

// interface RendererInterface{
//     public function render(string $text):string;
// }

abstract class Renderer{
    protected string $text;

    public function __construct(string $text){

        $this->text = $text;
    }

    public abstract function render():string;

    public function text():string{
        return $this->text;
    }
}
class HtmlRenderer extends Renderer{
        public function render():string{
        return '<html><head></head><body><div><h2>==>'.$this->text.'<==</h2></div></body></html>';
        }
    }
    
class JsonRenderer extends Renderer{
        public function render():string{
            return json_encode($this->text);
        }
    }

class XmlRenderer extends Renderer{
        public function render():string{
            return "<xml><tekst>{$this->text}</tekst></xml>";
        }
    }

// class HtmlRenderer implements RendererInterface{
//     public function render(string $text):string{
//     return '<html><head></head><body><div>'.$text.'</div></body></html>';
//     }
// }

// class JsonRenderer implements RendererInterface{
//     public function render(string $text):string{
//         return json_encode($text);
//     }
// }

// $htmlRenderer = new HtmlRenderer();

// $html1 = $htmlRenderer->render('Mike');

// $html2 = $htmlRenderer->render('Ockburns');

// var_dump($html1);
// var_dump($html2);

$html = new HtmlRenderer('Ben Dover');

echo $html->render();

$html = new XmlRenderer('Ben Dover');

echo $html->render();




?>