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

/* @nucleus/layout/container.html.twig */
class __TwigTemplate_4bc05787d646b0cc7b9c9463ba757975b2c32a641e08410c5f37de5a79b4c555 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@nucleus/layout/container.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 3
            echo "        ";
            $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", [])) . ".html.twig"), "@nucleus/layout/container.html.twig", 3)->display(twig_array_merge($context, ["segments" => $this->getAttribute($context["segment"], "children", [])]));
            // line 4
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        echo "
";
        // line 7
        if (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "sticky", []) || twig_trim_filter(($context["html"] ?? null)))) {
            // line 8
            echo "    ";
            $context["attr_id"] = (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "id", [])) ? ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "id", [])) : (("g-" . $this->getAttribute(($context["segment"] ?? null), "id", []))));
            // line 9
            echo "    ";
            $context["boxed"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "boxed", []);
            // line 10
            echo "    ";
            if ( !(null === ($context["boxed"] ?? null))) {
                // line 11
                echo "        ";
                $context["boxed"] = (((twig_trim_filter(($context["boxed"] ?? null)) == "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "page", []), "body", []), "layout", []), "sections", [])) : (($context["boxed"] ?? null)));
                // line 12
                echo "    ";
            }
            // line 13
            echo "    ";
            $context["class"] = ("g-wrapper" . (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "class", [])) ? ((" " . $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "class", []))) : ("")));
            // line 14
            echo "    ";
            $context["attr_extra"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "extra", []));
            // line 15
            echo "
    ";
            // line 16
            if (( !(null === ($context["boxed"] ?? null)) && ((($context["boxed"] ?? null) == 0) || (($context["boxed"] ?? null) == 2)))) {
                // line 17
                echo "        ";
                ob_start();
                // line 18
                echo "        <div class=\"g-container";
                echo (((($context["boxed"] ?? null) == 2)) ? (" g-flushed") : (""));
                echo "\">";
                echo ($context["html"] ?? null);
                echo "</div>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 20
                echo "    ";
            }
            // line 21
            echo "
    ";
            // line 22
            ob_start();
            // line 23
            echo "    <section id=\"";
            echo twig_escape_filter($this->env, ($context["attr_id"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\"";
            echo ($context["attr_extra"] ?? null);
            echo ">
        ";
            // line 24
            echo ($context["html"] ?? null);
            echo "
    </section>
    ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 27
            echo "
    ";
            // line 28
            if ((($context["boxed"] ?? null) == 1)) {
                // line 29
                echo "        <div class=\"g-container\">";
                echo ($context["html"] ?? null);
                echo "</div>
    ";
            } else {
                // line 31
                echo "        ";
                echo ($context["html"] ?? null);
                echo "
    ";
            }
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@nucleus/layout/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 31,  141 => 29,  139 => 28,  136 => 27,  130 => 24,  121 => 23,  119 => 22,  116 => 21,  113 => 20,  105 => 18,  102 => 17,  100 => 16,  97 => 15,  94 => 14,  91 => 13,  88 => 12,  85 => 11,  82 => 10,  79 => 9,  76 => 8,  74 => 7,  71 => 6,  56 => 4,  53 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set html %}
    {% for segment in segments %}
        {% include '@nucleus/layout/' ~ segment.type ~ '.html.twig' with { 'segments': segment.children } %}
    {% endfor %}
{% endset %}

{% if segment.attributes.sticky or html|trim %}
    {% set attr_id = segment.attributes.id ?: 'g-' ~ segment.id %}
    {% set boxed = segment.attributes.boxed %}
    {% if boxed is not null %}
        {% set boxed = boxed|trim == '' ? gantry.config.page.body.layout.sections : boxed %}
    {% endif %}
    {% set class = 'g-wrapper' ~ (segment.attributes.class ? ' ' ~ segment.attributes.class) %}
    {% set attr_extra = segment.attributes.extra|attribute_array %}

    {% if boxed is not null and (boxed == 0 or boxed == 2) %}
        {% set html %}
        <div class=\"g-container{{ boxed == 2 ? ' g-flushed' }}\">{{ html|raw }}</div>
        {% endset %}
    {% endif %}

    {% set html %}
    <section id=\"{{ attr_id }}\" class=\"{{ class }}\" {{- attr_extra|raw }}>
        {{ html|raw }}
    </section>
    {% endset %}

    {% if boxed == 1 %}
        <div class=\"g-container\">{{ html|raw }}</div>
    {% else %}
        {{ html|raw }}
    {% endif %}
{% endif %}
", "@nucleus/layout/container.html.twig", "/domains1/gh43616200/public/www_root/user/plugins/gantry5/engines/nucleus/templates/layout/container.html.twig");
    }
}
