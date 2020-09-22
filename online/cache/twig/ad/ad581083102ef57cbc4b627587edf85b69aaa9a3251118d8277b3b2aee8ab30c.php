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

/* @particles/slideshow.html.twig */
class __TwigTemplate_155093885dfa5892c9de8a1db7dc4b06ac2de39026ebb0cf5195e4a6fc0ab5f5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@particles/slideshow.html.twig"));

        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/slideshow.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 2
    public function block_particle($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "particle"));

        // line 3
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-slideshow swiper-container ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\" data-slideshow-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"  data-slideshow-effect=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "effect", []), "html", null, true);
        echo "\" data-slideshow-autoplay=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-slideshow-loop=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "loop", []) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-slideshow-timeout=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "autoplayTimeout", []), "html", null, true);
        echo "\" data-slideshow-speed=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "speed", []), "html", null, true);
        echo "\" data-slideshow-touchmove=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "touchmove", []) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
    data-slideshow-direction=\"";
        // line 4
        if (($this->getAttribute(($context["particle"] ?? null), "direction", []) == "horizontal")) {
            echo "horizontal";
        } else {
            echo "vertical";
        }
        echo "\" ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "direction", []) == "rtl")) {
            echo "dir=\"rtl\"";
        }
        echo ">
        <div class=\"g-slideshow-slider swiper-wrapper\" style=\"height: ";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "height", []), "60vh")) : ("60vh")), "html", null, true);
        echo ";\">
            ";
        // line 6
        if (( !$this->getAttribute(($context["particle"] ?? null), "source", []) || ($this->getAttribute(($context["particle"] ?? null), "source", []) == "particle"))) {
            // line 7
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "                    <div class=\"swiper-slide ";
                if (($this->getAttribute(($context["particle"] ?? null), "overlay", []) == "enabled")) {
                    echo "overlay";
                }
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []));
                echo "\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])));
                echo "); background-position: ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "bg_horizontal", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "bg_horizontal", []), "center")) : ("center")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "bg_vertical", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "bg_vertical", []), "center")) : ("center")), "html", null, true);
                echo "\">
                        <div class=\"slide\">
                            ";
                // line 10
                if ($this->getAttribute($context["item"], "top_title", [])) {
                    // line 11
                    echo "                                <h3 class=\"g-slideshow-top-title \">
                                    ";
                    // line 12
                    echo $this->getAttribute($context["item"], "top_title", []);
                    echo "
                                </h3>
                            ";
                }
                // line 15
                echo "                            ";
                if ($this->getAttribute($context["item"], "main_title", [])) {
                    // line 16
                    echo "                                <h1 class=\"g-slideshow-main-title\">
                                    ";
                    // line 17
                    echo $this->getAttribute($context["item"], "main_title", []);
                    echo "
                                </h1>
                            ";
                }
                // line 20
                echo "                            ";
                if ($this->getAttribute($context["item"], "button_text", [])) {
                    // line 21
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "button_link", []), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "linktarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "linktarget", []), "_self")) : ("_self")), "html", null, true);
                    echo "\" class=\"button\">
                                    ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "button_text", []), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 24
                echo "                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            ";
        } else {
            // line 28
            echo "                ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate((("@particles/slideshow-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "name", [])) . ".html.twig"), "@particles/slideshow.html.twig", 28);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 29
            echo "            ";
        }
        // line 30
        echo "        </div>
        <!-- pagination -->
        <!-- navigation buttons -->
        <div class=\"navigation ";
        // line 33
        if (($this->getAttribute(($context["particle"] ?? null), "direction", []) == "horizontal")) {
            echo "horizontal";
        }
        echo "\" >
            ";
        // line 34
        if (($this->getAttribute(($context["particle"] ?? null), "nav", []) == "enabled")) {
            // line 35
            echo "                <div class=\"swiper-button-prev\">
                    <i class=\"fa ";
            // line 36
            if (($this->getAttribute(($context["particle"] ?? null), "direction", []) == "horizontal")) {
                if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "direction", []) == "rtl")) {
                    echo "fa-angle-right";
                } else {
                    echo "fa-angle-left";
                }
            } else {
                echo "fa-angle-up";
            }
            echo "\"></i>
                </div>
            ";
        }
        // line 39
        echo "            ";
        if (($this->getAttribute(($context["particle"] ?? null), "dots", []) == "enabled")) {
            // line 40
            echo "                <div class=\"swiper-pagination\"></div>
            ";
        }
        // line 42
        echo "            ";
        if (($this->getAttribute(($context["particle"] ?? null), "nav", []) == "enabled")) {
            // line 43
            echo "                <div class=\"swiper-button-next\">
                    <i class=\"fa ";
            // line 44
            if (($this->getAttribute(($context["particle"] ?? null), "direction", []) == "horizontal")) {
                if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "direction", []) == "rtl")) {
                    echo "fa-angle-left";
                } else {
                    echo "fa-angle-right";
                }
            } else {
                echo "fa-angle-down";
            }
            echo "\"></i>
                </div>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 51
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 52
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"gantry-theme://css/swiper.min.css\" />
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 55
    public function block_javascript_footer($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 56
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 57
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/swiper.min.js"), 1 => 10, 2 => "footer"], "method");
        // line 58
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/slideshow.init.js"), 1 => 10, 2 => "footer"], "method");
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@particles/slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 58,  277 => 57,  274 => 56,  268 => 55,  260 => 52,  254 => 51,  245 => 47,  231 => 44,  228 => 43,  225 => 42,  221 => 40,  218 => 39,  204 => 36,  201 => 35,  199 => 34,  193 => 33,  188 => 30,  185 => 29,  174 => 28,  171 => 27,  163 => 24,  158 => 22,  151 => 21,  148 => 20,  142 => 17,  139 => 16,  136 => 15,  130 => 12,  127 => 11,  125 => 10,  109 => 8,  104 => 7,  102 => 6,  98 => 5,  86 => 4,  53 => 3,  47 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@nucleus/partials/particle.html.twig' %}
{% block particle %}
    <div id=\"{{ id }}\" class=\"g-slideshow swiper-container {{ particle.class|e }}\" data-slideshow-id=\"{{ id }}\"  data-slideshow-effect=\"{{ particle.effect }}\" data-slideshow-autoplay=\"{% if particle.autoplay == \"enabled\" %}true{% else %}false{% endif %}\" data-slideshow-loop=\"{% if particle.loop == \"enabled\" %}true{% else %}false{% endif %}\" data-slideshow-timeout=\"{{ particle.autoplayTimeout }}\" data-slideshow-speed=\"{{ particle.speed }}\" data-slideshow-touchmove=\"{% if particle.touchmove == \"enabled\" %}true{% else %}false{% endif %}\"
    data-slideshow-direction=\"{% if particle.direction == \"horizontal\" %}horizontal{% else %}vertical{% endif %}\" {% if gantry.page.direction == 'rtl' %}dir=\"rtl\"{% endif %}>
        <div class=\"g-slideshow-slider swiper-wrapper\" style=\"height: {{ particle.height|default('60vh') }};\">
            {% if not particle.source or particle.source == 'particle' %}
                {% for item in particle.items %}
                    <div class=\"swiper-slide {% if particle.overlay == 'enabled' %}overlay{% endif %} {{ item.class|e }}\" style=\"background-image: url({{ url(item.image)|e }}); background-position: {{ item.bg_horizontal|default('center') }} {{ item.bg_vertical|default('center') }}\">
                        <div class=\"slide\">
                            {% if item.top_title %}
                                <h3 class=\"g-slideshow-top-title \">
                                    {{ item.top_title|raw }}
                                </h3>
                            {% endif %}
                            {% if item.main_title %}
                                <h1 class=\"g-slideshow-main-title\">
                                    {{ item.main_title|raw }}
                                </h1>
                            {% endif %}
                            {% if item.button_text %}
                                <a href=\"{{item.button_link}}\" target=\"{{ item.linktarget|default('_self') }}\" class=\"button\">
                                    {{item.button_text}}</a>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                {% include '@particles/slideshow-' ~ gantry.platform.name ~ '.html.twig' ignore missing %}
            {% endif %}
        </div>
        <!-- pagination -->
        <!-- navigation buttons -->
        <div class=\"navigation {% if particle.direction == 'horizontal' %}horizontal{% endif %}\" >
            {% if particle.nav == 'enabled' %}
                <div class=\"swiper-button-prev\">
                    <i class=\"fa {% if particle.direction == 'horizontal' %}{% if gantry.page.direction == 'rtl' %}fa-angle-right{% else %}fa-angle-left{% endif %}{% else %}fa-angle-up{% endif %}\"></i>
                </div>
            {% endif %}
            {% if particle.dots == 'enabled' %}
                <div class=\"swiper-pagination\"></div>
            {% endif %}
            {% if particle.nav == 'enabled' %}
                <div class=\"swiper-button-next\">
                    <i class=\"fa {% if particle.direction == 'horizontal' %}{% if gantry.page.direction == 'rtl' %}fa-angle-left{% else %}fa-angle-right{% endif %}{% else %}fa-angle-down{% endif %}\"></i>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"gantry-theme://css/swiper.min.css\" />
{% endblock %}

{% block javascript_footer %}
    {% do gantry.load('jquery') %}
    {% do gantry.document.addScript(url('gantry-theme://js/swiper.min.js'), 10, 'footer') %}
    {% do gantry.document.addScript(url('gantry-theme://js/slideshow.init.js'), 10, 'footer') %}
{% endblock %}
", "@particles/slideshow.html.twig", "/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/slideshow.html.twig");
    }
}
