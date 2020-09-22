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

/* @particles/simplemenu.html.twig */
class __TwigTemplate_6f5cb9c17e08f41ca99e109a5d2cdf7374f44a04339323670953ceb97ba50b1f extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@particles/simplemenu.html.twig"));

        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/simplemenu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "particle"));

        // line 4
        echo "<div class=\"g-simplemenu-particle ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
    ";
        // line 5
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>";
        }
        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "menus", []));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 8
            echo "    <div class=\"g-simplemenu-container\">
        <h6>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "title", []), "html", null, true);
            echo "</h6>
        <ul class=\"g-simplemenu\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "            <li>
                ";
                // line 13
                if ($this->getAttribute($context["item"], "icon", [])) {
                    // line 14
                    echo "                <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                    echo "\"></i>
                ";
                }
                // line 16
                echo "                <a target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", []), "_blank")) : ("_blank")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "title", []);
                echo "</a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </ul>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
</div>

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@particles/simplemenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 22,  108 => 19,  92 => 16,  86 => 14,  84 => 13,  81 => 12,  77 => 11,  72 => 9,  69 => 8,  65 => 7,  62 => 6,  56 => 5,  51 => 4,  45 => 3,  29 => 1,);
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
<div class=\"g-simplemenu-particle {{ particle.class|e }}\">
    {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

    {% for menu in particle.menus %}
    <div class=\"g-simplemenu-container\">
        <h6>{{ menu.title }}</h6>
        <ul class=\"g-simplemenu\">
            {% for item in menu.items %}
            <li>
                {% if item.icon %}
                <i class=\"{{ item.icon }}\"></i>
                {% endif %}
                <a target=\"{{ item.target|default('_blank') }}\" href=\"{{ item.link|e }}\" title=\"{{ item.title }}\">{{ item.title|raw }}</a>
            </li>
            {% endfor %}
        </ul>
    </div>
{% endfor %}

</div>

{% endblock %}
", "@particles/simplemenu.html.twig", "/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/simplemenu.html.twig");
    }
}
