<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/gitam_theme/templates/page--front.html.twig */
class __TwigTemplate_d1acf4a5b289a552752ba54eac168233 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "
<!-- ░░ AICTE COMPLIANCE TOP BAR ░░ -->
  <div class=\"aicte-bar\" role=\"navigation\" aria-label=\"AICTE compliance and quick links\">
    <div class=\"aicte-links-wrap\">
      <ul class=\"aicte-links\" aria-label=\"Statutory compliance links\">
        <!-- Set 1 -->
        <li>
          <a href=\"https://iqac.gitam.edu/mandatory-disclosure\" target=\"_blank\" rel=\"noopener\">Mandatory Disclosures</a>
        </li>
        <li>
          <a href=\"https://www.gitam.edu/about/accrediation\" target=\"_blank\" rel=\"noopener\">Accreditation &amp;
            Ranking</a>
        </li>
        <li>
          <a href=\"https://iqac.gitam.edu/\" target=\"_blank\" rel=\"noopener\">IQAC</a>
        </li>
        <li>
          <a href=\"https://iqac.gitam.edu/nirf\" target=\"_blank\" rel=\"noopener\">NIRF</a>
        </li>
        <li>
          <a href=\"https://www.gitam.edu/academics/evaluation/grievance-redressal\" target=\"_blank\"
            rel=\"noopener\">Grievance Redressal</a>
        </li>
        <li>
          <a href=\"https://womenempowerment.gitam.edu/\" target=\"_blank\" rel=\"noopener\">Women Empowerment Cell</a>
        </li>
        <li>
          <a href=\"https://www.gitam.edu/anti-caste-based-discrimination-policy\">Anti-Caste Discrimination</a>
        </li>
      </ul>
    </div>
    <div class=\"aicte-right\">
      <div class=\"font-resize font-resize--bar\" role=\"group\" aria-label=\"Font size controls\">

        <button type=\"button\" data-font-action=\"decrease\" aria-label=\"Decrease font size\">A−</button>

        <button type=\"button\" data-font-action=\"reset\" aria-label=\"Reset font size\">A</button>

        <button type=\"button\" data-font-action=\"increase\" aria-label=\"Increase font size\">A+</button>

      </div>

      <span class=\"sep\" aria-hidden=\"true\">|</span>
      <a href=\"https://www.gitam.edu/sitemap\">Sitemap</a>
      <a href=\"https://www.gitam.edu/aspiring-students\" target=\"_blank\">Aspiring Students</a>
      <a href=\"https://careers.gitam.edu/\" target=\"_blank\" rel=\"noopener\">Careers</a>
    </div>
  </div>

  <!-- ░░ MAIN NAV ░░ -->
  <nav class=\"main-nav\" id=\"mainNav\" aria-label=\"Main navigation\">
    <!-- <a
        class=\"nav-brand\"
        href=\"#sec-hero\"
        aria-label=\"GITAM University Home\"
      >
        <img
          class=\"nav-brand-logo\"
          src=\"images/gitam-logo-basic-horizontal-reverse.png\"
          alt=\"GITAM University\"
        />
      </a> -->
    <a class=\"nav-brand\" href=\"#sec-hero\" aria-label=\"GITAM home\">


      <svg id=\"Layer_1\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 148.68 63.68\" fill=\"#f3e5cb\"
        width=\"120\">

        <g>
          <path class=\"cls-1\"
            d=\"M82.3,33.44h3.91v2.48c-1.08.51-2.4.76-3.95.76-1.65,0-2.92-.41-3.81-1.24-.88-.83-1.33-2.02-1.33-3.59s.41-2.7,1.22-3.57c.81-.86,1.99-1.3,3.53-1.3,1.02,0,1.84.18,2.47.53.63.36,1.08.91,1.36,1.66l2.82-.36c-.38-1.26-1.12-2.26-2.21-3.01-1.09-.75-2.55-1.13-4.37-1.13-1.53,0-2.87.29-4.03.86-1.16.57-2.07,1.4-2.72,2.47-.65,1.07-.97,2.37-.97,3.88s.32,2.76.96,3.81c.64,1.06,1.56,1.87,2.77,2.43,1.2.57,2.64.85,4.3.85,1.25,0,2.44-.16,3.59-.49,1.14-.32,2.14-.78,2.98-1.38v-5.84h-6.52v2.16Z\">
          </path>
          <polygon class=\"cls-1\"
            points=\"110.83 25.03 97.23 25.03 97.23 27.4 102.63 27.4 102.63 38.65 105.45 38.65 105.45 27.4 110.83 27.4 110.83 25.03\">
          </polygon>
          <path class=\"cls-1\"
            d=\"M141.08,25.03l-5,10.62-5.02-10.62h-4.32v.62c.61.19,1.02.75,1.02,1.38v11.61h2.61v-9.65l4.54,9.65h2.19l4.54-9.75v9.75h2.65v-13.62h-3.22Z\">
          </path>
          <path class=\"cls-1\" d=\"M92.06,25.03h-1.32v.62l.17.05c.68.21,1.15.84,1.15,1.56v11.39h2.82v-13.62h-2.82Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M119.09,25.03h-3.15l-6.29,13.62h2.92l1-2.32c2.58-1.54,5.82-1.86,6.98-1.93l1.84,4.24h3.01l-6.31-13.62ZM114.93,33.19l.18-.41h0l2.37-5.34,2.09,4.75c-1.15.11-2.87.38-4.65,1Z\">
          </path>
        </g>
        <path class=\"cls-1\"
          d=\"M62.52,29.04c-.89,1.05-2.27,2.51-4.44,4.45-.01.01-.02.02-.04.04-.03.03-.06.06-.1.09-1.49,1.32-2.99,2.47-4.38,3.43,0,0,0,0,0,0-.23.15-.46.29-.7.43,0,0,0,0,0,0-.27.09-.72.11-.84-.65,0-.04-.01-.08-.02-.12-.08-.83.24-1.4.49-1.7,0,0,0,0,0,0,.08-.08.15-.15.23-.23,0,0,0,0,0,0,3.53-3.61,6.7-7.38,8.15-10.5,0,0,0-.01,0-.02,0,0,0,0,0,0,.9-1.68,1.12-2.93,1.04-3.86t0,0h0c.02-.17.18-.21.27.01,0,0,0,0,0,.01.24.62.45,1.23.64,1.81.29.89.52,1.74.7,2.45.39,1.54.01,3.16-1.01,4.38ZM64.41,32.13c-.31,1.61-4.65,6.91-11.69,10.19-.46.21-.78.64-.87,1.14-.04.23-.08.47-.13.7-.08.39.29.72.67.59,3.46-1.18,6.78-3.16,9.48-5.18.16-.12.37-.28.59-.46,1.24-.99,2.03-2.45,2.13-4.04.02-.3.04-.61.05-.91,0-.27.06-1.47.06-1.92,0-.36-.24-.38-.29-.11ZM61.84,43.06c-1.64,2.43-6.72,5.27-11.56,6.35-.29.06-.52.25-.66.5,0,0,0,.02,0,.02-.39.72.22,1.57,1.02,1.45,2.4-.37,4.54-1.19,6.48-2.12,1.67-.79,3.07-2.08,3.94-3.71.29-.53.85-1.7,1.09-2.26.15-.36-.13-.5-.31-.23ZM57.42,12.3c-.94-1.1-1.95-2.12-3.04-3.07.34,3.96-1,11.81-5.04,18.01-.21.33-.7.3-.89-.04-.15-.27-.3-.54-.46-.8-.09-.14-.1-.32-.03-.47,2.66-6.01,3.03-12.92,2.22-17.76-.25-1.5-1.24-2.77-2.61-3.43-1.18-.56-2.39-1.06-3.65-1.47,1.83,3.85,3.5,11.77,1.9,19.01-.09.39-.58.53-.87.25-.19-.19-.39-.38-.59-.56-.12-.11-.17-.25-.17-.41.35-6.53-1.82-13.13-4.39-17.47-.79-1.35-2.21-2.19-3.77-2.27-.48-.02-.97-.04-1.46-.04-.76,0-1.52.04-2.28.1,3.18,3.12,7.41,9.58,8.59,16.59.07.43-.37.75-.75.55-.24-.12-.48-.24-.73-.36-.13-.06-.22-.16-.27-.29-2.04-5.92-6.27-11.01-10.19-14.12-1.25-1-2.93-1.27-4.44-.74-1.13.4-2.23.86-3.29,1.37,4.05,1.8,9.81,5.85,13.4,11.37.25.38-.07.87-.52.8-.32-.05-.64-.09-.97-.13-.12-.01-.23-.07-.31-.16-3.9-4.2-9.16-7.04-13.67-8.47-1.55-.49-3.24-.17-4.48.89-.89.77-1.74,1.58-2.54,2.45,4.14.23,10.04,1.59,15.01,4.63.41.25.29.86-.18.96-.44.09-.87.2-1.3.32-.1.03-.21.02-.31-.02-4.63-1.8-9.69-2.31-13.87-2.03-1.62.11-3.08,1.02-3.84,2.45-.56,1.04-1.05,2.11-1.48,3.21,3.42-1.13,8.21-1.95,13.05-1.57.57.05.59.64,0,1.06-.52.37-.62.48-1.12.94-.14.12-.24.25-.4.27-3.91.43-7.66,1.63-10.72,3.1-1.46.69-2.46,2.09-2.64,3.69-.13,1.15-.19,2.32-.18,3.51h0c2.18-1.83,5.17-3.79,8.56-5.24.45-.19.76-.05.59.49-.15.47-.18.57-.33,1.07-.03.1-.1.19-.19.25-2.32,1.58-5.03,4.4-6.56,6.42-.95,1.25-1.45,3.08-1.04,4.59.31,1.16.7,2.29,1.14,3.38,1-1.89,2.37-4,4.08-6.04.3-.36,1.04-.15.92.3-.63,2.41-1.83,5.85-2,7.65-.15,1.55-.18,3.49.75,4.74.73.97,1.51,1.89,2.35,2.76.15-1.66.47-3.52.98-5.46.12-.48.82-.44.89.05.39,2.75.88,5.44,4.37,9.25.63.68,5.15,4.21,11.52,5.23h0s.04,0,.07.01c1.19.19,2.45.29,3.75.27-.16,0-.32-.01-.48-.02.27,0,.53.01.79.01h.04c.38,0,.75,0,1.12-.02.17,0,.33-.02.5-.02.09,0,.16,0,.23-.01,6.61-.45,12.2-3.43,15.75-5.88h0s.06-.04.08-.06h0c2.45-1.71,3.91-3.15,4.02-3.27-1.76,1.18-6.92,3.3-10.5,3.94-1.31.24-2.55.41-3.71.52h0c-14.51,1.33-17.92-7.06-18.69-11.79,0-.02,0-.04,0-.06-.17-1.51-.25-3.17-.19-4.96.01-.44.03-.89.05-1.34.03-.71.05-1.43.07-2.15,0-.27,0-.54,0-.81,0-.1,0-.19,0-.29-.02-1.1-.09-2.09-.18-2.97,0,0,0-.02,0-.02-.36-3.37-1.2-5.24-2.01-6.28-.05-.06-.02-.15.05-.18.46-.2.89-.35,1.31-.45,0,0,0,0,0,0,.17-.04.33-.08.49-.1,0,0,.01,0,.02,0,.16-.02.31-.04.47-.06h.02c1.62-.12,2.97.54,4.39,1.81,2.45,2.21,3.04,6.3,4.98,9.21.45.67.96,1.26,1.51,1.76,1.39,1.01,3.02,1.29,4.52,1.22,4.21-.21,8.26-3.88,11.57-8.2.02-.07.06-.13.12-.19.05-.05.1-.11.15-.16,4.23-5.62,7.19-12.19,7.59-13.59h0c.12-.42.22-.85.31-1.25.3-1.39-.05-2.86-.97-3.93Z\">
        </path>
        <g>
          <path class=\"cls-1\"
            d=\"M75.57,46.42s-.04-.02-.04-.04l.02-1.68-.02-1.68s.02-.04.04-.04h1.22c.99,0,1.83.53,1.83,1.75s-.85,1.7-1.82,1.7h-1.23ZM76.29,45.86h.55c.56,0,1.01-.33,1.01-1.15s-.44-1.19-1.03-1.19h-.53s-.02.58-.02,1.16.02,1.18.02,1.19Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M79.31,46.42s-.04-.02-.04-.04l.02-1.68-.02-1.68s.02-.04.04-.04h2.33s.04.02.04.04v.47s-.02.04-.04.04h-1.61l-.02.8h1.49s.04.02.04.04v.47s-.02.04-.04.04h-1.49l.02.99h1.65s.04.02.04.04v.47s-.02.04-.04.04h-2.37Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M82.41,46.42s-.04-.02-.04-.04l.02-1.68-.02-1.68s.02-.04.04-.04h2.33s.04.02.04.04v.47s-.02.04-.04.04h-1.61l-.02.8h1.49s.04.02.04.04v.47s-.02.04-.04.04h-1.49l.02.99h1.65s.04.02.04.04v.47s-.02.04-.04.04h-2.37Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M86.15,44.96v1.42s-.02.04-.04.04h-.59s-.04-.02-.04-.04l.02-1.68-.02-1.68s.02-.04.04-.04h.91s.05.02.06.04l.92,2.49.87-2.49s.03-.04.06-.04h.85s.04.02.04.04l-.02,1.68.02,1.68s-.02.04-.04.04h-.67s-.04-.02-.04-.04v-1.42l.02-.82v-.16s-.84,2.4-.84,2.4c0,.02-.03.04-.06.04h-.5s-.05-.02-.06-.04l-.92-2.49v.26s.03.8.03.8Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M90.01,46.42s-.04-.02-.04-.04l.02-1.68-.02-1.68s.02-.04.04-.04h2.33s.04.02.04.04v.47s-.02.04-.04.04h-1.61l-.02.8h1.49s.04.02.04.04v.47s-.02.04-.04.04h-1.49l.02.99h1.65s.04.02.04.04v.47s-.02.04-.04.04h-2.37Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M93.11,46.42s-.04-.02-.04-.04l.02-1.68-.02-1.68s.02-.04.04-.04h1.22c.99,0,1.83.53,1.83,1.75s-.85,1.7-1.82,1.7h-1.23ZM93.83,45.86h.55c.56,0,1.01-.33,1.01-1.15s-.44-1.19-1.03-1.19h-.53s-.02.58-.02,1.16.02,1.18.02,1.19Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M98.98,46.42s-.04-.02-.04-.04l.03-1.68-.02-1.17h-.96s-.04-.02-.04-.04v-.47s.02-.04.04-.04h2.68s.04.02.04.04v.47s-.02.04-.04.04h-.95l-.02,1.17.03,1.68s-.02.04-.04.04h-.7Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M102.79,46.5c-1.06,0-1.74-.74-1.74-1.79s.68-1.81,1.74-1.81,1.75.7,1.75,1.81c0,1.06-.69,1.79-1.75,1.79ZM102.79,45.92c.62,0,.97-.46.97-1.21s-.34-1.23-.97-1.23-.97.46-.97,1.23.35,1.21.97,1.21Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M108.1,46.42h-1.51s-.04-.02-.04-.04l.02-1.68-.02-1.68s.02-.04.04-.04h1.49c.71,0,1.23.26,1.23.85,0,.42-.22.66-.59.77.46.11.69.41.69.79,0,.75-.64,1.05-1.3,1.05ZM107.29,44.36h.8c.29,0,.47-.15.47-.43,0-.31-.21-.44-.47-.44h-.78l-.02.87ZM107.3,45.9h.78c.31,0,.55-.12.55-.52,0-.37-.25-.49-.55-.49h-.8l.02,1.02Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M110.08,46.42s-.04-.02-.04-.04l.02-1.68-.02-1.68s.02-.04.04-.04h2.33s.04.02.04.04v.47s-.02.04-.04.04h-1.61l-.02.8h1.49s.04.02.04.04v.47s-.02.04-.04.04h-1.49l.02.99h1.65s.04.02.04.04v.47s-.02.04-.04.04h-2.37Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M115.93,46.5c-.92,0-1.4-.48-1.4-1.36v-.94s-.01-1.19-.01-1.19c0-.02.02-.04.04-.04h.7s.04.02.04.04v1.17s-.01.95-.01.95c0,.49.2.77.65.77.48,0,.7-.27.7-.77v-2.12s0-.04.03-.04h.62s.04.02.04.04v1.19s-.01.94-.01.94c0,.88-.46,1.36-1.38,1.36Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M118.73,44.9v1.48s-.02.04-.04.04h-.62s-.04-.02-.04-.04l.02-1.68-.02-1.68s.02-.04.04-.04h.82s.05.01.06.04l1.39,2.43-.03-.78v-1.65s.02-.04.04-.04h.62s.04.02.04.04l-.02,1.68.02,1.68s-.02.04-.04.04h-.85s-.05-.01-.06-.04l-1.36-2.42v.13s.03.8.03.8Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M121.82,46.42s-.04-.02-.04-.04l.02-1.68-.02-1.68s.02-.04.04-.04h.67s.04.02.04.04l-.02,1.68.02,1.68s-.02.04-.04.04h-.67Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M125.22,46.38s-.03.04-.06.04h-.89s-.05-.02-.06-.04l-1.11-3.37s0-.04.03-.04h.75s.05.02.06.04l.82,2.76.8-2.76s.03-.04.06-.04h.65s.04.02.03.04l-1.08,3.37Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M126.89,46.42s-.04-.02-.04-.04l.02-1.68-.02-1.68s.02-.04.04-.04h2.33s.04.02.04.04v.47s-.02.04-.04.04h-1.61l-.02.8h1.49s.04.02.04.04v.47s-.02.04-.04.04h-1.49l.02.99h1.65s.04.02.04.04v.47s-.02.04-.04.04h-2.37Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M131.53,45.65l-.34-.51h-.49v1.24s0,.04-.03.04h-.68s-.04-.02-.04-.04l.02-1.68-.02-1.68s.02-.04.04-.04h1.4c.86,0,1.36.37,1.36,1.09,0,.51-.28.86-.77,1.01l.86,1.32s0,.04-.02.04h-.78s-.05-.01-.07-.04l-.44-.73ZM131.42,43.51h-.72v1.08s.74,0,.74,0c.32,0,.59-.15.59-.52s-.22-.55-.61-.55Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M134.85,46.5c-.91,0-1.53-.38-1.57-1.2,0-.02.02-.04.04-.04h.7s.04.02.05.04c.05.39.22.64.79.64.45,0,.7-.13.7-.46,0-.78-2.21-.16-2.21-1.54,0-.65.5-1.05,1.39-1.05.81,0,1.37.31,1.47,1.05,0,.02-.01.04-.04.04h-.7s-.04-.02-.05-.04c-.04-.31-.29-.48-.71-.48-.36,0-.61.12-.61.41,0,.74,2.22.14,2.22,1.51,0,.73-.56,1.13-1.47,1.13Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M137.01,46.42s-.04-.02-.04-.04l.02-1.68-.02-1.68s.02-.04.04-.04h.67s.04.02.04.04l-.02,1.68.02,1.68s-.02.04-.04.04h-.67Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M139.39,46.42s-.04-.02-.04-.04l.03-1.68-.02-1.17h-.96s-.04-.02-.04-.04v-.47s.02-.04.04-.04h2.68s.04.02.04.04v.47s-.02.04-.04.04h-.95l-.02,1.17.03,1.68s-.02.04-.04.04h-.7Z\">
          </path>
          <path class=\"cls-1\"
            d=\"M143.34,46.38s-.02.04-.04.04h-.68s-.04-.02-.04-.04v-1.1s-1.15-2.28-1.15-2.28c0-.02,0-.04.02-.04h.77s.05.01.06.04l.7,1.59.72-1.59s.04-.04.06-.04h.7s.03.02.02.04l-1.17,2.28v1.1Z\">
          </path>
        </g>
      </svg>
    </a>
    <ul class=\"nav-links\" role=\"menubar\">
      <!-- WHY GITAM -->
      <li class=\"nav-item has-mega\" role=\"none\">
        <a href=\"#\" class=\"nav-toggle\" role=\"menuitem\" aria-haspopup=\"true\" aria-expanded=\"false\">Why GITAM
          <svg class=\"nav-caret\" viewBox=\"0 0 12 12\" aria-hidden=\"true\">
            <path d=\"M2.5 4.5L6 8l3.5-3.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
          </svg>
        </a>
        <div class=\"mega\" role=\"menu\" aria-label=\"Why GITAM\">
          <div class=\"mega-body\">
            <div class=\"mega-wide-inner\">
              <div class=\"mega-feature\">
                <span class=\"mf-eyebrow\">Why GITAM</span>
                <span class=\"mf-title\">What sets us apart</span>
                <span class=\"mf-desc\">NAAC A++ accredited, globally ranked, with 40+ years of academic
                  excellence.</span>
                <a class=\"mf-cta\" href=\"https://www.gitam.edu/why-gitam\" role=\"menuitem\">Discover GITAM</a>
              </div>
              <div class=\"mega-disc\">
                <div class=\"mega-grid mega-cols-2\">
                  <a href=\"https://www.gitam.edu/rankings-accreditation\" role=\"menuitem\"><span class=\"m-name\">Rankings
                      &amp; Accreditation</span><span class=\"m-sub\">NAAC A++, QS, THE &amp; more</span></a>
                  <a href=\"https://www.gitam.edu/global-partnerships\" role=\"menuitem\"><span class=\"m-name\">Global
                      Partnerships</span><span class=\"m-sub\">International collaborations</span></a>
                  <a href=\"#sec-research\" role=\"menuitem\"><span class=\"m-name\">Research &amp; Innovation</span><span
                      class=\"m-sub\">Centres, patents &amp; publications</span></a>
                  <a href=\"https://www.gitam.edu/faculty\" role=\"menuitem\"><span class=\"m-name\">Faculty
                      Excellence</span><span class=\"m-sub\">Meet our professors</span></a>
                  <a href=\"https://www.gitam.edu/alumni-outcomes\" role=\"menuitem\"><span class=\"m-name\">Alumni
                      Outcomes</span><span class=\"m-sub\">Where our graduates are</span></a>
                  <a href=\"https://www.gitam.edu/about/leadership\" role=\"menuitem\"><span
                      class=\"m-name\">Leadership</span><span class=\"m-sub\">Governance &amp; leadership team</span></a>
                  <a href=\"#sec-activities\" role=\"menuitem\"><span class=\"m-name\">Events &amp; Changemakers</span><span
                      class=\"m-sub\">News, events &amp; stories</span></a>
                </div>
              </div>
              <div class=\"mega-photo-card\">
                <img src=\"https://images.unsplash.com/photo-1607237138185-eedd9c632b0b?w=480&h=600&fit=crop\"
                  alt=\"GITAM University campus\" loading=\"lazy\" />
                <div class=\"mega-photo-card-overlay\"></div>
                <div class=\"mega-photo-card-info\">
                  <span class=\"mega-photo-card-stat\">A++</span>
                  <span class=\"mega-photo-card-label\">NAAC accredited deemed-to-be university</span>
                </div>
              </div>
            </div>
          </div>
          <div class=\"mega-foot\">
            <a href=\"https://www.gitam.edu/about-us\" role=\"menuitem\">About GITAM &rarr;</a>
            <span class=\"mega-foot-right\"><a href=\"#\" role=\"menuitem\">Deemed to be University u/s 3 of UGC Act
                1956</a></span>
          </div>
        </div>
      </li>

      <!-- PROGRAMMES (high-intent, leads the funnel) -->
      <li class=\"nav-item has-mega\" role=\"none\">
        <a href=\"#\" class=\"nav-toggle\" role=\"menuitem\" aria-haspopup=\"true\" aria-expanded=\"false\">Programmes
          <svg class=\"nav-caret\" viewBox=\"0 0 12 12\" aria-hidden=\"true\">
            <path d=\"M2.5 4.5L6 8l3.5-3.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
          </svg>
        </a>
        <div class=\"mega mega-wide\" role=\"menu\" aria-label=\"Programmes\" id=\"progMega\">
          <div class=\"mega-body\" style=\"padding:0;\">
            <div class=\"prog-mega-inner\">
              <!-- Column 1: Category -->
              <div class=\"prog-col prog-col-cats\">
                <span class=\"prog-col-label\">Category</span>
                <!-- <button class=\"prog-cat-btn active\" data-cat=\"ug\">Undergraduate <span class=\"prog-arrow\">&rarr;</span></button>
                <button class=\"prog-cat-btn\" data-cat=\"pg\">Postgraduate <span class=\"prog-arrow\">&rarr;</span></button>
                <button class=\"prog-cat-btn\" data-cat=\"phd\">Ph.D. <span class=\"prog-arrow\">&rarr;</span></button> -->
                <!-- <a href=\"programme-finder\" class=\"prog-finder-cta\">Programme Finder &rarr;</a> -->
              </div>
              <!-- Column 2: Disciplines -->
              <div class=\"prog-col prog-col-discs\" id=\"progDiscsCol\">
                <span class=\"prog-col-label\">Disciplines</span>
                <ul class=\"prog-disc-list\" id=\"progDiscList\"></ul>
              </div>
              <!-- Column 3: Courses -->
              <div class=\"prog-col prog-col-courses\" id=\"progCoursesCol\">
                <span class=\"prog-col-label\">Programmes</span>
                <ul class=\"prog-course-list\" id=\"progCourseList\">
                  <li class=\"prog-empty\">Select a discipline</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"mega-foot\">
            <a href=\"https://www.gitam.edu/academics\" role=\"menuitem\">Schools &amp; faculties &rarr;</a>
          </div>
        </div>
      </li>

      <!-- ADMISSIONS (conversion core) -->
      <li class=\"nav-item has-mega\" role=\"none\">
        <a href=\"#\" class=\"nav-toggle\" role=\"menuitem\" aria-haspopup=\"true\" aria-expanded=\"false\">Admissions
          <svg class=\"nav-caret\" viewBox=\"0 0 12 12\" aria-hidden=\"true\">
            <path d=\"M2.5 4.5L6 8l3.5-3.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
          </svg>
        </a>
        <div class=\"mega\" role=\"menu\" aria-label=\"Admissions\">
          <div class=\"mega-body\">
            <div class=\"mega-wide-inner\">
              <div class=\"mega-feature\">
                <span class=\"mf-eyebrow\">2026 intake open</span>
                <span class=\"mf-title\">Plan your admission</span>
                <span class=\"mf-desc\">Start your application on the GITAM admissions portal.</span>
                <a class=\"mf-cta\" href=\"https://apply.gitam.edu/\" target=\"_blank\" rel=\"noopener\" role=\"menuitem\">Apply
                  Now</a>
              </div>
              <div class=\"mega-disc\">
                <div class=\"mega-grid mega-cols-2\">
                  <a href=\"https://www.gitam.edu/admissions\" role=\"menuitem\"><span class=\"m-name\">How to
                      Apply</span><span class=\"m-sub\">Step-by-step guide</span></a>
                  <a href=\"https://www.gitam.edu/admissions\" role=\"menuitem\"><span class=\"m-name\">GAT &mdash; Entrance
                      Test</span><span class=\"m-sub\">Slots, syllabus &amp; prep</span></a>
                  <a href=\"https://www.gitam.edu/fee-scholarship/fee-structure\" role=\"menuitem\"><span class=\"m-name\">Fee
                      Structure</span><span class=\"m-sub\">Programme-wise fees</span></a>
                  <a href=\"https://www.gitam.edu/fee-scholarship/student-scholarships\" role=\"menuitem\"><span
                      class=\"m-name\">Scholarships</span><span class=\"m-sub\">Merit, sports &amp; need-based</span></a>
                  <a href=\"https://www.gitam.edu/aspiring-students\" role=\"menuitem\"><span class=\"m-name\">Aspiring
                      Students</span><span class=\"m-sub\">Why students choose GITAM</span></a>
                  <a href=\"https://www.gitam.edu/faqs\" role=\"menuitem\"><span class=\"m-name\">Admission FAQs</span><span
                      class=\"m-sub\">Answers to common questions</span></a>
                </div>
              </div>
              <div class=\"mega-photo-card\">
                <img src=\"https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=480&h=600&fit=crop\"
                  alt=\"GITAM scholarship students\" loading=\"lazy\" />
                <div class=\"mega-photo-card-overlay\"></div>
                <div class=\"mega-photo-card-info\">
                  <span class=\"mega-photo-card-stat\">100%</span>
                  <span class=\"mega-photo-card-label\">scholarships for top GAT performers</span>
                </div>
              </div>
            </div>
          </div>
          <div class=\"mega-foot\">
            <a href=\"https://www.gitam.edu/admissions\" role=\"menuitem\">Talk to an admissions counsellor &rarr;</a>
            <span class=\"mega-foot-right\"><a href=\"tel:18001023439\" role=\"menuitem\">Helpline: 1800-102-3439 &middot;
                Mon&ndash;Sat, 9am&ndash;6pm</a></span>
          </div>
        </div>
      </li>

      <!-- CAMPUSES -->
      <li class=\"nav-item has-mega\" role=\"none\">
        <a href=\"#\" class=\"nav-toggle\" role=\"menuitem\" aria-haspopup=\"true\" aria-expanded=\"false\">Schools
          <svg class=\"nav-caret\" viewBox=\"0 0 12 12\" aria-hidden=\"true\">
            <path d=\"M2.5 4.5L6 8l3.5-3.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
          </svg>
        </a>
        <div class=\"mega\" role=\"menu\" aria-label=\"Schools\">
          <div class=\"mega-body\">
            <div class=\"cmega\">
              <div class=\"mega-wide-inner\">
                <div class=\"mega-feature\">
                  <span class=\"mf-eyebrow\">Our campuses</span>
                  <span class=\"mf-title\">Choose your Campus</span>
                  <span class=\"mf-desc\">Hover a campus to see its schools. A beachside main campus, a tech-corridor
                    campus, a startup-city campus and a dedicated health sciences campus.</span>
                </div>
                <div class=\"mega-tiles\">
                  <a href=\"https://www.gitam.edu/visakhapatnam/campus-life\" class=\"mega-tile cmega-campus cmega-active\"
                    data-campus=\"vizag\" role=\"menuitem\">
                    <img src=\"https://images.unsplash.com/photo-1562774053-701939374585?w=400&h=300&fit=crop\"
                      alt=\"Visakhapatnam campus\" loading=\"lazy\" />
                    <div class=\"mega-tile-overlay\"></div>
                    <div class=\"mega-tile-info\">
                      <span class=\"mega-tile-name\">Visakhapatnam</span>
                      <span class=\"mega-tile-desc\">Main campus by the Bay of Bengal</span>
                    </div>
                  </a>
                  <a href=\"https://www.gitam.edu/hyderabad/campus-life\" class=\"mega-tile cmega-campus\" data-campus=\"hyd\"
                    role=\"menuitem\">
                    <img src=\"https://images.unsplash.com/photo-1580537659466-0a9bfa916a54?w=400&h=300&fit=crop\"
                      alt=\"Hyderabad campus\" loading=\"lazy\" />
                    <div class=\"mega-tile-overlay\"></div>
                    <div class=\"mega-tile-info\">
                      <span class=\"mega-tile-name\">Hyderabad</span>
                      <span class=\"mega-tile-desc\">In the city's innovation corridor</span>
                    </div>
                  </a>
                  <a href=\"https://www.gitam.edu/bengaluru/campus-life\" class=\"mega-tile cmega-campus\" data-campus=\"blr\"
                    role=\"menuitem\">
                    <img src=\"https://images.unsplash.com/photo-1592066575517-58df903152f2?w=400&h=300&fit=crop\"
                      alt=\"Bengaluru campus\" loading=\"lazy\" />
                    <div class=\"mega-tile-overlay\"></div>
                    <div class=\"mega-tile-info\">
                      <span class=\"mega-tile-name\">Bengaluru</span>
                      <span class=\"mega-tile-desc\">In India's startup capital</span>
                    </div>
                  </a>
                  <a href=\"https://www.gitam.edu/gimsr/campus-life\" class=\"mega-tile cmega-campus\" data-campus=\"gimsr\"
                    role=\"menuitem\">
                    <img src=\"https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=400&h=300&fit=crop\"
                      alt=\"GIMSR campus\" loading=\"lazy\" />
                    <div class=\"mega-tile-overlay\"></div>
                    <div class=\"mega-tile-info\">
                      <span class=\"mega-tile-name\">GIMSR</span>
                      <span class=\"mega-tile-desc\">Health Sciences campus</span>
                    </div>
                  </a>
                </div>
              </div>
              <div class=\"cmega-schools\">
                <div class=\"cmega-panel cmega-active\" data-campus=\"vizag\">
                  <div class=\"cmega-panel-head\">
                    <span class=\"cmega-panel-eyebrow\">Schools at</span>
                    <span class=\"cmega-panel-city\">Visakhapatnam Campus</span>
                  </div>
                  <div class=\"cmega-links\">
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Core Engineering</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Computer Sceince and
                      Engineering</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Science</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Business</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Pharmacy</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Humanities &amp; Social
                      Sciences</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Architecture</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Law</a>
                  </div>
                </div>
                <div class=\"cmega-panel\" data-campus=\"hyd\">
                  <div class=\"cmega-panel-head\">
                    <span class=\"cmega-panel-eyebrow\">Schools at</span>
                    <span class=\"cmega-panel-city\">Hyderabad Campus</span>
                  </div>
                  <div class=\"cmega-links\">
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Core Engineering</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Computer Sceince and
                      Engineering</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Science</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Business</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Pharmacy</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Humanities &amp; Social
                      Sciences</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Education</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">Kautilya School of Public policy</a>
                  </div>
                </div>
                <div class=\"cmega-panel\" data-campus=\"blr\">
                  <div class=\"cmega-panel-head\">
                    <span class=\"cmega-panel-eyebrow\">Schools at</span>
                    <span class=\"cmega-panel-city\">Bengaluru Campus</span>
                  </div>
                  <div class=\"cmega-links\">
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Core Engineering</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Computer Sceince and
                      Engineering</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Science</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Business</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Humanities &amp; Social
                      Sciences</a>
                  </div>
                </div>
                <div class=\"cmega-panel\" data-campus=\"gimsr\">
                  <div class=\"cmega-panel-head\">
                    <span class=\"cmega-panel-eyebrow\">Schools at</span>
                    <span class=\"cmega-panel-city\">GIMSR Campus</span>
                  </div>
                  <div class=\"cmega-links\">
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM Institute of Medical Sciences
                      &amp; Research</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Nursing</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Allied Health
                      Sciences</a>
                    <a class=\"cmega-link\" href=\"academics.html\" role=\"menuitem\">GITAM School of Physiotherapy</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"mega-foot\">
            <a href=\"https://www.alumni.gitam.edu/\" target=\"_blank\" rel=\"noopener\" role=\"menuitem\">Alumni Network
              &rarr;</a>
            <span class=\"mega-foot-right\"><a href=\"#\" role=\"menuitem\">Hostels, mess &amp; transport available on every
                campus</a></span>
          </div>
        </div>
      </li>

      <!-- ABOUT (anchored right to avoid overflow) -->
      <li class=\"nav-item has-mega\" role=\"none\">
        <a href=\"#\" class=\"nav-toggle\" role=\"menuitem\" aria-haspopup=\"true\" aria-expanded=\"false\">About
          <svg class=\"nav-caret\" viewBox=\"0 0 12 12\" aria-hidden=\"true\">
            <path d=\"M2.5 4.5L6 8l3.5-3.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
          </svg>
        </a>
        <div class=\"mega\" role=\"menu\" aria-label=\"About GITAM\">
          <div class=\"mega-body\">
            <div class=\"mega-wide-inner\">
              <div class=\"mega-feature\">
                <span class=\"mf-eyebrow\">About GITAM</span>
                <span class=\"mf-title\">Who we are</span>
                <span class=\"mf-desc\">A multidisciplinary, deemed-to-be university founded in 1980 in
                  Visakhapatnam.</span>
              </div>
              <div class=\"mega-disc\">
                <div class=\"mega-grid mega-cols-2\">
                  <a href=\"https://www.gitam.edu/about-us\" role=\"menuitem\"><span class=\"m-name\">Who We Are</span><span
                      class=\"m-sub\">Our story &amp; vision</span></a>
                  <a href=\"https://www.gitam.edu/about/leadership\" role=\"menuitem\"><span
                      class=\"m-name\">Leadership</span><span class=\"m-sub\">Governance &amp; leadership team</span></a>
                  <a href=\"faculty.html\" role=\"menuitem\"><span class=\"m-name\">Faculty</span><span class=\"m-sub\">Meet our
                      professors</span></a>
                  <a href=\"https://www.gitam.edu/about/accrediation\" role=\"menuitem\"><span class=\"m-name\">Accreditation
                      &amp; Ranking</span><span class=\"m-sub\">NAAC, NBA, QS &amp; THE</span></a>
                  <a href=\"https://iqac.gitam.edu/nirf\" target=\"_blank\" rel=\"noopener\" role=\"menuitem\"><span
                      class=\"m-name\">NIRF</span><span class=\"m-sub\">Rankings &amp; disclosures</span></a>
                  <a href=\"#sec-activities\" role=\"menuitem\"><span class=\"m-name\">Events &amp; Changemakers</span><span
                      class=\"m-sub\">News, events &amp; stories</span></a>
                </div>
              </div>
              <div class=\"mega-photo-card\">
                <img src=\"https://images.unsplash.com/photo-1607237138185-eedd9c632b0b?w=480&h=600&fit=crop\"
                  alt=\"GITAM University campus\" loading=\"lazy\" />
                <div class=\"mega-photo-card-overlay\"></div>
                <div class=\"mega-photo-card-info\">
                  <span class=\"mega-photo-card-stat\">1980</span>
                  <span class=\"mega-photo-card-label\">founded in Visakhapatnam</span>
                </div>
              </div>
            </div>
          </div>
          <div class=\"mega-foot\">
            <span></span>
            <span class=\"mega-foot-right\"><a href=\"#\" role=\"menuitem\">Deemed to be University under UGC</a></span>
          </div>
        </div>
      </li>
    </ul>
    <div class=\"nav-right\">
      <div class=\"nav-login-wrap has-mega\" role=\"none\">
        <button type=\"button\" class=\"nav-login nav-toggle\" aria-haspopup=\"true\" aria-expanded=\"false\"
          aria-label=\"Login and quick links\">
          <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\">
            <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
            <circle cx=\"12\" cy=\"7\" r=\"4\" />
          </svg>
          Login
          <svg class=\"nav-caret\" viewBox=\"0 0 12 12\" aria-hidden=\"true\">
            <path d=\"M2.5 4.5L6 8l3.5-3.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
          </svg>
        </button>
        <div class=\"mega login-dropdown\" role=\"menu\" aria-label=\"Login and payments\">
          <p class=\"login-heading\">GITAM portals</p>
          <a href=\"https://login.gitam.edu/\" target=\"_blank\" rel=\"noopener\" role=\"menuitem\" class=\"login-portal-item\">
            <span class=\"login-icon\">E</span>
            <span class=\"login-info\">
              <span class=\"login-name\">Employee Login</span>
              <span class=\"login-sub\">Staff &amp; faculty portal</span>
            </span>
            <span class=\"login-arrow\">&rarr;</span>
          </a>
          <a href=\"https://login.gitam.edu/\" target=\"_blank\" rel=\"noopener\" role=\"menuitem\" class=\"login-portal-item\">
            <span class=\"login-icon\">P</span>
            <span class=\"login-info\">
              <span class=\"login-name\">Parent Login</span>
              <span class=\"login-sub\">Track your ward's progress</span>
            </span>
            <span class=\"login-arrow\">&rarr;</span>
          </a>
          <a href=\"https://login.gitam.edu/\" target=\"_blank\" rel=\"noopener\" role=\"menuitem\" class=\"login-portal-item\">
            <span class=\"login-icon\">S</span>
            <span class=\"login-info\">
              <span class=\"login-name\">Student Login</span>
              <span class=\"login-sub\">My-GITAM student portal</span>
            </span>
            <span class=\"login-arrow\">&rarr;</span>
          </a>
          <a href=\"https://www.gitam.edu/online-payment\" target=\"_blank\" rel=\"noopener\" role=\"menuitem\"
            class=\"login-payments\">
            Payments <span>&rarr;</span>
          </a>
        </div>
      </div>
      <a href=\"#sec-contact\" class=\"nav-enquire\" aria-label=\"Enquire about admissions\">Enquire</a>
      <a href=\"https://apply.gitam.edu/\" target=\"_blank\" rel=\"noopener\" class=\"nav-apply\" aria-label=\"Apply Now\">
        Apply Now
        <svg viewBox=\"0 0 14 14\" fill=\"none\" aria-hidden=\"true\">
          <path d=\"M1.5 7h11M8 2.5l4.5 4.5L8 11.5\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
            stroke-linejoin=\"round\" />
        </svg>
      </a>
      <button class=\"nav-hamburger\" id=\"navHamburger\" aria-label=\"Open navigation menu\" aria-expanded=\"false\"
        aria-controls=\"mobDrawer\">
        <svg class=\"nav-icon-menu\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"
          stroke-linecap=\"round\" aria-hidden=\"true\">
          <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\" />
          <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\" />
          <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\" />
        </svg>
        <svg class=\"nav-icon-close\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"
          stroke-linecap=\"round\" aria-hidden=\"true\">
          <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\" />
          <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\" />
        </svg>
      </button>
    </div>
  </nav>

  <!-- ░░ MOBILE DRAWER ░░ (site-wide links; section jumps live in bottom nav) -->
  <div class=\"mob-drawer\" id=\"mobDrawer\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Navigation menu\">
    <div class=\"mob-drawer-bg\" id=\"drawerBg\"></div>
    <div class=\"mob-drawer-panel\">
      <div class=\"mob-drawer-scroll\">
        <div class=\"mob-drawer-menu\">
          <!-- Accordion nav items -->
          <div class=\"mob-acc-item\" data-acc>
            <button class=\"mob-acc-toggle\" data-acc-toggle>
              <span>Programmes</span>
              <span class=\"mob-acc-caret\">▾</span>
            </button>
            <div class=\"mob-acc-subs\">
              <a href=\"programme-finder\">Programme Finder</a>
              <a
                href=\"programme-finder?field_course_level_value_selective=ug&amp;field_discipline_target_id_selective=259\">Engineering
                &amp; Technology</a>
              <a
                href=\"programme-finder?field_course_level_value_selective=ug&amp;field_discipline_target_id_selective=20\">Computer
                Science</a>
              <a
                href=\"programme-finder?field_course_level_value_selective=ug&amp;field_discipline_target_id_selective=18\">Management</a>
              <a
                href=\"programme-finder?field_course_level_value_selective=ug&amp;field_discipline_target_id_selective=21\">Law</a>
              <a
                href=\"programme-finder?field_course_level_value_selective=ug&amp;field_discipline_target_id_selective=25\">Pharmacy</a>
              <a href=\"https://www.gitam.edu/academics\">View all programmes</a>
            </div>
          </div>
          <div class=\"mob-acc-item\" data-acc>
            <button class=\"mob-acc-toggle\" data-acc-toggle>
              <span>Admissions</span>
              <span class=\"mob-acc-caret\">▾</span>
            </button>
            <div class=\"mob-acc-subs\">
              <a href=\"https://www.gitam.edu/admissions\">How to Apply</a>
              <a href=\"https://www.gitam.edu/admissions\">GAT — Entrance Test</a>
              <a href=\"https://www.gitam.edu/fee-scholarship/fee-structure\">Fee Structure</a>
              <a href=\"https://www.gitam.edu/fee-scholarship/student-scholarships\">Scholarships</a>
              <a href=\"https://www.gitam.edu/faqs\">Admission FAQs</a>
            </div>
          </div>
          <div class=\"mob-acc-item\" data-acc>
            <button class=\"mob-acc-toggle\" data-acc-toggle>
              <span>Schools</span>
              <span class=\"mob-acc-caret\">▾</span>
            </button>
            <div class=\"mob-acc-subs\">
              <div class=\"mob-acc-item mob-acc-nested\" data-acc>
                <button class=\"mob-acc-toggle\" data-acc-toggle>
                  <span>Visakhapatnam Campus</span>
                  <span class=\"mob-acc-caret\">▾</span>
                </button>
                <div class=\"mob-acc-subs\">
                  <a href=\"academics.html\">GITAM School of Technology</a>
                  <a href=\"academics.html\">GITAM School of Science</a>
                  <a href=\"academics.html\">GITAM School of Business</a>
                  <a href=\"academics.html\">GITAM School of Pharmacy</a>
                  <a href=\"academics.html\">GITAM School of Humanities &amp; Social Sciences</a>
                  <a href=\"academics.html\">GITAM School of Architecture</a>
                  <a href=\"academics.html\">GITAM School of Law</a>
                  <a class=\"mob-acc-visit\" href=\"https://www.gitam.edu/visakhapatnam/campus-life\">Visakhapatnam campus
                    life &rarr;</a>
                </div>
              </div>
              <div class=\"mob-acc-item mob-acc-nested\" data-acc>
                <button class=\"mob-acc-toggle\" data-acc-toggle>
                  <span>Hyderabad Campus</span>
                  <span class=\"mob-acc-caret\">▾</span>
                </button>
                <div class=\"mob-acc-subs\">
                  <a href=\"academics.html\">GITAM School of Technology</a>
                  <a href=\"academics.html\">GITAM School of Science</a>
                  <a href=\"academics.html\">GITAM School of Business</a>
                  <a href=\"academics.html\">GITAM School of Pharmacy</a>
                  <a href=\"academics.html\">GITAM School of Law</a>
                  <a class=\"mob-acc-visit\" href=\"https://www.gitam.edu/hyderabad/campus-life\">Hyderabad campus life
                    &rarr;</a>
                </div>
              </div>
              <div class=\"mob-acc-item mob-acc-nested\" data-acc>
                <button class=\"mob-acc-toggle\" data-acc-toggle>
                  <span>Bengaluru Campus</span>
                  <span class=\"mob-acc-caret\">▾</span>
                </button>
                <div class=\"mob-acc-subs\">
                  <a href=\"academics.html\">GITAM School of Technology</a>
                  <a href=\"academics.html\">GITAM School of Science</a>
                  <a href=\"academics.html\">GITAM School of Business</a>
                  <a href=\"academics.html\">GITAM School of Humanities &amp; Social Sciences</a>
                  <a class=\"mob-acc-visit\" href=\"https://www.gitam.edu/bengaluru/campus-life\">Bengaluru campus life
                    &rarr;</a>
                </div>
              </div>
              <div class=\"mob-acc-item mob-acc-nested\" data-acc>
                <button class=\"mob-acc-toggle\" data-acc-toggle>
                  <span>GIMSR Campus</span>
                  <span class=\"mob-acc-caret\">▾</span>
                </button>
                <div class=\"mob-acc-subs\">
                  <a href=\"academics.html\">GITAM Institute of Medical Sciences &amp; Research</a>
                  <a href=\"academics.html\">GITAM School of Nursing</a>
                  <a href=\"academics.html\">GITAM School of Allied Health Sciences</a>
                  <a href=\"academics.html\">GITAM School of Physiotherapy</a>
                  <a class=\"mob-acc-visit\" href=\"https://www.gitam.edu/gimsr/campus-life\">GIMSR campus life &rarr;</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"mob-acc-item\" data-acc>
            <button class=\"mob-acc-toggle\" data-acc-toggle>
              <span>About</span>
              <span class=\"mob-acc-caret\">▾</span>
            </button>
            <div class=\"mob-acc-subs\">
              <a href=\"https://www.gitam.edu/about-us\">Who We Are</a>
              <a href=\"https://www.gitam.edu/about/leadership\">Leadership</a>
              <a href=\"faculty.html\">Faculty</a>
              <a href=\"https://www.gitam.edu/about/accrediation\">Accreditation &amp; Ranking</a>
              <a href=\"https://iqac.gitam.edu/nirf\" target=\"_blank\" rel=\"noopener\">NIRF</a>
              <a href=\"#sec-activities\">Events &amp; Changemakers</a>
            </div>
          </div>
          <!-- Login -->
          <div class=\"mob-acc-item\" data-acc>
            <button class=\"mob-acc-toggle\" data-acc-toggle>
              <span>Login</span>
              <span class=\"mob-acc-caret\">▾</span>
            </button>
            <div class=\"mob-acc-subs\">
              <a href=\"https://login.gitam.edu/\" target=\"_blank\" rel=\"noopener\">Employee Login</a>
              <a href=\"https://login.gitam.edu/\" target=\"_blank\" rel=\"noopener\">Parent Login</a>
              <a href=\"https://login.gitam.edu/\" target=\"_blank\" rel=\"noopener\">Student Login</a>
              <a href=\"https://www.gitam.edu/online-payment\" target=\"_blank\" rel=\"noopener\">Payments</a>
            </div>
          </div>
          <!-- Statutory & compliance — de-emphasised, collapsed by default -->
          <div class=\"mob-acc-item mob-acc-compliance\" data-acc>
            <button class=\"mob-acc-toggle\" data-acc-toggle>
              <span>Statutory &amp; Compliance</span>
              <span class=\"mob-acc-caret\">▾</span>
            </button>
            <div class=\"mob-acc-subs mob-compliance-grid\">
              <a href=\"https://iqac.gitam.edu/mandatory-disclosure\" target=\"_blank\" rel=\"noopener\">Mandatory
                Disclosures</a>
              <a href=\"https://www.gitam.edu/about/accrediation\" target=\"_blank\" rel=\"noopener\">Accreditation &amp;
                Ranking</a>
              <a href=\"https://iqac.gitam.edu/\" target=\"_blank\" rel=\"noopener\">IQAC</a>
              <a href=\"https://iqac.gitam.edu/nirf\" target=\"_blank\" rel=\"noopener\">NIRF</a>
              <a href=\"https://www.gitam.edu/academics/evaluation/grievance-redressal\" target=\"_blank\"
                rel=\"noopener\">Grievance Redressal</a>
              <a href=\"https://womenempowerment.gitam.edu/\" target=\"_blank\" rel=\"noopener\">Women Empowerment Cell</a>
              <a href=\"https://www.gitam.edu/anti-caste-based-discrimination-policy\">Anti-Caste Discrimination</a>
              <a href=\"https://www.gitam.edu/aspiring-students\" target=\"_blank\">Aspiring Students</a>
              <a href=\"https://www.gitam.edu/sitemap\">Sitemap</a>
            </div>
          </div>
        </div>
      </div>
      <div class=\"mob-drawer-font-row\">
        <span class=\"mob-drawer-font-label\">Text size</span>
        <div class=\"font-resize font-resize--drawer\" role=\"group\" aria-label=\"Font size controls\">
          <button type=\"button\" data-font-action=\"decrease\" aria-label=\"Decrease font size\">A-</button>
          <button type=\"button\" data-font-action=\"reset\" aria-label=\"Reset font size\">A</button>
          <button type=\"button\" data-font-action=\"increase\" aria-label=\"Increase font size\">A+</button>
        </div>
      </div>
    </div>
    <!-- Pinned action bar — conversion CTAs stay in view while nav scrolls -->
    <div class=\"mob-drawer-footer\">
      <div class=\"mob-drawer-footer-actions\">
        <a href=\"https://apply.gitam.edu/\" target=\"_blank\" rel=\"noopener\" class=\"mob-cta-apply\">Apply Now</a>
        <a href=\"#sec-contact\" class=\"mob-cta-enquire\">Enquire</a>
      </div>
    </div>
  </div>
  </div>

  <!-- CHAT FAB -->
  <div id=\"chat-fab\" aria-label=\"Contact options\">
      <!-- Sub-actions (shown when expanded) -->
      <div class=\"cfab-actions\" id=\"cfabActions\">
        <div class=\"cfab-action-item\">
          <a
            href=\"https://www.gitam.edu/chat-with-a-student-ambassador\"
            target=\"_blank\"
            rel=\"noopener\"
            class=\"cfab-action-btn cfab-action-ai\"
            aria-label=\"Chat with Student\"
          >
            <span class=\"cfab-student-stack\" aria-hidden=\"true\">
              <img
                class=\"cfab-student-photo is-active\"
                src=\"images/ygitam/image1.webp\"
                alt=\"student\"
              />
              <img
                class=\"cfab-student-photo\"
                src=\"images/ygitam/image2.webp\"
                alt=\"student\"
              />
              <img
                class=\"cfab-student-photo\"
                src=\"images/ygitam/image3.webp\"
                alt=\"student\"
              />
              <img
                class=\"cfab-student-photo\"
                src=\"images/ygitam/image4.webp\"
                alt=\"student\"
              />
             
            </span>
          </a>
          <span class=\"cfab-label\">Chat with Student</span>
        </div>
        <div class=\"cfab-action-item call-action\">
          <div class=\"cfab-action-item cfab-call\">
            <a href=\"tel:+918884984000\" class=\"cfab-action-btn cfab-action-call\" aria-label=\"Call Admissions\">
              <svg
                viewBox=\"0 0 24 24\"
                fill=\"none\"
                stroke=\"currentColor\"
                stroke-width=\"2\"
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
                aria-hidden=\"true\"
              >
                <path
                  d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.62 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.7a16 16 0 0 0 6.29 6.29l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z\"
                />
              </svg>
            </a>
            <a href=\"tel:+918884984000\" class=\"cfab-call\">
              <span class=\"cfab-label\">Call Admissions</span>
            </a>
          </div>
        </div>
      </div>
      <!-- Main trigger button -->
      <button
        class=\"cfab-trigger\"
        id=\"cfabTrigger\"
        aria-expanded=\"false\"
        aria-label=\"Open contact options — chat with a student or call admissions\"
      >
        <span class=\"cfab-trigger-icon cfab-icon-swap\">
          <span class=\"cfab-swap-icons\" aria-hidden=\"true\">
            <span class=\"cfab-swap-icon cfab-swap-msg\">
              <svg
                viewBox=\"0 0 24 24\"
                fill=\"none\"
                stroke=\"currentColor\"
                stroke-width=\"2.2\"
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
              >
                <path
                  d=\"M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z\"
                />
              </svg>
            </span>
            <span class=\"cfab-swap-icon cfab-swap-phone\">
              <svg
                viewBox=\"0 0 24 24\"
                fill=\"none\"
                stroke=\"currentColor\"
                stroke-width=\"2.2\"
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
              >
                <path
                  d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.62 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.7a16 16 0 0 0 6.29 6.29l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z\"
                />
              </svg>
            </span>
          </span>
        </span>
        <span class=\"cfab-trigger-icon cfab-icon-close\">
          <svg
            viewBox=\"0 0 24 24\"
            fill=\"none\"
            stroke=\"currentColor\"
            stroke-width=\"2.5\"
            stroke-linecap=\"round\"
            stroke-linejoin=\"round\"
            aria-hidden=\"true\"
          >
            <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\" />
            <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\" />
          </svg>
        </span>
      </button>
    </div>

   <button id=\"scroll-top-btn\" aria-label=\"Scroll to top\">
      <svg
        viewBox=\"0 0 24 24\"
        fill=\"none\"
        stroke=\"currentColor\"
        stroke-width=\"2.4\"
        stroke-linecap=\"round\"
        stroke-linejoin=\"round\"
        aria-hidden=\"true\"
      >
        <line x1=\"12\" y1=\"19\" x2=\"12\" y2=\"5\" />
        <polyline points=\"5 12 12 5 19 12\" />
      </svg>
    </button>

  <nav id=\"page-nav\" aria-label=\"Quick navigation - jump to section\">
    <span class=\"pnav-label\">
      <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
        stroke-linejoin=\"round\" aria-hidden=\"true\">
        <circle cx=\"12\" cy=\"12\" r=\"10\" />
        <polygon points=\"16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76\" />
      </svg>
      <span class=\"pnav-label-text\">Quick nav</span>
    </span>
    <div class=\"pnav-pills\">
      <button class=\"pnav-btn\" data-target=\"sec-hero\">
        <span class=\"pnav-dot\"></span>Home
      </button>
      <button class=\"pnav-btn\" data-target=\"sec-campuses\">
        <span class=\"pnav-dot\"></span>Campuses
      </button>
      <button class=\"pnav-btn\" data-target=\"sec-accreditations\">
        <span class=\"pnav-dot\"></span>Rankings
      </button>
      <button class=\"pnav-btn\" data-target=\"sec-explore\">
        <span class=\"pnav-dot\"></span>Programmes
      </button>
      <button class=\"pnav-btn\" data-target=\"sec-placements\">
        <span class=\"pnav-dot\"></span>Placements
      </button>

      <button class=\"pnav-btn\" data-target=\"sec-faculty\" data-active-ids=\"sec-faculty\">
        <span class=\"pnav-dot\"></span>Faculty
      </button>
      <button class=\"pnav-btn\" data-target=\"sec-research\">
        <span class=\"pnav-dot\"></span>Research
      </button>
      <button class=\"pnav-btn\" data-target=\"sec-hostels\" data-active-ids=\"sec-hostels sec-activities\">
        <span class=\"pnav-dot\"></span>Campus life
      </button>
    </div>
    <div class=\"pnav-divider\"></div>
    <a href=\"#sec-contact\" class=\"pnav-apply\">
      Enquire
      <svg width=\"12\" height=\"12\" viewBox=\"0 0 13 13\" fill=\"none\" aria-hidden=\"true\">
        <path d=\"M1.5 6.5h10M8 2.5l4 4-4 4\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
          stroke-linejoin=\"round\" />
      </svg>
    </a>
  </nav>

  <!-- MOBILE BOTTOM NAV -->
  <div id=\"mob-nav\">
    <div class=\"mnav-tabs\" role=\"tablist\">
      <button class=\"mnav-tab active\" data-target=\"sec-stats\" role=\"tab\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
          stroke-linejoin=\"round\">
          <line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\" />
          <line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\" />
          <line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\" />
        </svg>
        <span>Why GITAM</span>
      </button>
      <button class=\"mnav-tab\" data-target=\"sec-explore\" role=\"tab\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
          stroke-linejoin=\"round\">
          <path d=\"M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z\" />
          <path d=\"M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z\" />
        </svg>
        <span>Programmes</span>
      </button>
      <button class=\"mnav-tab\" data-target=\"sec-placements\" role=\"tab\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
          stroke-linejoin=\"round\">
          <rect x=\"2\" y=\"7\" width=\"20\" height=\"14\" rx=\"2\" />
          <path d=\"M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2\" />
          <line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"16\" />
          <line x1=\"10\" y1=\"14\" x2=\"14\" y2=\"14\" />
        </svg>
        <span>Placements</span>
      </button>
      <button class=\"mnav-tab\" data-target=\"sec-contact\" role=\"tab\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
          stroke-linejoin=\"round\">
          <path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\" />
          <polyline points=\"22,6 12,13 2,6\" />
        </svg>
        <span>Contact</span>
      </button>
      <button class=\"mnav-tab\" id=\"mob-more-btn\" role=\"tab\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
          stroke-linejoin=\"round\">
          <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\" />
          <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\" />
          <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\" />
        </svg>
        <span>More</span>
      </button>
    </div>
  </div>

  <!-- MOBILE MORE SHEET -->
  <div id=\"mob-sheet-backdrop\"></div>
  <div id=\"mob-sheet\" role=\"dialog\" aria-modal=\"true\" aria-label=\"All sections\">
    <div class=\"msheet-handle\"></div>
    <div class=\"msheet-header\">
      <p class=\"msheet-title\">More</p>
      <button class=\"msheet-close\" id=\"mob-sheet-close\" aria-label=\"Close\">
        <svg viewBox=\"0 0 14 14\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\">
          <line x1=\"2\" y1=\"2\" x2=\"12\" y2=\"12\" />
          <line x1=\"12\" y1=\"2\" x2=\"2\" y2=\"12\" />
        </svg>
      </button>
    </div>
    <ul class=\"msheet-list\">
      <li>
        <button class=\"msheet-item\" data-target=\"sec-hero\">
          <span class=\"msheet-icon\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\"
              stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <path d=\"M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z\" />
              <path d=\"M9 21V12h6v9\" />
            </svg></span>Home
        </button>
      </li>
      <li>
        <button class=\"msheet-item\" data-target=\"sec-campuses\">
          <span class=\"msheet-icon\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\"
              stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <rect x=\"3\" y=\"9\" width=\"18\" height=\"13\" rx=\"1\" />
              <path d=\"M8 22V12h8v10\" />
              <path d=\"M3 9l9-6 9 6\" />
            </svg></span>Campuses
        </button>
      </li>
      <li>
        <button class=\"msheet-item\" data-target=\"sec-accreditations\">
          <span class=\"msheet-icon\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\"
              stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <circle cx=\"12\" cy=\"8\" r=\"4\" />
              <path d=\"M8 12l-4 9 8-3 8 3-4-9\" />
            </svg></span>Rankings
        </button>
      </li>
      <li>
        <button class=\"msheet-item\" data-target=\"sec-explore\">
          <span class=\"msheet-icon\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\"
              stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <path d=\"M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z\" />
              <path d=\"M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z\" />
            </svg></span>Programmes
        </button>
      </li>
      <li>
        <button class=\"msheet-item\" data-target=\"sec-placements\">
          <span class=\"msheet-icon\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\"
              stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <rect x=\"2\" y=\"7\" width=\"20\" height=\"14\" rx=\"2\" />
              <path d=\"M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2\" />
              <line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"16\" />
              <line x1=\"10\" y1=\"14\" x2=\"14\" y2=\"14\" />
            </svg></span>Placements
        </button>
      </li>
      <li>
        <button class=\"msheet-item\" data-target=\"sec-partnerships\">
          <span class=\"msheet-icon\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\"
              stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <circle cx=\"12\" cy=\"12\" r=\"10\" />
              <line x1=\"2\" y1=\"12\" x2=\"22\" y2=\"12\" />
              <path d=\"M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z\" />
            </svg></span>Global Exposure
        </button>
      </li>
      <li>
        <button class=\"msheet-item\" data-target=\"sec-entrepreneurs\">
          <span class=\"msheet-icon\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\"
              stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <path d=\"M12 2a7 7 0 017 7c0 5-7 13-7 13S5 14 5 9a7 7 0 017-7z\" />
              <circle cx=\"12\" cy=\"9\" r=\"2.5\" />
            </svg></span>Entrepreneurs
        </button>
      </li>
      <li>
        <button class=\"msheet-item\" data-target=\"sec-faculty\">
          <span class=\"msheet-icon\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\"
              stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <path d=\"M22 10v6M2 10l10-5 10 5-10 5-10-5z\" />
              <path d=\"M6 12v5c3.33 1.67 8.67 1.67 12 0v-5\" />
            </svg></span>Faculty
        </button>
      </li>
      <li>
        <button class=\"msheet-item\" data-target=\"sec-hostels\">
          <span class=\"msheet-icon\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\"
              stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <path d=\"M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z\" />
              <polyline points=\"9 22 9 12 15 12 15 22\" />
            </svg></span>Campus life
        </button>
      </li>
    </ul>
  </div>
  <!-- ═ SHARED:HEADER END ═ -->

  <main id=\"main-content\">
    <!-- SECTION 1: HERO -->
    <section class=\"hero-split\" id=\"sec-hero\" aria-labelledby=\"hero-heading\">
      <div class=\"hero-split__bg\" aria-hidden=\"true\"></div>
      <div class=\"hero-split__glow\" aria-hidden=\"true\"></div>
      <!-- <svg class=\"hero-split__swoosh\" viewBox=\"0 0 1440 800\" preserveAspectRatio=\"xMidYMid slice\" aria-hidden=\"true\">
          <path d=\"M-100 620 C 320 500, 700 760, 1560 420\" fill=\"none\" stroke=\"rgba(139,203,183,0.10)\" stroke-width=\"1.5\"/>
          <path d=\"M-100 700 C 380 600, 760 820, 1560 500\" fill=\"none\" stroke=\"rgba(139,203,183,0.06)\" stroke-width=\"1.5\"/>
        </svg> -->
      <div class=\"hero-split__container\">
        <div class=\"hero-split__inner\">
          <!-- Left: Text content -->
          <div class=\"hero-split__text\">
            <span class=\"hero-split__eyebrow\"><span class=\"hero-split__dot\"></span>Admissions Open for 2026</span>
            <h1 class=\"hero-split__title\" id=\"hero-heading\">Shape Your Future at <span
                class=\"hero-split__accent\">GITAM</span></h1>
            <p class=\"hero-split__desc\">A NAAC A++ accredited deemed-to-be university with 200+ programmes across 14
              disciplines, 4 campuses, and 40+ years of academic excellence.</p>
            <div class=\"hero-split__ctas\">
              <a class=\"hero-split__btn-primary\" href=\"https://testadmissions.gitam.edu/login_gat_2026_new.aspx\">
                Apply Now
                <svg viewBox=\"0 0 16 16\" fill=\"none\" aria-hidden=\"true\">
                  <path d=\"M3 8H13M9.5 4.5L13 8L9.5 11.5\" stroke=\"currentColor\" stroke-width=\"1.8\"
                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                </svg>
              </a>
              <a class=\"hero-split__btn-ghost\" href=\"#sec-explore\">
                Explore Programmes
              </a>
            </div>
          </div>
          <!-- Right: Video -->
          <!-- <div class=\"hero-split__video\">
              <div class=\"hero-split__video-wrap\" id=\"vidShowcaseInner\">
                <div class=\"hero-split__video-caption\">
                  <span class=\"hero-split__video-avatar\">
                    <img src=\"images/gitam-logo-basic-horizontal-reverse.png\" alt=\"\" />
                  </span>
                  <span class=\"hero-split__video-caption-text\">
                    <strong>Message from the President</strong>
                    <span>GITAM Deemed to be University</span>
                  </span>
                </div>
                <img
                  class=\"hero-split__video-thumb\"
                  id=\"vidThumb\"
                  src=\"https://img.youtube.com/vi/No-ElBJqXsg/maxresdefault.jpg\"
                  alt=\"GITAM campus video thumbnail\"
                />
                <iframe
                  class=\"hero-split__video-iframe\"
                  id=\"vidBgPlayer\"
                  src=\"https://www.youtube.com/embed/No-ElBJqXsg?autoplay=1&mute=1&loop=1&playlist=No-ElBJqXsg&controls=0&playsinline=1&rel=0&disablekb=1&modestbranding=1&showinfo=0&cc_load_policy=0\"
                  frameborder=\"0\"
                  allow=\"autoplay; encrypted-media; fullscreen\"
                  referrerpolicy=\"strict-origin-when-cross-origin\"
                  title=\"GITAM campus video\"
                ></iframe>
                <button class=\"hero-split__play\" id=\"vidPlayBtn\" type=\"button\" aria-label=\"Play video\">
                  <svg viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\">
                    <path d=\"M8 5v14l11-7z\" />
                  </svg>
                </button>
              </div>
            </div> -->
          <div class=\"hero-split__video\">
            <div class=\"hero-split__video-wrap\" id=\"vidShowcaseInner\">

              <div class=\"hero-split__video-caption\">
                <span class=\"hero-split__video-avatar\">
                  <img src=\"";
        // line 1134
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/gitam-logo-basic-horizontal-reverse.png\" alt=\"GITAM\" />
                </span>
                <span class=\"hero-split__video-caption-text\">
                  <strong>Message from the President</strong>
                  <span>GITAM Deemed to be University</span>
                </span>
              </div>

              <video id=\"heroVideo\" class=\"hero-split__video-player\" poster=\"";
        // line 1142
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/video-thumb.jpg\" preload=\"metadata\"
                autoplay muted playsinline loop>
                <source src=\"";
        // line 1144
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/videos/president-message.mp4\" type=\"video/mp4\" />
              </video>

              <button id=\"videoOverlayPlay\" class=\"hero-split__video-overlay-play\" aria-label=\"Play video\">
                <svg viewBox=\"0 0 24 24\" fill=\"currentColor\">
                  <path d=\"M8 5v14l11-7z\" />
                </svg>
              </button>

              <div class=\"hero-split__video-controls\">

                <button id=\"playPauseBtn\" class=\"hero-split__video-btn\" aria-label=\"Play/Pause\">

                  <!-- Play Icon -->
                  <svg class=\"icon-play\" viewBox=\"0 0 24 24\">
                    <path fill=\"currentColor\" d=\"M8 5v14l11-7z\" />
                  </svg>

                  <!-- Pause Icon -->
                  <svg class=\"icon-pause\" viewBox=\"0 0 24 24\">
                    <path fill=\"currentColor\" d=\"M6 5h4v14H6zm8 0h4v14h-4z\" />
                  </svg>

                </button>

                <button id=\"soundBtn\" class=\"hero-split__video-btn\" aria-label=\"Mute\">

                  <!-- Mute -->
                  <svg class=\"icon-mute\" viewBox=\"0 0 24 24\">
                    <path fill=\"currentColor\"
                      d=\"M16.5 12L19 14.5L17.5 16L15 13.5L12.5 16L11 14.5L13.5 12L11 9.5L12.5 8L15 10.5L17.5 8L19 9.5zM5 9H2v6h3l4 4V5z\" />
                  </svg>

                  <!-- Volume -->
                  <svg class=\"icon-volume\" viewBox=\"0 0 24 24\">
                    <path fill=\"currentColor\"
                      d=\"M5 9H2v6h3l4 4V5zm10.5 3a3.5 3.5 0 0 0-2-3.15v6.3A3.5 3.5 0 0 0 15.5 12zm0-7v2a7 7 0 0 1 0 10v2a9 9 0 0 0 0-14z\" />
                  </svg>

                </button>

                <button id=\"fullscreenBtn\" class=\"hero-split__video-btn\" aria-label=\"Fullscreen\">
                  <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                    <path d=\"M4 9V4h5M20 9V4h-5M4 15v5h5M20 15v5h-5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"
                      stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                  </svg>
                </button>

              </div>
            </div>
          </div>

        </div>
        <ul class=\"hero-split__stats\" aria-label=\"GITAM at a glance\">
          <li>
            <span class=\"hero-split__stat-icon\" aria-hidden=\"true\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\">
                <path d=\"M12 2l2.6 6.6L22 9l-5.5 4.6L18 22l-6-4-6 4 1.5-8.4L2 9l7.4-.4L12 2z\" stroke=\"currentColor\"
                  stroke-width=\"1.6\" stroke-linejoin=\"round\" />
              </svg>
            </span>
            <span class=\"hero-split__stat-text\"><span class=\"hero-split__stat-num\">NAAC A++</span><span
                class=\"hero-split__stat-lbl\">Accredited</span></span>
          </li>
          <li>
            <span class=\"hero-split__stat-icon\" aria-hidden=\"true\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\">
                <path d=\"M2 9l10-5 10 5-10 5-10-5z\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linejoin=\"round\" />
                <path d=\"M6 11.5V17c0 1.1 2.7 3 6 3s6-1.9 6-3v-5.5\" stroke=\"currentColor\" stroke-width=\"1.6\"
                  stroke-linecap=\"round\" />
              </svg>
            </span>
            <span class=\"hero-split__stat-text\"><span class=\"hero-split__stat-num\">200+</span><span
                class=\"hero-split__stat-lbl\">Programmes</span></span>
          </li>
          <li>
            <span class=\"hero-split__stat-icon\" aria-hidden=\"true\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\">
                <path d=\"M4 21V9l6-4 6 4v12\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linejoin=\"round\" />
                <path d=\"M14 21v-8h6v8\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linejoin=\"round\" />
                <path d=\"M8 12h.01M8 16h.01\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" />
              </svg>
            </span>
            <span class=\"hero-split__stat-text\"><span class=\"hero-split__stat-num\">4</span><span
                class=\"hero-split__stat-lbl\">Campuses</span></span>
          </li>
          <li>
            <span class=\"hero-split__stat-icon\" aria-hidden=\"true\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\">
                <circle cx=\"12\" cy=\"8\" r=\"5\" stroke=\"currentColor\" stroke-width=\"1.6\" />
                <path d=\"M8.5 12.5L7 21l5-2.5L17 21l-1.5-8.5\" stroke=\"currentColor\" stroke-width=\"1.6\"
                  stroke-linejoin=\"round\" />
              </svg>
            </span>
            <span class=\"hero-split__stat-text\"><span class=\"hero-split__stat-num\">40+</span><span
                class=\"hero-split__stat-lbl\">Years of Excellence</span></span>
          </li>
        </ul>
      </div>
      <a class=\"hero-split__scroll-cue\" href=\"#sec-stats\" aria-label=\"Scroll to explore\">
        <span>Scroll to explore</span>
        <span class=\"hero-split__scroll-mouse\" aria-hidden=\"true\">
          <span class=\"hero-split__scroll-wheel\"></span>
        </span>
      </a>
    </section>

    <!-- YouTube Modal -->
    <div class=\"vid-modal\" id=\"vidModal\" aria-hidden=\"true\">
      <div class=\"vid-modal__backdrop\" id=\"vidModalBackdrop\"></div>
      <div class=\"vid-modal__content\">
        <button class=\"vid-modal__close\" id=\"vidModalClose\" aria-label=\"Close video\">
          <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#fff\" stroke-width=\"2\" stroke-linecap=\"round\">
            <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\" />
            <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\" />
          </svg>
        </button>
        <div class=\"vid-modal__player\">
          <iframe id=\"vidYtFrame\" src=\"\" frameborder=\"0\" allow=\"autoplay; encrypted-media; fullscreen\"
            referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <!-- SECTION 2: WHY GITAM - header reveals on scroll, bento grid below -->
    <section class=\"numbers-section\" id=\"sec-stats\" aria-labelledby=\"stats-heading\">
      <div class=\"why-header\" id=\"why-header\">
        <h2 class=\"why-title\" id=\"stats-heading\">Why <span>GITAM</span>?</h2>
        <p class=\"why-sub\">
          Every metric tells the same story - real outcomes, real careers.
        </p>
      </div>

      <div class=\"why-grid\">
        <!-- Placements (wide) + recruiter logos -->
        <div class=\"why-card card-plac\">
          <div class=\"why-num\">
            <span data-count=\"3728\" data-format=\"comma\">3,728</span>
          </div>
          <p class=\"why-label\">Placement Offers</p>
          <p class=\"why-detail\">last hiring cycle</p>
          <div class=\"why-logos\">
            <div class=\"logo-tile\">
              <img src=\"https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/amazon.svg\" alt=\"Amazon\" loading=\"lazy\"
                onerror=\"
                    this.style.display = 'none';
                    this.nextElementSibling.style.display = 'block';
                  \" /><span class=\"logo-fallback\">Amazon</span>
            </div>
            <div class=\"logo-tile\">
              <img src=\"https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/microsoft.svg\" alt=\"Microsoft\"
                loading=\"lazy\" onerror=\"
                    this.style.display = 'none';
                    this.nextElementSibling.style.display = 'block';
                  \" /><span class=\"logo-fallback\">Microsoft</span>
            </div>
            <div class=\"logo-tile\">
              <img src=\"https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/google.svg\" alt=\"Google\" loading=\"lazy\"
                onerror=\"
                    this.style.display = 'none';
                    this.nextElementSibling.style.display = 'block';
                  \" /><span class=\"logo-fallback\">Google</span>
            </div>
            <div class=\"logo-tile\">
              <img src=\"https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/goldmansachs.svg\" alt=\"Goldman Sachs\"
                loading=\"lazy\" onerror=\"
                    this.style.display = 'none';
                    this.nextElementSibling.style.display = 'block';
                  \" /><span class=\"logo-fallback\">Goldman</span>
            </div>
            <div class=\"logo-tile\">
              <img src=\"https://logo.uplead.com/deloitte.com\" alt=\"Deloitte\" loading=\"lazy\" onerror=\"
                    this.style.display = 'none';
                    this.nextElementSibling.style.display = 'block';
                  \" /><span class=\"logo-fallback\">Deloitte</span>
            </div>
            <div class=\"logo-tile\">
              <img src=\"https://logo.uplead.com/jpmorgan.com\" alt=\"JPMorgan\" loading=\"lazy\" onerror=\"
                    this.style.display = 'none';
                    this.nextElementSibling.style.display = 'block';
                  \" /><span class=\"logo-fallback\">JPMorgan</span>
            </div>
            <div class=\"logo-tile\">
              <img src=\"https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/accenture.svg\" alt=\"Accenture\"
                loading=\"lazy\" onerror=\"
                    this.style.display = 'none';
                    this.nextElementSibling.style.display = 'block';
                  \" /><span class=\"logo-fallback\">Accenture</span>
            </div>
            <div class=\"logo-tile\">
              <img src=\"https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/tcs.svg\" alt=\"TCS\" loading=\"lazy\"
                onerror=\"
                    this.style.display = 'none';
                    this.nextElementSibling.style.display = 'block';
                  \" /><span class=\"logo-fallback\">TCS</span>
            </div>
          </div>
        </div>

        <!-- Top package + elite recruiters -->
        <div class=\"why-card card-pkg\">
          <div class=\"why-num\" style=\"margin-bottom: 6px\">
            <span class=\"unit\">₹</span><span data-count=\"1.4\" data-format=\"decimal1\">1.4</span><span
              class=\"unit\">&nbsp;Cr</span>
          </div>
          <p class=\"why-label\">Highest Package</p>
          <div class=\"rank-list\">
            <div class=\"rank-row\">
              <span class=\"rank-body\">Top offer by</span>
              <span class=\"rank-val\">Amazon</span>
            </div>
            <div class=\"rank-row\">
              <span class=\"rank-body\">Offers in last cycle</span>
              <span class=\"rank-val\">3,728</span>
            </div>
          </div>
        </div>

        <!-- Faculty (tall) + university logos -->
        <div class=\"why-card card-fac\">
          <div class=\"why-num\">
            <span data-count=\"1800\" data-format=\"comma\">1,800</span><span class=\"suffix\">+</span>
          </div>
          <p class=\"why-label\">Expert Faculty</p>
          <p class=\"why-detail\"><strong>95%+ PhDs</strong></p>
          <p class=\"why-mini-label\">Trained at</p>
          <div class=\"why-logos cols-2\">
            <div class=\"logo-tile\">
              <img src=\"";
        // line 1372
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/ygitam/Science-logo.webp\" class=\"image-fluid\" width=\"30\" height=\"28\" alt=\"Science-logo\"
                loading=\"lazy\" onerror=\"
                  this.style.display = 'none';
                  this.nextElementSibling.style.display = 'block';
                \">
              <span class=\"logo-fallback\">Cambridge</span>
            </div>
            <div class=\"logo-tile\">
              <img src=\"";
        // line 1380
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/ygitam/IIMA.webp\" width=\"30\" height=\"28\" alt=\"IIT-karnataka\" loading=\"lazy\" onerror=\"
                  this.style.display = 'none';
                  this.nextElementSibling.style.display = 'block';
                \" class=\"image-fluid\">
              <span class=\"logo-fallback\">Stanford</span>
            </div>
            <div class=\"logo-tile\">
              <img src=\"";
        // line 1387
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/ygitam/IIT-logo.webp\" class=\"image-fluid\" alt=\"IIT-logo\" width=\"30\" height=\"28\"
                loading=\"lazy\" onerror=\"
                  this.style.display = 'none';
                  this.nextElementSibling.style.display = 'block';
                \">
              <span class=\"logo-fallback\">MIT</span>
            </div>
            <div class=\"logo-tile\">
              <img src=\"";
        // line 1395
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/ygitam/IIT-karnataka.webp\" alt=\"Defence\" class=\"image-fluid\" width=\"30\" height=\"28\"
                loading=\"lazy\" onerror=\"
                  this.style.display = 'none';
                  this.nextElementSibling.style.display = 'block';
                \">
              <span class=\"logo-fallback\">Harvard</span>
            </div>
          </div>
        </div>

        <!-- Rankings -->
        <div class=\"why-card card-rank\">
          <div class=\"why-num\" style=\"margin-bottom: 6px\">
            <span data-count=\"88\" data-format=\"integer\">88</span>
          </div>
          <p class=\"why-label\">NIRF Ranking</p>
          <p class=\"why-detail\">Top-ranked in India</p>
          <div class=\"rank-list\">
            <div class=\"rank-row\">
              <span class=\"rank-body\">NAAC</span>
              <span class=\"rank-val\">A++</span>
            </div>
            <div class=\"rank-row\">
              <span class=\"rank-body\">QS World</span>
              <span class=\"rank-val\">Ranked</span>
            </div>
            <div class=\"rank-row\">
              <span class=\"rank-body\">Student Rating</span>
              <span class=\"rank-val\">4.8 ★</span>
            </div>
          </div>
        </div>

        <!-- Scholarships + coverage -->
        <div class=\"why-card card-schol\">
          <div class=\"why-num\">
            <span data-count=\"42\" data-format=\"integer\">42</span><span class=\"unit\">%</span>
          </div>
          <p class=\"why-label\">On Scholarship</p>
          <p class=\"why-detail\"><strong>Merit awards up to 100%</strong></p>
          <div class=\"schol-facts\">
            <div class=\"schol-fact\">
              <span class=\"schol-fact-dot\"></span>
              <span class=\"schol-fact-text\"><strong>Merit-based</strong> - no separate application</span>
            </div>
            <div class=\"schol-fact\">
              <span class=\"schol-fact-dot\"></span>
              <span class=\"schol-fact-text\"><strong>Renewable</strong> - maintained with GPA</span>
            </div>
            <div class=\"schol-fact\">
              <span class=\"schol-fact-dot\"></span>
              <span class=\"schol-fact-text\">Awards range from <strong>15% to full tuition</strong></span>
            </div>
          </div>
        </div>

        <!-- Alumni Network -->
        <div class=\"why-card card-alum\">
          <div class=\"why-num\">
            <span data-count=\"96000\" data-format=\"comma\">96,000</span><span class=\"suffix\">+</span>
          </div>
          <p class=\"why-label\">Alumni Network</p>

          <div class=\"alum-impact\">
            <div class=\"alum-impact-item\">
              <svg class=\"alum-icon\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                aria-hidden=\"true\">
                <circle cx=\"10\" cy=\"10\" r=\"8.5\" stroke=\"currentColor\" stroke-width=\"1.3\" />
                <path d=\"M10 1.5C10 1.5 7 5.5 7 10s3 8.5 3 8.5M10 1.5C10 1.5 13 5.5 13 10s-3 8.5-3 8.5M1.5 10h17\"
                  stroke=\"currentColor\" stroke-width=\"1.3\" stroke-linecap=\"round\" />
              </svg>
              <span class=\"alum-impact-val\">105</span>
              <span class=\"alum-impact-lbl\">Countries</span>
            </div>
            <div class=\"alum-impact-item\">
              <svg class=\"alum-icon\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                aria-hidden=\"true\">
                <path d=\"M10 2L12.4 7.6L18.5 8.2L14 12.3L15.4 18.3L10 15.2L4.6 18.3L6 12.3L1.5 8.2L7.6 7.6L10 2Z\"
                  stroke=\"currentColor\" stroke-width=\"1.3\" stroke-linejoin=\"round\" />
              </svg>
              <span class=\"alum-impact-val\">500+</span>
              <span class=\"alum-impact-lbl\">Founders</span>
            </div>
            <div class=\"alum-impact-item\">
              <svg class=\"alum-icon\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                aria-hidden=\"true\">
                <rect x=\"2\" y=\"11\" width=\"3.5\" height=\"7\" rx=\"1\" stroke=\"currentColor\" stroke-width=\"1.3\" />
                <rect x=\"8.25\" y=\"7\" width=\"3.5\" height=\"11\" rx=\"1\" stroke=\"currentColor\" stroke-width=\"1.3\" />
                <rect x=\"14.5\" y=\"3\" width=\"3.5\" height=\"15\" rx=\"1\" stroke=\"currentColor\" stroke-width=\"1.3\" />
              </svg>
              <span class=\"alum-impact-val\">3,200+</span>
              <span class=\"alum-impact-lbl\">in Big Tech</span>
            </div>
            <div class=\"alum-impact-item\">
              <svg class=\"alum-icon\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                aria-hidden=\"true\">
                <path d=\"M10 2.5L17.5 6V10C17.5 13.9 14.2 17.5 10 18.5C5.8 17.5 2.5 13.9 2.5 10V6L10 2.5Z\"
                  stroke=\"currentColor\" stroke-width=\"1.3\" stroke-linejoin=\"round\" />
              </svg>
              <span class=\"alum-impact-val\">800+</span>
              <span class=\"alum-impact-lbl\">PhDs &amp; Academics</span>
            </div>
          </div>
        </div>

        <!-- Global partnerships -->
        <div class=\"why-card card-partners\">
          <div class=\"partners-head\">
            <p class=\"why-label\">Global Partnerships</p>
            <p class=\"why-detail\">Study abroad &amp; dual degrees</p>
          </div>
          <div class=\"globe-canvas\">
            <svg class=\"globe-svg\" viewBox=\"0 0 220 88\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
              aria-hidden=\"true\">
              <defs>
                <pattern id=\"gdots\" x=\"0\" y=\"0\" width=\"12\" height=\"12\" patternUnits=\"userSpaceOnUse\">
                  <circle cx=\"6\" cy=\"6\" r=\"0.8\" fill=\"rgba(255,255,255,0.07)\" />
                </pattern>
                <filter id=\"glow\" x=\"-50%\" y=\"-50%\" width=\"200%\" height=\"200%\">
                  <feGaussianBlur stdDeviation=\"2.5\" result=\"blur\" />
                  <feMerge>
                    <feMergeNode in=\"blur\" />
                    <feMergeNode in=\"SourceGraphic\" />
                  </feMerge>
                </filter>
              </defs>
              <rect width=\"220\" height=\"88\" fill=\"url(#gdots)\" rx=\"6\" />
              <!-- Bezier arcs from India to partner regions -->
              <path d=\"M160 56 C130 18, 60 14, 42 29\" stroke=\"rgba(139,203,183,0.45)\" stroke-width=\"1.4\"
                stroke-dasharray=\"4 3\" />
              <path d=\"M160 56 C118 8, 28 6, 18 27\" stroke=\"rgba(139,203,183,0.38)\" stroke-width=\"1.3\"
                stroke-dasharray=\"4 3\" />
              <path d=\"M160 56 C145 28, 105 20, 92 25\" stroke=\"rgba(139,203,183,0.42)\" stroke-width=\"1.3\"
                stroke-dasharray=\"4 3\" />
              <path d=\"M160 56 C156 38, 182 30, 188 26\" stroke=\"rgba(139,203,183,0.32)\" stroke-width=\"1.1\"
                stroke-dasharray=\"3 3\" />
              <!-- Destination node glow rings -->
              <circle cx=\"42\" cy=\"29\" r=\"7\" fill=\"rgba(139,203,183,0.08)\" stroke=\"rgba(139,203,183,0.2)\"
                stroke-width=\"1\" />
              <circle cx=\"18\" cy=\"27\" r=\"7\" fill=\"rgba(139,203,183,0.08)\" stroke=\"rgba(139,203,183,0.2)\"
                stroke-width=\"1\" />
              <circle cx=\"92\" cy=\"25\" r=\"7\" fill=\"rgba(139,203,183,0.08)\" stroke=\"rgba(139,203,183,0.2)\"
                stroke-width=\"1\" />
              <circle cx=\"188\" cy=\"26\" r=\"6\" fill=\"rgba(139,203,183,0.07)\" stroke=\"rgba(139,203,183,0.18)\"
                stroke-width=\"1\" />
              <!-- Destination nodes (solid) -->
              <circle cx=\"42\" cy=\"29\" r=\"4\" fill=\"rgba(139,203,183,0.9)\" filter=\"url(#glow)\" />
              <circle cx=\"18\" cy=\"27\" r=\"4\" fill=\"rgba(139,203,183,0.9)\" filter=\"url(#glow)\" />
              <circle cx=\"92\" cy=\"25\" r=\"3.5\" fill=\"rgba(139,203,183,0.9)\" filter=\"url(#glow)\" />
              <circle cx=\"188\" cy=\"26\" r=\"3.5\" fill=\"rgba(139,203,183,0.75)\" filter=\"url(#glow)\" />
              <!-- India origin pulse -->
              <circle cx=\"160\" cy=\"56\" r=\"5.5\" fill=\"var(--gl)\" opacity=\"0.95\" />
              <circle cx=\"160\" cy=\"56\" r=\"5.5\" fill=\"none\" stroke=\"rgba(139,203,183,0.5)\" stroke-width=\"1.5\">
                <animate attributeName=\"r\" values=\"5.5;17\" dur=\"2.2s\" repeatCount=\"indefinite\" />
                <animate attributeName=\"opacity\" values=\"0.8;0\" dur=\"2.2s\" repeatCount=\"indefinite\" />
              </circle>
              <!-- Region label pill backgrounds -->
              <rect x=\"29\" y=\"36\" width=\"26\" height=\"11\" rx=\"5.5\" fill=\"rgba(20,35,30,0.85)\" />
              <rect x=\"4\" y=\"34\" width=\"28\" height=\"11\" rx=\"5.5\" fill=\"rgba(20,35,30,0.85)\" />
              <rect x=\"78\" y=\"33\" width=\"28\" height=\"11\" rx=\"5.5\" fill=\"rgba(20,35,30,0.85)\" />
              <rect x=\"178\" y=\"33\" width=\"22\" height=\"11\" rx=\"5.5\" fill=\"rgba(20,35,30,0.85)\" />
              <!-- Region labels -->
              <text x=\"42\" y=\"44.5\" font-size=\"7.5\" fill=\"rgba(255,255,255,0.9)\" font-family=\"sans-serif\"
                font-weight=\"700\" text-anchor=\"middle\">
                UK
              </text>
              <text x=\"18\" y=\"42.5\" font-size=\"7.5\" fill=\"rgba(255,255,255,0.9)\" font-family=\"sans-serif\"
                font-weight=\"700\" text-anchor=\"middle\">
                USA
              </text>
              <text x=\"92\" y=\"41.5\" font-size=\"7.5\" fill=\"rgba(255,255,255,0.9)\" font-family=\"sans-serif\"
                font-weight=\"700\" text-anchor=\"middle\">
                EU
              </text>
              <text x=\"189\" y=\"41.5\" font-size=\"7.5\" fill=\"rgba(255,255,255,0.8)\" font-family=\"sans-serif\"
                font-weight=\"700\" text-anchor=\"middle\">
                SG
              </text>
              <!-- India label -->
              <text x=\"162\" y=\"72\" font-size=\"7.5\" fill=\"rgba(139,203,183,0.9)\" font-family=\"sans-serif\"
                font-weight=\"700\" text-anchor=\"middle\">
                India
              </text>
            </svg>
          </div>
          <div class=\"partners-stats-row\">
            <div class=\"partners-stat-pill\">
              <span class=\"partners-stat-num\">36</span>
              <span class=\"partners-stat-lbl\">Univs</span>
            </div>
            <div class=\"partners-stat-pill\">
              <span class=\"partners-stat-num\">4</span>
              <span class=\"partners-stat-lbl\">continents</span>
            </div>
            <div class=\"partners-stat-pill\">
              <span class=\"partners-stat-num\">Dual</span>
              <span class=\"partners-stat-lbl\">Degrees</span>
            </div>
          </div>
        </div>

        <!-- Trust band (faces + badges) -->
        <div class=\"why-card why-trust\">
          <div class=\"why-trust-people\">
            <div class=\"why-faces\" aria-hidden=\"true\">
              <span class=\"why-face\" style=\"
                  background-image: url('";
        // line 1601
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/ygitam/image1.webp');
                \"></span>
              <span class=\"why-face\" style=\"
                  background-image: url('";
        // line 1604
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/ygitam/image2.webp');
                \"></span>
              <span class=\"why-face\" style=\"
                  background-image: url('";
        // line 1607
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/ygitam/image3.webp');
                \"></span>
              <span class=\"why-face\" style=\"
                  background-image: url('";
        // line 1610
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/ygitam/image4.webp');
                \"></span>
              <span class=\"why-face why-face-more\">28K</span>
            </div>
            <div>
              <p class=\"why-trust-title\">
                A global community of <strong>28,000+ students</strong>
              </p>
              <p class=\"why-trust-sub\">96,000+ alumni across 105 countries</p>
            </div>
          </div>
          <div class=\"why-trust-badges\">
            <div class=\"why-badge\">
              <span class=\"why-badge-num\">28K+</span>
              <span class=\"why-badge-lbl\">Students, 52 countries</span>
            </div>
            <div class=\"why-badge\">
              <span class=\"why-badge-num\">A++</span>
              <span class=\"why-badge-lbl\">NAAC Accredited</span>
            </div>
            <div class=\"why-badge\">
              <span class=\"why-badge-num\">NIRF #88</span>
              <span class=\"why-badge-lbl\">India ranking</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 3: CAMPUSES -->
    <section class=\"campuses-section\" id=\"sec-campuses\" aria-labelledby=\"campuses-heading\">
      <div class=\"campuses-header\">
        <h2 class=\"campuses-title\" id=\"campuses-heading\">
          4 Campuses. <span>One GITAM.</span>
        </h2>
      </div>
      <div class=\"row g-3 campuses-grid\">
        <div class=\"col-6 col-sm-3\">
          <a href=\"https://www.gitam.edu/bengaluru/campus-life\" class=\"campus-card\" target=\"_blank\"
            rel=\"noopener noreferrer\">
            <div class=\"campus-photo\">
              <img src=\"";
        // line 1651
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/Bengaluru1.webp\" class=\"img-fluid w-100 d-none d-lg-block\" alt=\"Bengaluru campus\"
                loading=\"lazy\">
              <img src=\"";
        // line 1653
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/Bengaluru1-mob.webp\" class=\"img-fluid w-100 d-block d-lg-none\"
                alt=\"Bengaluru campus mobile\" loading=\"lazy\">
              <div class=\"campus-photo-texture\"></div>
              <div class=\"campus-photo-overlay\"></div>
              <span class=\"campus-year\">Est. 2012</span>
              <div class=\"campus-city-overlay\">
                <span class=\"campus-city-name\">Bengaluru</span><span class=\"campus-city-sub\">Karnataka</span>
              </div>
            </div>
            <div class=\"campus-info\">
              <div class=\"campus-info-text\">
                <span class=\"campus-acres\">45 Acres</span><span class=\"campus-acres-label\">In the IT hub</span>
              </div>
              <div class=\"campus-arrow\">
                <svg viewBox=\"0 0 13 13\" fill=\"none\">
                  <path d=\"M2 11L11 2M11 2H5M11 2v6\" stroke=\"#007367\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                    stroke-linejoin=\"round\" />
                </svg>
              </div>
            </div>
          </a>
        </div>
        <div class=\"col-6 col-sm-3\">
          <a href=\"https://www.gitam.edu/hyderabad/campus-life\" class=\"campus-card\" target=\"_blank\"
            rel=\"noopener noreferrer\">
            <div class=\"campus-photo\">
              <img src=\"";
        // line 1679
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/Hyderabad1.webp\" class=\"img-fluid w-100 d-none d-lg-block\" alt=\"Hyderabad campus\"
                loading=\"lazy\">
              <img src=\"";
        // line 1681
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/Hyderabad1-mob.webp\" class=\"img-fluid w-100 d-block d-lg-none\"
                alt=\"Hyderabad campus mobile\" loading=\"lazy\">
              <div class=\"campus-photo-texture\"></div>
              <div class=\"campus-photo-overlay\"></div>
              <span class=\"campus-year\">Est. 2009</span>
              <div class=\"campus-city-overlay\">
                <span class=\"campus-city-name\">Hyderabad</span><span class=\"campus-city-sub\">Telangana</span>
              </div>
            </div>
            <div class=\"campus-info\">
              <div class=\"campus-info-text\">
                <span class=\"campus-acres\">120+ Acres</span><span class=\"campus-acres-label\">Largest campus</span>
              </div>
              <div class=\"campus-arrow\">
                <svg viewBox=\"0 0 13 13\" fill=\"none\">
                  <path d=\"M2 11L11 2M11 2H5M11 2v6\" stroke=\"#007367\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                    stroke-linejoin=\"round\" />
                </svg>
              </div>
            </div>
          </a>
        </div>
        <div class=\"col-6 col-sm-3\">
          <a href=\"https://www.gitam.edu/visakhapatnam/campus-life\" class=\"campus-card\" target=\"_blank\"
            rel=\"noopener noreferrer\">
            <div class=\"campus-photo\">
              <img src=\"";
        // line 1707
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/Visakhapatnam1.webp\" class=\"img-fluid w-100 d-none d-lg-block\" alt=\"visakhapatnam-campus\"
                loading=\"lazy\">
              <img src=\"";
        // line 1709
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/Visakhapatnam1-mob.webp\" class=\"img-fluid w-100 d-block d-lg-none\"
                alt=\"visakhapatnam campus mobile\" loading=\"lazy\">
              <div class=\"campus-photo-texture\"></div>
              <div class=\"campus-photo-overlay\"></div>
              <span class=\"campus-year\">Est. 1980</span>
              <div class=\"campus-city-overlay\">
                <span class=\"campus-city-name\">Visakhapatnam</span><span class=\"campus-city-sub\">Andhra Pradesh</span>
              </div>
            </div>
            <div class=\"campus-info\">
              <div class=\"campus-info-text\">
                <span class=\"campus-acres\">100+ Acres</span><span class=\"campus-acres-label\">Beachside campus</span>
              </div>
              <div class=\"campus-arrow\">
                <svg viewBox=\"0 0 13 13\" fill=\"none\">
                  <path d=\"M2 11L11 2M11 2H5M11 2v6\" stroke=\"#007367\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                    stroke-linejoin=\"round\" />
                </svg>
              </div>
            </div>
          </a>
        </div>
        <div class=\"col-6 col-sm-3\">
          <a href=\"https://www.gitam.edu/gimsr/campus-life\" class=\"campus-card\" target=\"_blank\"
            rel=\"noopener noreferrer\">
            <div class=\"campus-photo\">
              <img src=\"";
        // line 1735
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/GIMSR1.webp\" class=\"img-fluid w-100 d-none d-lg-block\" alt=\"gimsr\" loading=\"lazy\">
              <img src=\"";
        // line 1736
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/GIMSR1-mob.webp\" class=\"img-fluid w-100 d-block d-lg-none\" alt=\"gimsr mobile\"
                loading=\"lazy\">
              <div class=\"campus-photo-texture\"></div>
              <div class=\"campus-photo-overlay\"></div>
              <span class=\"campus-year\">Est. 2015</span>
              <div class=\"campus-city-overlay\">
                <span class=\"campus-city-name\">GIMSR</span><span class=\"campus-city-sub\">Visakhapatnam</span>
              </div>
            </div>
            <div class=\"campus-info\">
              <div class=\"campus-info-text\">
                <span class=\"campus-acres\">Medicine</span><span class=\"campus-acres-label\">MBBS, MD</span>
              </div>
              <div class=\"campus-arrow\">
                <svg viewBox=\"0 0 13 13\" fill=\"none\">
                  <path d=\"M2 11L11 2M11 2H5M11 2v6\" stroke=\"#007367\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                    stroke-linejoin=\"round\" />
                </svg>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- SECTION 4: 14 DISCIPLINES (Option 1c — Editorial) -->
    <section class=\"disc-section\" id=\"sec-disciplines\" aria-labelledby=\"disc-heading\">
      <div class=\"disc-header\">
        <div>
          <h2 class=\"disc-title\" id=\"disc-heading\">14 disciplines.<br>One university, <span>endless directions.</span>
          </h2>
          <p class=\"disc-subtitle\">From engineering to medicine, law to liberal arts — discover your calling at GITAM.
          </p>
        </div>
      </div>

      <div class=\"disc-track-wrap\">
        <div class=\"disc-track\" id=\"discTrack\">
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1775
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/arch-desk.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1777
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/arch-mobile.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Architecture</span></div>
          </div>
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1783
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/core-engg-desktop.webp\"
              alt=\"Core Engineering\" loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1785
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/core-engg-mobile.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Core Engineering</span></div>
          </div>
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1791
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/computerscience-desk.webp\"
              alt=\"Computer Science\" loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1793
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/computerscience-mobile.webp\"
              alt=\"Architecture\" loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Computer Science</span></div>
          </div>
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1799
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/humanities-Desk1.webp\"
              alt=\"Humanities &amp; Social Sciences\" loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1801
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/humanities-Mobile1.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Humanities &amp; Social Sciences</span></div>
          </div>
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1807
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/School-of-Law-Desktop.webp\" alt=\"Law\"
              loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1809
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/School-of-Law-Mobile.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Law</span></div>
          </div>
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1815
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/management-Desk1.webp\"
              alt=\"Management\" loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1817
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/management-Mobile1.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Management</span></div>
          </div>
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1823
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/pharmacy-desktop.webp\" alt=\"Pharmacy\"
              loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1825
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/pharmacy-mobile.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Pharmacy</span></div>
          </div>
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1831
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/science-desktop2.webp\" alt=\"Science\"
              loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1833
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/science-mobile2.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Science</span></div>
          </div>
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1839
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/medicine-Desk1.webp\" alt=\"Medicine\"
              loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1841
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/medicine-Mobile1.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Medicine</span></div>
          </div>
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1847
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/eduction-desktop.webp\"
              alt=\"Dental Sciences\" loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1849
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/eduction-mobile.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Education</span></div>
          </div>
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1855
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/nursing-desktop.webp\" alt=\"Nursing\"
              loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1857
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/nursing-mobile.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Nursing</span></div>
          </div>
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1863
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/physio-desktop.webp\" alt=\"Physiotherapy\"
              loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1865
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/physio-mobile.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Physiotherapy</span></div>
          </div>
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1871
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/healthcare-desk.webp\"
              alt=\"Allied Health Sciences\" loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1873
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/healthcare-mobile.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Allied Health Sciences</span></div>
          </div>
          <div class=\"disc-card\">
            <img class=\"disc-card__img d-none d-md-block\" src=\"";
        // line 1879
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/kspp-Desk.webp\" alt=\"Gandhian Studies\"
              loading=\"lazy\" />
            <img class=\"disc-card__img d-md-none\" src=\"";
        // line 1881
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/disciplines/kspp-Mobile.webp\" alt=\"Architecture\"
              loading=\"lazy\" />
            <div class=\"disc-card__overlay\"></div>
            <div class=\"disc-card__info\"><span class=\"disc-card__name\">Public policy</span></div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- SECTION 3: RANKINGS & ACCREDITATIONS -->
    <section class=\"accred-section\" id=\"sec-accreditations\" aria-labelledby=\"accred-heading\">
      <div class=\"accred-header\">
        <div class=\"accred-header-left\">
          <span class=\"accred-tag\">Accreditations &amp; Rankings</span>
          <h2 class=\"accred-heading\" id=\"accred-heading\">
            Recognised by <em>India's finest</em>
          </h2>
        </div>
        <a href=\"https://www.gitam.edu/about/accrediation\" class=\"accred-view-all\" target=\"_blank\" rel=\"noopener\">
          View all
          <svg viewBox=\"0 0 16 16\" width=\"14\" height=\"14\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"
            stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
            <path d=\"M3 8h10M9 4l4 4-4 4\" />
          </svg>
        </a>
      </div>
      <div class=\"accred-track-wrap\" aria-label=\"Scrolling accreditation and rankings badges\">
        <div class=\"accred-track\" aria-hidden=\"true\">
          <!-- Set 1 -->
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 1913
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/naac.png\" width=\"23\" height=\"22\" alt=\"NAAC\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">A++</span>
            <span class=\"accred-name\">NAAC Accreditation</span>
            <span class=\"accred-detail\">Highest Grade</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 1921
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/nirf-logo.png\" width=\"23\" height=\"22\" alt=\"NIRF\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">#88</span>
            <span class=\"accred-name\">NIRF Rankings 2025</span>
            <span class=\"accred-detail\">Overall Category</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 1929
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/qs-logo.png\" width=\"23\" height=\"22\" alt=\"QS\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">1101–1150</span>
            <span class=\"accred-name\">QS Sustainability 2026</span>
            <span class=\"accred-detail\">Overall Ranking</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 1937
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/ugc.png\" width=\"23\" height=\"22\" alt=\"UGC\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">Cat I</span>
            <span class=\"accred-name\">UGC Category I</span>
            <span class=\"accred-detail\">Autonomous University</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 1945
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/nba-logo.png\" width=\"23\" height=\"22\" alt=\"NBA\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">NBA</span>
            <span class=\"accred-name\">NBA Accredited</span>
            <span class=\"accred-detail\">10 Programmes</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 1953
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/qs-logo.png\" width=\"23\" height=\"22\" alt=\"QS Sustainability\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">Asia Rank 392</span>
            <span class=\"accred-name\">QS Sustainability 2026</span>
            <span class=\"accred-detail\">Global Rankings</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 1961
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/The-World.png\" width=\"23\" height=\"22\" alt=\"Times Higher Education\"
                loading=\"lazy\">
            </div>
            <span class=\"accred-value\">1501+</span>
            <span class=\"accred-name\">THE World Rankings</span>
            <span class=\"accred-detail\">2025 Edition</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 1970
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/The-Impact-Rankings.png\" width=\"23\" height=\"22\" alt=\"THE Impact\"
                loading=\"lazy\">
            </div>
            <span class=\"accred-value\">601–800</span>
            <span class=\"accred-name\">THE Impact Rankings</span>
            <span class=\"accred-detail\">2025 Edition</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 1979
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/aicte-logo.png\" width=\"23\" height=\"22\" alt=\"AICTE\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">Approved</span>
            <span class=\"accred-name\">AICTE Approved</span>
            <span class=\"accred-detail\">Engineering &amp; Management</span>
          </div>
          <!-- Set 2 (duplicate for infinite scroll) -->
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 1988
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/naac.png\" width=\"23\" height=\"22\" alt=\"NAAC\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">A++</span>
            <span class=\"accred-name\">NAAC Accreditation</span>
            <span class=\"accred-detail\">Highest Grade</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 1996
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/nirf-logo.png\" width=\"23\" height=\"22\" alt=\"nirf-log\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">#88</span>
            <span class=\"accred-name\">NIRF Rankings 2025</span>
            <span class=\"accred-detail\">Overall Category</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 2004
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/qs-logo.png\" width=\"23\" height=\"22\" alt=\"qs-logo.\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">1101–1150</span>
            <span class=\"accred-name\">QS Sustainability 2026</span>
            <span class=\"accred-detail\">Overall Rankings</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 2012
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/ugc.png\" width=\"23\" height=\"22\" alt=\"UGC\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">Cat I</span>
            <span class=\"accred-name\">UGC Category I</span>
            <span class=\"accred-detail\">Autonomous University</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 2020
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/nba-logo.png\" width=\"23\" height=\"22\" alt=\"nba-logo\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">NBA</span>
            <span class=\"accred-name\">NBA Accredited</span>
            <span class=\"accred-detail\">10 Programmes</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 2028
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/qs-logo.png\" width=\"23\" height=\"22\" alt=\"qs-logo\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">India Rank 47</span>
            <span class=\"accred-name\">QS Sustainability 2026</span>
            <span class=\"accred-detail\">Global Rankings</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 2036
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/The-World.png\" width=\"23\" height=\"22\" alt=\"The-World\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">1501+</span>
            <span class=\"accred-name\">THE World Rankings</span>
            <span class=\"accred-detail\">2025 Edition</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 2044
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/The-Impact-Rankings.png\" width=\"23\" height=\"22\" alt=\"The-Impact-Rankings\"
                loading=\"lazy\">
            </div>
            <span class=\"accred-value\">601–800</span>
            <span class=\"accred-name\">THE Impact Rankings</span>
            <span class=\"accred-detail\">2025 Edition</span>
          </div>
          <div class=\"accred-item\">
            <div class=\"accred-logo\">
              <img src=\"";
        // line 2053
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/rankimages/aicte-logo.png\" width=\"23\" height=\"22\" alt=\"aicte-logo\" loading=\"lazy\">
            </div>
            <span class=\"accred-value\">Approved</span>
            <span class=\"accred-name\">AICTE Approved</span>
            <span class=\"accred-detail\">Engineering &amp; Management</span>
          </div>
        </div>
      </div>
      <!-- Stats bar -->
      <div class=\"accred-stats-bar\">
        <div class=\"accred-stat\">
          <div class=\"accred-stat-num\">46</div>
          <div class=\"accred-stat-label\">
            Years of academic excellence
          </div>
        </div>
        <div class=\"accred-stat\">
          <div class=\"accred-stat-num\">96,000+</div>
          <div class=\"accred-stat-label\">Alumni</div>
        </div>
        <div class=\"accred-stat\">
          <div class=\"accred-stat-num\">105+</div>
          <div class=\"accred-stat-label\">
            Countries represented in alumni network
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 5: EXPLORE PROGRAMS -->
    <section class=\"explore-section\" id=\"sec-explore\" aria-labelledby=\"explore-heading\">
      <div class=\"explore-wrap\">
        <h2 class=\"explore-hd-title\" id=\"explore-heading\">
          Explore your study options
        </h2>
        <p class=\"explore-hd-sub\">
          Explore our affordable and transparent fee structure, making quality
          education accessible to all.
        </p>

        <!-- Unified filter panel -->
        <div class=\"ep-filter-panel\">
          <!-- Level toggle -->
          <div class=\"ep-level-row\" role=\"group\" aria-label=\"Level of Study\">
            <div>
              <input type=\"radio\" name=\"ep-level\" id=\"ep-lvl-ug\" value=\"ug\" class=\"ep-level-radio\" checked />
              <label for=\"ep-lvl-ug\" class=\"ep-level-label\">Undergraduate</label>
            </div>
            <div>
              <input type=\"radio\" name=\"ep-level\" id=\"ep-lvl-pg\" value=\"pg\" class=\"ep-level-radio\" />
              <label for=\"ep-lvl-pg\" class=\"ep-level-label\">Postgraduate</label>
            </div>
          </div>

          <!-- Filter columns -->
          <div class=\"ep-filter-cols ep-visible\" id=\"epFilterCols\">
            <div class=\"ep-filter-cols-inner\">
              <!-- Discipline -->
              <div class=\"ep-filter-col-disc\">
                <div class=\"ep-filter-label\">Discipline</div>
                <select id=\"epDiscSelect\" class=\"ep-disc-select\" aria-label=\"Discipline\">
                  <option value=\"\" disabled selected>
                    Select discipline
                  </option>
                </select>
              </div>

              <div class=\"ep-filter-col-divider\"></div>

              <!-- Campus -->
              <div class=\"ep-filter-col-campus\">
                <div class=\"ep-filter-label\">Campus</div>
                <div id=\"epCampusGroup\" class=\"ep-campus-col\" role=\"group\" aria-label=\"Campus\">
                  <div>
                    <input type=\"checkbox\" id=\"ep-c-vizag\" value=\"vizag\" class=\"ep-pill-input ep-campus-chk\" />
                    <label for=\"ep-c-vizag\" class=\"ep-pill-label\"><span class=\"ep-pill-box\"></span>Visakhapatnam</label>
                  </div>
                  <div>
                    <input type=\"checkbox\" id=\"ep-c-hyd\" value=\"hyd\" class=\"ep-pill-input ep-campus-chk\" />
                    <label for=\"ep-c-hyd\" class=\"ep-pill-label\"><span class=\"ep-pill-box\"></span>Hyderabad</label>
                  </div>
                  <div>
                    <input type=\"checkbox\" id=\"ep-c-blr\" value=\"blr\" class=\"ep-pill-input ep-campus-chk\" />
                    <label for=\"ep-c-blr\" class=\"ep-pill-label\"><span class=\"ep-pill-box\"></span>Bengaluru</label>
                  </div>
                </div>
              </div>

              <div class=\"ep-filter-col-divider\"></div>

              <!-- Programme -->
              <div class=\"ep-filter-col-prog\">
                <div class=\"ep-filter-label\">Programme</div>
                <div class=\"ep-prog-scroll-wrap\">
                  <div id=\"epProgGroup\" class=\"ep-prog-col\" role=\"group\" aria-label=\"Programme\"></div>
                  <span class=\"ep-prog-scroll-hint\" aria-hidden=\"true\">Scroll for more ↓</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Results -->
          <div class=\"ep-results-area\" id=\"epResultsArea\" aria-live=\"polite\" aria-atomic=\"false\"></div>
        </div>
    </section>

    <!-- SECTION 7: PLACEMENTS -->
    <section class=\"placements-section\" aria-labelledby=\"placements-heading\">
      <div class=\"placements-header\" id=\"sec-placements\">
        <h2 class=\"placements-title\" id=\"placements-heading\">From GITAM.</h2>
        <span class=\"placements-title-green\">To the world's best.</span>
        <p class=\"placements-sub\">
          A snapshot of the <strong>Class of 2025</strong>, where they landed
          and what they're building.
        </p>
      </div>

      <!-- Recruiters strip (under placements headline) -->
      <section class=\"recruiters-section\">
        <div class=\"recruiters-hero\">
          <div class=\"recruiters-eyebrow\">
            <span class=\"recruiters-eyebrow-diamond\">◆</span>
            <span class=\"recruiters-eyebrow-text\">Our Students. Their Future.</span>
            <span class=\"recruiters-eyebrow-diamond\">◆</span>
          </div>
          <h2 class=\"recruiters-main-title\">Top Companies</h2>
          <span class=\"recruiters-main-title-gold\">Hire From Our Campus</span>
          <div class=\"recruiters-divider\"></div>
          <p class=\"recruiters-hero-sub\">
            From emerging startups to global giants - our students build the
            future everywhere.
          </p>
          <div class=\"recruiters-stats-bar\">
            <div class=\"recruiters-stat\">
              <div class=\"recruiters-stat-icon\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
                  stroke-linejoin=\"round\">
                  <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\" />
                  <circle cx=\"9\" cy=\"7\" r=\"4\" />
                  <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\" />
                  <path d=\"M16 3.13a4 4 0 0 1 0 7.75\" />
                </svg>
              </div>
              <div class=\"recruiters-stat-text\">
                <div class=\"recruiters-stat-number\">800+</div>
                <div class=\"recruiters-stat-label\">Top Recruiters</div>
              </div>
            </div>
            <div class=\"recruiters-stat\">
              <div class=\"recruiters-stat-icon\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
                  stroke-linejoin=\"round\">
                  <rect x=\"2\" y=\"7\" width=\"20\" height=\"14\" rx=\"2\" />
                  <path d=\"M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16\" />
                </svg>
              </div>
              <div class=\"recruiters-stat-text\">
                <div class=\"recruiters-stat-number\">20+</div>
                <div class=\"recruiters-stat-label\">Countries</div>
              </div>
            </div>
            <div class=\"recruiters-stat\">
              <div class=\"recruiters-stat-icon\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
                  stroke-linejoin=\"round\">
                  <line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\" />
                  <line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\" />
                  <line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\" />
                </svg>
              </div>
              <div class=\"recruiters-stat-text\">
                <div class=\"recruiters-stat-number\">&#8377;1.4 Crore</div>
                <div class=\"recruiters-stat-label\">Highest Package</div>
              </div>
            </div>
          </div>
        </div>
       <div class=\"recruiters-track-wrap\">
          <div class=\"recruiter-row recruiter-row-1\">
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2234
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Amazon.png\" alt=\"Amazon\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Amazon</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2239
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Microsoft.png\" alt=\"Microsoft\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Microsoft</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2244
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Google.png\" alt=\"Google\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Google</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2249
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Deloitte.png\" alt=\"Deloitte\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Deloitte</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2254
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Infosys.png\" alt=\"Infosys\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Infosys</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2259
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/TCS.png\" alt=\"TCS\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">TCS</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2264
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Wipro.png\" alt=\"Wipro\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Wipro</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2269
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Goldman-Sachs.png\" alt=\"Goldman Sachs\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Goldman Sachs</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2274
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/JP-Morgan.png\" alt=\"JP Morgan\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">JP Morgan</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2279
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/McKinsey.png\" alt=\"McKinsey\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">McKinsey</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2284
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/KPMG.jpg\" alt=\"KPMG\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">KPMG</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2289
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/EY.png\" alt=\"EY\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">EY</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2294
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/PwC.png\" alt=\"PwC\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">PwC</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2299
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Accenture.png\" alt=\"Accenture\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Accenture</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2304
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Cognizant.png\" alt=\"Cognizant\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Cognizant</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2309
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/HCL.png\" alt=\"HCL\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">HCL</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2314
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Capgemini.png\" alt=\"Capgemini\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Capgemini</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2319
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Oracle.png\" alt=\"Oracle\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Oracle</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2324
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/SAP.png\" alt=\"SAP\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">SAP</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2329
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/IBM.png\" alt=\"IBM\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">IBM</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2334
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Flipkart.png\" alt=\"Flipkart\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Flipkart</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2339
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Swiggy.png\" alt=\"Swiggy\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Swiggy</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2344
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Zomato.png\" alt=\"Zomato\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Zomato</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2349
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/PhonePe.png\" alt=\"PhonePe\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">PhonePe</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2354
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Razorpay.png\" alt=\"Razorpay\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Razorpay</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2359
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Byjus.png\" alt=\"Byju's\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Byju's</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2364
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Microsoft.png\" alt=\"Microsoft\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Microsoft</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2369
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Google.png\" alt=\"Google\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Google</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2374
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Deloitte.png\" alt=\"Deloitte\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Deloitte</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2379
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Infosys.png\" alt=\"Infosys\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Infosys</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2384
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/TCS.png\" alt=\"TCS\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">TCS</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2389
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Wipro.png\" alt=\"Wipro\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Wipro</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2394
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Goldman-Sachs.png\" alt=\"Goldman Sachs\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Goldman Sachs</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2399
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/JP-Morgan.png\" alt=\"JP Morgan\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">JP Morgan</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2404
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/McKinsey.png\" alt=\"McKinsey\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">McKinsey</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2409
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/KPMG.jpg\" alt=\"KPMG\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">KPMG</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2414
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/EY.png\" alt=\"EY\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">EY</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2419
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/PwC.png\" alt=\"PwC\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">PwC</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2424
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Accenture.png\" alt=\"Accenture\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Accenture</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2429
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Cognizant.png\" alt=\"Cognizant\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Cognizant</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2434
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/HCL.png\" alt=\"HCL\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">HCL</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2439
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Capgemini.png\" alt=\"Capgemini\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Capgemini</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2444
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Oracle.png\" alt=\"Oracle\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Oracle</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2449
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/SAP.png\" alt=\"SAP\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">SAP</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2454
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/IBM.png\" alt=\"IBM\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">IBM</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2459
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Flipkart.png\" alt=\"Flipkart\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Flipkart</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2464
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Swiggy.png\" alt=\"Swiggy\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Swiggy</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2469
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Zomato.png\" alt=\"Zomato\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Zomato</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2474
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/PhonePe.png\" alt=\"PhonePe\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">PhonePe</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2479
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Razorpay.png\" alt=\"Razorpay\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Razorpay</span>
              </div>
            </div>
          </div>
          <div class=\"recruiter-row recruiter-row-2\">
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2486
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Paytm.png\" alt=\"Paytm\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Paytm</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2491
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/HDFC-Bank.png\" alt=\"HDFC Bank\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">HDFC Bank</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2496
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/ICICI-Bank.png\" alt=\"ICICI Bank\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">ICICI Bank</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2501
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Axis-Bank.png\" alt=\"Axis Bank\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Axis Bank</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2506
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Bajaj-Finserv.png\" alt=\"Bajaj Finserv\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Bajaj Finserv</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2511
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/LT.png\" alt=\"LT\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">L&amp;T</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2516
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Tata-Motors.png\" alt=\"Tata Motors\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Tata Motors</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2521
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Mahindra.png\" alt=\"Mahindra\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Mahindra</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2526
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Hero-MotoCorp.png\" alt=\"Hero MotoCorp\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Hero MotoCorp</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2531
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Bosch.png\" alt=\"Bosch\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Bosch</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2536
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Siemens.png\" alt=\"Siemens\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Siemens</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2541
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/ABB.png\" alt=\"ABB\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">ABB</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2546
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Schneider-Electric.png\" alt=\"Schneider Electric\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Schneider Electric</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2551
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Honeywell.png\" alt=\"Honeywell\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Honeywell</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2556
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/3M.png\" alt=\"3M\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">3M</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2561
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Unilever.png\" alt=\"Unilever\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Unilever</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2566
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/ITC.png\" alt=\"ITC\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">ITC</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2571
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Asian-Paints.png\" alt=\"Asian Paints\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Asian Paints</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2576
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Dr-Reddys.png\" alt=\"Dr. Reddy's\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Dr. Reddy's</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2581
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Sun-Pharma.png\" alt=\"Sun Pharma\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Sun Pharma</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2586
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Cipla.png\" alt=\"Cipla\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Cipla</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2591
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Vedanta.png\" alt=\"Vedanta\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Vedanta</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2596
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/JSW-Steel.png\" alt=\"JSW Steel\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">JSW Steel</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2601
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/upGrad.png\" alt=\"upGrad\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">upGrad</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2606
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Byjus.png\" alt=\"Byju's\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Byju's</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2611
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Paytm.png\" alt=\"Paytm\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Paytm</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2616
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/HDFC-Bank.png\" alt=\"HDFC Bank\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">HDFC Bank</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2621
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/ICICI-Bank.png\" alt=\"ICICI Bank\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">ICICI Bank</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2626
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Axis-Bank.png\" alt=\"Axis Bank\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Axis Bank</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2631
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Bajaj-Finserv.png\" alt=\"Bajaj Finserv\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Bajaj Finserv</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2636
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/LT.png\" alt=\"L&amp;T\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">L&amp;T</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2641
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Tata-Motors.png\" alt=\"Tata Motors\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Tata Motors</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2646
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Mahindra.png\" alt=\"Mahindra\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Mahindra</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2651
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Hero-MotoCorp.png\" alt=\"Hero MotoCorp\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Hero MotoCorp</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2656
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Bosch.png\" alt=\"Bosch\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Bosch</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2661
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Siemens.png\" alt=\"Siemens\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Siemens</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2666
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/ABB.png\" alt=\"ABB\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">ABB</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2671
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Schneider-Electric.png\" alt=\"Schneider Electric\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Schneider Electric</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2676
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Honeywell.png\" alt=\"Honeywell\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Honeywell</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2681
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/3M.png\" alt=\"3M\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">3M</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2686
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Unilever.png\" alt=\"Unilever\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Unilever</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2691
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/ITC.png\" alt=\"ITC\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">ITC</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2696
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Asian-Paints.png\" alt=\"Asian Paints\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Asian Paints</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2701
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Dr-Reddys.png\" alt=\"Dr. Reddy's\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Dr. Reddy's</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2706
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Sun-Pharma.png\" alt=\"Sun Pharma\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Sun Pharma</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2711
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Cipla.png\" alt=\"Cipla\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Cipla</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2716
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Vedanta.png\" alt=\"Vedanta\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Vedanta</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2721
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/JSW-Steel.png\" alt=\"JSW Steel\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">JSW Steel</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2726
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/upGrad.png\" alt=\"upGrad\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">upGrad</span>
              </div>
            </div>
            <div class=\"recruiter-item\">
              <div class=\"recruiter-chip\">
                <img class=\"recruiter-chip-icon\" src=\"";
        // line 2731
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/recruiters/Byjus.png\" alt=\"recruiter-chip\" loading=\"lazy\" decoding=\"async\"><span class=\"recruiter-chip-name\">Byju's</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class=\"placements-stage\" id=\"placementsStage\">
        <div class=\"placements-track\" id=\"placementsTrack\">
          <div class=\"pl-card\">
            <div class=\"pl-photo pl-photo-1\"></div>
            <div class=\"pl-overlay\"></div>
            <div class=\"pl-info\">
              <span class=\"pl-course-tag pl-reveal\">CSE-CS &middot; Class of 2025-2026</span>
              <h3 class=\"pl-company\">Shruthi Mishra</h3>
              <p class=\"pl-role pl-reveal\">Cyber Security Analyst</p>
              <p class=\"pl-student-name pl-reveal\">Visa</p>
              <p class=\"pl-class\">CSE-CS</p>
            </div>
          </div>
          <div class=\"pl-card\">
            <div class=\"pl-photo pl-photo-2\"></div>
            <div class=\"pl-overlay\"></div>
            <div class=\"pl-info\">
              <span class=\"pl-course-tag pl-reveal\">CSE-CS &middot; Class of 2025-2026</span>
              <h3 class=\"pl-company\">Madapadi Bharathi Rani</h3>
              <p class=\"pl-role pl-reveal\">Software Consulting Engineer</p>
              <p class=\"pl-student-name pl-reveal\">Cisco</p>
              <p class=\"pl-class\">CSE-CS</p>
            </div>
          </div>
          <div class=\"pl-card\">
            <div class=\"pl-photo pl-photo-3\"></div>
            <div class=\"pl-overlay\"></div>
            <div class=\"pl-info\">
              <span class=\"pl-course-tag pl-reveal\">CSE &middot; Class of 2025-2026</span>
              <h3 class=\"pl-company\">Aditya Tiwari</h3>
              <p class=\"pl-role pl-reveal\">System Engineer</p>
              <p class=\"pl-student-name pl-reveal\">JTP</p>
              <p class=\"pl-class\">CSE</p>
            </div>
          </div>
          <div class=\"pl-card\">
            <div class=\"pl-photo pl-photo-4\"></div>
            <div class=\"pl-overlay\"></div>
            <div class=\"pl-info\">
              <span class=\"pl-course-tag pl-reveal\">CSE &middot; Class of 2025-2026</span>
              <h3 class=\"pl-company\">Sai Praseeda Atluri</h3>
              <p class=\"pl-role pl-reveal\">C C Compilers and Build Optimizations Internship</p>
              <p class=\"pl-student-name pl-reveal\">Synopsys</p>
              <p class=\"pl-class\">CSE</p>
            </div>
          </div>
          <div class=\"pl-card\">
            <div class=\"pl-photo pl-photo-5\"></div>
            <div class=\"pl-overlay\"></div>
            <div class=\"pl-info\">
              <span class=\"pl-course-tag pl-reveal\">CSE &middot; Class of 2025-2026</span>
              <h3 class=\"pl-company\">Parvathini Rasagna</h3>
              <p class=\"pl-role pl-reveal\">Forward Deployed Engineering Intern</p>
              <p class=\"pl-student-name pl-reveal\">Workato</p>
              <p class=\"pl-class\">CSE</p>
            </div>
          </div>
          <div class=\"pl-card\">
            <div class=\"pl-photo pl-photo-6\"></div>
            <div class=\"pl-overlay\"></div>
            <div class=\"pl-info\">
              <span class=\"pl-course-tag pl-reveal\">CSE &middot; Class of 2025-2026</span>
              <h3 class=\"pl-company\">Sasmit Singh</h3>
              <p class=\"pl-role pl-reveal\">Prime - System Engineer</p>
              <p class=\"pl-student-name pl-reveal\">TCS</p>
              <p class=\"pl-class\">CSE</p>
            </div>
          </div>
          <div class=\"pl-card\">
            <div class=\"pl-photo pl-photo-7\"></div>
            <div class=\"pl-overlay\"></div>
            <div class=\"pl-info\">
              <span class=\"pl-course-tag pl-reveal\">CSE &middot; Class of 2025-2026</span>
              <h3 class=\"pl-company\">Panchadarla Varshith Sai Raj</h3>
              <p class=\"pl-role pl-reveal\">Associate Consultant</p>
              <p class=\"pl-student-name pl-reveal\">Oracle</p>
              <p class=\"pl-class\">CSE</p>
            </div>
          </div>
          <div class=\"pl-card\">
            <div class=\"pl-photo pl-photo-8\"></div>
            <div class=\"pl-overlay\"></div>
            <div class=\"pl-info\">
              <span class=\"pl-course-tag pl-reveal\">EECE &middot; Class of 2025-2026</span>
              <h3 class=\"pl-company\">Dhatri Medarametla</h3>
              <p class=\"pl-role pl-reveal\">Software Engineer</p>
              <p class=\"pl-student-name pl-reveal\">Everuptime</p>
              <p class=\"pl-class\">EECE</p>
            </div>
          </div>
          <div class=\"pl-card\">
            <div class=\"pl-photo pl-photo-9\"></div>
            <div class=\"pl-overlay\"></div>
            <div class=\"pl-info\">
              <span class=\"pl-course-tag pl-reveal\">CSE &middot; Class of 2025-2026</span>
              <h3 class=\"pl-company\">Bingumalla Likith</h3>
              <p class=\"pl-role pl-reveal\">Engineering Intern</p>
              <p class=\"pl-student-name pl-reveal\">Zeta</p>
              <p class=\"pl-class\">CSE</p>
            </div>
          </div>
          <div class=\"pl-card\">
            <div class=\"pl-photo pl-photo-10\"></div>
            <div class=\"pl-overlay\"></div>
            <div class=\"pl-info\">
              <span class=\"pl-course-tag pl-reveal\">CSE &middot; Class of 2025-2026</span>
              <h3 class=\"pl-company\">Vishal Kallapudi</h3>
              <p class=\"pl-role pl-reveal\">Digital Trust Intern</p>
              <p class=\"pl-student-name pl-reveal\">KPMG</p>
              <p class=\"pl-class\">CSE</p>
            </div>
          </div>
          <div class=\"pl-card\">
            <div class=\"pl-photo pl-photo-11\"></div>
            <div class=\"pl-overlay\"></div>
            <div class=\"pl-info\">
              <span class=\"pl-course-tag pl-reveal\">CSE-DS &middot; Class of 2025-2026</span>
              <h3 class=\"pl-company\">Yoshitha Maddineni</h3>
              <p class=\"pl-role pl-reveal\">Analyst Product Engineering</p>
              <p class=\"pl-student-name pl-reveal\">Deloitte</p>
              <p class=\"pl-class\">CSE-DS</p>
            </div>
          </div>
          <div class=\"pl-card\">
            <div class=\"pl-photo pl-photo-12\"></div>
            <div class=\"pl-overlay\"></div>
            <div class=\"pl-info\">
              <span class=\"pl-course-tag pl-reveal\">CSE &middot; Class of 2025-2026</span>
              <h3 class=\"pl-company\">Praseeda Bannaravuru</h3>
              <p class=\"pl-role pl-reveal\">SysAdmin Intern</p>
              <p class=\"pl-student-name pl-reveal\">D.E.Shaw India</p>
              <p class=\"pl-class\">CSE</p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"placements-controls\">
        <button class=\"pl-arr\" data-dir=\"-1\" aria-label=\"Previous\">
          <svg viewBox=\"0 0 14 14\" fill=\"none\">
            <path d=\"M9 2 4 7l5 5\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
          </svg>
        </button>
        <div class=\"pl-dots\" id=\"placementDots\"></div>
        <button class=\"pl-arr\" data-dir=\"1\" aria-label=\"Next\">
          <svg viewBox=\"0 0 14 14\" fill=\"none\">
            <path d=\"M5 2l5 5-5 5\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
          </svg>
        </button>
      </div>
    </section>

    <!-- SECTION 8: HIGHER EDUCATION ADMITS -->
    <section class=\"higher-ed-section\" id=\"sec-highered\" aria-labelledby=\"highered-heading\">
      <div class=\"higher-ed-header\">
        <h2 class=\"higher-ed-title\" id=\"highered-heading\">
          GITAM to the <span>World's Best</span> Universities.
        </h2>
        <p class=\"higher-ed-sub\">
          Alumni who went on to pursue higher education at top global
          institutions.
        </p>
      </div>
      <div class=\"he-grid\">

        <!-- Featured Card -->
        <div class=\"he-card he-card-wide he-grad-1\" tabindex=\"0\">
          <!-- <div class=\"he-flag-bg\">🇺🇸</div> -->
          <div class=\"he-overlay\"></div>
          <div class=\"he-top\">
            <span class=\"he-dept-tag he-reveal\">GIT CSE · 2025</span>
            <span class=\"he-year-tag\">MEng</span>
          </div>
          <div class=\"he-bottom\">
            <div class=\"he-uni\">
              <span class=\"he-flag\">
                <img loading=\"lazy\" src=\"";
        // line 2913
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/university-logos/University-of-Chicago-small.png\" class=\"chicago-img\"
                  alt=\"University-of-Chicago\">
              </span>

            </div>
            <h3 class=\"he-name he-reveal\">Ratna Varshith Kolachala</h3>
            <p class=\"he-meta he-reveal\">Quantum Engineering</p>
          </div>
        </div>

        <div class=\"he-card he-grad-2\" tabindex=\"0\">
          <!-- <div class=\"he-flag-bg\">🇺🇸</div> -->
          <div class=\"he-overlay\"></div>
          <div class=\"he-top\">
            <span class=\"he-dept-tag he-reveal\">GIT EECE · 2025</span>
            <span class=\"he-year-tag\">MS</span>
          </div>
          <div class=\"he-bottom\">
            <div class=\"he-uni\">
              <span class=\"he-flag\">

                <img loading=\"lazy\" src=\"";
        // line 2934
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/university-logos/Columbia-University-small.webp\" class=\"columbia-img\"
                  alt=\"Columbia-University\">
              </span>

            </div>
            <h3 class=\"he-name he-reveal\">Siddhardha Nanda</h3>
            <p class=\"he-meta he-reveal\">Biomedical Engineering</p>
          </div>
        </div>

        <div class=\"he-card he-grad-3\" tabindex=\"0\">
          <!-- <div class=\"he-flag-bg\">🇺🇸</div> -->
          <div class=\"he-overlay\"></div>
          <div class=\"he-top\">
            <span class=\"he-dept-tag he-reveal\">GIT CSE · 2025</span>
            <span class=\"he-year-tag\">MS</span>
          </div>
          <div class=\"he-bottom\">
            <div class=\"he-uni\">
              <span class=\"he-flag\">
                <img loading=\"lazy\" src=\"";
        // line 2954
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/university-logos/new-york-university-small.png\" class=\"newyork-img\"
                  alt=\"new-york-university\">

              </span>

            </div>
            <h3 class=\"he-name he-reveal\">Jushatha Varsha Koduri</h3>
            <p class=\"he-meta he-reveal\">Management of Technology</p>
          </div>
        </div>

        <div class=\"he-card he-grad-4\" tabindex=\"0\">
          <!-- <div class=\"he-flag-bg\">🇺🇸</div> -->
          <div class=\"he-overlay\"></div>
          <div class=\"he-top\">
            <span class=\"he-dept-tag he-reveal\">GIT EECE · 2024</span>
            <span class=\"he-year-tag\">MSE</span>
          </div>
          <div class=\"he-bottom\">
            <div class=\"he-uni\">
              <span class=\"he-flag\">
                <img loading=\"lazy\" src=\"";
        // line 2975
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/university-logos/University-of-Pennsylvania-small.png\"
                  class=\"pennsylvania-img\" alt=\"University-of-Pennsylvania\">

              </span>

            </div>
            <h3 class=\"he-name he-reveal\">Surya Sandeep Akella</h3>
            <p class=\"he-meta he-reveal\">Electrical Engineering</p>
          </div>
        </div>

        <div class=\"he-card he-grad-5\" tabindex=\"0\">
          <!-- <div class=\"he-flag-bg\">🇬🇧</div> -->
          <div class=\"he-overlay\"></div>
          <div class=\"he-top\">
            <span class=\"he-dept-tag he-reveal\">GIT CSE · 2025</span>
            <span class=\"he-year-tag\">MSc</span>
          </div>
          <div class=\"he-bottom\">
            <div class=\"he-uni\">
              <span class=\"he-flag\">

                <img loading=\"lazy\" src=\"";
        // line 2997
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/university-logos/University-of-Edinburgh-small.png\"
                  class=\"edinburgh-img\" alt=\"University-of-Edinburgh\">

              </span>

            </div>
            <h3 class=\"he-name he-reveal\">Tejomurtula Kameswari Yasaswini</h3>
            <p class=\"he-meta he-reveal\">Cyber Security</p>
          </div>
        </div>

        <div class=\"he-card he-grad-6\" tabindex=\"0\">

          <div class=\"he-overlay\"></div>
          <div class=\"he-top\">
            <span class=\"he-dept-tag he-reveal\">GIT CSE · 2024</span>
            <span class=\"he-year-tag\">MSc</span>
          </div>
          <div class=\"he-bottom\">
            <div class=\"he-uni\">
              <span class=\"he-flag\">

                <img loading=\"lazy\" src=\"";
        // line 3019
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/university-logos/London-School-of-Economics-small.png\"
                  class=\"economics-img\" alt=\"London-School-of-Economics\">

              </span>

            </div>
            <h3 class=\"he-name he-reveal\">Ram Ridhan</h3>
            <p class=\"he-meta he-reveal\">Data Science</p>
          </div>
        </div>

      </div>
    </section>

    <!-- SECTION 8B: INTERNATIONAL COLLABORATIONS (photo marquee) -->


     <section
        class=\"gn-section\"
        id=\"sec-partnerships\"
        aria-labelledby=\"gn-heading\"
      >
        <div class=\"gn-glow\" aria-hidden=\"true\"></div>
        <div class=\"gn-head\">
          <div class=\"gn-head-left\">
            <span class=\"gn-eyebrow\">Global Network</span>
            <h2 class=\"gn-title\" id=\"gn-heading\">
              Partnerships and <span>Collaborations</span>
            </h2>
            <p class=\"gn-sub\">
              Partnerships with 100+ universities and industry leaders across
              25+ countries for research, student exchange, and dual degrees.
            </p>
          </div>
          <a
            href=\"https://www.gitam.edu/international\"
            class=\"gn-view-all\"
            target=\"_blank\"
            rel=\"noopener\"
          >
            All collaborations
            <svg
              viewBox=\"0 0 16 16\"
              width=\"14\"
              height=\"14\"
              fill=\"none\"
              stroke=\"currentColor\"
              stroke-width=\"2\"
              stroke-linecap=\"round\"
              stroke-linejoin=\"round\"
              aria-hidden=\"true\"
            >
              <path d=\"M3 8h10M9 4l4 4-4 4\" />
            </svg>
          </a>
        </div>

        <!-- Row 1: scrolls right to left -->
        <div class=\"gn-track-wrap\" aria-label=\"Partner organisations, set one\">
          <div class=\"gn-row gn-rtl\">
            <!-- original set -->
            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                 <img class=\"gn-logo-img d-none d-sm-block\" src=\"";
        // line 3082
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Academy-of-Hospital-Administration.webp\" alt=\"Academy of Hospital Administration\"
              loading=\"lazy\" decoding=\"async\"/>
            <img class=\"gn-logo-img d-sm-none\" src=\"";
        // line 3084
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Academy-of-Hospital-Administration-AHA-mobile.webp\"
              alt=\"Academy of Hospital Administration\" loading=\"lazy\" decoding=\"async\"/>
              </span>
              <!-- <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>CSIR-IICT</div> -->
              <div class=\"gn-desc\">University of
                Academy of Hospital Administration</div>
            </div>
            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
               <img class=\"gn-logo-img d-none d-sm-block\" src=\"";
        // line 3093
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Airports-Authority-of-India.webp\" alt=\"Airports Authority of India\"
              loading=\"lazy\" decoding=\"async\"/>
            <img class=\"gn-logo-img d-sm-none\" src=\"";
        // line 3095
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Airports-Authority-of-India-mobile.webp\" alt=\"Airports Authority of India\"
              loading=\"lazy\" decoding=\"async\"/>
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127482;&#127480;</span>Airports Authority of India</div>
              <!-- <div class=\"gn-desc\">USA &middot; Industry R&amp;D Partner</div> -->
            </div>
            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img d-none d-sm-block\" src=\"";
        // line 3103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/AMTZ.webp\" alt=\"AMTZ\" loading=\"lazy\"
              decoding=\"async\"/>
            <img class=\"gn-logo-img d-sm-none\" src=\"";
        // line 3105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/AMTZ-mobile.webp\" alt=\"AMTZ\" loading=\"lazy\"
              decoding=\"async\"/>
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127466;&#127480;</span>AMTZ</div>
             <div class=\"gn-desc\">Andhra Pradesh MedTech Zone</div> 
            </div>
            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                 <img class=\"gn-logo-img d-none d-sm-block\"
              src=\"";
        // line 3114
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/CSIR-Indian-Institute-of-Chemical-Technology-CSIR-IICT.webp\" alt=\"CSIR-IICT\" loading=\"lazy\"
              decoding=\"async\"/>
            <img class=\"gn-logo-img d-sm-none\"
              src=\"";
        // line 3117
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/CSIR-Indian-Institute-of-Chemical-Technology-CSIR-IICT-mobile.webp\" alt=\"CSIR-IICT\"
              loading=\"lazy\" decoding=\"async\"/>
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>CSIR-IICT</div>
              <div class=\"gn-desc\">CSIR Indian Institute of Chemical Technology</div>
            </div>
           
            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img d-none d-sm-block\"
              src=\"";
        // line 3127
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/CSIR-National-Institute-of-Oceanography-CSIR-NIO.webp\" alt=\"CSIR-NIO\" loading=\"lazy\"
              decoding=\"async\"/>
            <img class=\"gn-logo-img d-sm-none\"
              src=\"";
        // line 3130
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/CSIR-National-Institute-of-Oceanography-CSIR-NIO-mobile.webp\" alt=\"CSIR-NIO\" loading=\"lazy\"
              decoding=\"async\"/>
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>CSIR-NIO</div>
              <div class=\"gn-desc\">CSIR National Institute of Oceanography</div>
            </div>

            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                 <img class=\"gn-logo-img d-none d-sm-block\" src=\"";
        // line 3139
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/HSL.webp\" alt=\"HSL\" loading=\"lazy\"
              decoding=\"async\"/>
            <img class=\"gn-logo-img d-sm-none\" src=\"";
        // line 3141
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/HSL-mobile.webp\" alt=\"HSL\" loading=\"lazy\" decoding=\"async\"
             />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127482;&#127480;</span>HSL</div>
               <div class=\"gn-desc\">Hindustan Shipyard Limited</div> 
            </div>

            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                 <img class=\"gn-logo-img d-none d-sm-block\"
              src=\"";
        // line 3151
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/ICAR-Central-Agroforestry-Research-Institute-CAFRI.webp\" alt=\"ICAR-CAFRI\" loading=\"lazy\"
              decoding=\"async\"/>
            <img class=\"gn-logo-img d-sm-none\"
              src=\"";
        // line 3154
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/ICAR-Central-Agroforestry-Research-Institute-CAFRI-mobile.webp\" alt=\"ICAR-CAFRI\" loading=\"lazy\"
              decoding=\"async\"/>
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127466;&#127480;</span>ICAR-CAFRI</div>
              <div class=\"gn-desc\">ICAR Central Agroforestry Research Institute</div>
            </div>

            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img d-none d-sm-block\" src=\"";
        // line 3163
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/IKS-Health.webp\" alt=\"IKS Health\" loading=\"lazy\"
              decoding=\"async\"/>
            <img class=\"gn-logo-img d-sm-none\" src=\"";
        // line 3165
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/IKS-health-mobile.webp\" alt=\"IKS Health\" loading=\"lazy\"
              decoding=\"async\"/>
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>IKS Health</div>
              <!-- <div class=\"gn-desc\">India &middot; MedTech Innovation Hub</div> -->
            </div>

            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                   <img class=\"gn-logo-img d-none d-sm-block\" src=\"";
        // line 3174
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Indian-Biomedical-Skill-Consortium-IBSC.webp\"
              alt=\"IBSC\" loading=\"lazy\" decoding=\"async\"/>
            <img class=\"gn-logo-img d-sm-none\" src=\"";
        // line 3176
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Indian-Biomedical-Skill-Consortium-IBSC-mobile.webp\"
              alt=\"IBSC\" loading=\"lazy\" decoding=\"async\"/>
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>IBSC</div>
              <div class=\"gn-desc\">Indian Biomedical Skill Consortium</div>
            </div>

            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img d-none d-sm-block\"
              src=\"";
        // line 3186
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Indian-Institute-of-Petroleum-and-Energy-IIPE.webp\" alt=\"IIPE\" loading=\"lazy\"
              decoding=\"async\"/>
            <img class=\"gn-logo-img d-sm-none\"
              src=\"";
        // line 3189
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Indian-Institute-of-Petroleum-and-Energy-IIPE-mobile.webp\" alt=\"IIPE\" loading=\"lazy\"
              decoding=\"async\"/>
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>IIPE</div>
              <div class=\"gn-desc\">Indian Institute of Petroleum and Energy</div>
            </div>

            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
               <img class=\"gn-logo-img d-none d-sm-block\" src=\"";
        // line 3198
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Indian-Navy.webp\" alt=\"Indian Navy\" loading=\"lazy\"
              decoding=\"async\"/>
            <img class=\"gn-logo-img d-sm-none\" src=\"";
        // line 3200
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Indian-Navy-mobile.webp\" alt=\"Indian Navy\" loading=\"lazy\"
              decoding=\"async\"/>
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>Indian Navy</div>
              <!-- <div class=\"gn-desc\">CSIR Indian Institute of Chemical Technology</div> -->
            </div>

            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
               <img class=\"gn-logo-img d-none d-sm-block\"
              src=\"";
        // line 3210
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Jawaharlal-Nehru-Aluminium-Research-Development-and-Design-Centre-JNARDDC.webp\"
              alt=\"JNARDDC\" loading=\"lazy\" decoding=\"async\"/>
            <img class=\"gn-logo-img d-sm-none\"
              src=\"";
        // line 3213
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Jawaharlal-Nehru-Aluminium-Research-Development-and-Design-Centre-JNARDDC-mobile.webp\"
              alt=\"JNARDDC\" loading=\"lazy\" decoding=\"async\"/>
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>JNARDDC</div>
              <div class=\"gn-desc\">Jawaharlal Nehru Aluminium Research Development and Design Centre</div>
            </div>

            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
               <img class=\"gn-logo-img d-none d-sm-block\" src=\"";
        // line 3222
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Naval-Dockyard-Visakhapatnam.webp\" alt=\"Naval Dockyard\"
              loading=\"lazy\" decoding=\"async\"/>
            <img class=\"gn-logo-img d-sm-none\" src=\"";
        // line 3224
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/partners/Naval-Dockyard-Visakhapatnam-mobile.webp\" alt=\"Naval Dockyard\"
              loading=\"lazy\" decoding=\"async\"/>
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>Naval Dockyard</div>
              <div class=\"gn-desc\">Visakhapatnam</div>
            </div>
          </div>
        </div>

        <!-- Row 2: scrolls left to right -->
        <div class=\"gn-track-wrap\" aria-label=\"Partner organisations, set two\">
          <div class=\"gn-row gn-ltr\">
            <!-- original set -->
            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3239
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/Binghamton-University-State-University-of-New-York.webp\" alt=\"Binghamton University\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127468;&#127463;</span>Binghamton University</div>
              <div class=\"gn-desc\">State University of New-York</div>
            </div>
            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3246
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/EduSkills.webp\" alt=\"EduSkills logo\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127482;&#127480;</span>EduSkills</div>
              <!-- <div class=\"gn-desc\">USA &middot; Dual-Degree Programs</div> -->
            </div>
            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3253
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/Erasmus+.webp\" alt=\"Erasmus logo\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>Erasmus+</div>
              <!-- <div class=\"gn-desc\">India &middot; Skill Development</div> -->
            </div>
            
            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3261
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/George-Washington-University.webp\" alt=\"George Washington University logo\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127468;&#127463;</span>George Washington University</div>
              <!-- <div class=\"gn-desc\">Global &middot; Industry Research Partner</div> -->
            </div>
            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3268
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/Harvard-Business-School-Publishing.webp\" alt=\"Harvard Business School logo\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127482;&#127480;</span>Harvard Business School Publishing</div>
              <!-- <div class=\"gn-desc\">USA &middot; Dual-Degree Programs</div> -->
            </div>
            <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3275
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/IE-University.webp\" alt=\"IE University logo\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>IE University</div>
              <!-- <div class=\"gn-desc\">India &middot; Skill Development</div> -->
            </div>

             <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3283
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/KPMG.webp\" alt=\"KPMG\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>KPMG</div>
              <!-- <div class=\"gn-desc\">India &middot; Skill Development</div> -->
            </div>

             <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3291
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/Lam-Research.webp\" alt=\"Lam Research\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>Lam Research</div>
              <!-- <div class=\"gn-desc\">India &middot; Skill Development</div> -->
            </div>

             <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3299
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/penn-state.webp\" alt=\"Penn State\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>Penn State</div>
              <!-- <div class=\"gn-desc\">India &middot; Skill Development</div> -->
            </div>

             <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3307
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/Pfizer.webp\" alt=\"Pfizer\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>Pfizer</div>
              <!-- <div class=\"gn-desc\">India &middot; Skill Development</div> -->
            </div>

             <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3315
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/Reutlingen-University-Knowledge-Foundation-Reutlingen-University.webp\" alt=\"\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>Reutlingen University </div>
              <div class=\"gn-desc\">Knowledge Foundation Reutlingen University</div>
            </div>

             <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3323
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/Service-Now.webp\" alt=\"Service Now\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>Service Now</div>
              <!-- <div class=\"gn-desc\">India &middot; Skill Development</div> -->
            </div>
             <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3330
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/SiliconLabs.webp\" alt=\"Silicon Labs\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>Silicon Labs</div>
              <!-- <div class=\"gn-desc\">India &middot; Skill Development</div> -->
            </div>

             <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3338
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/Tech-mahendra.webp\" alt=\"Tech Mahendra\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>Tech Mahendra</div>
              <!-- <div class=\"gn-desc\">India &middot; Skill Development</div> -->
            </div>

             <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3346
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/UNHCR.webp\" alt=\"UNHCR\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>UNHCR</div>
              <!-- <div class=\"gn-desc\">India &middot; Skill Development</div> -->
            </div>

             <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3354
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/University-of-North-Carolina-Wilmington.webp\" alt=\"University of North Carolina Wilmington\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>University of North Carolina Wilmington</div>
              <!-- <div class=\"gn-desc\">India &middot; Skill Development</div> -->
            </div>

             <div class=\"gn-card\">
              <span class=\"gn-logo-panel\">
                <img class=\"gn-logo-img\" src=\"";
        // line 3362
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/collaborations/Infosys.webp\" alt=\"Infosys\" loading=\"lazy\" decoding=\"async\" />
              </span>
              <div class=\"gn-uni\"><span class=\"gn-flag\">&#127470;&#127475;</span>Infosys</div>
              <!-- <div class=\"gn-desc\">India &middot; Skill Development</div> -->
            </div>

             
          </div>
        </div>

      </section>

    <section class=\"entrepreneurs-section\" id=\"sec-entrepreneurs\" aria-labelledby=\"entrepreneurs-heading\">
      <div class=\"entre-header\">
        <h2 class=\"entre-title\" id=\"entrepreneurs-heading\">Entrepreneurs <span>at GITAM</span></h2>
        <p class=\"entre-sub\">
          Students who left classrooms and built companies.
        </p>
      </div>
      <div class=\"entre-bento\">
        <div class=\"ec ec-large\" tabindex=\"0\">
          <div class=\"ec-photo ec-photo-1\"></div>
          <div class=\"ec-overlay\"></div>
          <div class=\"ec-badges ec-badges-top ec-reveal\">
            <span class=\"ec-badge\">National HR Summit DE&amp;I Award 2024</span>

          </div>
          <div class=\"ec-content\">
            <div class=\"ec-name-row\">
              <h3 class=\"ec-name\">Muralidhar Teppala</h3>
              <div class=\"ec-social ec-reveal\">
                <a href=\"https://www.linkedin.com/in/muralidharteppala/\" target=\"_blank\" class=\"ec-icon\"
                  title=\"LinkedIn\"><svg viewBox=\"0 0 16 16\" fill=\"none\">
                    <rect width=\"16\" height=\"16\" rx=\"3\" fill=\"rgba(255,255,255,0.15)\"></rect>
                    <path d=\"M4 6.5V12M4 4.5V5M7 12V9c0-1.5 2.5-1.5 2.5 0V12M7 6.5V12\" stroke=\"white\" stroke-width=\"1.2\"
                      stroke-linecap=\"round\"></path>
                  </svg></a>

              </div>
            </div>
            <div class=\"ec-head\">
              <span class=\"ec-brand\" aria-hidden=\"true\"><img loading=\"lazy\" class=\"img-fluid\" src=\"";
        // line 3403
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/Shenzyn.png\"
                  alt=\"Shenzyn\"></span>
              <p class=\"ec-company\">Shenzyn</p>
            </div>
            <p class=\"ec-founder ec-reveal\">Founder &amp; CEO </p>
          </div>
        </div>
        <div class=\"ec ec-tall\" tabindex=\"0\">
          <div class=\"ec-photo ec-photo-2\"></div>
          <div class=\"ec-overlay\"></div>
          <div class=\"ec-badges ec-badges-top ec-reveal\">
            <span class=\"ec-badge\">\$500M+ Raised for Drug Development</span>
          </div>
          <div class=\"ec-content\">
            <div class=\"ec-name-row\">
              <h3 class=\"ec-name\">Viswa Colluru</h3>
              <div class=\"ec-social ec-reveal\">
                <a href=\"https://www.linkedin.com/in/viswacolluru/\" target=\"_blank\" class=\"ec-icon\"
                  title=\"LinkedIn\"><svg viewBox=\"0 0 16 16\" fill=\"none\">
                    <rect width=\"16\" height=\"16\" rx=\"3\" fill=\"rgba(255,255,255,0.15)\"></rect>
                    <path d=\"M4 6.5V12M4 4.5V5M7 12V9c0-1.5 2.5-1.5 2.5 0V12M7 6.5V12\" stroke=\"white\" stroke-width=\"1.2\"
                      stroke-linecap=\"round\"></path>
                  </svg></a>

              </div>
            </div>
            <div class=\"ec-head\">
              <span class=\"ec-brand\" aria-hidden=\"true\"><img loading=\"lazy\" class=\"img-fluid\" src=\"";
        // line 3430
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/Enveda.png\"
                  alt=\"Enveda\"></span>
              <p class=\"ec-company\">Enveda</p>
            </div>
            <p class=\"ec-founder ec-reveal\">CEO &amp; Founder </p>
          </div>
        </div>
        <div class=\"ec ec-wide\" tabindex=\"0\">
          <div class=\"ec-photo ec-photo-3\"></div>
          <div class=\"ec-overlay ec-overlay-side\"></div>
          <div class=\"ec-badges ec-badges-top ec-reveal\">
            <span class=\"ec-badge\">Top 15 Startup at NSRCEL-IIM Bengaluru</span><span
              class=\"ec-badge ec-badge-shark\">Forbes 30U30</span>
          </div>
          <div class=\"ec-content ec-content-wide\">
            <p class=\"ec-big-name-bg\">GITAM</p>
            <div class=\"ec-wide-inner\">
              <div class=\"ec-name-row\">
                <h3 class=\"ec-name\">Gayathri Kanumurie</h3>
                <div class=\"ec-social ec-reveal\">
                  <a href=\"https://www.linkedin.com/company/NariCare/?trk=public_post-text\" target=\"_blank\"
                    class=\"ec-icon\" title=\"LinkedIn\"><svg viewBox=\"0 0 16 16\" fill=\"none\">
                      <rect width=\"16\" height=\"16\" rx=\"3\" fill=\"rgba(255,255,255,0.15)\"></rect>
                      <path d=\"M4 6.5V12M4 4.5V5M7 12V9c0-1.5 2.5-1.5 2.5 0V12M7 6.5V12\" stroke=\"white\"
                        stroke-width=\"1.2\" stroke-linecap=\"round\"></path>
                    </svg></a>

                </div>
              </div>
              <div class=\"ec-head\">
                <span class=\"ec-brand\" aria-hidden=\"true\"><img loading=\"lazy\" class=\"img-fluid\"
                    src=\"";
        // line 3461
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/Nari-Care.png\" alt=\"NariCare\"></span>
                <p class=\"ec-company\">NariCare</p>
              </div>
              <p class=\"ec-founder ec-reveal\">Founder</p>
            </div>
          </div>
        </div>
        <div class=\"ec ec-small-1\" tabindex=\"0\">
          <div class=\"ec-photo ec-photo-4\"></div>
          <div class=\"ec-overlay\"></div>
          <div class=\"ec-badges ec-badges-top ec-reveal\">
            <span class=\"ec-badge\">Forbes Top 100 Startups to Watch</span>
          </div>
          <div class=\"ec-content\">
            <div class=\"ec-name-row\">
              <h3 class=\"ec-name\">Ragavan Venkatesan </h3>
              <div class=\"ec-social ec-reveal\">
                <a href=\"https://www.linkedin.com/in/ragavan-venkattesan-296a6a13/\" target=\"_blank\" class=\"ec-icon\"
                  title=\"LinkedIn\"><svg viewBox=\"0 0 16 16\" fill=\"none\">
                    <rect width=\"16\" height=\"16\" rx=\"3\" fill=\"rgba(255,255,255,0.15)\"></rect>
                    <path d=\"M4 6.5V12M4 4.5V5M7 12V9c0-1.5 2.5-1.5 2.5 0V12M7 6.5V12\" stroke=\"white\" stroke-width=\"1.2\"
                      stroke-linecap=\"round\"></path>
                  </svg></a>

              </div>
            </div>
            <div class=\"ec-head\">
              <span class=\"ec-brand\" aria-hidden=\"true\"><img loading=\"lazy\" class=\"img-fluid\" src=\"";
        // line 3488
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/DGV2.png\"
                  alt=\"DGV\"></span>
              <p class=\"ec-company\">DGV Group</p>
            </div>
            <p class=\"ec-founder ec-reveal\">Founder &amp; CEO </p>
          </div>
        </div>
        <div class=\"ec ec-small-2\" tabindex=\"0\">
          <div class=\"ec-photo ec-photo-5\"></div>
          <div class=\"ec-overlay\"></div>
          <div class=\"ec-badges ec-badges-top ec-reveal\">
            <span class=\"ec-badge\">Shark Tank India - secured an offer</span>
          </div>
          <div class=\"ec-content\">
            <div class=\"ec-name-row\">
              <h3 class=\"ec-name\">Vinay Agastya</h3>
              <div class=\"ec-social ec-reveal\">
                <a href=\"https://www.linkedin.com/in/vinayagastya/\" target=\"_blank\" class=\"ec-icon\"
                  title=\"LinkedIn\"><svg viewBox=\"0 0 16 16\" fill=\"none\">
                    <rect width=\"16\" height=\"16\" rx=\"3\" fill=\"rgba(255,255,255,0.15)\"></rect>
                    <path d=\"M4 6.5V12M4 4.5V5M7 12V9c0-1.5 2.5-1.5 2.5 0V12M7 6.5V12\" stroke=\"white\" stroke-width=\"1.2\"
                      stroke-linecap=\"round\"></path>
                  </svg></a>

              </div>
            </div>
            <div class=\"ec-head\">
              <span class=\"ec-brand\" aria-hidden=\"true\"><img loading=\"lazy\" class=\"img-fluid\" src=\"";
        // line 3515
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/CTRUH.png\"
                  alt=\"Ctruh\"></span>
              <p class=\"ec-company\">Ctruh</p>
            </div>
            <p class=\"ec-founder ec-reveal\">Founder</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 10: BEYOND THE RESUME -->
    <section class=\"beyond-section\" id=\"sec-beyond\" aria-labelledby=\"beyond-heading\">
      <div class=\"beyond-header\">
        <h2 class=\"beyond-title\" id=\"beyond-heading\">Beyond the <span>Resume</span></h2>
        <p class=\"beyond-sub\">
          GITAM alumni who took roads less travelled and redefined success.
        </p>
      </div>
      <div class=\"beyond-bento\">
        <!-- Tall card -->
        <div class=\"bt-card bt-1\">
          <div class=\"bt-photo bt-p1\"></div>
          <div class=\"bt-overlay\"></div>

          <span class=\"bt-role-tag he-dept-tag\">World Record Holder</span>

          <div class=\"bt-content\">
            <!-- <p class=\"bt-bg-text\">ART</p> -->

            <div style=\"position: relative; z-index: 2\">


              <h3 class=\"bt-name\">Dr. Gattem Venkatesh</h3>

              <p class=\"bt-role bt-reveal\">
                Guinness World Record Holder &amp; Four-time National Award Winner
              </p>

              <p class=\"bt-dept bt-reveal\">
                Bachelor of Architecture · Class of 2019
              </p>
            </div>
          </div>
        </div>

        <div class=\"bt-card bt-2\">
          <div class=\"bt-photo bt-p2\"></div>
          <div class=\"bt-overlay\"></div>

          <span class=\"bt-role-tag he-dept-tag\">Actress &amp; Designer</span>

          <div class=\"bt-content\">
            <!-- <p class=\"bt-bg-text\">ARTS</p> -->

            <div style=\"position: relative; z-index: 2\">

              <h3 class=\"bt-name\">Gautami Tadimalla</h3>

              <p class=\"bt-role bt-reveal\">
                Actress, Costume Designer &amp; Social Activist
              </p>

              <p class=\"bt-dept bt-reveal\">
                Engineering at GITAM, Visakhapatnam
              </p>

            </div>
          </div>
        </div>

        <div class=\"bt-card bt-3\">
          <div class=\"bt-photo bt-p3\"></div>
          <div class=\"bt-overlay\"></div>

          <span class=\"bt-role-tag he-dept-tag\">Sustainability Leader</span>

          <div class=\"bt-content\">
            <!-- <p class=\"bt-bg-text\">ECO</p> -->

            <div style=\"position: relative; z-index: 2\">

              <h3 class=\"bt-name\">Goutam Surana</h3>

              <p class=\"bt-role bt-reveal\">
                Founder, ECO365 &amp; Sustainability Entrepreneur
              </p>

              <p class=\"bt-dept bt-reveal\">
                BBM, Marketing, GITAM, Visakhapatnam, Class of 2005
              </p>

            </div>
          </div>
        </div>

        <!-- Wide card -->
        <div class=\"bt-card bt-4\">
          <div class=\"bt-photo bt-p4\"></div>
          <div class=\"bt-overlay\"></div>

          <span class=\"bt-role-tag he-dept-tag\">AI Upskilling</span>

          <div class=\"bt-content\">
            <!-- <p class=\"bt-bg-text\">AI</p> -->

            <div style=\"position: relative; z-index: 2\">

              <h3 class=\"bt-name\">Vaibhav Sisinty</h3>

              <p class=\"bt-role bt-reveal\">
                Founder, GrowthSchool
              </p>

              <p class=\"bt-dept bt-reveal\">
                B.Tech Computer Science &amp; Engineering · Class of 2016
              </p>

            </div>
          </div>
        </div>
    </section>

    <!-- SECTION 11: FACULTY -->
    <!-- FACULTY MODEL: pinned scroll-driven section (50/30/20 tiers) -->
    <!-- FACULTY: \"been there, done that\" carousel -->
    <section class=\"apf-section d-none\" id=\"sec-faculty-old\" aria-labelledby=\"faculty-heading\">
      <div class=\"apf-header\">
        <p class=\"apf-eyebrow\">The Faculty</p>
        <h2 class=\"apf-title\" id=\"faculty-heading\">
          Who Will You <span>Learn From.</span>
        </h2>
        <p class=\"apf-sub\">
          Doctorates from <strong>MIT</strong>, <strong>Stanford</strong>,
          <strong>Cambridge</strong> &amp; the <strong>IITs</strong>. Veterans
          of <strong>Google</strong>, <strong>Goldman Sachs</strong>,
          <strong>ISRO</strong> &amp; <strong>McKinsey</strong>. Authors of
          <strong>1,800+ papers</strong>, <strong>50+ books</strong> and
          <strong>120+ patents</strong> - now teaching you.
        </p>
      </div>
      <div class=\"apf-rows\">
        <!-- Row 1 (scrolls left) -->
        <div class=\"apf-row-wrap\">
          <div class=\"apf-row apf-row-1\" id=\"facRow1\">
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-1\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">RK</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Ravi Kumar</p>
                <p class=\"apf-dept\">Computer Science</p>
                <p class=\"apf-cred\">PhD, IIT Delhi · Ex-Microsoft Research</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>120</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>8.5k</b><span>Citations</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">IIT Delhi</span><span class=\"apf-badge\">Ex-Microsoft</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-2\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">SP</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Sunita Prasad</p>
                <p class=\"apf-dept\">Biotechnology</p>
                <p class=\"apf-cred\">
                  PhD, Cambridge · DST Swarnajayanti Fellow
                </p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>90</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>5.2k</b><span>Citations</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Textbook</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Cambridge</span><span class=\"apf-badge\">DST Fellow</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-3\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">AM</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Arun Mehta</p>
                <p class=\"apf-dept\">Finance &amp; Banking</p>
                <p class=\"apf-cred\">PhD, Wharton · Ex-Goldman Sachs VP</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>40</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>CFA</b><span>Charter</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Book</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Wharton</span><span class=\"apf-badge\">Ex-Goldman</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-4\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">LN</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Lakshmi Nair</p>
                <p class=\"apf-dept\">Law &amp; Policy</p>
                <p class=\"apf-cred\">
                  LLM, Harvard Law · Supreme Court Advocate
                </p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>3</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>60</b><span>Articles</span></span>
                  <span class=\"apf-stat\"><b>18</b><span>Yrs Bar</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Harvard Law</span><span class=\"apf-badge\">Supreme Court</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-5\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">VR</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Venkat Rao</p>
                <p class=\"apf-dept\">Civil Engineering</p>
                <p class=\"apf-cred\">PhD, Stanford · ASCE Fellow</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>110</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>6</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Book</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Stanford</span><span class=\"apf-badge\">ASCE Fellow</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-6\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">PG</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Priya Gupta</p>
                <p class=\"apf-dept\">Pharmacology</p>
                <p class=\"apf-cred\">PhD, Johns Hopkins · ICMR Grantee</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>75</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>3</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>4.1k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Johns Hopkins</span><span class=\"apf-badge\">ICMR</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-7\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">SK</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Suresh Kumar</p>
                <p class=\"apf-dept\">Mechanical Engg.</p>
                <p class=\"apf-cred\">PhD, MIT · Ex-ISRO Scientist</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>95</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>5</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Book</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">MIT</span><span class=\"apf-badge\">Ex-ISRO</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-8\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">NB</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Neha Bose</p>
                <p class=\"apf-dept\">Architecture</p>
                <p class=\"apf-cred\">M.Arch, ETH Zürich · Aga Khan Award</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>2</b><span>Monographs</span></span>
                  <span class=\"apf-stat\"><b>30</b><span>Exhibits</span></span>
                  <span class=\"apf-stat\"><b>12</b><span>Awards</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">ETH Zürich</span><span class=\"apf-badge\">Aga Khan Award</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-1\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">JM</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Jagdish Murthy</p>
                <p class=\"apf-dept\">Data Science &amp; AI</p>
                <p class=\"apf-cred\">PhD, Carnegie Mellon · Ex-Google Brain</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>70</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>15k</b><span>Citations</span></span>
                  <span class=\"apf-stat\"><b>9</b><span>NeurIPS</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Carnegie Mellon</span><span class=\"apf-badge\">Ex-Google</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-2\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">TS</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Tanvi Sharma</p>
                <p class=\"apf-dept\">Psychology</p>
                <p class=\"apf-cred\">PhD, Oxford · APA Fellow</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>50</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Book</span></span>
                  <span class=\"apf-stat\"><b>3.2k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Oxford</span><span class=\"apf-badge\">APA Fellow</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-3\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">HK</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Harish Kaur</p>
                <p class=\"apf-dept\">Management</p>
                <p class=\"apf-cred\">PhD, IIM Ahmedabad · Ex-McKinsey</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>4</b><span>HBR Cases</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>60</b><span>Papers</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">IIM-A</span><span class=\"apf-badge\">Ex-McKinsey</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-4\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">AR</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Anjali Reddy</p>
                <p class=\"apf-dept\">Genetics</p>
                <p class=\"apf-cred\">PhD, Stanford · DBT Wellcome Fellow</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>80</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>6.4k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Stanford</span><span class=\"apf-badge\">CRISPR Lab</span>
                </div>
              </div>
            </div>
            <!-- duplicate for loop -->
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-1\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">RK</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Ravi Kumar</p>
                <p class=\"apf-dept\">Computer Science</p>
                <p class=\"apf-cred\">PhD, IIT Delhi · Ex-Microsoft Research</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>120</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>8.5k</b><span>Citations</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">IIT Delhi</span><span class=\"apf-badge\">Ex-Microsoft</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-2\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">SP</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Sunita Prasad</p>
                <p class=\"apf-dept\">Biotechnology</p>
                <p class=\"apf-cred\">
                  PhD, Cambridge · DST Swarnajayanti Fellow
                </p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>90</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>5.2k</b><span>Citations</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Textbook</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Cambridge</span><span class=\"apf-badge\">DST Fellow</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-3\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">AM</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Arun Mehta</p>
                <p class=\"apf-dept\">Finance &amp; Banking</p>
                <p class=\"apf-cred\">PhD, Wharton · Ex-Goldman Sachs VP</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>40</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>CFA</b><span>Charter</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Book</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Wharton</span><span class=\"apf-badge\">Ex-Goldman</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-4\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">LN</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Lakshmi Nair</p>
                <p class=\"apf-dept\">Law &amp; Policy</p>
                <p class=\"apf-cred\">
                  LLM, Harvard Law · Supreme Court Advocate
                </p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>3</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>60</b><span>Articles</span></span>
                  <span class=\"apf-stat\"><b>18</b><span>Yrs Bar</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Harvard Law</span><span class=\"apf-badge\">Supreme Court</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-5\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">VR</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Venkat Rao</p>
                <p class=\"apf-dept\">Civil Engineering</p>
                <p class=\"apf-cred\">PhD, Stanford · ASCE Fellow</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>110</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>6</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Book</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Stanford</span><span class=\"apf-badge\">ASCE Fellow</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-6\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">PG</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Priya Gupta</p>
                <p class=\"apf-dept\">Pharmacology</p>
                <p class=\"apf-cred\">PhD, Johns Hopkins · ICMR Grantee</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>75</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>3</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>4.1k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Johns Hopkins</span><span class=\"apf-badge\">ICMR</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-7\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">SK</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Suresh Kumar</p>
                <p class=\"apf-dept\">Mechanical Engg.</p>
                <p class=\"apf-cred\">PhD, MIT · Ex-ISRO Scientist</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>95</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>5</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Book</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">MIT</span><span class=\"apf-badge\">Ex-ISRO</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-8\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">NB</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Neha Bose</p>
                <p class=\"apf-dept\">Architecture</p>
                <p class=\"apf-cred\">M.Arch, ETH Zürich · Aga Khan Award</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>2</b><span>Monographs</span></span>
                  <span class=\"apf-stat\"><b>30</b><span>Exhibits</span></span>
                  <span class=\"apf-stat\"><b>12</b><span>Awards</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">ETH Zürich</span><span class=\"apf-badge\">Aga Khan Award</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-1\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">JM</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Jagdish Murthy</p>
                <p class=\"apf-dept\">Data Science &amp; AI</p>
                <p class=\"apf-cred\">PhD, Carnegie Mellon · Ex-Google Brain</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>70</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>15k</b><span>Citations</span></span>
                  <span class=\"apf-stat\"><b>9</b><span>NeurIPS</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Carnegie Mellon</span><span class=\"apf-badge\">Ex-Google</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-2\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">TS</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Tanvi Sharma</p>
                <p class=\"apf-dept\">Psychology</p>
                <p class=\"apf-cred\">PhD, Oxford · APA Fellow</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>50</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Book</span></span>
                  <span class=\"apf-stat\"><b>3.2k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Oxford</span><span class=\"apf-badge\">APA Fellow</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-3\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">HK</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Harish Kaur</p>
                <p class=\"apf-dept\">Management</p>
                <p class=\"apf-cred\">PhD, IIM Ahmedabad · Ex-McKinsey</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>4</b><span>HBR Cases</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>60</b><span>Papers</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">IIM-A</span><span class=\"apf-badge\">Ex-McKinsey</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-4\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">AR</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Anjali Reddy</p>
                <p class=\"apf-dept\">Genetics</p>
                <p class=\"apf-cred\">PhD, Stanford · DBT Wellcome Fellow</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>80</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>6.4k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Stanford</span><span class=\"apf-badge\">CRISPR Lab</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Row 2 (scrolls right) -->
        <div class=\"apf-row-wrap\">
          <div class=\"apf-row apf-row-2\" id=\"facRow2\">
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-5\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">MV</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Mohan Varma</p>
                <p class=\"apf-dept\">Electronics</p>
                <p class=\"apf-cred\">PhD, UC Berkeley · Ex-Intel Labs</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>85</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>7</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Book</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">UC Berkeley</span><span class=\"apf-badge\">Ex-Intel</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-6\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">DP</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Divya Pillai</p>
                <p class=\"apf-dept\">English &amp; Media</p>
                <p class=\"apf-cred\">PhD, JNU · Sahitya Akademi Awardee</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>5</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>40</b><span>Essays</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Translations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">JNU</span><span class=\"apf-badge\">Sahitya Akademi</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-7\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">KJ</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Kiran Joshi</p>
                <p class=\"apf-dept\">Environmental Sci.</p>
                <p class=\"apf-cred\">PhD, Yale · UN IPCC Lead Author</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>65</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>9.8k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Yale</span><span class=\"apf-badge\">UN Advisor</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-8\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">RS</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Ramesh Sinha</p>
                <p class=\"apf-dept\">Economics</p>
                <p class=\"apf-cred\">PhD, LSE · RBI Advisory Panel</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>55</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>3</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>5.5k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">LSE</span><span class=\"apf-badge\">RBI Panel</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-1\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">SN</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Sanjana Naik</p>
                <p class=\"apf-dept\">Design &amp; UX</p>
                <p class=\"apf-cred\">MFA, RISD · Ex-Adobe Design Lead</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>3</b><span>Red Dots</span></span>
                  <span class=\"apf-stat\"><b>20</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>40</b><span>Talks</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">RISD</span><span class=\"apf-badge\">Ex-Adobe</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-2\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">BB</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Bharat Bhushan</p>
                <p class=\"apf-dept\">Aerospace</p>
                <p class=\"apf-cred\">PhD, Caltech · Ex-DRDO Chief Scientist</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>100</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>9</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Caltech</span><span class=\"apf-badge\">Ex-DRDO</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-3\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">IC</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Indira Chopra</p>
                <p class=\"apf-dept\">Nutrition Science</p>
                <p class=\"apf-cred\">PhD, Cornell · WHO Collaborator</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>60</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>4.7k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Cornell</span><span class=\"apf-badge\">WHO</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-4\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">VP</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Vijay Patel</p>
                <p class=\"apf-dept\">Marketing</p>
                <p class=\"apf-cred\">
                  PhD, Kellogg · Ex-P&amp;G Brand Director
                </p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>45</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>3</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>8</b><span>HBR Cases</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Kellogg</span><span class=\"apf-badge\">Ex-P&amp;G</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-5\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">GL</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Geeta Lal</p>
                <p class=\"apf-dept\">Mathematics</p>
                <p class=\"apf-cred\">PhD, Princeton · Fields Medal Jury</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>70</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Monograph</span></span>
                  <span class=\"apf-stat\"><b>7.2k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Princeton</span><span class=\"apf-badge\">Fields Jury</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-6\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">NK</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Nitin Kamath</p>
                <p class=\"apf-dept\">Robotics</p>
                <p class=\"apf-cred\">PhD, ETH Zürich · IEEE Senior Member</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>90</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>12</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Book</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">ETH Zürich</span><span class=\"apf-badge\">IEEE Senior</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-7\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">MT</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Maya Thomas</p>
                <p class=\"apf-dept\">Nursing &amp; Health</p>
                <p class=\"apf-cred\">
                  PhD, Johns Hopkins · AIIMS Collaborator
                </p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>50</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>3.9k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Johns Hopkins</span><span class=\"apf-badge\">AIIMS</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-8\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">CK</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Chandra Kumar</p>
                <p class=\"apf-dept\">Chemical Engg.</p>
                <p class=\"apf-cred\">PhD, IISc Bangalore · 25 Patents Filed</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>110</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>25</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">IISc</span><span class=\"apf-badge\">25 Patents</span>
                </div>
              </div>
            </div>
            <!-- duplicate for loop -->
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-5\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">MV</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Mohan Varma</p>
                <p class=\"apf-dept\">Electronics</p>
                <p class=\"apf-cred\">PhD, UC Berkeley · Ex-Intel Labs</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>85</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>7</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Book</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">UC Berkeley</span><span class=\"apf-badge\">Ex-Intel</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-6\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">DP</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Divya Pillai</p>
                <p class=\"apf-dept\">English &amp; Media</p>
                <p class=\"apf-cred\">PhD, JNU · Sahitya Akademi Awardee</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>5</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>40</b><span>Essays</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Translations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">JNU</span><span class=\"apf-badge\">Sahitya Akademi</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-7\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">KJ</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Kiran Joshi</p>
                <p class=\"apf-dept\">Environmental Sci.</p>
                <p class=\"apf-cred\">PhD, Yale · UN IPCC Lead Author</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>65</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>9.8k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Yale</span><span class=\"apf-badge\">UN Advisor</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-8\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">RS</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Ramesh Sinha</p>
                <p class=\"apf-dept\">Economics</p>
                <p class=\"apf-cred\">PhD, LSE · RBI Advisory Panel</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>55</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>3</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>5.5k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">LSE</span><span class=\"apf-badge\">RBI Panel</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-1\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">SN</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Sanjana Naik</p>
                <p class=\"apf-dept\">Design &amp; UX</p>
                <p class=\"apf-cred\">MFA, RISD · Ex-Adobe Design Lead</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>3</b><span>Red Dots</span></span>
                  <span class=\"apf-stat\"><b>20</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>40</b><span>Talks</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">RISD</span><span class=\"apf-badge\">Ex-Adobe</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-2\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">BB</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Bharat Bhushan</p>
                <p class=\"apf-dept\">Aerospace</p>
                <p class=\"apf-cred\">PhD, Caltech · Ex-DRDO Chief Scientist</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>100</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>9</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Caltech</span><span class=\"apf-badge\">Ex-DRDO</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-3\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">IC</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Indira Chopra</p>
                <p class=\"apf-dept\">Nutrition Science</p>
                <p class=\"apf-cred\">PhD, Cornell · WHO Collaborator</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>60</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>4.7k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Cornell</span><span class=\"apf-badge\">WHO</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-4\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">VP</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Vijay Patel</p>
                <p class=\"apf-dept\">Marketing</p>
                <p class=\"apf-cred\">
                  PhD, Kellogg · Ex-P&amp;G Brand Director
                </p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>45</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>3</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>8</b><span>HBR Cases</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Kellogg</span><span class=\"apf-badge\">Ex-P&amp;G</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-5\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">GL</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Geeta Lal</p>
                <p class=\"apf-dept\">Mathematics</p>
                <p class=\"apf-cred\">PhD, Princeton · Fields Medal Jury</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>70</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Monograph</span></span>
                  <span class=\"apf-stat\"><b>7.2k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Princeton</span><span class=\"apf-badge\">Fields Jury</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-6\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">NK</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Prof. Nitin Kamath</p>
                <p class=\"apf-dept\">Robotics</p>
                <p class=\"apf-cred\">PhD, ETH Zürich · IEEE Senior Member</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>90</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>12</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>1</b><span>Book</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">ETH Zürich</span><span class=\"apf-badge\">IEEE Senior</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-7\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">MT</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Maya Thomas</p>
                <p class=\"apf-dept\">Nursing &amp; Health</p>
                <p class=\"apf-cred\">
                  PhD, Johns Hopkins · AIIMS Collaborator
                </p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>50</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                  <span class=\"apf-stat\"><b>3.9k</b><span>Citations</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">Johns Hopkins</span><span class=\"apf-badge\">AIIMS</span>
                </div>
              </div>
            </div>
            <div class=\"apf-card\">
              <div class=\"apf-photo apf-ph-8\">
                <div class=\"apf-photo-dots\"></div>
                <span class=\"apf-photo-initial\">CK</span>
              </div>
              <div class=\"apf-info\">
                <p class=\"apf-name\">Dr. Chandra Kumar</p>
                <p class=\"apf-dept\">Chemical Engg.</p>
                <p class=\"apf-cred\">PhD, IISc Bangalore · 25 Patents Filed</p>
                <div class=\"apf-stats\">
                  <span class=\"apf-stat\"><b>110</b><span>Papers</span></span>
                  <span class=\"apf-stat\"><b>25</b><span>Patents</span></span>
                  <span class=\"apf-stat\"><b>2</b><span>Books</span></span>
                </div>
                <div class=\"apf-badges\">
                  <span class=\"apf-badge is-elite\">IISc</span><span class=\"apf-badge\">25 Patents</span>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>



    <!-- SECTION 11: FACULTY -->
    <section class=\"faculty-section\">
      <div class=\"faculty-header\" id=\"sec-faculty\">
        <p class=\"faculty-eyebrow\">The Faculty</p>
        <h2 class=\"faculty-title\">Who Will You <span>Learn From.</span></h2>
        <p class=\"faculty-sub\">


          Star faculty across disciplines - Researchers, Industry leaders, and Award-winners.
        </p>
      </div>
      <div class=\"faculty-rows\">
        <!-- Row 1 (scrolls left) -->
        <div class=\"faculty-row-wrap\">
          <div class=\"faculty-row faculty-row-1\" id=\"facRow1\">
            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4617
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Pardhalaskar.webp\" alt=\"Dr. Pardhalaskar\" loading=\"lazy\">

              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Pardhalaskar</p>
                <p class=\"fac-dept\">Chemistry</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4631
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Rahul_Shukla.webp\" alt=\"Dr. Rahul Sukhla\" loading=\"lazy\">

              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Rahul Sukhla</p>
                <p class=\"fac-dept\">Chemistry</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>
            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4644
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Harihara_Padhy.webp\" alt=\"Dr. Harihara Padhy\" loading=\"lazy\">

              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Harihara Padhy</p>
                <p class=\"fac-dept\">Chemistry</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Associate Professor</span>

                </div>

              </div>
            </div>
            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4659
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Chandra_Sekhar_Angani.webp\" alt=\"Dr. A. Chandra Sekhar\" loading=\"lazy\">

              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. A. Chandra Sekhar</p>
                <p class=\"fac-dept\">Physics</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Associate Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4673
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Sai_Shaktimayee_Sahu.webp\" alt=\"Dr. Sai Shaktimayee Sahu\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Sai Shaktimayee Sahu</p>
                <p class=\"fac-dept\">Computer Science</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4686
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Rahul_Kumar.webp\" alt=\"Dr. Rahul Kumar\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Rahul Kumar</p>
                <p class=\"fac-dept\">Life Sciences</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4699
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Rohini_S.webp\" alt=\"Dr. Rohini S\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Rohini S</p>
                <p class=\"fac-dept\">Mathematics & Statistics</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4712
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Aditya_N_K_Subramaniam.webp\" alt=\"Dr. Aditya N K Subramaniam\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Aditya N K Subramaniam</p>
                <p class=\"fac-dept\">Mathematics & Statistics</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4725
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Sai_Sudhakar_Nudurupati.webp\" alt=\"Sai Sudhakar Nudurupati\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Sai Sudhakar Nudurupati</p>
                <p class=\"fac-dept\">GSB</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Senior Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4738
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Ravi_Shankar_Saripalli.webp\" alt=\"Ravi Shankar Saripalli\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Ravi Shankar Saripalli</p>
                <p class=\"fac-dept\">GSB</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Associate Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4751
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Sushoban_Paul.webp\" alt=\"Sushoban Paul\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Sushoban Paul</p>
                <p class=\"fac-dept\">GSB</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4764
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Kashif_Nesar.webp\" alt=\"Kashif Nesar Rather\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Kashif Nesar Rather</p>
                <p class=\"fac-dept\">GSHSS - Economics</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4777
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Aditi_Mukherjee.webp\" alt=\"Aditi Mukherjee\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Aditi Mukherjee</p>
                <p class=\"fac-dept\">GSHSS - History</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4790
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Sucharita_Sengupta.webp\" alt=\"Sucharita Sengupta\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Sucharita Sengupta</p>
                <p class=\"fac-dept\">GSHSS - Political Science</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4803
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Georgitta_Valiyamattam.webp\" alt=\"Valiyamattam Georgitta Joseph\"
                  loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Valiyamattam Georgitta Joseph</p>
                <p class=\"fac-dept\">GSHSS - Applied Psychology</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>



          </div>
        </div>

        <!-- Row 2 (scrolls right) -->
        <div class=\"faculty-row-wrap\">
          <div class=\"faculty-row faculty-row-2\" id=\"facRow2\">

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4826
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Darla_Siddardha.webp\" alt=\"Darla Siddardha\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Darla Siddardha</p>
                <p class=\"fac-dept\">GSHSS - Sociology</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4839
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Shubhadip_Chakraborty.webp\" alt=\"Shubhadip Chakraborty\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Shubhadip Chakraborty</p>
                <p class=\"fac-dept\">GSS - Chemistry</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor, HOD</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4852
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Laxmi_Shanker_Rai.webp\" alt=\"Laxmi Shanker Rai\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Laxmi Shanker Rai</p>
                <p class=\"fac-dept\">GSS - Lifesciences</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4865
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Reshma_Basak.webp\" alt=\"Reshma Basak\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Reshma Basak</p>
                <p class=\"fac-dept\">GSS - Life Sciences </p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4878
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Kambadur_Gundu_Anathamurthy.webp\" alt=\"Kambadur Gundu Ananthamurthy\"
                  loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Kambadur Gundu Ananthamurthy</p>
                <p class=\"fac-dept\">GSS - Life Sciences</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4892
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Anu_Bhushani.webp\" alt=\"Anu Bhushani\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Anu Bhushani</p>
                <p class=\"fac-dept\">GSS - Life Sciences</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4905
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Prabir_Khatua.webp\" alt=\"Prabir Khatua\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Prabir Khatua</p>
                <p class=\"fac-dept\">GSS - Chemistry</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4918
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Chintoo_Kumar.webp\" alt=\"Chintoo Kumar\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Chintoo Kumar</p>
                <p class=\"fac-dept\">GSCSE - AI, Data & Science</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4931
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Monica_Ravishankar.webp\" alt=\"Monica Ravisankar\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Monica Ravisankar</p>
                <p class=\"fac-dept\">GSCSE - CSE</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4944
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Nandita_Bhanja_Chaudhuri.webp\" alt=\"Nandita Bhanja Chaudhuri\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Nandita Bhanja Chaudhuri</p>
                <p class=\"fac-dept\">GSCSE - CSE</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4957
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Naushad_Varish.webp\" alt=\"Naushad Varish\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Naushad Varish</p>
                <p class=\"fac-dept\">GSCSE - CSE</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4970
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Greeshma_L.webp\" alt=\"Greeshma Lingam\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Greeshma Lingam</p>
                <p class=\"fac-dept\">GSCSE - CSE</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4983
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/D_Venkata_Naga_Sivakumar.webp\" alt=\"D. Venkata Naga Sivakumar\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. D. Venkata Naga Sivakumar</p>
                <p class=\"fac-dept\">GSCSE - CSE</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>

            <div class=\"fac-card\">
              <div class=\"fac-photo\">
                <img src=\"";
        // line 4996
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/faculty/Suvrima_Dutta.webp\" alt=\"Suvrima Dutta\" loading=\"lazy\">
              </div>
              <div class=\"fac-info\">
                <p class=\"fac-name\">Dr. Suvrima Dutta</p>
                <p class=\"fac-dept\">GSCSE - CSE</p>
                <div class=\"fac-badges\">
                  <span class=\"fac-badge\">Assistant Professor</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ░░ SECTION: RESEARCH & INNOVATION — EDITORIAL ░░ -->
    <section id=\"sec-research\" aria-labelledby=\"research-heading\">
      <div class=\"rxd-track\">
        <div class=\"rxd-stage\" data-active=\"0\">
          <!-- slide progress rail -->
          <nav class=\"rxd-rail\" aria-label=\"Research &amp; Innovation slides\">
            <button class=\"rxd-rail-dot\" type=\"button\" data-go=\"0\" aria-label=\"Go to Overview\">
              <span class=\"rxd-rail-label\">Overview</span>
            </button>
            <button class=\"rxd-rail-dot\" type=\"button\" data-go=\"1\" aria-label=\"Go to The Research Engine\">
              <span class=\"rxd-rail-label\">Research Engine</span>
            </button>
            <button class=\"rxd-rail-dot\" type=\"button\" data-go=\"2\" aria-label=\"Go to Frontiers &amp; Explore\">
              <span class=\"rxd-rail-label\">Frontiers</span>
            </button>
          </nav>

          <!-- slide counter -->
          <div class=\"rxd-counter\" aria-hidden=\"true\">
            <span class=\"rxd-counter-cur\">01</span><span class=\"rxd-counter-sep\">/</span><span
              class=\"rxd-counter-tot\">03</span>
          </div>

          <div class=\"rxd-slides\">
            <!-- ░ SLIDE 1 — Overview + hero ░ -->
            <article class=\"rxd-slide is-active\" data-anim=\"fade-up\" aria-roledescription=\"slide\">
              <div class=\"rxd-slide-inner\">
                <div class=\"rx-head\">
                  <span class=\"section-tag\">Research &amp; Innovation</span>
                  <h2 class=\"section-title\" id=\"research-heading\">
                    Where Discovery Becomes <span>Impact</span>
                  </h2>
                  <p class=\"section-sub\">
                    GITAM turns curiosity into outcomes across projects,
                    programmes, and Centres of Excellence on every campus.
                  </p>
                </div>

                <!-- hero band -->
                <div class=\"rx-hero\">
                  <!-- TODO: replace dQw4w9WgXcQ with the actual GITAM R&I YouTube video ID -->
                  <div class=\"rx-hero-video rx-yt-wrap\" id=\"riYtWrap\" aria-hidden=\"true\">
                    <iframe id=\"riYtFrame\" class=\"rx-yt-frame\"
                      src=\"https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&mute=1&loop=1&playlist=dQw4w9WgXcQ&controls=0&playsinline=1&rel=0&disablekb=1\"
                      allow=\"autoplay\" frameborder=\"0\" tabindex=\"-1\" aria-hidden=\"true\" title=\"\"></iframe>
                  </div>
                  <div class=\"rx-hero-overlay\">
                    <span class=\"rx-hero-tag\">Explore &amp; Excel</span>
                    <h3 class=\"rx-hero-title\">
                      World-class research on every campus
                    </h3>
                  </div>
                </div>
              </div>
            </article>

            <!-- ░ SLIDE 3 — The Research Engine ░ -->
            <article class=\"rxd-slide\" data-anim=\"zoom\" aria-roledescription=\"slide\">
              <div class=\"rxd-slide-inner\">
                <div class=\"rx-subhead\">The Research Engine</div>
                <h3 class=\"rxd-slide-title\">Three engines, one mission</h3>
                <div class=\"rx-engine rxd-stagger rxd-stagger--x\">
                  <a class=\"rx-pillar\"
                    href=\"https://www.gitam.edu/research/research-innovations/research-strategy/research-initiatives\">
                    <div class=\"rx-pillar-img\">
                      <img src=\"";
        // line 5076
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/research/research-microscope.webp\"
                        alt=\"GITAM student researcher examining a sample under a microscope\" loading=\"lazy\"
                        decoding=\"async\" />
                    </div>
                    <div class=\"rx-pillar-body\">
                      <div class=\"rx-pillar-abbr\">SPARC</div>
                      <div class=\"rx-pillar-full\">Sponsored Academic Research &amp; Consultancy</div>
                      <p class=\"rx-pillar-desc\">Driven across academic institutes and departments — powering
                        extramural
                        grants, high-impact publications and patents from foundational research.</p>
                      <span class=\"rx-pillar-link\">Research initiatives <svg width=\"13\" height=\"13\" fill=\"none\"
                          stroke=\"currentColor\" stroke-width=\"2.2\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                          <path d=\"M5 12h14M12 5l7 7-7 7\" />
                        </svg></span>
                    </div>
                  </a>

                  <a class=\"rx-pillar\" href=\"https://www.gitam.edu/research/centres-excellence\">
                    <div class=\"rx-pillar-img\">
                      <img src=\"";
        // line 5095
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/research/research-lab.webp\"
                        alt=\"GITAM researcher operating laboratory instrumentation at a Centre of Excellence\"
                        loading=\"lazy\" decoding=\"async\" />
                    </div>
                    <div class=\"rx-pillar-body\">
                      <div class=\"rx-pillar-abbr\">GUARD</div>
                      <div class=\"rx-pillar-full\">GITAM University Applied Research &amp; Development</div>
                      <p class=\"rx-pillar-desc\">Translational work at our 10 Centres of Excellence, sharply focused on
                        patents and market-ready products built with industry partners.</p>
                      <span class=\"rx-pillar-link\">Centres of Excellence <svg width=\"13\" height=\"13\" fill=\"none\"
                          stroke=\"currentColor\" stroke-width=\"2.2\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                          <path d=\"M5 12h14M12 5l7 7-7 7\" />
                        </svg></span>
                    </div>
                  </a>

                  <a class=\"rx-pillar\" href=\"https://www.gitam.edu/about/innovation-at-gitam\">
                    <div class=\"rx-pillar-img\">
                      <img src=\"";
        // line 5113
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/research/research-translational.webp\"
                        alt=\"GITAM researchers in protective gear conducting translational research\" loading=\"lazy\"
                        decoding=\"async\" />
                    </div>
                    <div class=\"rx-pillar-body\">
                      <div class=\"rx-pillar-abbr\">MURTI</div>
                      <div class=\"rx-pillar-full\">Multidisciplinary Unit of Research on Translational Initiatives
                      </div>
                      <p class=\"rx-pillar-desc\">A &#8377;100 crore+ translational research network spanning every
                        campus, organised around six frontier themes of national priority.</p>
                      <span class=\"rx-pillar-link\">Innovation at GITAM <svg width=\"13\" height=\"13\" fill=\"none\"
                          stroke=\"currentColor\" stroke-width=\"2.2\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                          <path d=\"M5 12h14M12 5l7 7-7 7\" />
                        </svg></span>
                    </div>
                  </a>
                </div>
              </div>
            </article>

            <!-- ░ SLIDE 4 — Six MURTI Frontier Themes ░ -->
            <article class=\"rxd-slide\" data-anim=\"clip\" aria-roledescription=\"slide\">
              <div class=\"rxd-slide-inner\">
                <div class=\"rx-subhead\">Six MURTI Frontier Themes</div>
                <h3 class=\"rxd-slide-title\">Frontiers of national priority</h3>
                <div class=\"rx-themes rxd-stagger\">
                  <div class=\"rx-theme\">
                    <div class=\"rx-theme-ico\">
                      <svg fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                        <path d=\"M9 3v2m6-2v2M9 19v2m6-2v2M3 9h2m-2 6h2m14-6h2m-2 6h2M7 7h10v10H7z\" />
                        <circle cx=\"12\" cy=\"12\" r=\"2\" />
                      </svg>
                    </div>
                    <div>
                      <div class=\"rx-theme-name\">Basic Sciences</div>
                      <div class=\"rx-theme-desc\">
                        Foundational discovery in physics, chemistry &amp; life
                        sciences
                      </div>
                    </div>
                  </div>

                  <div class=\"rx-theme\">
                    <div class=\"rx-theme-ico\">
                      <svg fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                        <path d=\"M5 17h14M6 17l1-5a3 3 0 013-2h4a3 3 0 013 2l1 5M8 17v2m8-2v2\" />
                        <circle cx=\"8.5\" cy=\"13.5\" r=\"0.5\" />
                        <circle cx=\"15.5\" cy=\"13.5\" r=\"0.5\" />
                      </svg>
                    </div>
                    <div>
                      <div class=\"rx-theme-name\">Mobility Technologies</div>
                      <div class=\"rx-theme-desc\">
                        Next-gen transport, electric &amp; autonomous systems
                      </div>
                    </div>
                  </div>

                  <div class=\"rx-theme\">
                    <div class=\"rx-theme-ico\">
                      <svg fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                        <path d=\"M12 2l8 4.5v9L12 20l-8-4.5v-9L12 2z\" />
                        <path d=\"M12 2v9m0 0l8-4.5M12 11l-8-4.5\" />
                      </svg>
                    </div>
                    <div>
                      <div class=\"rx-theme-name\">Materials &amp; Manufacturing</div>
                      <div class=\"rx-theme-desc\">
                        Advanced materials and smart, sustainable fabrication
                      </div>
                    </div>
                  </div>

                  <div class=\"rx-theme\">
                    <div class=\"rx-theme-ico\">
                      <svg fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                        <path d=\"M5 12a7 7 0 0114 0M8 12a4 4 0 018 0\" />
                        <circle cx=\"12\" cy=\"12\" r=\"1.5\" />
                        <path d=\"M12 13.5V20\" />
                      </svg>
                    </div>
                    <div>
                      <div class=\"rx-theme-name\">Communication Technologies</div>
                      <div class=\"rx-theme-desc\">
                        5G/6G networks, signal intelligence &amp; connectivity
                      </div>
                    </div>
                  </div>

                  <div class=\"rx-theme\">
                    <div class=\"rx-theme-ico\">
                      <svg fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                        <path d=\"M12 21c0-5 0-8 4-11-5 0-8 1-9 5M12 21c0-3-1-6-4-8\" />
                        <path d=\"M12 21v-3\" />
                      </svg>
                    </div>
                    <div>
                      <div class=\"rx-theme-name\">Agricultural Technologies</div>
                      <div class=\"rx-theme-desc\">
                        Sustainable agri-innovation &amp; food security
                      </div>
                    </div>
                  </div>

                  <div class=\"rx-theme\">
                    <div class=\"rx-theme-ico\">
                      <svg fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                        <path d=\"M4 12h3l2-6 4 14 2-8h5\" />
                      </svg>
                    </div>
                    <div>
                      <div class=\"rx-theme-name\">Sensor Technologies</div>
                      <div class=\"rx-theme-desc\">
                        Smart sensing, IoT &amp; precision instrumentation
                      </div>
                    </div>
                  </div>
                </div>

                <!-- explore links — same slide -->
                <div class=\"rx-cta\">
                  <p class=\"rx-cta-text\">
                    Explore GITAM's <strong>full research ecosystem</strong> -
                    strategy, initiatives, outcomes and impact.
                  </p>
                  <div class=\"rx-links\">
                    <a class=\"rx-link-btn rx-link-btn--primary\" href=\"https://www.gitam.edu/research\">
                      Explore all research
                      <svg width=\"13\" height=\"13\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.4\"
                        viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                        <path d=\"M5 12h14M12 5l7 7-7 7\" />
                      </svg>
                    </a>
                    <a class=\"rx-link-btn\"
                      href=\"https://www.gitam.edu/research/research-innovations/research-strategy/strategy-2021-2025\">Research
                      Strategy</a>
                    <a class=\"rx-link-btn\" href=\"https://www.gitam.edu/research/research-outcomes\">Outcomes &amp;
                      Impact</a>
                  </div>
                </div>
              </div>
            </article>
          </div><!-- /.rxd-slides -->

          <!-- scroll hint (slide 1 only) -->
          <div class=\"rxd-hint\" aria-hidden=\"true\">
            <span class=\"rxd-hint-txt\">Scroll to explore</span>
            <span class=\"rxd-hint-mouse\"><span class=\"rxd-hint-wheel\"></span></span>
          </div>
        </div><!-- /.rxd-stage -->
      </div><!-- /.rxd-track -->
    </section>

    <!-- SECTION: KNOW GITAM — VISION & MISSION -->
    <section class=\"vm-section\" id=\"sec-vision\" aria-label=\"Vision and Mission\">
      <div class=\"vm-inner\">
        <div class=\"vm-head\">
          <span class=\"vm-eyebrow\">Know GITAM</span>
          <h2 class=\"vm-title\">Guided by a clear vision,<br />driven by purpose</h2>
        </div>

        <div class=\"vm-panel\">
          <!-- Vision side (immersive) -->
          <div class=\"vm-vision\">
            <span class=\"vm-ring\" aria-hidden=\"true\"></span>
            <div class=\"vm-vision-body\">
              <span class=\"vm-kicker\">Our Vision</span>
              <p class=\"vm-statement\">
                GITAM will be an exceptional knowledge-driven institution,
                advancing on a culture of honesty and compassion to make a
                difference to the world.
              </p>
            </div>
            <a class=\"vm-cta\" href=\"https://www.gitam.edu/about-us\" target=\"_blank\" rel=\"noopener\">Know More
              <svg viewBox=\"0 0 16 16\" width=\"15\" height=\"15\" aria-hidden=\"true\">
                <path d=\"M3 8h9M8.5 4l4 4-4 4\" stroke=\"currentColor\" stroke-width=\"1.7\" fill=\"none\"
                  stroke-linecap=\"round\" stroke-linejoin=\"round\" />
              </svg>
            </a>
          </div>

          <!-- Mission side (numbered) -->
          <div class=\"vm-mission\">
            <span class=\"vm-kicker vm-kicker--dark\">Our Mission</span>
            <ol class=\"vm-list\">
              <li>
                <span class=\"vm-num\">01</span>
                <span class=\"vm-item-text\">Build a dynamic, application-oriented education ecosystem
                  immersed in holistic development.</span>
              </li>
              <li>
                <span class=\"vm-num\">02</span>
                <span class=\"vm-item-text\">Drive impactful, integrated research programmes to generate
                  new knowledge — guided by integrity, collaboration and an
                  entrepreneurial spirit.</span>
              </li>
              <li>
                <span class=\"vm-num\">03</span>
                <span class=\"vm-item-text\">Nurture valuable futures with global perspectives for our
                  students by helping them find their ikigai.</span>
              </li>
              <li>
                <span class=\"vm-num\">04</span>
                <span class=\"vm-item-text\">Permeate a culture of kindness within GITAM, fostering
                  passionate contributors.</span>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 13: HOSTELS -->
    <section class=\"hostels-section\" aria-labelledby=\"hostels-heading\">
      <!-- Hero band -->
      <div class=\"hostels-hero\">
        <div class=\"hostels-hero-inner\">
          <p class=\"hostels-eyebrow\" id=\"sec-hostels\">Life on Campus</p>
          <h2 class=\"hostels-title\" id=\"hostels-heading\">Then, where will</h2>
          <span class=\"hostels-title-sub\">you live?</span>
          <p class=\"hostels-desc\">
            Purpose-built residential campuses with dining, recreation, and a
            community that becomes your second family. Explore hostels across
            our three main campuses.
          </p>
        </div>
      </div>

      <!-- Sticky tab bar -->
      <div class=\"hostels-tabs\" role=\"tablist\">
        <button class=\"ht-tab ht-active\" data-tab=\"blr\" role=\"tab\">Bengaluru</button>

        <button class=\"ht-tab\" data-tab=\"hyd\" role=\"tab\">Hyderabad</button>
        <button class=\"ht-tab\" data-tab=\"vizag\" role=\"tab\">
          Visakhapatnam
        </button>

      </div>

      <!-- Panels -->
      <div class=\"hostels-panels\">
        <!-- ── Visakhapatnam ── -->
        <div class=\"ht-panel\" id=\"ht-panel-vizag\">
          <div class=\"ht-grid\">
            <div class=\"ht-photo ht-main ht-vizag-1\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"campus-tour-video\">
                <span class=\"video-play-btn\" aria-hidden=\"true\"></span>
                <iframe width=\"100%\" height=\"100%\" loading=\"lazy\" title=\"YouTube video player\"
                  frameborder=\"0\"
                  allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                  referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
              </div>

              <span class=\"ht-photo-label\">Hostel Campus Tour · Vizag</span>
            </div>
            <div class=\"ht-photo ht-side-1 ht-vizag-2\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Room Interior</span>
            </div>
            <div class=\"ht-photo ht-side-2 ht-vizag-6\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Recreation Area</span>
            </div>
            <div class=\"ht-photo ht-btm-1 ht-vizag-3\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Food Court</span>
            </div>
            <div class=\"ht-photo ht-btm-2 ht-vizag-4\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Dining Hall </span>
            </div>
            <div class=\"ht-photo ht-btm-3 ht-vizag-5\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Common Lounge</span>
            </div>
          </div>
          <div class=\"ht-info-row\">
            <div>
              <div class=\"ht-stats\">
                <div class=\"ht-stat\">
                  <span class=\"ht-stat-num\">3,200+</span><span class=\"ht-stat-label\">Hostel Seats</span>
                </div>
                <div class=\"ht-stat\">
                  <span class=\"ht-stat-num\">100+</span><span class=\"ht-stat-label\">Acres Campus</span>
                </div>
                <div class=\"ht-stat\">
                  <span class=\"ht-stat-num\">24/7</span><span class=\"ht-stat-label\">Security</span>
                </div>
              </div>
              <h3 class=\"ht-campus-name\">Visakhapatnam Campus</h3>
              <p class=\"ht-campus-sub\">
                Est. 1980 &middot; Beachside &middot; Andhra Pradesh
              </p>
              <div class=\"ht-amenities\">
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">🏋️</span> Gym &amp;
                  Fitness</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">🍽️</span> 4 Dining
                  Halls</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">📶</span> Campus Wi-Fi</span>
                <!-- <span class=\"ht-amenity\"
                    ><span class=\"ht-amenity-icon\">🏊</span> Swimming Pool</span
                  > -->
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">🛡️</span> 24/7 Security</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">🚌</span> Transport</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">💊</span> Health Centre</span>
              </div>
            </div>
            <div class=\"ht-right-content\">
              <p class=\"ht-right-title\">What life looks like here</p>
              <div class=\"ht-features\">
                <div class=\"ht-feature\">
                  <div class=\"ht-feature-dot\"></div>
                  <p class=\"ht-feature-text\">
                    <strong>Separate boys &amp; girls blocks</strong> with
                    dedicated wardens and 24/7 resident caretakers on each
                    floor.
                  </p>
                </div>
                <div class=\"ht-feature\">
                  <div class=\"ht-feature-dot\"></div>
                  <p class=\"ht-feature-text\">
                    <strong>Multi-cuisine dining</strong> with South Indian,
                    North Indian, and continental options: 3 meals + snacks
                    daily.
                  </p>
                </div>
                <div class=\"ht-feature\">
                  <div class=\"ht-feature-dot\"></div>
                  <p class=\"ht-feature-text\">
                    <strong>Walking distance to the beach</strong>. The Vizag
                    campus is one of the few beachside university campuses in
                    India.
                  </p>
                </div>
                <div class=\"ht-feature\">
                  <div class=\"ht-feature-dot\"></div>
                  <p class=\"ht-feature-text\">
                    <strong>Sports infrastructure</strong> including cricket
                    ground, football, basketball, and indoor courts.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ── Hyderabad ── -->
        <div class=\"ht-panel\" id=\"ht-panel-hyd\">
          <div class=\"ht-grid\">
            <div class=\"ht-photo ht-main ht-hyd-1\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"campus-tour-video\">
                <span class=\"video-play-btn\" aria-hidden=\"true\"></span>
                <iframe width=\"100%\" height=\"100%\" loading=\"lazy\" title=\"YouTube video player\"
                  frameborder=\"0\"
                  allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                  referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
              </div>

              <span class=\"ht-photo-label\">Hostel Campus Tour · Hyderabad</span>
            </div>
            <div class=\"ht-photo ht-side-1 ht-hyd-2\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Food Court</span>
            </div>
            <div class=\"ht-photo ht-side-2 ht-hyd-6\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Sports Complex</span>
            </div>
            <div class=\"ht-photo ht-btm-1 ht-hyd-3\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">AC Rooms</span>
            </div>
            <div class=\"ht-photo ht-btm-2 ht-hyd-4\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Study Lounge</span>
            </div>
            <div class=\"ht-photo ht-btm-3 ht-hyd-5\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Study Lounge</span>
            </div>
          </div>
          <div class=\"ht-info-row\">
            <div>
              <div class=\"ht-stats\">
                <div class=\"ht-stat\">
                  <span class=\"ht-stat-num\">5,000+</span><span class=\"ht-stat-label\">Hostel Seats</span>
                </div>
                <div class=\"ht-stat\">
                  <span class=\"ht-stat-num\">120+</span><span class=\"ht-stat-label\">Acres Campus</span>
                </div>
                <div class=\"ht-stat\">
                  <span class=\"ht-stat-num\">AC</span><span class=\"ht-stat-label\">All Rooms</span>
                </div>
              </div>
              <h3 class=\"ht-campus-name\">Hyderabad Campus</h3>
              <p class=\"ht-campus-sub\">
                Est. 2009 &middot; Largest Campus &middot; Telangana
              </p>
              <div class=\"ht-amenities\">
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">❄️</span> AC Rooms</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">🍽️</span> Food Courts</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">📶</span> High-Speed
                  Wi-Fi</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">🎮</span> Games Room</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">🛡️</span> 24/7 Security</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">🏃</span> Jogging Track</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">💊</span> Medical
                  Centre</span>
              </div>
            </div>
            <div class=\"ht-right-content\">
              <p class=\"ht-right-title\">What life looks like here</p>
              <div class=\"ht-features\">
                <div class=\"ht-feature\">
                  <div class=\"ht-feature-dot\"></div>
                  <p class=\"ht-feature-text\">
                    <strong>Largest residential campus</strong>, fully
                    air-conditioned blocks with single, double, and
                    triple-sharing options.
                  </p>
                </div>
                <div class=\"ht-feature\">
                  <div class=\"ht-feature-dot\"></div>
                  <p class=\"ht-feature-text\">
                    <strong>Multiple food courts</strong> offering cuisines
                    from across India: Andhra, North Indian, Chinese, and
                    more.
                  </p>
                </div>
                <div class=\"ht-feature\">
                  <div class=\"ht-feature-dot\"></div>
                  <p class=\"ht-feature-text\">
                    <strong>Tech-enabled campus</strong> with biometric
                    access, CCTV, and a dedicated student app for mess
                    feedback and room requests.
                  </p>
                </div>
                <div class=\"ht-feature\">
                  <div class=\"ht-feature-dot\"></div>
                  <p class=\"ht-feature-text\">
                    <strong>Close to HITEC City</strong>, with internship and
                    placement proximity to Hyderabad's IT corridor.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ── Bengaluru ── -->
        <div class=\"ht-panel ht-panel-active\" id=\"ht-panel-blr\">
          <div class=\"ht-grid\">
            <div class=\"ht-photo ht-main ht-blr-1\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"campus-tour-video\">
                <span class=\"video-play-btn\" aria-hidden=\"true\"></span>
                <iframe width=\"100%\" height=\"100%\" loading=\"lazy\" title=\"YouTube video player\"
                  frameborder=\"0\"
                  allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                  referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>

              </div>
              <span class=\"ht-photo-label\">Hostel Campus Tour · Bengaluru</span>
            </div>
            <div class=\"ht-photo ht-side-1 ht-blr-2\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Cafeteria</span>
            </div>
            <div class=\"ht-photo ht-side-2 ht-blr-6\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Outdoor Games</span>
            </div>
            <div class=\"ht-photo ht-btm-1 ht-blr-3\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Student Rooms</span>
            </div>
            <div class=\"ht-photo ht-btm-2 ht-blr-4\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Indoor Games</span>
            </div>
            <div class=\"ht-photo ht-btm-3 ht-blr-5\">
              <div class=\"ht-photo-dots\"></div>
              <div class=\"ht-photo-overlay\"></div>
              <span class=\"ht-photo-label\">Basketball Court</span>
            </div>
          </div>
          <div class=\"ht-info-row\">
            <div>
              <div class=\"ht-stats\">
                <div class=\"ht-stat\">
                  <span class=\"ht-stat-num\">1,800+</span><span class=\"ht-stat-label\">Hostel Seats</span>
                </div>
                <div class=\"ht-stat\">
                  <span class=\"ht-stat-num\">45</span><span class=\"ht-stat-label\">Acres Campus</span>
                </div>
                <!-- <div class=\"ht-stat\">
                    <span class=\"ht-stat-num\">4 km</span
                    ><span class=\"ht-stat-label\">to ITPL</span>
                  </div> -->
              </div>
              <h3 class=\"ht-campus-name\">Bengaluru Campus</h3>
              <p class=\"ht-campus-sub\">
                Est. 2012 &middot; In the IT Hub &middot; Karnataka
              </p>
              <div class=\"ht-amenities\">
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">🏙️</span> City
                  Connectivity</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">🍽️</span> Multi-Cuisine</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">📶</span> Fibre Wi-Fi</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">🏋️</span> Fitness
                  Centre</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">🛡️</span> 24/7 Security</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">🚇</span> Metro Nearby</span>
                <span class=\"ht-amenity\"><span class=\"ht-amenity-icon\">💊</span> Health Centre</span>
              </div>
            </div>
            <div class=\"ht-right-content\">
              <p class=\"ht-right-title\">What life looks like here</p>
              <div class=\"ht-features\">
                <!-- <div class=\"ht-feature\">
                    <div class=\"ht-feature-dot\"></div>
                    <p class=\"ht-feature-text\">
                      <strong>Prime Bengaluru location</strong>, 4 km from ITPL,
                      giving students direct access to India's startup and tech
                      ecosystem.
                    </p>
                  </div> -->
                <div class=\"ht-feature\">
                  <div class=\"ht-feature-dot\"></div>
                  <p class=\"ht-feature-text\">
                    <strong>Compact, connected campus</strong> with walkable
                    distances between academic blocks, hostels, and dining.
                  </p>
                </div>
                <div class=\"ht-feature\">
                  <div class=\"ht-feature-dot\"></div>
                  <p class=\"ht-feature-text\">
                    <strong>Metro &amp; BMTC connectivity</strong>. Students
                    easily access the city for internships, events, and
                    weekend activities.
                  </p>
                </div>
                <div class=\"ht-feature\">
                  <div class=\"ht-feature-dot\"></div>
                  <p class=\"ht-feature-text\">
                    <strong>Industry immersion</strong> through regular
                    company visits and campus drives from Bengaluru's top tech
                    companies.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /hostels-panels -->
    </section>

    <script>
      (function () {
        const hostelTabs = document.querySelectorAll('.ht-tab');
        const hostelPanels = document.querySelectorAll('.ht-panel');

        const hostelVideoMap = {
          blr: 'https://www.youtube.com/embed/60uJz55wA60?si=gNOWdvzPQN7SBhug&mute=1&playsinline=1&rel=0&autoplay=1',
          hyd: 'https://www.youtube.com/embed/wkPY59YFGUg?si=0TV44JMVTaIhftlu&mute=1&playsinline=1&rel=0&autoplay=1',
          vizag: 'https://www.youtube.com/embed/4EKVezeRo8M?si=PRW_2UPlhQgUn8iL&mute=1&playsinline=1&rel=0&autoplay=1'
        };

        function loadVideo(videoBox) {
          if (!videoBox) return;

          const frame = videoBox.querySelector('iframe');
          if (!frame || frame.dataset.loaded === 'true') return;

          const panel = videoBox.closest('.ht-panel');
          const key = panel ? panel.id.replace('ht-panel-', '') : null;
          const src = key ? hostelVideoMap[key] : null;

          if (!src) return;

          frame.src = src;
          frame.dataset.loaded = 'true';
          videoBox.classList.add('is-playing');
        }

        function activateHostelTab(tab) {
          const targetId = tab ? tab.dataset.tab : null;
          const targetPanel = targetId ? document.getElementById('ht-panel-' + targetId) : null;

          hostelTabs.forEach((button) => {
            const isActive = button === tab;
            button.classList.toggle('ht-active', isActive);
            button.setAttribute('aria-selected', String(isActive));
          });

          hostelPanels.forEach((panel) => {
            const isActive = panel === targetPanel;
            panel.classList.toggle('ht-panel-active', isActive);
            panel.hidden = !isActive;
          });
        }

        document.querySelectorAll('.campus-tour-video').forEach((videoBox) => {
          videoBox.setAttribute('role', 'button');
          videoBox.setAttribute('tabindex', '0');
          videoBox.setAttribute('aria-label', 'Play campus tour video');

          videoBox.addEventListener('click', function () {
            loadVideo(videoBox);
          });

          videoBox.addEventListener('keydown', function (event) {
            if (event.key === 'Enter' || event.key === ' ') {
              event.preventDefault();
              loadVideo(videoBox);
            }
          });
        });

        hostelTabs.forEach((tab) => {
          tab.addEventListener('click', function () {
            activateHostelTab(tab);
          });
        });

        const activeTab = document.querySelector('.ht-tab.ht-active');
        if (activeTab) {
          activateHostelTab(activeTab);
        }
      })();
    </script>

    <!-- SECTION 14: EXPLORE, ENGAGE & ENJOY -->
    <section class=\"eee-section\" id=\"sec-activities\" aria-labelledby=\"activities-heading\">
      <div class=\"eee-header\">
        <span class=\"eee-kicker\">Beyond the Classroom</span>
        <h2 class=\"eee-title\" id=\"activities-heading\">
          Explore. Engage. <span class=\"eee-title-green\">Enjoy.</span>
        </h2>
        <p class=\"eee-subtitle\">
          GITAM isn't just a university; it's a complete life. Four campuses
          built for the full human experience.
        </p>
      </div>

      <div class=\"eee-tabs\" role=\"tablist\">
          <button
            class=\"eee-tab eee-tab-active\"
            data-tab=\"infra\"
            role=\"tab\"
            aria-selected=\"true\"
          >
            <svg viewBox=\"0 0 20 20\" fill=\"none\">
              <rect
                x=\"4\"
                y=\"2.5\"
                width=\"12\"
                height=\"15\"
                rx=\"1\"
                stroke=\"currentColor\"
                stroke-width=\"1.5\"
              />
              <path
                d=\"M7 6h1.5M11.5 6H13M7 9.5h1.5M11.5 9.5H13M7 13h1.5M11.5 13H13\"
                stroke=\"currentColor\"
                stroke-width=\"1.5\"
                stroke-linecap=\"round\"
              />
            </svg>
            <span class=\"eee-tab-label\">World-Class Infrastructure</span>
          </button>
          <button
            class=\"eee-tab\"
            data-tab=\"sports\"
            role=\"tab\"
            aria-selected=\"false\"
          >
            <svg viewBox=\"0 0 20 20\" fill=\"none\">
              <path
                d=\"M7 3h6v3.2a3 3 0 01-6 0V3z\"
                stroke=\"currentColor\"
                stroke-width=\"1.5\"
                stroke-linejoin=\"round\"
              />
              <path
                d=\"M7 4H4.5a1 1 0 00-1 1v.7a2.8 2.8 0 002.8 2.8H7M13 4h2.5a1 1 0 011 1v.7a2.8 2.8 0 01-2.8 2.8H13\"
                stroke=\"currentColor\"
                stroke-width=\"1.4\"
                stroke-linecap=\"round\"
              />
              <path
                d=\"M10 9.7V13M7.5 17h5M8.2 17c0-1.8 1-2.3 1.8-3.3.8 1 1.8 1.5 1.8 3.3\"
                stroke=\"currentColor\"
                stroke-width=\"1.5\"
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
              />
            </svg>
            <span class=\"eee-tab-label\">Sports & Athletics</span>
          </button>
          <button
            class=\"eee-tab\"
            data-tab=\"life\"
            role=\"tab\"
            aria-selected=\"false\"
          >
            <svg viewBox=\"0 0 20 20\" fill=\"none\">
              <circle cx=\"7\" cy=\"7\" r=\"2.4\" stroke=\"currentColor\" stroke-width=\"1.5\" />
              <circle cx=\"13.2\" cy=\"7\" r=\"2.4\" stroke=\"currentColor\" stroke-width=\"1.5\" />
              <path
                d=\"M2.2 16.2c0-2.9 2-4.7 4.8-4.7s4.8 1.8 4.8 4.7M8.2 16.2c0-2.9 2-4.7 4.8-4.7s4.8 1.8 4.8 4.7\"
                stroke=\"currentColor\"
                stroke-width=\"1.5\"
                stroke-linecap=\"round\"
              />
            </svg>
            <span class=\"eee-tab-label\">Campus Life & Culture</span>
          </button>
          <button
            class=\"eee-tab\"
            data-tab=\"wellness\"
            role=\"tab\"
            aria-selected=\"false\"
          >
            <svg viewBox=\"0 0 20 20\" fill=\"none\">
              <path
                d=\"M10 2.3l6 2.1v5c0 4.3-2.6 7.5-6 8.8-3.4-1.3-6-4.5-6-8.8v-5l6-2.1z\"
                stroke=\"currentColor\"
                stroke-width=\"1.5\"
                stroke-linejoin=\"round\"
              />
              <path
                d=\"M7.3 10l1.9 1.9L12.7 8\"
                stroke=\"currentColor\"
                stroke-width=\"1.5\"
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
              />
            </svg>
            <span class=\"eee-tab-label\">Wellness & Safety</span>
          </button>
          <button
            class=\"eee-tab\"
            data-tab=\"local\"
            role=\"tab\"
            aria-selected=\"false\"
          >
            <svg viewBox=\"0 0 20 20\" fill=\"none\">
              <circle cx=\"10\" cy=\"10\" r=\"7.5\" stroke=\"currentColor\" stroke-width=\"1.5\" />
              <path
                d=\"M13.2 6.8l-1.9 4.5-4.5 1.9 1.9-4.5 4.5-1.9z\"
                stroke=\"currentColor\"
                stroke-width=\"1.3\"
                stroke-linejoin=\"round\"
              />
            </svg>
            <span class=\"eee-tab-label\">Local Attractions</span>
          </button>
        </div>

        <p class=\"eee-tab-caption\" aria-live=\"polite\">
          World-Class Infrastructure
        </p>

      <div class=\"eee-panels\">
        <!-- INFRASTRUCTURE -->
        <div class=\"eee-panel eee-panel-active\" data-panel=\"infra\">
          <div class=\"eee-panel-left\">
            <h3 class=\"eee-panel-title\">Where Great Minds Are Built</h3>
            <p class=\"eee-panel-desc\">
              Modern labs, a 3-lakh sq ft central library, innovation hubs,
              and state-of-the-art lecture theatres, built for the way
              students actually learn today.
            </p>
            <ul class=\"eee-pills\">
              <li>3,00,000 sq ft Central Library</li>
              <li>40+ Specialised Research Labs</li>
              <li>Innovation & Incubation Hub</li>
              <li>Smart Classrooms & Theatres</li>
            </ul>
          </div>
          <div class=\"eee-panel-right\">
            <div class=\"eee-grid\">
              <div class=\"eee-img eee-img-large\">
                <img class=\"img-fluid d-block d-sm-block\" src=\"";
        // line 5914
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Infra.webp\" alt=\"GITAM Library\"
                  loading=\"lazy\">
                <!-- <img class=\"img-fluid d-none\" src=\"";
        // line 5916
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Infra-mobile.webp\"
                                    alt=\"GITAM Library\" loading=\"lazy\"> -->
                <span class=\"eee-img-label\">Infrastructure</span>
              </div>
              <div class=\"eee-img\">
                <img class=\"img-fluid d-block d-sm-block\" src=\"";
        // line 5921
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Research.webp\" alt=\"Research Lab\"
                  loading=\"lazy\">
                <!-- <img class=\"img-fluid d-none\" src=\"";
        // line 5923
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Research-mobile.webp\"
                                    alt=\"Research Lab\" loading=\"lazy\"> -->
                <span class=\"eee-img-label\">Research Labs</span>
              </div>
              <div class=\"eee-img\">
                <img class=\"img-fluid d-none d-sm-block\" src=\"";
        // line 5928
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Lecturetheatre.webp\"
                  alt=\"Lecture Theatre\" loading=\"lazy\">
                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 5930
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Lecturetheatre-mobile1.webp\"
                  alt=\"Lecture Theatre\" loading=\"lazy\">
                <span class=\"eee-img-label\">Lecture Theatres</span>
              </div>
              <div class=\"eee-img\">
                <img class=\"img-fluid d-none d-sm-block\" src=\"";
        // line 5935
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/VDC.webp\" alt=\"Innovation Hub\"
                  loading=\"lazy\">
                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 5937
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/VDC-mobile.webp\" alt=\"Innovation Hub\"
                  loading=\"lazy\">
                <span class=\"eee-img-label\">Innovation Hub</span>
              </div>
            </div>
            <!-- <div class=\"eee-grid\">
                            <div class=\"eee-img eee-img-large\">
                                <img src=\"https://images.unsplash.com/photo-1562774053-701939374585?w=900&q=80&fit=crop\"
                                    alt=\"GITAM Library\" loading=\"lazy\" />
                                <span class=\"eee-img-label\">Central Library · Visakhapatnam</span>
                            </div>
                            <div class=\"eee-img\">
                                <img src=\"https://images.unsplash.com/photo-1532094349884-32aa800f74ef?w=600&q=80&fit=crop\"
                                    alt=\"Research Lab\" loading=\"lazy\" />
                                <span class=\"eee-img-label\">Research Labs</span>
                            </div>
                            <div class=\"eee-img\">
                                <img src=\"https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600&q=80&fit=crop\"
                                    alt=\"Lecture Theatre\" loading=\"lazy\" />
                                <span class=\"eee-img-label\">Lecture Theatres</span>
                            </div>
                            <div class=\"eee-img\">
                                <img src=\"https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=600&q=80&fit=crop\"
                                    alt=\"Innovation Hub\" loading=\"lazy\" />
                                <span class=\"eee-img-label\">Innovation Hub</span>
                            </div>
                        </div> -->
          </div>
        </div>

        <!-- SPORTS -->
        <div class=\"eee-panel\" data-panel=\"sports\">
          <div class=\"eee-panel-left\">
            <h3 class=\"eee-panel-title\">Train Like a Champion</h3>
            <p class=\"eee-panel-desc\">
              Cricket grounds, Olympic-standard courts, and
              full fitness centres across all campuses. Sport is not an
              extra-curricular here; it's core.
            </p>
            <ul class=\"eee-pills\">
              <li>International-standard Cricket Ground</li>
              <li>Basketball, Football & Tennis Courts</li>
              <!-- <li>Olympic-size Swimming Pool</li> -->
              <li>Fully Equipped Fitness Centre</li>
            </ul>
          </div>
          <div class=\"eee-panel-right\">
            <div class=\"eee-grid\">
              <div class=\"eee-img eee-img-large\">
                <img class=\"img-fluid d-none d-sm-block\" src=\"";
        // line 5986
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Sports.jpg\" alt=\"Cricket Ground\"
                  loading=\"lazy\">
                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 5988
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Cricket-Ground-mobile.jpg\" alt=\"Cricket Ground\"
                  loading=\"lazy\">
                <span class=\"eee-img-label\">Cricket Ground · Visakhapatnam</span>
              </div>
              <div class=\"eee-img\">
                <img class=\"img-fluid d-none d-sm-block\" src=\"";
        // line 5993
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Basketball.jpg\" alt=\"Volleyball Court\"
                  loading=\"lazy\">
                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 5995
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Basket-Ball-mobile.jpg\" alt=\"Volleyball Court\"
                  loading=\"lazy\">
                <span class=\"eee-img-label\">Basketball Court</span>
              </div>
              <div class=\"eee-img\">
                <img class=\"img-fluid d-none d-sm-block\" src=\"";
        // line 6000
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/table_tennis.jpg\" alt=\"Table Tennis\"
                  loading=\"lazy\">
                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 6002
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Table-Tennis-mobile.jpg\" alt=\"Table Tennis\"
                  loading=\"lazy\">
                <span class=\"eee-img-label\">Table Tennis</span>
              </div>
              <div class=\"eee-img\">
                <img class=\"img-fluid d-none d-sm-block\" src=\"";
        // line 6007
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/gym.jpg\" alt=\"Gym\" loading=\"lazy\">
                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 6008
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/GYM-mobile.jpg\" alt=\"Gym\" loading=\"lazy\">
                <span class=\"eee-img-label\">Fitness Centre</span>
              </div>
              <div class=\"eee-img\">
                <img class=\"img-fluid d-none d-sm-block\" src=\"";
        // line 6012
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/running-track.webp\" alt=\"Gym\"
                  loading=\"lazy\">
                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 6014
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/running-track-mobile.webp\" alt=\"Gym\"
                  loading=\"lazy\">
                <span class=\"eee-img-label\">Running Track</span>
              </div>
            </div>
            <!-- <div class=\"eee-grid\">
                <div class=\"eee-img eee-img-large\">
                  <img
                    src=\"https://images.unsplash.com/photo-1531415074968-036ba1b575da?w=900&q=80&fit=crop\"
                    alt=\"Cricket Ground\"
                    loading=\"lazy\"
                  />
                  <span class=\"eee-img-label\"
                    >Cricket Ground · Visakhapatnam</span
                  >
                </div>
                <div class=\"eee-img\">
                  <img
                    src=\"https://images.unsplash.com/photo-1546483875-ad9de59265b0?w=600&q=80&fit=crop\"
                    alt=\"Basketball Court\"
                    loading=\"lazy\"
                  />
                  <span class=\"eee-img-label\">Basketball Courts</span>
                </div>
                <div class=\"eee-img\">
                  <img
                    src=\"https://images.unsplash.com/photo-1530549387789-4c161d19bf08?w=600&q=80&fit=crop\"
                    alt=\"Swimming Pool\"
                    loading=\"lazy\"
                  />
                  <span class=\"eee-img-label\">Olympic Swimming Pool</span>
                </div>
                <div class=\"eee-img\">
                  <img
                    src=\"https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=600&q=80&fit=crop\"
                    alt=\"Gym\"
                    loading=\"lazy\"
                  />
                  <span class=\"eee-img-label\">Fitness Centre</span>
                </div>
              </div> -->
          </div>
        </div>

        <!-- CAMPUS LIFE -->
        <div class=\"eee-panel\" data-panel=\"life\">
          <div class=\"eee-panel-left\">
            <h3 class=\"eee-panel-title\">A Culture That Pulls You In</h3>
            <p class=\"eee-panel-desc\">
              200+ student clubs, annual fests that draw thousands,
              multi-cuisine dining halls, and a campus that never really
              sleeps. This is what people mean when they say their university
              years were the best of their life.
            </p>
            <ul class=\"eee-pills\">
              <li>200+ Active Student Clubs</li>
              <li>Annual Fests · Utsav · Dhruva</li>
              <li>Multi-cuisine Dining Halls</li>
              <li>Student-run Media & Publications</li>
            </ul>
          </div>
          <div class=\"eee-panel-right\">
            <div class=\"eee-grid\">
              <div class=\"eee-img eee-img-large\">
                <img class=\"img-fluid  d-none d-sm-block\" src=\"";
        // line 6078
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Annualfest1.jpg\" alt=\"Annual Fest\"
                  loading=\"lazy\">
                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 6080
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/VDC-mobile.jpg\" alt=\"Annual Fest\"
                  loading=\"lazy\">
                <span class=\"eee-img-label\">Annual Fest · GITAM Utsav</span>
              </div>
              <div class=\"eee-img\">
                <img class=\"img-fluid d-none d-sm-block\" src=\"";
        // line 6085
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Multi-cuisine_Dining_Halls.webp\"
                  alt=\"Dining Hall\" loading=\"lazy\">

                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 6088
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Multi-cuisine-Dining-Halls-mobile.jpg\"
                  alt=\"Dining Hall\" loading=\"lazy\">
                <span class=\"eee-img-label\">Multi-cuisine Dining</span>
              </div>
              <div class=\"eee-img\">
                <img class=\"img-fluid  d-none d-sm-block\" src=\"";
        // line 6093
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/music_campuslife.jpg\"
                  alt=\"Students on campus\" loading=\"lazy\">

                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 6096
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Music-mobile.jpg\" alt=\"Students on campus\"
                  loading=\"lazy\">
                <span class=\"eee-img-label\">Campus Community</span>
              </div>
              <div class=\"eee-img\">
                <img class=\"img-fluid d-none d-sm-block\" src=\"";
        // line 6101
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/natyam_campuslife.jpg\"
                  alt=\"Student Club\" loading=\"lazy\">
                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 6103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Natyam-mobile.jpg\" alt=\"Student Club\"
                  loading=\"lazy\">
                <span class=\"eee-img-label\">Student Clubs &amp; Activities</span>
              </div>
            </div>
            <!-- <div class=\"eee-grid\">
                <div class=\"eee-img eee-img-large\">
                  <img
                    src=\"https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=900&q=80&fit=crop\"
                    alt=\"Annual Fest\"
                    loading=\"lazy\"
                  />
                  <span class=\"eee-img-label\">Annual Fest · GITAM Utsav</span>
                </div>
                <div class=\"eee-img\">
                  <img
                    src=\"https://images.unsplash.com/photo-1567521464027-f127ff144326?w=600&q=80&fit=crop\"
                    alt=\"Dining Hall\"
                    loading=\"lazy\"
                  />
                  <span class=\"eee-img-label\">Multi-cuisine Dining</span>
                </div>
                <div class=\"eee-img\">
                  <img
                    src=\"https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&q=80&fit=crop\"
                    alt=\"Students on campus\"
                    loading=\"lazy\"
                  />
                  <span class=\"eee-img-label\">Campus Community</span>
                </div>
                <div class=\"eee-img\">
                  <img
                    src=\"https://images.unsplash.com/photo-1529070538774-1843cb3265df?w=600&q=80&fit=crop\"
                    alt=\"Student Club\"
                    loading=\"lazy\"
                  />
                  <span class=\"eee-img-label\">Student Clubs & Activities</span>
                </div>
              </div> -->
          </div>
        </div>

        <!-- WELLNESS -->
        <div class=\"eee-panel\" data-panel=\"wellness\">
          <div class=\"eee-panel-left\">
            <h3 class=\"eee-panel-title\">Your Safety is Non-Negotiable</h3>
            <p class=\"eee-panel-desc\">
              24/7 security, a dedicated health centre with resident doctors,
              trained wardens on every floor, and wellness counsellors, so you
              can focus entirely on becoming who you're here to become.
            </p>
            <ul class=\"eee-pills\">
              <li>24/7 CCTV Surveillance & Security</li>
              <li>On-campus Health Centre & Doctors</li>
              <li>Resident Wardens on Every Floor</li>
              <li>Student Wellness & Counselling</li>
            </ul>
          </div>
          <div class=\"eee-panel-right\">
            <div class=\"eee-grid\">
              <div class=\"eee-img eee-img-large\">
                <img class=\"img-fluid  d-none d-sm-block\" src=\"";
        // line 6164
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/GYM-wellness.webp\"
                  alt=\"Health &amp; Fitness Hub\" loading=\"lazy\">
                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 6166
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/GYM-wellness-mobile.jpg\"
                  alt=\"Health &amp; Fitness Hub\" loading=\"lazy\">
                <span class=\"eee-img-label\">Health &amp; Fitness Hub</span>
              </div>
              <div class=\"eee-img\">
                <img class=\"img-fluid  d-none d-sm-block\" src=\"";
        // line 6171
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/safety.webp\" alt=\"Safety\"
                  loading=\"lazy\">
                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 6173
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Security-mobile.jpg\" alt=\"Safety\"
                  loading=\"lazy\">
                <span class=\"eee-img-label\">Safety</span>
              </div>
              <div class=\"eee-img\">
                <img class=\"img-fluid  d-none d-sm-block\" src=\"";
        // line 6178
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Doctors-Room-Desk.webp\" alt=\"Wellness\"
                  loading=\"lazy\" chat-fab=\"\">

                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 6181
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Doctor-Room-mobile.jpg\" alt=\"Wellness\"
                  loading=\"lazy\">
                <span class=\"eee-img-label\">Counselling &amp; Wellness</span>
              </div>
              <div class=\"eee-img\">
                <img class=\"img-fluid d-none d-sm-block\" src=\"";
        // line 6186
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Stay-experience.webp\"
                  alt=\"Welcoming Stay Experience\" loading=\"lazy\">
                <img class=\"img-fluid d-sm-none\" src=\"";
        // line 6188
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/explore/new/Studets-mobile.jpg\"
                  alt=\"Welcoming Stay Experience\" loading=\"lazy\">
                <span class=\"eee-img-label\">Welcoming Stay Experience</span>
              </div>
            </div>
            <!-- <div class=\"eee-grid\">
                <div class=\"eee-img eee-img-large\">
                  <img
                    src=\"https://images.unsplash.com/photo-1519494026892-9f5e4c6a4512?w=900&q=80&fit=crop\"
                    alt=\"Health Centre\"
                    loading=\"lazy\"
                  />
                  <span class=\"eee-img-label\">On-campus Health Centre</span>
                </div>
                <div class=\"eee-img\">
                  <img
                    src=\"https://images.unsplash.com/photo-1584820927498-cfe5211fd8bf?w=600&q=80&fit=crop\"
                    alt=\"Medical care\"
                    loading=\"lazy\"
                  />
                  <span class=\"eee-img-label\">Resident Medical Staff</span>
                </div>
                <div class=\"eee-img\">
                  <img
                    src=\"https://images.unsplash.com/photo-1516321497487-e288fb19713f?w=600&q=80&fit=crop\"
                    alt=\"Wellness\"
                    loading=\"lazy\"
                  />
                  <span class=\"eee-img-label\">Counselling & Wellness</span>
                </div>
                <div class=\"eee-img\">
                  <img
                    src=\"https://images.unsplash.com/photo-1557804506-669a67965ba0?w=600&q=80&fit=crop\"
                    alt=\"Security\"
                    loading=\"lazy\"
                  />
                  <span class=\"eee-img-label\">Campus Security · 24/7</span>
                </div>
              </div> -->
          </div>
        </div>

        <!-- LOCAL ATTRACTIONS -->
        <div class=\"eee-panel\" data-panel=\"local\">
          <div class=\"eee-panel-left\">
            <h3 class=\"eee-panel-title\">The City Is Your Campus Too</h3>
            <p class=\"eee-panel-desc\">
              GITAM's campuses sit in some of India's most vibrant cities.
              Vizag's beaches, Hyderabad's heritage old city, Bengaluru's
              gardens and startup cafes — your weekends are never short of
              places to discover.
            </p>
            <ul class=\"eee-pills\">
              <li>RK Beach & Araku Valley · Vizag</li>
              <li>Charminar & Golconda Fort · Hyderabad</li>
              <li>Cubbon Park & Nandi Hills · Bengaluru</li>
              <li>Local Food, Markets & Weekend Escapes</li>
            </ul>
          </div>
          <div class=\"eee-panel-right\">
            <div class=\"eee-grid\">
              <div class=\"eee-img eee-img-large\">
                <img src=\"https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=900&q=80&fit=crop\"
                  alt=\"Visakhapatnam Beach\" loading=\"lazy\" />
                <span class=\"eee-img-label\">RK Beach · Visakhapatnam</span>
              </div>
              <div class=\"eee-img\">
                <img src=\"https://images.unsplash.com/photo-1564507592333-c60657eea523?w=600&q=80&fit=crop\"
                  alt=\"Charminar Hyderabad\" loading=\"lazy\" />
                <span class=\"eee-img-label\">Charminar · Hyderabad</span>
              </div>
              <div class=\"eee-img\">
                <img src=\"https://images.unsplash.com/photo-1519125323398-675f0ddb6308?w=600&q=80&fit=crop\"
                  alt=\"Bengaluru Gardens\" loading=\"lazy\" />
                <span class=\"eee-img-label\">Cubbon Park · Bengaluru</span>
              </div>
              <div class=\"eee-img\">
                <img src=\"https://images.unsplash.com/photo-1596040033229-a9821ebd058d?w=900&q=80&fit=crop\"
                  alt=\"Local street food\" loading=\"lazy\" />
                <span class=\"eee-img-label\">Local Food & Markets</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION: STUDENT EXPERIENCES -->
    <section class=\"testimonials-section\" id=\"sec-testimonials\" aria-labelledby=\"testimonials-heading\">
      <div class=\"testimonials-inner\">
        <div class=\"tm-intro\">
          <span class=\"tm-eyebrow\">Student Voices</span>
          <h2 class=\"testimonials-heading\" id=\"testimonials-heading\">
            What It’s Really Like at <em>GITAM</em>
          </h2>
          <p class=\"tm-desc\">
            See what students, alumni, and recruiters say about life at GITAM.
            Real stories and unscripted moments that reflect our culture,
            learning, and community.
          </p>
          <button class=\"testimonials-chat-btn\" id=\"testimonialsChatBtn\" aria-label=\"Chat with a Student\">
            <svg viewBox=\"0 0 20 20\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
              stroke-linejoin=\"round\" aria-hidden=\"true\">
              <path d=\"M18 3H2a1 1 0 00-1 1v10a1 1 0 001 1h4l3 3 3-3h6a1 1 0 001-1V4a1 1 0 00-1-1z\" />
            </svg>
            Chat with a Student
          </button>
        </div>
        <div class=\"tm-marquee\" aria-label=\"Student testimonials\">
          <div class=\"tm-col tm-col-1\" style=\"--dur: 40s\">
            <div class=\"tm-track\">
              <div class=\"tm-card\">
                <div class=\"tm-card-head\">
                  <span class=\"tm-avatar\">SS</span>
                  <span class=\"tm-meta\">
                    <span class=\"tm-name\">Sneha Sappa</span>
                    <span class=\"tm-handle\">B.Tech CSE ’23</span>
                  </span>
                </div>
                <p class=\"tm-text\">
                  It was a great experience studying at GITAM university, a
                  memory to cherish for a lifetime. The entire faculty and
                  department leaves no stone unturned to shape one’s future.
                </p>
              </div>
              <div class=\"tm-card\">
                <div class=\"tm-card-head\">
                  <span class=\"tm-avatar tm-avatar-media\"><svg viewBox=\"0 0 20 20\" fill=\"none\" stroke=\"#fff\"
                      stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
                      <rect x=\"2.5\" y=\"4\" width=\"15\" height=\"12\" rx=\"2\" />
                      <circle cx=\"10\" cy=\"10\" r=\"3\" />
                    </svg></span>
                  <span class=\"tm-meta\">
                    <span class=\"tm-name\">Campus Fest</span>
                    <span class=\"tm-handle\">Annual cultural fest</span>
                  </span>
                </div>
                <p class=\"tm-text\">
                  Three days of music, dance and pure energy at GITAM Utsav.
                  The whole campus comes alive!
                </p>
                <div class=\"tm-card-media\">
                  <img src=\"https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&q=80&fit=crop\"
                    alt=\"GITAM campus life\" loading=\"lazy\" />
                </div>
              </div>
              <div class=\"tm-card\">
                <div class=\"tm-card-head\">
                  <span class=\"tm-avatar tm-avatar-gold\">RV</span>
                  <span class=\"tm-meta\">
                    <span class=\"tm-name\">Rohit Varma</span>
                    <span class=\"tm-handle\">Mechanical Engg ’22</span>
                  </span>
                </div>
                <p class=\"tm-text\">
                  The exposure I received at GITAM was unparalleled. From
                  research labs to industry connect programs, every
                  opportunity helped me build a strong foundation for my
                  career.
                </p>
              </div>
              <div class=\"tm-card\">
                <div class=\"tm-card-head\">
                  <span class=\"tm-avatar\">AR</span>
                  <span class=\"tm-meta\">
                    <span class=\"tm-name\">Ananya Reddy</span>
                    <span class=\"tm-handle\">MBA, School of Business</span>
                  </span>
                </div>
                <p class=\"tm-text\">
                  Placement support here is incredible. I walked into my final
                  year with three offers in hand and landed my dream role at a
                  top product company.
                </p>
              </div>
            </div>
          </div>
          <div class=\"tm-col tm-col-2 tm-col-down\" style=\"--dur: 34s\">
            <div class=\"tm-track\">
              <div class=\"tm-card\">
                <div class=\"tm-card-head\">
                  <span class=\"tm-avatar\">ND</span>
                  <span class=\"tm-meta\">
                    <span class=\"tm-name\">Neeharika Duvvuri</span>
                    <span class=\"tm-handle\">BBA ’21</span>
                  </span>
                </div>
                <p class=\"tm-text\">
                  GITAM is one of those universities where opportunities are
                  plentiful. During my 2 years at the University, I had
                  multiple opportunities to interact with industrial stalwarts
                  and host multiple events.
                </p>
              </div>
              <div class=\"tm-card\">
                <div class=\"tm-card-head\">
                  <span class=\"tm-avatar tm-avatar-gold\">PA</span>
                  <span class=\"tm-meta\">
                    <span class=\"tm-name\">Priya Anand</span>
                    <span class=\"tm-handle\">B.Sc Data Science ’24</span>
                  </span>
                </div>
                <p class=\"tm-text\">
                  GITAM gave me more than a degree. The mentorship, the peer
                  community, and the emphasis on practical learning shaped me
                  into a confident professional.
                </p>
              </div>
              <div class=\"tm-card\">
                <div class=\"tm-card-head\">
                  <span class=\"tm-avatar tm-avatar-media\"><svg viewBox=\"0 0 20 20\" fill=\"none\" stroke=\"#fff\"
                      stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
                      <rect x=\"2.5\" y=\"4\" width=\"15\" height=\"12\" rx=\"2\" />
                      <circle cx=\"10\" cy=\"10\" r=\"3\" />
                    </svg></span>
                  <span class=\"tm-meta\">
                    <span class=\"tm-name\">Student Life</span>
                    <span class=\"tm-handle\">On campus</span>
                  </span>
                </div>
                <p class=\"tm-text\">
                  Late-night project sessions, club meets, and friends who
                  became family — these are the years I’ll always remember.
                </p>
                <div class=\"tm-card-media\">
                  <img src=\"https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&q=80&fit=crop\"
                    alt=\"GITAM campus life\" loading=\"lazy\" />
                </div>
              </div>
              <div class=\"tm-card\">
                <div class=\"tm-card-head\">
                  <span class=\"tm-avatar\">KN</span>
                  <span class=\"tm-meta\">
                    <span class=\"tm-name\">Karthik Nair</span>
                    <span class=\"tm-handle\">Founder · Incubated at GITAM</span>
                  </span>
                </div>
                <p class=\"tm-text\">
                  The startup incubation cell backed my idea from day one. We
                  raised our first round before I even graduated.
                </p>
              </div>
            </div>
          </div>
          <div class=\"tm-col tm-col-3\" style=\"--dur: 46s\">
            <div class=\"tm-track\">
              <div class=\"tm-card\">
                <div class=\"tm-card-head\">
                  <span class=\"tm-avatar\">SD</span>
                  <span class=\"tm-meta\">
                    <span class=\"tm-name\">Shruthi Dantulu</span>
                    <span class=\"tm-handle\">M.Tech ’20</span>
                  </span>
                </div>
                <p class=\"tm-text\">
                  I had a privilege in doing my masters degree at GITAM
                  University, Visakhapatnam. The University taught me a lot,
                  not just the theoretical knowledge but also the practicality
                  of the subject.
                </p>
              </div>
              <div class=\"tm-card\">
                <div class=\"tm-card-head\">
                  <span class=\"tm-avatar tm-avatar-gold\">AA</span>
                  <span class=\"tm-meta\">
                    <span class=\"tm-name\">Ahmed Al-Rashid</span>
                    <span class=\"tm-handle\">International Student · UAE</span>
                  </span>
                </div>
                <p class=\"tm-text\">
                  Being an international student, I was impressed by how
                  welcoming GITAM’s community is. The campus facilities,
                  diverse student body, and quality of education exceeded my
                  expectations completely.
                </p>
              </div>
              <div class=\"tm-card\">
                <div class=\"tm-card-head\">
                  <span class=\"tm-avatar\">MR</span>
                  <span class=\"tm-meta\">
                    <span class=\"tm-name\">Meghana Rao</span>
                    <span class=\"tm-handle\">B.Com ’23</span>
                  </span>
                </div>
                <p class=\"tm-text\">
                  Sports, clubs, fests — campus life never had a dull moment.
                  I made friends and memories that will last a lifetime.
                </p>
              </div>
              <div class=\"tm-card\">
                <div class=\"tm-card-head\">
                  <span class=\"tm-avatar tm-avatar-media\"><svg viewBox=\"0 0 20 20\" fill=\"none\" stroke=\"#fff\"
                      stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
                      <rect x=\"2.5\" y=\"4\" width=\"15\" height=\"12\" rx=\"2\" />
                      <circle cx=\"10\" cy=\"10\" r=\"3\" />
                    </svg></span>
                  <span class=\"tm-meta\">
                    <span class=\"tm-name\">Convocation Day</span>
                    <span class=\"tm-handle\">Class of 2023</span>
                  </span>
                </div>
                <p class=\"tm-text\">
                  Caps in the air, families cheering — the proudest moment,
                  made possible by everyone at GITAM.
                </p>
                <div class=\"tm-card-media\">
                  <img src=\"https://images.unsplash.com/photo-1627556704302-624286467c65?w=600&q=80&fit=crop\"
                    alt=\"GITAM campus life\" loading=\"lazy\" />
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- SECTION: SOCIAL WALL (#LifeAtGITAM) — Option 2a dark -->
    <section class=\"social-wall\" id=\"sec-social-wall\">
      <div class=\"sw-header\">
        <div>
          <p class=\"sw-tag\">#LifeAtGITAM</p>
          <h2 class=\"sw-title\">The campus, <span>live.</span></h2>
          <p class=\"sw-sub\">What students, faculty and alumni are sharing right now.</p>
        </div>
        <a href=\"https://www.instagram.com/gitaborgs/\" target=\"_blank\" rel=\"noopener noreferrer\"
          class=\"sw-follow\">Follow @gitam.edu</a>
      </div>
      <div class=\"sw-grid\">
        <!-- Column 1 -->
        <div class=\"sw-col\">
          <div class=\"sw-post sw-post--img\">
            <img src=\"https://images.unsplash.com/photo-1523050854058-8df90110c476?w=400&h=320&fit=crop\"
              alt=\"Convocation Day\" loading=\"lazy\" style=\"height:280px;\">
            <div class=\"sw-post-grad\"></div>
            <div class=\"sw-post-content\">
              <span class=\"sw-platform\">Instagram</span>
              <span class=\"sw-post-text\">Convocation Day 2026 — dreams officially endorsed!</span>
              <span class=\"sw-post-handle\">@gitam.edu</span>
            </div>
          </div>
          <div class=\"sw-post sw-post--text\">
            <div class=\"sw-post-content\">
              <span class=\"sw-platform\">LinkedIn</span>
              <p class=\"sw-post-text\">\"The research lab culture at GITAM changed the way I approach problems. Grateful
                for mentors who push you to think bigger.\"</p>
              <span class=\"sw-post-handle\">@alumni_priya</span>
            </div>
          </div>
        </div>
        <!-- Column 2 -->
        <div class=\"sw-col\">
          <div class=\"sw-post sw-post--text\">
            <div class=\"sw-post-content\">
              <span class=\"sw-platform\">Twitter</span>
              <p class=\"sw-post-text\">Just wrapped up an incredible hackathon at GITAM Hyderabad. 36 hours, zero
                sleep,
                one winning prototype.</p>
              <span class=\"sw-post-handle\">@dev_rahul22</span>
            </div>
          </div>
          <div class=\"sw-post sw-post--img\">
            <img src=\"https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=400&h=360&fit=crop\"
              alt=\"Campus Life\" loading=\"lazy\" style=\"height:320px;\">
            <div class=\"sw-post-grad\"></div>
            <div class=\"sw-post-content\">
              <span class=\"sw-platform\">Instagram</span>
              <span class=\"sw-post-text\">Golden hour on the Vizag campus — beats any screensaver</span>
              <span class=\"sw-post-handle\">@gitam.vizag</span>
            </div>
          </div>
        </div>
        <!-- Column 3 -->
        <div class=\"sw-col\">
          <div class=\"sw-post sw-post--img\">
            <img src=\"https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=400&h=300&fit=crop\"
              alt=\"Student Club\" loading=\"lazy\" style=\"height:260px;\">
            <div class=\"sw-post-grad\"></div>
            <div class=\"sw-post-content\">
              <span class=\"sw-platform\">Instagram</span>
              <span class=\"sw-post-text\">TEDx GITAM — ideas worth spreading, right here on campus</span>
              <span class=\"sw-post-handle\">@tedxgitam</span>
            </div>
          </div>
          <div class=\"sw-post sw-post--text\">
            <div class=\"sw-post-content\">
              <span class=\"sw-platform\">LinkedIn</span>
              <p class=\"sw-post-text\">\"From GITAM to Google — the placement cell made it happen. Forever grateful for
                the mock interviews and prep sessions.\"</p>
              <span class=\"sw-post-handle\">@arun_k_tech</span>
            </div>
          </div>
          <div class=\"sw-post sw-post--img\">
            <img src=\"https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400&h=240&fit=crop\"
              alt=\"Study Group\" loading=\"lazy\" style=\"height:200px;\">
            <div class=\"sw-post-grad\"></div>
            <div class=\"sw-post-content\">
              <span class=\"sw-platform\">Instagram</span>
              <span class=\"sw-post-text\">Library crew reporting for finals duty</span>
              <span class=\"sw-post-handle\">@gitam_life</span>
            </div>
          </div>
        </div>
        <!-- Column 4 -->
        <div class=\"sw-col\">
          <div class=\"sw-post sw-post--img\">
            <img src=\"https://images.unsplash.com/photo-1560439514-4e9645039924?w=400&h=340&fit=crop\" alt=\"Sports Day\"
              loading=\"lazy\" style=\"height:300px;\">
            <div class=\"sw-post-grad\"></div>
            <div class=\"sw-post-content\">
              <span class=\"sw-platform\">Instagram</span>
              <span class=\"sw-post-text\">Inter-campus sports meet — Bengaluru takes the trophy this year!</span>
              <span class=\"sw-post-handle\">@gitam_sports</span>
            </div>
          </div>
          <div class=\"sw-post sw-post--text\">
            <div class=\"sw-post-content\">
              <span class=\"sw-platform\">Twitter</span>
              <p class=\"sw-post-text\">GITAM pharmacy students running a free health camp in the local community. This
                is
                what education should look like.</p>
              <span class=\"sw-post-handle\">@pharma_gitam</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION: CONTACT US -->
    <section id=\"sec-contact\" aria-labelledby=\"contact-heading\">
      <div class=\"section-hd\">
        <span class=\"section-tag\">Get in Touch</span>
        <h2 class=\"section-title\" id=\"contact-heading\">
          Contact <span>Us</span>
        </h2>
        <p class=\"section-sub\">
          Reach out to your nearest GITAM campus - our admissions team is
          ready to help
        </p>
      </div>
      <div class=\"row g-4 contact-grid\">
        <div class=\"col-12 col-md-6 col-xl-3\">
          <div class=\"contact-card\">
            <span class=\"contact-campus-badge\">Bengaluru Campus</span>
            <h3>Bengaluru</h3>
            <div class=\"contact-detail\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                stroke-linejoin=\"round\" aria-hidden=\"true\">
                <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z\" />
                <circle cx=\"12\" cy=\"10\" r=\"3\" />
              </svg>
              <span>Nagadenahalli, Doddaballapur Rd, Bengaluru North - 562 163,
                Karnataka</span>
            </div>
            <div class=\"contact-detail\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                stroke-linejoin=\"round\" aria-hidden=\"true\">
                <path
                  d=\"M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.69 12a19.79 19.79 0 01-3.07-8.67A2 2 0 013.62 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.91 8.7a16 16 0 006.29 6.29l.96-.96a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z\" />
              </svg>
              <a href=\"tel:+918884984000\">8884984000</a>
            </div>
            <div class=\"contact-detail\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                stroke-linejoin=\"round\" aria-hidden=\"true\">
                <path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\" />
                <polyline points=\"22,6 12,13 2,6\" />
              </svg>
              <a href=\"mailto:bengaluru@gitam.edu\">bengaluru@gitam.edu</a>
            </div>
            <a href=\"https://maps.google.com/?q=GITAM+University+Bengaluru\" class=\"contact-map-link\" target=\"_blank\"
              rel=\"noopener\">
              View on Map
              <svg viewBox=\"0 0 14 14\" fill=\"none\" aria-hidden=\"true\">
                <path d=\"M1.5 7h11M8 2.5l4.5 4.5L8 11.5\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
                  stroke-linejoin=\"round\" />
              </svg>
            </a>
          </div>
        </div>

        <div class=\"col-12 col-md-6 col-xl-3\">
          <div class=\"contact-card\">
            <span class=\"contact-campus-badge\">Hyderabad Campus</span>
            <h3>Hyderabad</h3>
            <div class=\"contact-detail\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                stroke-linejoin=\"round\" aria-hidden=\"true\">
                <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z\" />
                <circle cx=\"12\" cy=\"10\" r=\"3\" />
              </svg>
              <span>Rudraram, Patancheru Mandal, Sangareddy - 502 329,
                Telangana</span>
            </div>
            <div class=\"contact-detail\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                stroke-linejoin=\"round\" aria-hidden=\"true\">
                <path
                  d=\"M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.69 12a19.79 19.79 0 01-3.07-8.67A2 2 0 013.62 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.91 8.7a16 16 0 006.29 6.29l.96-.96a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z\" />
              </svg>
              <a href=\"tel:+918884984000\">8884984000</a>
            </div>
            <div class=\"contact-detail\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                stroke-linejoin=\"round\" aria-hidden=\"true\">
                <path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\" />
                <polyline points=\"22,6 12,13 2,6\" />
              </svg>
              <a href=\"mailto:hyderabad@gitam.edu\">hyderabad@gitam.edu</a>
            </div>
            <a href=\"https://maps.google.com/?q=GITAM+University+Hyderabad+Rudraram\" class=\"contact-map-link\"
              target=\"_blank\" rel=\"noopener\">
              View on Map
              <svg viewBox=\"0 0 14 14\" fill=\"none\" aria-hidden=\"true\">
                <path d=\"M1.5 7h11M8 2.5l4.5 4.5L8 11.5\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
                  stroke-linejoin=\"round\" />
              </svg>
            </a>
          </div>
        </div>
        <div class=\"col-12 col-md-6 col-xl-3\">
          <div class=\"contact-card\">
            <span class=\"contact-campus-badge\">Visakhapatnam Campus</span>
            <h3>Visakhapatnam</h3>
            <div class=\"contact-detail\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                stroke-linejoin=\"round\" aria-hidden=\"true\">
                <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z\" />
                <circle cx=\"12\" cy=\"10\" r=\"3\" />
              </svg>
              <span>Gandhi Nagar, Rushikonda, Visakhapatnam - 530 045, Andhra
                Pradesh</span>
            </div>
            <div class=\"contact-detail\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                stroke-linejoin=\"round\" aria-hidden=\"true\">
                <path
                  d=\"M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.69 12a19.79 19.79 0 01-3.07-8.67A2 2 0 013.62 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.91 8.7a16 16 0 006.29 6.29l.96-.96a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z\" />
              </svg>
              <a href=\"tel:+918884984000\">8884984000</a>
            </div>
            <div class=\"contact-detail\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                stroke-linejoin=\"round\" aria-hidden=\"true\">
                <path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\" />
                <polyline points=\"22,6 12,13 2,6\" />
              </svg>
              <a href=\"mailto:admissions@gitam.edu\">admissions@gitam.edu</a>
            </div>
            <a href=\"https://maps.google.com/?q=GITAM+University+Visakhapatnam\" class=\"contact-map-link\" target=\"_blank\"
              rel=\"noopener\">
              View on Map
              <svg viewBox=\"0 0 14 14\" fill=\"none\" aria-hidden=\"true\">
                <path d=\"M1.5 7h11M8 2.5l4.5 4.5L8 11.5\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
                  stroke-linejoin=\"round\" />
              </svg>
            </a>
          </div>
        </div>
        <div class=\"col-12 col-md-6 col-xl-3\">
          <div class=\"contact-card\">
            <span class=\"contact-campus-badge\">Medical Campus</span>
            <h3>GIMSR - Visakhapatnam</h3>
            <div class=\"contact-detail\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                stroke-linejoin=\"round\" aria-hidden=\"true\">
                <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z\" />
                <circle cx=\"12\" cy=\"10\" r=\"3\" />
              </svg>
              <span>GITAM Institute of Medical Sciences, Rushikonda, Visakhapatnam
                - 530 045</span>
            </div>
            <div class=\"contact-detail\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                stroke-linejoin=\"round\" aria-hidden=\"true\">
                <path
                  d=\"M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.69 12a19.79 19.79 0 01-3.07-8.67A2 2 0 013.62 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.91 8.7a16 16 0 006.29 6.29l.96-.96a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z\" />
              </svg>
              <a href=\"tel:+918884984000\">8884984000</a>
            </div>
            <div class=\"contact-detail\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                stroke-linejoin=\"round\" aria-hidden=\"true\">
                <path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\" />
                <polyline points=\"22,6 12,13 2,6\" />
              </svg>
              <a href=\"mailto:gimsr@gitam.edu\">gimsr@gitam.edu</a>
            </div>
            <a href=\"https://maps.google.com/?q=GIMSR+GITAM+Visakhapatnam\" class=\"contact-map-link\" target=\"_blank\"
              rel=\"noopener\">
              View on Map
              <svg viewBox=\"0 0 14 14\" fill=\"none\" aria-hidden=\"true\">
                <path d=\"M1.5 7h11M8 2.5l4.5 4.5L8 11.5\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"
                  stroke-linejoin=\"round\" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class=\"contact-helpline\">
        <div class=\"contact-helpline-item\">
          <div class=\"contact-helpline-label\">Admissions Helpline</div>
          <div class=\"contact-helpline-val\">
            <a href=\"tel:8884984000\">8884984000</a>
          </div>
        </div>
        <!-- <div class=\"contact-helpline-item\">
            <div class=\"contact-helpline-label\">Email</div>
            <div class=\"contact-helpline-val\">
              <a href=\"mailto:admissions@gitam.edu\">admissions@gitam.edu</a>
            </div>
          </div> -->
        <div class=\"contact-helpline-item\">
          <button class=\"contact-now-btn cmodal-open-trigger\" aria-label=\"Open contact form\">
            Contact Now
            <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\"
              stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
              <line x1=\"22\" y1=\"2\" x2=\"11\" y2=\"13\" />
              <polygon points=\"22 2 15 22 11 13 2 9 22 2\" />
            </svg>
          </button>
        </div>
      </div>
    </section>

    <!-- ═ SHARED:MODAL START ═ -->

    <!-- CONTACT MODAL -->
    <div class=\"cmodal-backdrop\" id=\"contactModal\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"cmodalTitle\">
      <div class=\"cmodal\">
        <div class=\"cmodal-head\">
          <div class=\"cmodal-head-tag\">
            <span></span>Admissions &amp; Enquiry
          </div>
          <div class=\"cmodal-title\" id=\"cmodalTitle\">Talk to Our Team</div>
          <div class=\"cmodal-sub\">
            We'll get back to you within 24 hours - no spam, ever.
          </div>
          <button class=\"cmodal-close\" id=\"cmodalClose\" aria-label=\"Close contact form\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" stroke-linecap=\"round\"
              stroke-linejoin=\"round\">
              <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\" />
              <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\" />
            </svg>
          </button>
        </div>
        <div class=\"cmodal-body\">
          <form id=\"cmodalForm\" novalidate>
            <div class=\"cmodal-row\">
              <div class=\"cmodal-field\">
                <label for=\"cm-name\">Full Name *</label>
                <input type=\"text\" id=\"cm-name\" placeholder=\"Your full name\" required autocomplete=\"name\" />
              </div>
              <div class=\"cmodal-field\">
                <label for=\"cm-phone\">Mobile Number *</label>
                <input type=\"tel\" id=\"cm-phone\" placeholder=\"+91 00000 00000\" required autocomplete=\"tel\" />
              </div>
            </div>
            <div class=\"cmodal-field\">
              <label for=\"cm-email\">Email Address *</label>
              <input type=\"email\" id=\"cm-email\" placeholder=\"you@email.com\" required autocomplete=\"email\" />
            </div>
            <div class=\"cmodal-row\">
              <div class=\"cmodal-field\">
                <label for=\"cm-campus\">Preferred Campus</label>
                <select id=\"cm-campus\">
                  <option value=\"\">Any campus</option>
                  <option>Visakhapatnam</option>
                  <option>Hyderabad</option>
                  <option>Bengaluru</option>
                </select>
              </div>
              <div class=\"cmodal-field\">
                <label for=\"cm-level\">Level of Study</label>
                <select id=\"cm-level\">
                  <option value=\"\">Select level</option>
                  <option>Undergraduate (UG)</option>
                  <option>Postgraduate (PG)</option>
                  <option>Ph.D / Research</option>
                </select>
              </div>
            </div>
            <div class=\"cmodal-field\">
              <label for=\"cm-msg\">Your Question (optional)</label>
              <textarea id=\"cm-msg\" rows=\"3\" placeholder=\"Tell us what you'd like to know…\"></textarea>
            </div>
            <button type=\"submit\" class=\"cmodal-submit\">
              Send Enquiry
              <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\"
                stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
                <line x1=\"22\" y1=\"2\" x2=\"11\" y2=\"13\" />
                <polygon points=\"22 2 15 22 11 13 2 9 22 2\" />
              </svg>
            </button>
            <p class=\"cmodal-footer-note\">
              Or call us directly:
              <a href=\"tel:18004252428\">1800-425-2428</a> (Toll-free)
              &nbsp;|&nbsp;
              <a href=\"mailto:admissions@gitam.edu\">admissions@gitam.edu</a>
            </p>
          </form>
          <div class=\"cmodal-success\" id=\"cmodalSuccess\">
            <div class=\"cmodal-success-icon\">✅</div>
            <h3>We've got your message!</h3>
            <p>
              Our admissions team will reach out within 24 hours.<br />Check
              your inbox for a confirmation.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- ═ SHARED:MODAL END ═ -->
  </main>

  <!-- ═ SHARED:FOOTER START ═ -->
  <!-- ░░ FOOTER ░░ -->
  <footer class=\"site-footer\" role=\"contentinfo\">
    <div class=\"footer-top\">
      <div class=\"footer-brand\">
        <img src=\"";
        // line 6906
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/gitam-logo-basic-horizontal-reverse.png\" alt=\"GITAM University\" loading=\"lazy\" />
        <p>
          Gandhi Institute of Technology and Management (Deemed to be
          University) u/s 3 of UGC Act 1956. NAAC A++ Accredited. Est. 1980.
        </p>
        <div class=\"f-socials\">
          <a href=\"https://www.instagram.com/gitaborgs/\" target=\"_blank\" rel=\"noopener\" aria-label=\"Instagram\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
              stroke-linejoin=\"round\">
              <rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\" ry=\"5\" />
              <path d=\"M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z\" />
              <line x1=\"17.5\" y1=\"6.5\" x2=\"17.51\" y2=\"6.5\" />
            </svg>
          </a>
          <a href=\"https://www.linkedin.com/school/gitam/\" target=\"_blank\" rel=\"noopener\" aria-label=\"LinkedIn\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
              stroke-linejoin=\"round\">
              <path d=\"M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z\" />
              <rect x=\"2\" y=\"9\" width=\"4\" height=\"12\" />
              <circle cx=\"4\" cy=\"4\" r=\"2\" />
            </svg>
          </a>
          <a href=\"https://x.com/GITAMUniversity\" target=\"_blank\" rel=\"noopener\" aria-label=\"X / Twitter\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
              stroke-linejoin=\"round\">
              <path d=\"M4 4l11.733 16h4.267l-11.733-16z\" />
              <path d=\"M4 20l6.768-6.768M15.232 10.232L20 4\" />
            </svg>
          </a>
          <a href=\"https://www.youtube.com/@GITAM\" target=\"_blank\" rel=\"noopener\" aria-label=\"YouTube\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
              stroke-linejoin=\"round\">
              <path
                d=\"M22.54 6.42a2.78 2.78 0 00-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 00-1.94 2A29 29 0 001 11.75a29 29 0 00.46 5.33A2.78 2.78 0 003.4 19.1c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 001.94-2 29 29 0 00.46-5.25 29 29 0 00-.46-5.33z\" />
              <polygon points=\"9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02\" />
            </svg>
          </a>
        </div>
      </div>

      <div class=\"footer-col\">
        <h4>Academics</h4>
        <ul>
          <li>
            <a href=\"programme-finder\">All Programmes</a>
          </li>
          <li>
            <a
              href=\"https://www.gitam.edu/visakhapatnam/gitam-school-of-computer-science-and-engineering\">Engineering</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/visakhapatnam/gitam-school-of-business\">Management</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/visakhapatnam/gitam-school-of-science\">Science</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/visakhapatnam/gitam-school-of-pharmacy\">Pharmacy</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/visakhapatnam/gitam-school-of-law\">Law</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/visakhapatnam/gitam-school-of-architecture\">Architecture</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/research/research-innovations/about/phd-programme\">Ph.D. Programmes</a>
          </li>
        </ul>
      </div>

      <div class=\"footer-col\">
        <h4>Admissions</h4>
        <ul>
          <li>
            <a href=\"https://apply.gitam.edu\" target=\"_blank\" rel=\"noopener\">Apply Now</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/fee-scholarship/student-scholarships\">Scholarships</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/fee-scholarship/fee-structure\">Fee Structure</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/admissions\">Admission Procedure</a>
          </li>
          <li><a href=\"https://www.gitam.edu/faqs\">FAQs</a></li>
          <li>
            <a href=\"https://gat.gitam.edu\" target=\"_blank\" rel=\"noopener\">GAT 2026</a>
          </li>
        </ul>
      </div>

      <div class=\"footer-col\">
        <h4>Quick Links</h4>
        <ul>
          <li><a href=\"#sec-placements\">Placements</a></li>
          <li><a href=\"#sec-research\">Research</a></li>

          <li><a href=\"#sec-faculty\">Faculty</a></li>
          <li>
            <a href=\"https://www.alumni.gitam.edu/\" target=\"_blank\" rel=\"noopener\">Alumni</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/about/leadership\">Leadership</a>
          </li>
          <li>
            <a href=\"#sec-activities\">Events &amp; News</a>
          </li>
          <li>
            <a href=\"https://careers.gitam.edu/\" target=\"_blank\" rel=\"noopener\">Careers at GITAM</a>
          </li>
        </ul>
      </div>

      <div class=\"footer-col\">
        <h4>AICTE / Statutory</h4>
        <ul>
          <li>
            <a href=\"https://iqac.gitam.edu/mandatory-disclosure\" class=\"f-highlight\" target=\"_blank\"
              rel=\"noopener\">Mandatory Disclosures</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/about/accrediation\">Accreditation &amp; Ranking</a>
          </li>
          <li>
            <a href=\"https://iqac.gitam.edu/\" target=\"_blank\" rel=\"noopener\">IQAC</a>
          </li>
          <li>
            <a href=\"https://iqac.gitam.edu/nirf\" target=\"_blank\" rel=\"noopener\">NIRF</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/academics/evaluation/grievance-redressal\">Grievance Redressal</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/anti-caste-based-discrimination-policy\">Anti-Caste Policy</a>
          </li>
          <li>
            <a href=\"https://womenempowerment.gitam.edu/\" target=\"_blank\" rel=\"noopener\">Women Empowerment Cell</a>
          </li>
          <li>
            <a href=\"https://samadhaan.ugc.ac.in/\" target=\"_blank\" rel=\"noopener\">UGC e-Samadhaan</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/cookie-policy\">Cookie Policy</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/privacy-policy\">Privacy Policy</a>
          </li>
          <li>
            <a href=\"https://www.gitam.edu/sites/default/files/docs/others/UGC-Fee-Refund-Policy2024-25.pdf\"
              target=\"_blank\" rel=\"noopener\">Cancellation Policy</a>
          </li>
        </ul>
      </div>
    </div>

    <div class=\"footer-bottom\">
      <p>
        &copy; 2026 GITAM (Deemed to be University). All rights reserved.
        Accredited by NAAC with A++ Grade.
      </p>
      <div class=\"footer-links\">
        <a href=\"https://www.gitam.edu/privacy-policy\">Privacy</a>
        <a href=\"https://www.gitam.edu/cookie-policy\">Cookies</a>
        <a href=\"https://www.gitam.edu/sitemap\">Sitemap</a>
        <a href=\"https://www.gitam.edu/aspiring-students\">Accessibility</a>
      </div>
    </div>
  </footer>
  <!-- ═ SHARED:FOOTER END ═ -->";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gitam_theme/templates/page--front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  7806 => 6906,  7085 => 6188,  7080 => 6186,  7072 => 6181,  7066 => 6178,  7058 => 6173,  7053 => 6171,  7045 => 6166,  7040 => 6164,  6976 => 6103,  6971 => 6101,  6963 => 6096,  6957 => 6093,  6949 => 6088,  6943 => 6085,  6935 => 6080,  6930 => 6078,  6863 => 6014,  6858 => 6012,  6851 => 6008,  6847 => 6007,  6839 => 6002,  6834 => 6000,  6826 => 5995,  6821 => 5993,  6813 => 5988,  6808 => 5986,  6756 => 5937,  6751 => 5935,  6743 => 5930,  6738 => 5928,  6730 => 5923,  6725 => 5921,  6717 => 5916,  6712 => 5914,  5908 => 5113,  5887 => 5095,  5865 => 5076,  5782 => 4996,  5766 => 4983,  5750 => 4970,  5734 => 4957,  5718 => 4944,  5702 => 4931,  5686 => 4918,  5670 => 4905,  5654 => 4892,  5637 => 4878,  5621 => 4865,  5605 => 4852,  5589 => 4839,  5573 => 4826,  5547 => 4803,  5531 => 4790,  5515 => 4777,  5499 => 4764,  5483 => 4751,  5467 => 4738,  5451 => 4725,  5435 => 4712,  5419 => 4699,  5403 => 4686,  5387 => 4673,  5370 => 4659,  5352 => 4644,  5336 => 4631,  5319 => 4617,  4214 => 3515,  4184 => 3488,  4154 => 3461,  4120 => 3430,  4090 => 3403,  4046 => 3362,  4035 => 3354,  4024 => 3346,  4013 => 3338,  4002 => 3330,  3992 => 3323,  3981 => 3315,  3970 => 3307,  3959 => 3299,  3948 => 3291,  3937 => 3283,  3926 => 3275,  3916 => 3268,  3906 => 3261,  3895 => 3253,  3885 => 3246,  3875 => 3239,  3857 => 3224,  3852 => 3222,  3840 => 3213,  3834 => 3210,  3821 => 3200,  3816 => 3198,  3804 => 3189,  3798 => 3186,  3785 => 3176,  3780 => 3174,  3768 => 3165,  3763 => 3163,  3751 => 3154,  3745 => 3151,  3732 => 3141,  3727 => 3139,  3715 => 3130,  3709 => 3127,  3696 => 3117,  3690 => 3114,  3678 => 3105,  3673 => 3103,  3662 => 3095,  3657 => 3093,  3645 => 3084,  3640 => 3082,  3574 => 3019,  3549 => 2997,  3524 => 2975,  3500 => 2954,  3477 => 2934,  3453 => 2913,  3268 => 2731,  3260 => 2726,  3252 => 2721,  3244 => 2716,  3236 => 2711,  3228 => 2706,  3220 => 2701,  3212 => 2696,  3204 => 2691,  3196 => 2686,  3188 => 2681,  3180 => 2676,  3172 => 2671,  3164 => 2666,  3156 => 2661,  3148 => 2656,  3140 => 2651,  3132 => 2646,  3124 => 2641,  3116 => 2636,  3108 => 2631,  3100 => 2626,  3092 => 2621,  3084 => 2616,  3076 => 2611,  3068 => 2606,  3060 => 2601,  3052 => 2596,  3044 => 2591,  3036 => 2586,  3028 => 2581,  3020 => 2576,  3012 => 2571,  3004 => 2566,  2996 => 2561,  2988 => 2556,  2980 => 2551,  2972 => 2546,  2964 => 2541,  2956 => 2536,  2948 => 2531,  2940 => 2526,  2932 => 2521,  2924 => 2516,  2916 => 2511,  2908 => 2506,  2900 => 2501,  2892 => 2496,  2884 => 2491,  2876 => 2486,  2866 => 2479,  2858 => 2474,  2850 => 2469,  2842 => 2464,  2834 => 2459,  2826 => 2454,  2818 => 2449,  2810 => 2444,  2802 => 2439,  2794 => 2434,  2786 => 2429,  2778 => 2424,  2770 => 2419,  2762 => 2414,  2754 => 2409,  2746 => 2404,  2738 => 2399,  2730 => 2394,  2722 => 2389,  2714 => 2384,  2706 => 2379,  2698 => 2374,  2690 => 2369,  2682 => 2364,  2674 => 2359,  2666 => 2354,  2658 => 2349,  2650 => 2344,  2642 => 2339,  2634 => 2334,  2626 => 2329,  2618 => 2324,  2610 => 2319,  2602 => 2314,  2594 => 2309,  2586 => 2304,  2578 => 2299,  2570 => 2294,  2562 => 2289,  2554 => 2284,  2546 => 2279,  2538 => 2274,  2530 => 2269,  2522 => 2264,  2514 => 2259,  2506 => 2254,  2498 => 2249,  2490 => 2244,  2482 => 2239,  2474 => 2234,  2290 => 2053,  2278 => 2044,  2267 => 2036,  2256 => 2028,  2245 => 2020,  2234 => 2012,  2223 => 2004,  2212 => 1996,  2201 => 1988,  2189 => 1979,  2177 => 1970,  2165 => 1961,  2154 => 1953,  2143 => 1945,  2132 => 1937,  2121 => 1929,  2110 => 1921,  2099 => 1913,  2064 => 1881,  2059 => 1879,  2050 => 1873,  2045 => 1871,  2036 => 1865,  2031 => 1863,  2022 => 1857,  2017 => 1855,  2008 => 1849,  2003 => 1847,  1994 => 1841,  1989 => 1839,  1980 => 1833,  1975 => 1831,  1966 => 1825,  1961 => 1823,  1952 => 1817,  1947 => 1815,  1938 => 1809,  1933 => 1807,  1924 => 1801,  1919 => 1799,  1910 => 1793,  1905 => 1791,  1896 => 1785,  1891 => 1783,  1882 => 1777,  1877 => 1775,  1835 => 1736,  1831 => 1735,  1802 => 1709,  1797 => 1707,  1768 => 1681,  1763 => 1679,  1734 => 1653,  1729 => 1651,  1685 => 1610,  1679 => 1607,  1673 => 1604,  1667 => 1601,  1458 => 1395,  1447 => 1387,  1437 => 1380,  1426 => 1372,  1195 => 1144,  1190 => 1142,  1179 => 1134,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gitam_theme/templates/page--front.html.twig", "/var/www/html/development/drupal10/web/themes/custom/gitam_theme/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 1134];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
