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

/* wdn/templates_5.2/js/modals.js */
class __TwigTemplate_74e0e7331cd1677f05ddf826c2a4dc50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/modals.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/modals.js"));

        // line 1
        echo "'use strict';

require(['dcf-utility', 'dcf-modal', 'plugins/body-scroll-lock'], function (Utility, Modal, bodyScrollLock) {
  var modals = document.querySelectorAll('.dcf-modal');
  var unlModal = new DCFModal(modals, bodyScrollLock);
  unlModal.initialize();

  // Define custom open and close events
  modals.forEach(function (modal) {
    handleModalVideos(modal);
  });

  function handleModalVideos(modal) {
    // Handle any videos in modal
    var videos = modal.getElementsByTagName('video');
    if (videos && videos.length > 0) {
      document.addEventListener('ModalOpenEvent_' + modal.id, function (e) {
        // autoplay any videos set to autoplay
        Array.prototype.forEach.call(videos, function (video) {
          if (video.hasAttribute('data-autoplay')) {
            video.play();
          }
        });
      }, false);

      document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
        // pause and reset all modal videos
        Array.prototype.forEach.call(videos, function (video) {
          video.pause();
          video.load();
        });

        // Show any hidden overlay play buttons
        var playBtns = modal.getElementsByClassName('mejs-overlay-play');
        if (playBtns && playBtns.length > 0) {
          Array.prototype.forEach.call(playBtns, function (playBtn) {
            if (playBtn.style.display === 'none') {
              playBtn.style.display = 'block';
            }
          });
        }
      }, false);
    }

    // Handle any mediahub iframe embed videos in modal
    var iframes = modal.getElementsByTagName('iframe');
    if (iframes && iframes.length > 0) {
      Array.prototype.forEach.call(iframes, function (iframe) {
        var allowAttr = iframe.getAttribute('allow');
        if (allowAttr && allowAttr.includes('autoplay')) {
          document.addEventListener('ModalOpenEvent_' + modal.id, function (e) {
            iframe.contentWindow.postMessage('mh-play-video', 'https://mediahub.unl.edu');
          }, false);

          document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
            iframe.contentWindow.postMessage('mh-reset-video', 'https://mediahub.unl.edu');
          }, false);
        } else {
          document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
            iframe.contentWindow.postMessage('mh-pause-video', 'https://mediahub.unl.edu');
          }, false);
        }
      });
    }
  }
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/modals.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("'use strict';

require(['dcf-utility', 'dcf-modal', 'plugins/body-scroll-lock'], function (Utility, Modal, bodyScrollLock) {
  var modals = document.querySelectorAll('.dcf-modal');
  var unlModal = new DCFModal(modals, bodyScrollLock);
  unlModal.initialize();

  // Define custom open and close events
  modals.forEach(function (modal) {
    handleModalVideos(modal);
  });

  function handleModalVideos(modal) {
    // Handle any videos in modal
    var videos = modal.getElementsByTagName('video');
    if (videos && videos.length > 0) {
      document.addEventListener('ModalOpenEvent_' + modal.id, function (e) {
        // autoplay any videos set to autoplay
        Array.prototype.forEach.call(videos, function (video) {
          if (video.hasAttribute('data-autoplay')) {
            video.play();
          }
        });
      }, false);

      document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
        // pause and reset all modal videos
        Array.prototype.forEach.call(videos, function (video) {
          video.pause();
          video.load();
        });

        // Show any hidden overlay play buttons
        var playBtns = modal.getElementsByClassName('mejs-overlay-play');
        if (playBtns && playBtns.length > 0) {
          Array.prototype.forEach.call(playBtns, function (playBtn) {
            if (playBtn.style.display === 'none') {
              playBtn.style.display = 'block';
            }
          });
        }
      }, false);
    }

    // Handle any mediahub iframe embed videos in modal
    var iframes = modal.getElementsByTagName('iframe');
    if (iframes && iframes.length > 0) {
      Array.prototype.forEach.call(iframes, function (iframe) {
        var allowAttr = iframe.getAttribute('allow');
        if (allowAttr && allowAttr.includes('autoplay')) {
          document.addEventListener('ModalOpenEvent_' + modal.id, function (e) {
            iframe.contentWindow.postMessage('mh-play-video', 'https://mediahub.unl.edu');
          }, false);

          document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
            iframe.contentWindow.postMessage('mh-reset-video', 'https://mediahub.unl.edu');
          }, false);
        } else {
          document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
            iframe.contentWindow.postMessage('mh-pause-video', 'https://mediahub.unl.edu');
          }, false);
        }
      });
    }
  }
});
", "wdn/templates_5.2/js/modals.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/modals.js");
    }
}
