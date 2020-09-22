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

/* @particles/blockcontent.html.twig */
class __TwigTemplate_61ff54f14fa02e7a3ffa2ca1af3b125daced57b7c4182716f54dd6f9d4821024 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@particles/blockcontent.html.twig"));

        // line 2
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "lightcase.init"], "method");
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/blockcontent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "particle"));

        // line 4
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
        <div class=\"g-blockcontent\">
            ";
        // line 6
        if (((((($this->getAttribute(($context["particle"] ?? null), "icon", []) || $this->getAttribute(($context["particle"] ?? null), "image", [])) || $this->getAttribute(($context["particle"] ?? null), "headline", [])) || $this->getAttribute(($context["particle"] ?? null), "description", [])) || $this->getAttribute(($context["particle"] ?? null), "linktext", [])) || $this->getAttribute(($context["particle"] ?? null), "title", []))) {
            // line 7
            echo "                <div class=\"g-grid\">
                    <div class=\"g-block\">
                        <div class=\"g-content g-blockcontent-header\">
                            ";
            // line 10
            if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
                // line 11
                echo "                                <h2 class=\"g-title\">
                                    ";
                // line 12
                echo $this->getAttribute(($context["particle"] ?? null), "title", []);
                echo "</h2>
                            ";
            }
            // line 14
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])), "html", null, true);
                echo "\" class=\"g-blockcontent-image\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "headline", []));
                echo "\"/>";
            }
            // line 15
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "icon", [])) {
                // line 16
                echo "                                <span class=\"g-blockcontent-title-icon\">
                                    <i class=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "icon", []), "html", null, true);
                echo "\"></i>
                                </span>
                            ";
            }
            // line 20
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "headline", [])) {
                // line 21
                echo "                                <h2 class=\"g-title g-blockcontent-headline\">
                                    ";
                // line 22
                echo $this->getAttribute(($context["particle"] ?? null), "headline", []);
                echo "</h2>
                            ";
            }
            // line 24
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "description", [])) {
                // line 25
                echo "                                <div class=\"g-blockcontent-description\">
                                    ";
                // line 26
                echo $this->getAttribute(($context["particle"] ?? null), "description", []);
                echo "</div>
                            ";
            }
            // line 28
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "linktext", [])) {
                // line 29
                echo "                                <p class=\"g-blockcontent-buttons\">
                                    <a target=\"";
                // line 30
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "linktarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "linktarget", []), "_self")) : ("_self")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
                echo "\" class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linkclass", []));
                echo "\">
                                        ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext", []));
                echo "</a>
                                </p>
                            ";
            }
            // line 34
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        // line 38
        echo "            ";
        if ( !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "subcontents", []))) {
            // line 39
            echo "                <div class=\"g-grid g-blockcontent-subcontent\">
                    ";
            // line 40
            if (( !$this->getAttribute(($context["particle"] ?? null), "source", []) || ($this->getAttribute(($context["particle"] ?? null), "source", []) == "particle"))) {
                // line 41
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "subcontents", []));
                foreach ($context['_seq'] as $context["_key"] => $context["subcontent"]) {
                    // line 42
                    echo "                            <div class=\"g-block g-blockcontent-subcontent-block ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "class", []), "html", null, true);
                    echo " ";
                    if ($this->getAttribute($context["subcontent"], "accent", [])) {
                        echo "g-blockcontent-subcontent-block-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "accent", []), "html", null, true);
                    }
                    echo "\">
                                <div class=\"g-content g-blockcontent-subcontent-block-content\">
                                    ";
                    // line 44
                    if ($this->getAttribute($context["subcontent"], "rokboximage", [])) {
                        // line 45
                        echo "                                        <a data-rel=\"lightcase\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "rokboxcaption", []));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["subcontent"], "rokboximage", [])), "html", null, true);
                        echo "\">
                                        ";
                    }
                    // line 47
                    echo "                                        ";
                    if ($this->getAttribute($context["subcontent"], "img", [])) {
                        echo "<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["subcontent"], "img", [])), "html", null, true);
                        echo "\" class=\"g-blockcontent-subcontent-img\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "title", []));
                        echo "\"/>";
                    }
                    // line 48
                    echo "                                        ";
                    if ($this->getAttribute($context["subcontent"], "rokboximage", [])) {
                        // line 49
                        echo "                                        </a>
                                    ";
                    }
                    // line 51
                    echo "                                    ";
                    if ($this->getAttribute($context["subcontent"], "subtitle", [])) {
                        // line 52
                        echo "                                        <h5 class=\"g-blockcontent-subcontent-subtitle\">
                                            ";
                        // line 53
                        echo $this->getAttribute($context["subcontent"], "subtitle", []);
                        echo "</h5>
                                    ";
                    }
                    // line 55
                    echo "                                    ";
                    if ($this->getAttribute($context["subcontent"], "icon", [])) {
                        // line 56
                        echo "                                        <span class=\"g-blockcontent-subcontent-title-icon\">
                                            <i class=\"";
                        // line 57
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "icon", []), "html", null, true);
                        echo "\"></i>
                                        </span>
                                    ";
                    }
                    // line 60
                    echo "                                    ";
                    if ($this->getAttribute($context["subcontent"], "name", [])) {
                        // line 61
                        echo "                                        <h4 class=\"g-blockcontent-subcontent-title\">
                                            <span class=\"g-blockcontent-subcontent-title-text\">
                                                ";
                        // line 63
                        echo $this->getAttribute($context["subcontent"], "name", []);
                        echo "</span>
                                        </h4>
                                    ";
                    }
                    // line 66
                    echo "                                    ";
                    if ($this->getAttribute($context["subcontent"], "description", [])) {
                        // line 67
                        echo "                                        <div class=\"g-blockcontent-subcontent-desc\">
                                            ";
                        // line 68
                        echo $this->getAttribute($context["subcontent"], "description", []);
                        echo "</div>
                                    ";
                    }
                    // line 70
                    echo "                                    ";
                    if ($this->getAttribute($context["subcontent"], "button", [])) {
                        // line 71
                        echo "                                        <p class=\"g-blockcontent-buttons\">
                                            <a target=\"";
                        // line 72
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["subcontent"], "buttontarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["subcontent"], "buttontarget", []), "_self")) : ("_self")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "buttonlink", []));
                        echo "\" class=\"button link ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "buttonclass", []));
                        echo "\">
                                                ";
                        // line 73
                        echo $this->getAttribute($context["subcontent"], "button", []);
                        echo "</a>
                                        </p>
                                    ";
                    }
                    // line 76
                    echo "                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcontent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "                        ";
            } else {
                // line 80
                echo "                        ";
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
                try {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                     $this->loadTemplate((("@particles/blockcontent-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "name", [])) . ".html.twig"), "@particles/blockcontent.html.twig", 80);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
                }
                // line 81
                echo "                    ";
            }
            // line 82
            echo "                </div>
            ";
        }
        // line 84
        echo "        </div>
    </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@particles/blockcontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 84,  288 => 82,  285 => 81,  274 => 80,  271 => 79,  263 => 76,  257 => 73,  249 => 72,  246 => 71,  243 => 70,  238 => 68,  235 => 67,  232 => 66,  226 => 63,  222 => 61,  219 => 60,  213 => 57,  210 => 56,  207 => 55,  202 => 53,  199 => 52,  196 => 51,  192 => 49,  189 => 48,  180 => 47,  172 => 45,  170 => 44,  159 => 42,  154 => 41,  152 => 40,  149 => 39,  146 => 38,  140 => 34,  134 => 31,  126 => 30,  123 => 29,  120 => 28,  115 => 26,  112 => 25,  109 => 24,  104 => 22,  101 => 21,  98 => 20,  92 => 17,  89 => 16,  86 => 15,  77 => 14,  72 => 12,  69 => 11,  67 => 10,  62 => 7,  60 => 6,  54 => 4,  48 => 3,  40 => 1,  38 => 2,  29 => 1,);
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
{% do gantry.load('lightcase.init') %}
{% block particle %}
    <div class=\"{{ particle.class|e }}\">
        <div class=\"g-blockcontent\">
            {% if particle.icon or particle.image or particle.headline or particle.description or particle.linktext or particle.title %}
                <div class=\"g-grid\">
                    <div class=\"g-block\">
                        <div class=\"g-content g-blockcontent-header\">
                            {% if particle.title %}
                                <h2 class=\"g-title\">
                                    {{ particle.title|raw }}</h2>
                            {% endif %}
                            {% if particle.image %}<img src=\"{{ url(particle.image) }}\" class=\"g-blockcontent-image\" alt=\"{{ particle.headline|e }}\"/>{% endif %}
                            {% if particle.icon %}
                                <span class=\"g-blockcontent-title-icon\">
                                    <i class=\"{{ particle.icon }}\"></i>
                                </span>
                            {% endif %}
                            {% if particle.headline %}
                                <h2 class=\"g-title g-blockcontent-headline\">
                                    {{ particle.headline|raw }}</h2>
                            {% endif %}
                            {% if particle.description %}
                                <div class=\"g-blockcontent-description\">
                                    {{ particle.description|raw }}</div>
                            {% endif %}
                            {% if particle.linktext %}
                                <p class=\"g-blockcontent-buttons\">
                                    <a target=\"{{ particle.linktarget|default('_self')|e }}\" href=\"{{ particle.link|e }}\" class=\"button {{ particle.linkclass|e }}\">
                                        {{ particle.linktext|e }}</a>
                                </p>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endif %}
            {% if particle.subcontents is not empty %}
                <div class=\"g-grid g-blockcontent-subcontent\">
                    {% if not particle.source or particle.source == 'particle' %}
                        {% for subcontent in particle.subcontents %}
                            <div class=\"g-block g-blockcontent-subcontent-block {{ subcontent.class }} {% if subcontent.accent %}g-blockcontent-subcontent-block-{{ subcontent.accent }}{% endif %}\">
                                <div class=\"g-content g-blockcontent-subcontent-block-content\">
                                    {% if subcontent.rokboximage %}
                                        <a data-rel=\"lightcase\" title=\"{{ subcontent.rokboxcaption|e }}\" href=\"{{ url(subcontent.rokboximage) }}\">
                                        {% endif %}
                                        {% if subcontent.img %}<img src=\"{{ url(subcontent.img) }}\" class=\"g-blockcontent-subcontent-img\" alt=\"{{ subcontent.title|e }}\"/>{% endif %}
                                        {% if subcontent.rokboximage %}
                                        </a>
                                    {% endif %}
                                    {% if subcontent.subtitle %}
                                        <h5 class=\"g-blockcontent-subcontent-subtitle\">
                                            {{ subcontent.subtitle|raw }}</h5>
                                    {% endif %}
                                    {% if subcontent.icon %}
                                        <span class=\"g-blockcontent-subcontent-title-icon\">
                                            <i class=\"{{ subcontent.icon }}\"></i>
                                        </span>
                                    {% endif %}
                                    {% if subcontent.name %}
                                        <h4 class=\"g-blockcontent-subcontent-title\">
                                            <span class=\"g-blockcontent-subcontent-title-text\">
                                                {{ subcontent.name|raw }}</span>
                                        </h4>
                                    {% endif %}
                                    {% if subcontent.description %}
                                        <div class=\"g-blockcontent-subcontent-desc\">
                                            {{ subcontent.description|raw }}</div>
                                    {% endif %}
                                    {% if subcontent.button %}
                                        <p class=\"g-blockcontent-buttons\">
                                            <a target=\"{{ subcontent.buttontarget|default('_self')|e }}\" href=\"{{ subcontent.buttonlink|e }}\" class=\"button link {{ subcontent.buttonclass|e }}\">
                                                {{ subcontent.button|raw }}</a>
                                        </p>
                                    {% endif %}
                                </div>
                            </div>
                        {% endfor %}
                        {% else %}
                        {% include '@particles/blockcontent-' ~ gantry.platform.name ~ '.html.twig' ignore missing %}
                    {% endif %}
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "@particles/blockcontent.html.twig", "/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/blockcontent.html.twig");
    }
}
