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

/* wdn/templates_5.3/js-src/modals.babel.js */
class __TwigTemplate_32c487b5857886e1eddbc82dce580472 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/modals.babel.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/modals.babel.js"));

        // line 1
        echo "require (['dcf-modal', 'plugins/body-scroll-lock'], (modalModule, bodyScrollLock) => {
  const modals = document.querySelectorAll('.dcf-modal');
  const unlModal = new modalModule.DCFModal(modals, bodyScrollLock);
  unlModal.initialize();

  // Define custom open and close events
  modals.forEach((modal) => {
    handleModalVideos(modal);
  });

  function handleModalVideos(modal) {
    // Handle any videos in modal
    const videos = modal.getElementsByTagName('video');
    if (videos && videos.length > 0) {
        document.addEventListener('ModalOpenEvent_' + modal.id, function (e) {
          // autoplay any videos set to autoplay
          Array.prototype.forEach.call(videos,(video) => {
            if (video.hasAttribute('data-autoplay')) {
              video.play();
            }
          });
        }, false);

        document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
          // pause and reset all modal videos
          Array.prototype.forEach.call(videos,(video) => {
            video.pause();
            video.load();
          });

          // Show any hidden overlay play buttons
          let playBtns = modal.getElementsByClassName('mejs-overlay-play');
          if (playBtns && playBtns.length > 0) {
            Array.prototype.forEach.call(playBtns, (playBtn) => {
              if (playBtn.style.display === 'none') {
                playBtn.style.display = 'block';
              }
            });
          }
        }, false);
    }

    // Handle any mediahub iframe embed videos in modal
    const iframes = modal.getElementsByTagName('iframe');
    if (iframes && iframes.length > 0) {
      Array.prototype.forEach.call(iframes,(iframe) => {
        const source = iframe.getAttribute('src');
        const allowAttr = iframe.getAttribute('allow');

        if (allowAttr && allowAttr.includes('autoplay')) {
          if (!source.includes('mediahub.unl.edu')) {
            // Remove autoplay from non-mediaHub url if defined onload
            try {
              let url = new URL(iframe.getAttribute('src'));
              if (url.searchParams.has('autoplay')) {
                url.searchParams.delete('autoplay');
                iframe.src = url.toString();
              }
            } catch (e) {
              // do nothing
            }
          }

          document.addEventListener('ModalOpenEvent_' + modal.id, function (e) {
            let currentSource = iframe.getAttribute('src');
            if (currentSource.includes('mediahub.unl.edu')) {
              iframe.contentWindow.postMessage('mh-play-video', 'https://mediahub.unl.edu');
            } else {
              try {
                let url = new URL(currentSource);
                url.searchParams.set('autoplay', '1');
                const newSource = url.toString();
                if (currentSource != newSource) {
                  iframe.src = newSource;
                }
              } catch (e) {
                iframe.src = source;
              }
            }
          }, false);

          document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
            let currentSource = iframe.getAttribute('src');
            if (currentSource.includes('mediahub.unl.edu')) {
              iframe.contentWindow.postMessage('mh-reset-video', 'https://mediahub.unl.edu');
            } else {
              try {
                let url = new URL(currentSource);
                if (url.searchParams.has('autoplay')) {
                  url.searchParams.delete('autoplay');
                  currentSource = url.toString();
                }
                iframe.src = currentSource;
              } catch (e) {
                iframe.src = source;
              }
            }
          }, false);
        } else {  // without allow autoplay
          document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
            if (source.includes('mediahub.unl.edu')) {
              iframe.contentWindow.postMessage('mh-pause-video', 'https://mediahub.unl.edu');
            } else {
              iframe.src = source;
            }
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
        return "wdn/templates_5.3/js-src/modals.babel.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("require (['dcf-modal', 'plugins/body-scroll-lock'], (modalModule, bodyScrollLock) => {
  const modals = document.querySelectorAll('.dcf-modal');
  const unlModal = new modalModule.DCFModal(modals, bodyScrollLock);
  unlModal.initialize();

  // Define custom open and close events
  modals.forEach((modal) => {
    handleModalVideos(modal);
  });

  function handleModalVideos(modal) {
    // Handle any videos in modal
    const videos = modal.getElementsByTagName('video');
    if (videos && videos.length > 0) {
        document.addEventListener('ModalOpenEvent_' + modal.id, function (e) {
          // autoplay any videos set to autoplay
          Array.prototype.forEach.call(videos,(video) => {
            if (video.hasAttribute('data-autoplay')) {
              video.play();
            }
          });
        }, false);

        document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
          // pause and reset all modal videos
          Array.prototype.forEach.call(videos,(video) => {
            video.pause();
            video.load();
          });

          // Show any hidden overlay play buttons
          let playBtns = modal.getElementsByClassName('mejs-overlay-play');
          if (playBtns && playBtns.length > 0) {
            Array.prototype.forEach.call(playBtns, (playBtn) => {
              if (playBtn.style.display === 'none') {
                playBtn.style.display = 'block';
              }
            });
          }
        }, false);
    }

    // Handle any mediahub iframe embed videos in modal
    const iframes = modal.getElementsByTagName('iframe');
    if (iframes && iframes.length > 0) {
      Array.prototype.forEach.call(iframes,(iframe) => {
        const source = iframe.getAttribute('src');
        const allowAttr = iframe.getAttribute('allow');

        if (allowAttr && allowAttr.includes('autoplay')) {
          if (!source.includes('mediahub.unl.edu')) {
            // Remove autoplay from non-mediaHub url if defined onload
            try {
              let url = new URL(iframe.getAttribute('src'));
              if (url.searchParams.has('autoplay')) {
                url.searchParams.delete('autoplay');
                iframe.src = url.toString();
              }
            } catch (e) {
              // do nothing
            }
          }

          document.addEventListener('ModalOpenEvent_' + modal.id, function (e) {
            let currentSource = iframe.getAttribute('src');
            if (currentSource.includes('mediahub.unl.edu')) {
              iframe.contentWindow.postMessage('mh-play-video', 'https://mediahub.unl.edu');
            } else {
              try {
                let url = new URL(currentSource);
                url.searchParams.set('autoplay', '1');
                const newSource = url.toString();
                if (currentSource != newSource) {
                  iframe.src = newSource;
                }
              } catch (e) {
                iframe.src = source;
              }
            }
          }, false);

          document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
            let currentSource = iframe.getAttribute('src');
            if (currentSource.includes('mediahub.unl.edu')) {
              iframe.contentWindow.postMessage('mh-reset-video', 'https://mediahub.unl.edu');
            } else {
              try {
                let url = new URL(currentSource);
                if (url.searchParams.has('autoplay')) {
                  url.searchParams.delete('autoplay');
                  currentSource = url.toString();
                }
                iframe.src = currentSource;
              } catch (e) {
                iframe.src = source;
              }
            }
          }, false);
        } else {  // without allow autoplay
          document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
            if (source.includes('mediahub.unl.edu')) {
              iframe.contentWindow.postMessage('mh-pause-video', 'https://mediahub.unl.edu');
            } else {
              iframe.src = source;
            }
          }, false);
        }
      });
    }
  }
});
", "wdn/templates_5.3/js-src/modals.babel.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js-src/modals.babel.js");
    }
}
