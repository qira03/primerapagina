<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/light_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_80dec7cb43c77e7d3635c756fbbe2bddaf3df81359415ad2fadf66e5a686d821 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 74, "for" => 104];
        $filters = ["escape" => 75, "raw" => 105, "date" => 518];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "
<div class=\"header logo-nav-container\">
  <!--****************** COMENTAMOS EL CONTAINER SIN MARGEN HIGH
  <div class=\"container\"> ********************************************************************-->
    <div class=\"row\">

      <!-- Start: Header -->

      <div class=\"navbar-header col-md-3\">

        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>

        ";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 75
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 77
        echo "
      </div>

      <!-- End: Header -->

      ";
        // line 82
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 83
            echo "        <div class=\"col-md-9 hola\">
          <div class=\"main-menu\">
            ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 89
        echo "
      </div>

    </div>

    <!--**
  </div> -->
  <!--** AQUÍ BORRÉ UN DIV -->


<!--SETTING SLIDER **************************************************************-->
";
        // line 100
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 101
            echo "  <!--<div class=\"container\">-->
    <div class=\"flexslider margensuperior\">
      <ul class=\"slides\">
        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 105
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "      </ul>
    </div>
<!--</div>-->
";
        }
        // line 111
        echo "

<!-- Start: Top widget -->

";
        // line 115
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
            // line 116
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">
        <div class=\"row clearfix\">

          <!-- Start: Top widget first -->
          ";
            // line 121
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                // line 122
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 124
            echo "          <!-- End: Top widget first -->

          <!-- Start: Top widget second -->
          ";
            // line 127
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                // line 128
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 130
            echo "          <!-- End: Top widget second -->

          <!-- Start: Top widget third -->
          ";
            // line 133
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                // line 134
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 136
            echo "          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 142
        echo "
<!--End: Top widget -->


<!--Start: Highlighted -->

";
        // line 148
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 149
            echo "  <div class=\"highlighted margensuperior\">
    <!--******** COMENTO CONTAINER **********
    <div class=\"container\">-->
      ";
            // line 152
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    <!--</div>-->
  </div>
";
        }
        // line 156
        echo "
<!--End: Highlighted -->

<!--Start: Title -->

";
        // line 161
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 162
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 165
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 170
        echo "
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 179
        if ( !($context["is_front"] ?? null)) {
            // line 180
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 181
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 184
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 190
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 191
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 193
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 197
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 200
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 201
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 203
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 207
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 210
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 211
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 213
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 217
        echo "        <!-- End: Right SideBar -->

      </div>

    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 230
        if ((($this->getAttribute(($context["page"] ?? null), "features_first", []) || $this->getAttribute(($context["page"] ?? null), "features_second", [])) || $this->getAttribute(($context["page"] ?? null), "features_third", []))) {
            // line 231
            echo "
  <div class=\"features\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 237
            if ($this->getAttribute(($context["page"] ?? null), "features_first", [])) {
                // line 238
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 239
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 242
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 245
            if ($this->getAttribute(($context["page"] ?? null), "features_second", [])) {
                // line 246
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 247
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 250
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 253
            if ($this->getAttribute(($context["page"] ?? null), "features_third", [])) {
                // line 254
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 255
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 258
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 265
        echo "
<!--End: Features -->


<!-- Start: Services -->

";
        // line 271
        if ($this->getAttribute(($context["page"] ?? null), "services", [])) {
            // line 272
            echo "
  <div class=\"services\" id=\"services\">
    <div class=\"container\">
      ";
            // line 275
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services", [])), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 280
        echo "
<!--End: Services -->



<!-- Start: Services -->

";
        // line 287
        if ($this->getAttribute(($context["page"] ?? null), "products", [])) {
            // line 288
            echo "
  <!-- <div class=\"products\" id=\"products\">
    <div class=\"container\">
      ";
            // line 291
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "products", [])), "html", null, true);
            echo "
    </div>
  </div> -->

";
        }
        // line 296
        echo "
<!--End: Services -->


<!-- Start: Price table widgets -->

";
        // line 302
        if ((($this->getAttribute(($context["page"] ?? null), "pricetable_first", []) || $this->getAttribute(($context["page"] ?? null), "pricetable_second", [])) || $this->getAttribute(($context["page"] ?? null), "pricetable_third", []))) {
            // line 303
            echo "
  <div class=\"price-table\" id=\"price-table\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->
        ";
            // line 309
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_first", [])) {
                // line 310
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 311
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 314
            echo "        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 317
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_second", [])) {
                // line 318
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 319
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 322
            echo "        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->
        ";
            // line 325
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_third", [])) {
                // line 326
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 327
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 330
            echo "        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->
        ";
            // line 333
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_forth", [])) {
                // line 334
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 335
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 338
            echo "        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 345
        echo "
<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->

";
        // line 351
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
            // line 352
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->
        ";
            // line 358
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 359
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 360
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 363
            echo "        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 366
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 367
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 368
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 371
            echo "        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->
        ";
            // line 374
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 375
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 376
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 379
            echo "        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 382
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 383
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 384
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 387
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 394
        echo "
<!--End: Bottom widgets -->


<!-- Start: Team widgets -->

";
        // line 400
        if (((($this->getAttribute(($context["page"] ?? null), "team_first", []) || $this->getAttribute(($context["page"] ?? null), "team_second", [])) || $this->getAttribute(($context["page"] ?? null), "team_third", [])) || $this->getAttribute(($context["page"] ?? null), "team_forth", []))) {
            // line 401
            echo "
  <div class=\"team\" id=\"team\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->
        ";
            // line 407
            if ($this->getAttribute(($context["page"] ?? null), "team_first", [])) {
                // line 408
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 409
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 412
            echo "        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 415
            if ($this->getAttribute(($context["page"] ?? null), "team_second", [])) {
                // line 416
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 417
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 420
            echo "        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->
        ";
            // line 423
            if ($this->getAttribute(($context["page"] ?? null), "team_third", [])) {
                // line 424
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 425
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 428
            echo "        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 431
            if ($this->getAttribute(($context["page"] ?? null), "team_forth", [])) {
                // line 432
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 433
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 436
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 443
        echo "
<!--End: Team widgets -->


<!-- Start: Footer widgets -->

";
        // line 449
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 450
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 457
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 458
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 459
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 462
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 465
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 466
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 467
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 470
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 473
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 474
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 475
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 478
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>

";
        }
        // line 486
        echo "
<!--End: Footer widgets -->

<!-- Start: Copyright -->

<div class=\"copyright\">

    <div class=\"container\">

      ";
        // line 495
        if (($context["show_social_icon"] ?? null)) {
            // line 496
            echo "        <p class=\"social-media\">
          ";
            // line 497
            if (($context["facebook_url"] ?? null)) {
                // line 498
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
          ";
            }
            // line 500
            echo "          ";
            if (($context["google_plus_url"] ?? null)) {
                // line 501
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
          ";
            }
            // line 503
            echo "          ";
            if (($context["twitter_url"] ?? null)) {
                // line 504
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
          ";
            }
            // line 506
            echo "          ";
            if (($context["linkedin_url"] ?? null)) {
                // line 507
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
          ";
            }
            // line 509
            echo "          ";
            if (($context["pinterest_url"] ?? null)) {
                // line 510
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
          ";
            }
            // line 512
            echo "          ";
            if (($context["rss_url"] ?? null)) {
                // line 513
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
          ";
            }
            // line 515
            echo "        </p>
      ";
        }
        // line 517
        echo "
      <p>Copyright © ";
        // line 518
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>

      ";
        // line 520
        if (($context["show_credit_link"] ?? null)) {
            // line 521
            echo "        <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
      ";
        }
        // line 523
        echo "
  </div>

</div>

<!-- End: Copyright -->


<!-- Start: Map -->

";
        // line 533
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", []))) {
            // line 534
            echo "
  <div class=\"map-and-address\">
    <div class=\"google_map\">";
            // line 536
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "google_map", [])), "html", null, true);
            echo "</div>
  </div>

";
        }
        // line 540
        echo "
<!--End: Map -->
";
    }

    public function getTemplateName()
    {
        return "themes/light_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  932 => 540,  925 => 536,  921 => 534,  919 => 533,  907 => 523,  903 => 521,  901 => 520,  896 => 518,  893 => 517,  889 => 515,  883 => 513,  880 => 512,  874 => 510,  871 => 509,  865 => 507,  862 => 506,  856 => 504,  853 => 503,  847 => 501,  844 => 500,  838 => 498,  836 => 497,  833 => 496,  831 => 495,  820 => 486,  810 => 478,  804 => 475,  799 => 474,  797 => 473,  792 => 470,  786 => 467,  781 => 466,  779 => 465,  774 => 462,  768 => 459,  763 => 458,  761 => 457,  752 => 450,  750 => 449,  742 => 443,  733 => 436,  727 => 433,  722 => 432,  720 => 431,  715 => 428,  709 => 425,  704 => 424,  702 => 423,  697 => 420,  691 => 417,  686 => 416,  684 => 415,  679 => 412,  673 => 409,  668 => 408,  666 => 407,  658 => 401,  656 => 400,  648 => 394,  639 => 387,  633 => 384,  628 => 383,  626 => 382,  621 => 379,  615 => 376,  610 => 375,  608 => 374,  603 => 371,  597 => 368,  592 => 367,  590 => 366,  585 => 363,  579 => 360,  574 => 359,  572 => 358,  564 => 352,  562 => 351,  554 => 345,  545 => 338,  539 => 335,  534 => 334,  532 => 333,  527 => 330,  521 => 327,  516 => 326,  514 => 325,  509 => 322,  503 => 319,  498 => 318,  496 => 317,  491 => 314,  485 => 311,  480 => 310,  478 => 309,  470 => 303,  468 => 302,  460 => 296,  452 => 291,  447 => 288,  445 => 287,  436 => 280,  428 => 275,  423 => 272,  421 => 271,  413 => 265,  404 => 258,  398 => 255,  393 => 254,  391 => 253,  386 => 250,  380 => 247,  375 => 246,  373 => 245,  368 => 242,  362 => 239,  357 => 238,  355 => 237,  347 => 231,  345 => 230,  330 => 217,  323 => 213,  317 => 211,  315 => 210,  310 => 207,  303 => 203,  297 => 201,  295 => 200,  290 => 197,  283 => 193,  277 => 191,  275 => 190,  267 => 184,  261 => 181,  258 => 180,  256 => 179,  245 => 170,  237 => 165,  232 => 162,  230 => 161,  223 => 156,  216 => 152,  211 => 149,  209 => 148,  201 => 142,  193 => 136,  185 => 134,  183 => 133,  178 => 130,  170 => 128,  168 => 127,  163 => 124,  155 => 122,  153 => 121,  146 => 116,  144 => 115,  138 => 111,  132 => 107,  123 => 105,  119 => 104,  114 => 101,  112 => 100,  99 => 89,  92 => 85,  88 => 83,  86 => 82,  79 => 77,  73 => 75,  71 => 74,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/light_zymphonies_theme/templates/layout/page.html.twig", "/var/www/html/vicerrectoria/themes/light_zymphonies_theme/templates/layout/page.html.twig");
    }
}
