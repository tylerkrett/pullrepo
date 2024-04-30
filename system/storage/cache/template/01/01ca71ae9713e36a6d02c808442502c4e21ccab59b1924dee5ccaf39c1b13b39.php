<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/ishivideoblock/catalog/view/template/module/ishivideoblock.twig */
class __TwigTemplate_59fb19945876be1250817430d5cf796167c611b818d935e459bae80219e18a5f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishivideoblock\" data-section-type=\"video-section\" data-mobile-natural=\"false\"> 
 <div class=\"video-content\">
    ";
        // line 3
        if ((($context["videolink"] ?? null) != ($context["blank"] ?? null))) {
            // line 4
            echo "      <div id=\"YouTubeVideo-";
            echo ($context["ishivideoblock"] ?? null);
            echo "\" class=\"video-div\" data-type=\"youtube\" data-video-id=\"";
            echo ($context["video_id"] ?? null);
            echo "\"></div>
    ";
        }
        // line 6
        echo "    <div class=\"video-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 ";
        echo ($context["textposition"] ?? null);
        echo " d-md-block d-none\">
      <div class=\"title\">";
        // line 7
        echo ($context["heading"] ?? null);
        echo "</div>
      <div class=\"sub-title\">";
        // line 8
        echo ($context["sub_title"] ?? null);
        echo "</div>       
      <a href=\"";
        // line 9
        echo ($context["button_link"] ?? null);
        echo "\" class=\"btn-primary\">
        ";
        // line 10
        echo ($context["button"] ?? null);
        echo "
      </a>
    </div>
  </div> 
  <div class=\"video-list col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12  d-block d-md-none\">
      <div class=\"title\">";
        // line 15
        echo ($context["heading"] ?? null);
        echo "</div>
      <div class=\"sub-title\">";
        // line 16
        echo ($context["sub_title"] ?? null);
        echo "</div>       
      <a href=\"";
        // line 17
        echo ($context["button_link"] ?? null);
        echo "\" class=\"btn-primary\">
        ";
        // line 18
        echo ($context["button"] ?? null);
        echo "
      </a>
  </div>
</section>
<script type=\"text/javascript\">
      var tag = document.createElement('script');
        tag.src = \"https://www.youtube.com/iframe_api\";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        var player;
        function onYouTubeIframeAPIReady() {
        player = new YT.Player('YouTubeVideo-";
        // line 29
        echo ($context["ishivideoblock"] ?? null);
        echo "', {
          width: '100%',
          videoId: '";
        // line 31
        echo ($context["video_id"] ?? null);
        echo "',
          host: 'http://www.youtube-nocookie.com',//privacy mode
          playerVars: { 'controls': 0, //hide controls
                       'autohide': 1,
                       'autoplay': 1, // Auto-play the video on load
                       'loop': 1, // Run the video in a loop
                        'fs': 0, // Hide the full screen button
                       'cc_load_policy': 0, // Hide closed captions
                       'iv_load_policy': 3, // Hide the Video Annotations   
                       'modestbranding': 1, //hide brand
                       'showinfo': 0, //hide video info
                       'mute' : 1 //video is muted
                      },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
        }
        function onPlayerReady(event) {
          goToStart(event);
        }
        function onPlayerStateChange(event) {
          var tm = player.getCurrentTime();
          if (event.data == YT.PlayerState.ENDED) {
            goToStart(event);
          }
        }
        function goToStart(event) {
          event.target.seekTo(0,1);
          player.playVideo();
        }
</script>";
    }

    public function getTemplateName()
    {
        return "extension/ishivideoblock/catalog/view/template/module/ishivideoblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  104 => 29,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  53 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishivideoblock/catalog/view/template/module/ishivideoblock.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\ishivideoblock\\catalog\\view\\template\\module\\ishivideoblock.twig");
    }
}
