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
        $tags = ["if" => 71, "for" => 97];
        $filters = ["escape" => 72, "raw" => 98, "date" => 510];
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
<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 71
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 72
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 74
        echo "      </div>

      <!-- End: Header -->

      ";
        // line 78
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 79
            echo "        <div class=\"col-md-9\">
          <div class=\"main-menu\">
            ";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 85
        echo "
      </div>

    </div>
  </div>
</div>

<!--SETTING SLIDER **************************************************************-->
";
        // line 93
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 94
            echo "  <!--<div class=\"container\">-->
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 98
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "      </ul>
    </div>
<!--</div>-->
";
        }
        // line 104
        echo "

<!-- Start: Top widget -->

";
        // line 108
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
            // line 109
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">
        <div class=\"row clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 114
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                // line 115
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 116
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 120
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                // line 121
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 122
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 126
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                // line 127
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 128
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 135
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 141
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 142
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 144
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 148
        echo "
<!--End: Highlighted -->

<!--Start: Title -->

";
        // line 153
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 154
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 157
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 162
        echo "
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 171
        if ( !($context["is_front"] ?? null)) {
            // line 172
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 173
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 176
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 182
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 183
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 185
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 189
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 192
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 193
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 195
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 199
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 202
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 203
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 205
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 209
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 222
        if ((($this->getAttribute(($context["page"] ?? null), "features_first", []) || $this->getAttribute(($context["page"] ?? null), "features_second", [])) || $this->getAttribute(($context["page"] ?? null), "features_third", []))) {
            // line 223
            echo "
  <div class=\"features\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 229
            if ($this->getAttribute(($context["page"] ?? null), "features_first", [])) {
                // line 230
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 231
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 234
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 237
            if ($this->getAttribute(($context["page"] ?? null), "features_second", [])) {
                // line 238
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 239
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 242
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 245
            if ($this->getAttribute(($context["page"] ?? null), "features_third", [])) {
                // line 246
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 247
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 250
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 257
        echo "
<!--End: Features -->


<!-- Start: Services -->

";
        // line 263
        if ($this->getAttribute(($context["page"] ?? null), "services", [])) {
            // line 264
            echo "
  <div class=\"services\" id=\"services\">
    <div class=\"container\">
      ";
            // line 267
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services", [])), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 272
        echo "
<!--End: Services -->



<!-- Start: Services -->

";
        // line 279
        if ($this->getAttribute(($context["page"] ?? null), "products", [])) {
            // line 280
            echo "
  <!-- <div class=\"products\" id=\"products\">
    <div class=\"container\">
      ";
            // line 283
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "products", [])), "html", null, true);
            echo "
    </div>
  </div> -->

";
        }
        // line 288
        echo "
<!--End: Services -->


<!-- Start: Price table widgets -->

";
        // line 294
        if ((($this->getAttribute(($context["page"] ?? null), "pricetable_first", []) || $this->getAttribute(($context["page"] ?? null), "pricetable_second", [])) || $this->getAttribute(($context["page"] ?? null), "pricetable_third", []))) {
            // line 295
            echo "
  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 301
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_first", [])) {
                // line 302
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 303
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 305
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 309
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_second", [])) {
                // line 310
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 311
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 313
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 317
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_third", [])) {
                // line 318
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 319
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 321
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 325
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_forth", [])) {
                // line 326
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 327
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 329
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 337
        echo "
<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->

";
        // line 343
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
            // line 344
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 350
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 351
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 352
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 354
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 358
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 359
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 360
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 362
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 366
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 367
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 368
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 370
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 374
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 375
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 376
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 379
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 386
        echo "
<!--End: Bottom widgets -->


<!-- Start: Team widgets -->

";
        // line 392
        if (((($this->getAttribute(($context["page"] ?? null), "team_first", []) || $this->getAttribute(($context["page"] ?? null), "team_second", [])) || $this->getAttribute(($context["page"] ?? null), "team_third", [])) || $this->getAttribute(($context["page"] ?? null), "team_forth", []))) {
            // line 393
            echo "
  <div class=\"team\" id=\"team\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 399
            if ($this->getAttribute(($context["page"] ?? null), "team_first", [])) {
                // line 400
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 401
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 403
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 407
            if ($this->getAttribute(($context["page"] ?? null), "team_second", [])) {
                // line 408
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 409
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 411
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 415
            if ($this->getAttribute(($context["page"] ?? null), "team_third", [])) {
                // line 416
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 417
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 419
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 423
            if ($this->getAttribute(($context["page"] ?? null), "team_forth", [])) {
                // line 424
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 425
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 428
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 435
        echo "
<!--End: Team widgets -->


<!-- Start: Footer widgets -->

";
        // line 441
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 442
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 449
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 450
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 451
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 454
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 457
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 458
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 459
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 462
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 465
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 466
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 467
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 470
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>

";
        }
        // line 478
        echo "
<!--End: Footer widgets -->

<!-- Start: Copyright -->

<div class=\"copyright\">

    <div class=\"container\">

      ";
        // line 487
        if (($context["show_social_icon"] ?? null)) {
            // line 488
            echo "        <p class=\"social-media\">
          ";
            // line 489
            if (($context["facebook_url"] ?? null)) {
                // line 490
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
          ";
            }
            // line 492
            echo "          ";
            if (($context["google_plus_url"] ?? null)) {
                // line 493
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
          ";
            }
            // line 495
            echo "          ";
            if (($context["twitter_url"] ?? null)) {
                // line 496
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
          ";
            }
            // line 498
            echo "          ";
            if (($context["linkedin_url"] ?? null)) {
                // line 499
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
          ";
            }
            // line 501
            echo "          ";
            if (($context["pinterest_url"] ?? null)) {
                // line 502
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
          ";
            }
            // line 504
            echo "          ";
            if (($context["rss_url"] ?? null)) {
                // line 505
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
          ";
            }
            // line 507
            echo "        </p>
      ";
        }
        // line 509
        echo "
      <p>Copyright © ";
        // line 510
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>

      ";
        // line 512
        if (($context["show_credit_link"] ?? null)) {
            // line 513
            echo "        <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
      ";
        }
        // line 515
        echo "
  </div>

</div>

<!-- End: Copyright -->


<!-- Start: Map -->

";
        // line 525
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", []))) {
            // line 526
            echo "
  <div class=\"map-and-address\">
    <div class=\"google_map\">";
            // line 528
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "google_map", [])), "html", null, true);
            echo "</div>
  </div>
  
";
        }
        // line 532
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
        return array (  937 => 532,  930 => 528,  926 => 526,  924 => 525,  912 => 515,  908 => 513,  906 => 512,  901 => 510,  898 => 509,  894 => 507,  888 => 505,  885 => 504,  879 => 502,  876 => 501,  870 => 499,  867 => 498,  861 => 496,  858 => 495,  852 => 493,  849 => 492,  843 => 490,  841 => 489,  838 => 488,  836 => 487,  825 => 478,  815 => 470,  809 => 467,  804 => 466,  802 => 465,  797 => 462,  791 => 459,  786 => 458,  784 => 457,  779 => 454,  773 => 451,  768 => 450,  766 => 449,  757 => 442,  755 => 441,  747 => 435,  738 => 428,  732 => 425,  727 => 424,  725 => 423,  719 => 419,  713 => 417,  708 => 416,  706 => 415,  700 => 411,  694 => 409,  689 => 408,  687 => 407,  681 => 403,  675 => 401,  670 => 400,  668 => 399,  660 => 393,  658 => 392,  650 => 386,  641 => 379,  635 => 376,  630 => 375,  628 => 374,  622 => 370,  616 => 368,  611 => 367,  609 => 366,  603 => 362,  597 => 360,  592 => 359,  590 => 358,  584 => 354,  578 => 352,  573 => 351,  571 => 350,  563 => 344,  561 => 343,  553 => 337,  543 => 329,  537 => 327,  532 => 326,  530 => 325,  524 => 321,  518 => 319,  513 => 318,  511 => 317,  505 => 313,  499 => 311,  494 => 310,  492 => 309,  486 => 305,  480 => 303,  475 => 302,  473 => 301,  465 => 295,  463 => 294,  455 => 288,  447 => 283,  442 => 280,  440 => 279,  431 => 272,  423 => 267,  418 => 264,  416 => 263,  408 => 257,  399 => 250,  393 => 247,  388 => 246,  386 => 245,  381 => 242,  375 => 239,  370 => 238,  368 => 237,  363 => 234,  357 => 231,  352 => 230,  350 => 229,  342 => 223,  340 => 222,  325 => 209,  318 => 205,  312 => 203,  310 => 202,  305 => 199,  298 => 195,  292 => 193,  290 => 192,  285 => 189,  278 => 185,  272 => 183,  270 => 182,  262 => 176,  256 => 173,  253 => 172,  251 => 171,  240 => 162,  232 => 157,  227 => 154,  225 => 153,  218 => 148,  211 => 144,  207 => 142,  205 => 141,  197 => 135,  188 => 128,  180 => 127,  178 => 126,  172 => 122,  164 => 121,  162 => 120,  156 => 116,  148 => 115,  146 => 114,  139 => 109,  137 => 108,  131 => 104,  125 => 100,  116 => 98,  112 => 97,  107 => 94,  105 => 93,  95 => 85,  88 => 81,  84 => 79,  82 => 78,  76 => 74,  70 => 72,  68 => 71,  55 => 60,);
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
