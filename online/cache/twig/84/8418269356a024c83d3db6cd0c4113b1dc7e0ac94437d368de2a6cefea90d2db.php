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

/* edit title template (string template 149af2c44a263ca3f38441ba38d7db6755b060de2868ccdc659874ab6fa89a0d) */
class __TwigTemplate_a73f3940300b34562b39fbf48c23df2090c5d5b780383b63525b947cd2a7a872 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit title template (string template 149af2c44a263ca3f38441ba38d7db6755b060de2868ccdc659874ab6fa89a0d)"));

        // line 1
        if ($this->getAttribute(($context["object"] ?? null), "root", [])) {
            echo "Root <small>( &lt;root&gt; )";
        } else {
            echo twig_escape_filter($this->env, ((($this->getAttribute(($context["form"] ?? null), "value", [0 => "header.title"], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "value", [0 => "header.title"], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => "header.title"], "method")) : ($this->getAttribute(($context["form"] ?? null), "value", [0 => "folder"], "method"))));
            echo " <small>( ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["object"] ?? null), "getRoute", [], "method"), "toString", [0 => false], "method")) ? ($this->getAttribute($this->getAttribute(($context["object"] ?? null), "getRoute", [], "method"), "toString", [0 => false], "method")) : ("/")));
            echo " )</small>";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "edit title template (string template 149af2c44a263ca3f38441ba38d7db6755b060de2868ccdc659874ab6fa89a0d)";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if object.root %}Root <small>( &lt;root&gt; ){% else %}{{ (form.value('header.title') ?? form.value('folder'))|e }} <small>( {{ (object.getRoute().toString(false) ?: '/')|e }} )</small>{% endif %}", "edit title template (string template 149af2c44a263ca3f38441ba38d7db6755b060de2868ccdc659874ab6fa89a0d)", "");
    }
}
