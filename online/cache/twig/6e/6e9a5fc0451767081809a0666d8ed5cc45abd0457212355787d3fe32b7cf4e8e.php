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

/* @particles/simplecontent.html.twig */
class __TwigTemplate_2386ad5f63aadc7fbfd1a8e47132e4964f6592cbfad52ab6d7ac040c87618948 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@particles/simplecontent.html.twig"));

        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/simplecontent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "particle"));

        // line 4
        echo "
    <div class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
        <div class=\"g-simplecontent\">

            ";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>";
        }
        // line 9
        echo "
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                <div class=\"g-simplecontent-item g-simplecontent-layout-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "layout", []), "html", null, true);
            echo "\">
                    ";
            // line 12
            ob_start();
            // line 13
            echo "                        <div class=\"g-simplecontent-item-content-title\">";
            echo $this->getAttribute($context["item"], "content_title", []);
            echo "</div>
                    ";
            $context["particle_item_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 15
            echo "
                    ";
            // line 16
            ob_start();
            // line 17
            echo "                        <div class=\"g-simplecontent-item-author\">";
            echo $this->getAttribute($context["item"], "author", []);
            echo "</div>
                    ";
            $context["particle_item_author"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 19
            echo "
                    ";
            // line 20
            ob_start();
            // line 21
            echo "                        <div class=\"g-simplecontent-item-created-date\">";
            echo $this->getAttribute($context["item"], "created_date", []);
            echo "</div>
                    ";
            $context["particle_item_created_date"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
                    ";
            // line 24
            if (($this->getAttribute($context["item"], "layout", []) == "header")) {
                // line 25
                echo "                        ";
                if ($this->getAttribute($context["item"], "content_title", [])) {
                    echo twig_escape_filter($this->env, ($context["particle_item_title"] ?? null), "html", null, true);
                }
                // line 26
                echo "                        ";
                if ($this->getAttribute($context["item"], "author", [])) {
                    echo twig_escape_filter($this->env, ($context["particle_item_author"] ?? null), "html", null, true);
                }
                // line 27
                echo "                        ";
                if ($this->getAttribute($context["item"], "created_date", [])) {
                    echo twig_escape_filter($this->env, ($context["particle_item_created_date"] ?? null), "html", null, true);
                }
                // line 28
                echo "                    ";
            }
            // line 29
            echo "
                    ";
            // line 30
            if (($this->getAttribute($context["item"], "layout", []) != "header")) {
                // line 31
                echo "                        ";
                if ($this->getAttribute($context["item"], "created_date", [])) {
                    echo twig_escape_filter($this->env, ($context["particle_item_created_date"] ?? null), "html", null, true);
                }
                // line 32
                echo "                        ";
                if ($this->getAttribute($context["item"], "content_title", [])) {
                    echo twig_escape_filter($this->env, ($context["particle_item_title"] ?? null), "html", null, true);
                }
                // line 33
                echo "                        ";
                if ($this->getAttribute($context["item"], "author", [])) {
                    echo twig_escape_filter($this->env, ($context["particle_item_author"] ?? null), "html", null, true);
                }
                // line 34
                echo "                    ";
            }
            // line 35
            echo "
                    ";
            // line 36
            if ($this->getAttribute($context["item"], "leading_content", [])) {
                echo "<div class=\"g-simplecontent-item-leading-content\">";
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->htmlFilter($this->getAttribute($context["item"], "leading_content", []));
                echo "</div>";
            }
            // line 37
            echo "                    ";
            if ($this->getAttribute($context["item"], "main_content", [])) {
                echo "<div class=\"g-simplecontent-item-main-content\">";
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->htmlFilter($this->getAttribute($context["item"], "main_content", []));
                echo "</div>";
            }
            // line 38
            echo "
                    ";
            // line 39
            if ($this->getAttribute($context["item"], "readmore_label", [])) {
                // line 40
                echo "                        <div class=\"g-simplecontent-item-readmore-container\">
                            <a target=\"";
                // line 41
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "readmore_target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "readmore_target", []), "_self")) : ("_self")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "readmore_link", []));
                echo "\" class=\"g-simplecontent-item-readmore ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "readmore_class", []));
                echo "\">
                                ";
                // line 42
                echo $this->getAttribute($context["item"], "readmore_label", []);
                echo "
                            </a>
                        </div>
                    ";
            }
            // line 46
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
        </div>
    </div>

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@particles/simplecontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 48,  193 => 46,  186 => 42,  178 => 41,  175 => 40,  173 => 39,  170 => 38,  163 => 37,  157 => 36,  154 => 35,  151 => 34,  146 => 33,  141 => 32,  136 => 31,  134 => 30,  131 => 29,  128 => 28,  123 => 27,  118 => 26,  113 => 25,  111 => 24,  108 => 23,  102 => 21,  100 => 20,  97 => 19,  91 => 17,  89 => 16,  86 => 15,  80 => 13,  78 => 12,  73 => 11,  69 => 10,  66 => 9,  60 => 8,  54 => 5,  51 => 4,  45 => 3,  29 => 1,);
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

    <div class=\"{{ particle.class|e }}\">
        <div class=\"g-simplecontent\">

            {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

            {% for item in particle.items %}
                <div class=\"g-simplecontent-item g-simplecontent-layout-{{ item.layout }}\">
                    {% set particle_item_title %}
                        <div class=\"g-simplecontent-item-content-title\">{{ item.content_title|raw }}</div>
                    {% endset %}

                    {% set particle_item_author %}
                        <div class=\"g-simplecontent-item-author\">{{ item.author|raw }}</div>
                    {% endset %}

                    {% set particle_item_created_date %}
                        <div class=\"g-simplecontent-item-created-date\">{{ item.created_date|raw }}</div>
                    {% endset %}

                    {% if item.layout == 'header' %}
                        {% if item.content_title %}{{ particle_item_title }}{% endif %}
                        {% if item.author %}{{ particle_item_author }}{% endif %}
                        {% if item.created_date %}{{ particle_item_created_date }}{% endif %}
                    {% endif %}

                    {% if item.layout != 'header' %}
                        {% if item.created_date %}{{ particle_item_created_date }}{% endif %}
                        {% if item.content_title %}{{ particle_item_title }}{% endif %}
                        {% if item.author %}{{ particle_item_author }}{% endif %}
                    {% endif %}

                    {% if item.leading_content %}<div class=\"g-simplecontent-item-leading-content\">{{ item.leading_content|html|raw }}</div>{% endif %}
                    {% if item.main_content %}<div class=\"g-simplecontent-item-main-content\">{{ item.main_content|html|raw }}</div>{% endif %}

                    {% if item.readmore_label %}
                        <div class=\"g-simplecontent-item-readmore-container\">
                            <a target=\"{{ item.readmore_target|default('_self')|e }}\" href=\"{{ item.readmore_link|e }}\" class=\"g-simplecontent-item-readmore {{ item.readmore_class|e }}\">
                                {{ item.readmore_label|raw }}
                            </a>
                        </div>
                    {% endif %}
                </div>
            {% endfor %}

        </div>
    </div>

{% endblock %}
", "@particles/simplecontent.html.twig", "/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/simplecontent.html.twig");
    }
}
