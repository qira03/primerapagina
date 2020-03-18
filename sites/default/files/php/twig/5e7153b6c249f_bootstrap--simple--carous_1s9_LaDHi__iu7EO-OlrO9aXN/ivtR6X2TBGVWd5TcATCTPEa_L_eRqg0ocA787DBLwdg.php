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

/* modules/bootstrap_simple_carousel/templates/bootstrap--simple--carousel--block.html.twig */
class __TwigTemplate_e89facf6450c8ab2b5af941dfea65dcd3955586a081fc70da4493b31fb174d15 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 10, "block" => 14, "for" => 26];
        $filters = ["clean_class" => 4, "escape" => 8];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'for'],
                ['clean_class', 'escape'],
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
        // line 2
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 4
($context["configuration"] ?? null), "provider", [])))), 2 => "block-bootstrap-simple-carousel"];
        // line 8
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 10
        if (($context["label"] ?? null)) {
            // line 11
            echo "        <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h2>
    ";
        }
        // line 13
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "</div>";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        // line 15
        echo "        <div
            id=\"carousel-block-generic\"
            class=\"carousel slide\"
            data-ride=\"carousel\"
            data-wrap=\"";
        // line 19
        if (($this->getAttribute(($context["settings"] ?? null), "get", [0 => "wrap"], "method") == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
            data-interval=\"";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "get", [0 => "interval"], "method")), "html", null, true);
        echo "\"
            data-pause=\"";
        // line 21
        if ($this->getAttribute(($context["settings"] ?? null), "get", [0 => "pause"], "method")) {
            echo "hover";
        }
        echo "\"
        >
            <!-- Indicators -->
            ";
        // line 24
        if ($this->getAttribute(($context["settings"] ?? null), "get", [0 => "indicators"], "method")) {
            // line 25
            echo "                <ol class=\"carousel-indicators\">
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "                        <li
                            data-target=\"#carousel-block-generic\" data-slide-to=\"";
                // line 28
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->getAttribute($context["loop"], "index", []) - 1), "html", null, true);
                echo "\"
                            class=\"indicator-item";
                // line 29
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["loop"], "first", [])) ? (" active") : ("")));
                echo "\">
                        </li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </ol>
            ";
        }
        // line 34
        echo "
            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "                    <div class=\"carousel-item item";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["loop"], "first", [])) ? (" active") : ("")));
            echo "\">
                        <img
                                src=\"";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "image_url", [])), "html", null, true);
            echo "\"
                                class=\"carousel-image";
            // line 41
            if ($this->getAttribute(($context["settings"] ?? null), "get", [0 => "image_fluid"], "method")) {
                echo " img-fluid";
            }
            echo "\"
                                alt=\"";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "image_alt", [])), "html", null, true);
            echo "\"
                                title=\"";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "image_title", [])), "html", null, true);
            echo "\"
                        >
                        <div class=\"carousel-caption\">
                            ";
            // line 46
            if ($this->getAttribute($context["item"], "caption_title", [])) {
                echo "<h3> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "caption_title", [])), "html", null, true);
                echo " </h3>";
            }
            // line 47
            echo "                            ";
            if ($this->getAttribute($context["item"], "caption_text", [])) {
                echo "<p> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "caption_text", [])), "html", null, true);
                echo " </p>";
            }
            // line 48
            echo "                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </div>

            <!-- Controls -->
            ";
        // line 54
        if ($this->getAttribute(($context["settings"] ?? null), "get", [0 => "controls"], "method")) {
            // line 55
            echo "                <a class=\"left carousel-control carousel-control-prev\" href=\"#carousel-block-generic\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left carousel-control-prev-icon\"></span>
                </a>
                <a class=\"right carousel-control carousel-control-next\" href=\"#carousel-block-generic\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right carousel-control-next-icon\"></span>
                </a>
            ";
        }
        // line 62
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/bootstrap_simple_carousel/templates/bootstrap--simple--carousel--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 62,  252 => 55,  250 => 54,  245 => 51,  229 => 48,  222 => 47,  216 => 46,  210 => 43,  206 => 42,  200 => 41,  196 => 40,  190 => 38,  173 => 37,  168 => 34,  164 => 32,  147 => 29,  143 => 28,  140 => 27,  123 => 26,  120 => 25,  118 => 24,  110 => 21,  106 => 20,  98 => 19,  92 => 15,  89 => 14,  85 => 64,  83 => 14,  78 => 13,  70 => 11,  68 => 10,  64 => 9,  59 => 8,  57 => 4,  56 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/bootstrap_simple_carousel/templates/bootstrap--simple--carousel--block.html.twig", "/var/www/html/vicerrectoria/modules/bootstrap_simple_carousel/templates/bootstrap--simple--carousel--block.html.twig");
    }
}
