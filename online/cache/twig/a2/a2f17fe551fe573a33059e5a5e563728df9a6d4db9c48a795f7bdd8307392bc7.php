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

/* forms/default/field.html.twig */
class __TwigTemplate_2b175970ab3b9f0ccd102f6bfbc054d9995fb8b8ac31fe16fbcf5387a63bbe2d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("forms/layouts/field-variables.html.twig", "forms/default/field.html.twig", 3);
        // line 3
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."forms/layouts/field-variables.html.twig".'" cannot be used as a trait.', 3, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'field_override_variables_before' => [$this, 'block_field_override_variables_before'],
                'outer_field_classes' => [$this, 'block_outer_field_classes'],
                'global_attributes' => [$this, 'block_global_attributes'],
                'input_attributes' => [$this, 'block_input_attributes'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 107
        return "forms/layouts/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/default/field.html.twig"));

        // line 1
        if ( !$this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "ignore", [])) {
            // line 6
            $context["field_name"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
            // line 7
            $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", []) == "vertical");
            // line 9
            if (( !($context["blueprints"] ?? null) || (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")) : (true)) === true))) {
                // line 10
                $context["toggleable"] = ((($this->getAttribute(($context["field"] ?? null), "toggleable", [], "any", true, true) &&  !(null === $this->getAttribute(($context["field"] ?? null), "toggleable", [])))) ? ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) : (false));
                // line 11
                if (($context["toggleable"] ?? null)) {
                    // line 12
                    $context["originalValue"] = (((isset($context["originalValue"]) || array_key_exists("originalValue", $context))) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
                    // line 13
                    $context["toggleableChecked"] =  !(null === ($context["originalValue"] ?? null));
                } elseif ($this->getAttribute(                // line 14
($context["field"] ?? null), "overridable", [])) {
                    // line 15
                    $context["toggleable"] = true;
                    // line 16
                    $context["default"] = ((($this->getAttribute(($context["form"] ?? null), "getDefaultValue", [0 => $this->getAttribute(($context["field"] ?? null), "name", [])], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getDefaultValue", [0 => $this->getAttribute(($context["field"] ?? null), "name", [])], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getDefaultValue", [0 => $this->getAttribute(($context["field"] ?? null), "name", [])], "method")) : ($this->getAttribute(($context["field"] ?? null), "default", [])));
                    // line 17
                    $context["toggleableChecked"] = ( !(null === ($context["value"] ?? null)) && (($context["value"] ?? null) != ($context["default"] ?? null)));
                }
                // line 20
                $context["cookie_name"] = ((("forms-" . $this->getAttribute(($context["form"] ?? null), "name", [])) . "-") . $this->getAttribute(($context["field"] ?? null), "name", []));
                // line 21
                $context["value"] = (($context["value"]) ?? ((( !(null === $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null)))) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null))) : ($this->getAttribute(($context["field"] ?? null), "default", [])))));
                // line 23
                if ((($this->getAttribute(($context["field"] ?? null), "yaml", []) || ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "type", []) == "yaml")) && twig_test_iterable(($context["value"] ?? null)))) {
                    // line 24
                    $context["value"] = call_user_func_array($this->env->getFilter('toYaml')->getCallable(), [($context["value"] ?? null)]);
                }
            } else {
                // line 27
                $context["toggleable"] = false;
            }
            // line 31
            $context["isDisabledToggleable"] = (($context["toggleable"] ?? null) &&  !($context["toggleableChecked"] ?? null));
            // line 33
            if (($context["toggleable"] ?? null)) {
                // line 34
                ob_start();
                // line 35
                echo "    ";
                $this->loadTemplate("forms/default/toggleable.html.twig", "forms/default/field.html.twig", 35)->display(twig_array_merge($context, ["checked" => ($context["toggleableChecked"] ?? null)]));
                // line 36
                echo "  ";
                $context["form_field_toggleable"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            }
            // line 39
            $context["errors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", []), $this->getAttribute(($context["field"] ?? null), "name", []));
            // line 40
            $context["required"] = (($context["client_side_validation"] ?? null) && twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1]));
            // line 41
            $context["autofocus"] = ((($context["inline_errors"] ?? null) == false) && twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1]));
            // line 43
            if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
                // line 44
                $context["autofocus"] = true;
            }
            // line 47
            ob_start();
            // line 48
            echo "  ";
            $this->displayBlock('outer_field_classes', $context, $blocks);
            $context["embed_outer_field_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            if (($context["errors"] ?? null)) {
                $context["form_field_outer_core"] = (($context["form_field_outer_core"] ?? null) . " has-errors");
            }
            // line 53
            if (($context["toggleable"] ?? null)) {
                $context["form_field_outer_core"] = (($context["form_field_outer_core"] ?? null) . " form-field-toggleable");
            }
            // line 55
            $context["layout_form_field_outer_classes"] = $this->getAttribute(($context["field"] ?? null), "outerclasses", []);
            // line 56
            $context["layout_form_field_outer_classes"] = ((twig_trim_filter(($context["layout_form_field_outer_classes"] ?? null)) . " ") . ($context["form_field_outer_classes"] ?? null));
            // line 57
            $context["layout_form_field_outer_classes"] = ((twig_trim_filter(($context["layout_form_field_outer_classes"] ?? null)) . " ") . ($context["embed_outer_field_classes"] ?? null));
            // line 60
            $context["show_label"] = ( !($this->getAttribute(($context["field"] ?? null), "label", []) === false) &&  !($this->getAttribute(($context["field"] ?? null), "display_label", []) === false));
            // line 63
            $context["layout_form_field_outer_label_classes"] = twig_trim_filter(((((($context["form_field_outer_label_classes"] ?? null)) ? (($context["form_field_outer_label_classes"] ?? null)) : ("form-label")) . " ") . $this->getAttribute(($context["field"] ?? null), "labelclasses", [])));
            // line 64
            $context["layout_form_field_label_classes"] = twig_trim_filter(((($context["form_field_label_classes"] ?? null)) ? (($context["form_field_label_classes"] ?? null)) : ("inline")));
            // line 65
            $context["form_field_label_trim"] = ((($context["toggleable"] ?? null)) ? ("toggleable") : (""));
            // line 68
            $context["layout_form_field_outer_data_classes"] = twig_trim_filter(((((($context["form_field_outer_data_classes"] ?? null)) ? (($context["form_field_outer_data_classes"] ?? null)) : (" form-data")) . " ") . $this->getAttribute(($context["field"] ?? null), "dataclasses", [])));
            // line 71
            $context["layout_form_field_wrapper_classes"] = twig_trim_filter(((((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : (" form-input-wrapper")) . " ") . $this->getAttribute(($context["field"] ?? null), "wrapper_classes", [])));
            // line 74
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->ofTypeFunc(($context["field"] ?? null), "array")) {
                // line 75
                if ($this->getAttribute(($context["field"] ?? null), "classes", [])) {
                    // line 76
                    $context["field"] = twig_array_merge(($context["field"] ?? null), ["classes" => (($this->getAttribute(($context["field"] ?? null), "classes", []) . " ") . twig_trim_filter(                    $this->renderBlock("field_input_classes", $context, $blocks)))]);
                } else {
                    // line 78
                    $context["field"] = twig_array_merge(($context["field"] ?? null), ["classes" =>                     $this->renderBlock("field_input_classes", $context, $blocks)]);
                }
            }
            // line 81
            $context["layout_form_field_input_classes"] = twig_trim_filter(((($context["form_field_input_classes"] ?? null) . " ") . $this->getAttribute(($context["field"] ?? null), "classes", [])));
            // line 84
            $context["form_field_inline_error_classes"] = ((($context["form_field_inline_error_classes"] ?? null)) ? (($context["form_field_inline_error_classes"] ?? null)) : (" form-errors"));
            // line 87
            $context["form_field_extra_wrapper_classes"] = ("form-extra-wrapper " . $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []));
            // line 90
            $context["form_field_for"] = ((($context["toggleable"] ?? null)) ? (("toggleable_" . $this->getAttribute(($context["field"] ?? null), "name", []))) : (twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []))));
            // line 93
            $context["form_field_label"] = (($this->getAttribute(($context["field"] ?? null), "markdown", [])) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["field"] ?? null), "label", []), false)) : ($this->getAttribute(($context["field"] ?? null), "label", [])));
            // line 94
            $context["form_field_label"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, (((isset($context["form_field_label"]) || array_key_exists("form_field_label", $context))) ? (_twig_default_filter(($context["form_field_label"] ?? null), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))));
            // line 97
            if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
                // line 98
                $context["form_field_help"] = (($this->getAttribute(($context["field"] ?? null), "markdown", [])) ? (twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), false))) : (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])))));
            }
            // line 102
            $context["form_field_required"] = ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? (true) : (false));
            // line 105
            $context["form_field_description"] = (($this->getAttribute(($context["field"] ?? null), "markdown", [])) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", [])), false)) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", []))));
        }
        // line 107
        $this->parent = $this->loadTemplate("forms/layouts/field.html.twig", "forms/default/field.html.twig", 107);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 4
    public function block_field_override_variables_before($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_override_variables_before"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 48
    public function block_outer_field_classes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer_field_classes"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 109
    public function block_global_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_attributes"));

        // line 110
        echo "  data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\"
  data-grav-disabled=\"";
        // line 111
        echo twig_escape_filter($this->env, (($context["toggleable"] ?? null) && ($context["toggleableChecked"] ?? null)), "html", null, true);
        echo "\"
  data-grav-default=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 115
    public function block_input_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input_attributes"));

        // line 116
        echo "  class=\"";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["layout_form_field_input_classes"] ?? null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\"
  ";
        // line 117
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 118
        echo "  ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 119
        echo "  ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 120
        echo "  ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html_attr");
            echo "\"";
        }
        // line 121
        echo "  ";
        if (($context["autofocus"] ?? null)) {
            echo "autofocus=\"autofocus\"";
        }
        // line 122
        echo "  ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 123
        echo "  ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 124
        echo "  ";
        if ($this->getAttribute(($context["field"] ?? null), "autocomplete", [], "any", true, true)) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", []), "html", null, true);
            echo "\"";
        }
        // line 125
        echo "  ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocapitalize", []), [0 => "off", 1 => "characters", 2 => "words", 3 => "sentences"])) {
            echo "autocapitalize=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocapitalize", []), "html", null, true);
            echo "\"";
        }
        // line 126
        echo "  ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "inputmode", []), [0 => "none", 1 => "text", 2 => "decimal", 3 => "numeric", 4 => "tel", 5 => "search", 6 => "email", 7 => "url"])) {
            echo "inputmode=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "inputmode", []), "html", null, true);
            echo "\"";
        }
        // line 127
        echo "  ";
        if ($this->getAttribute(($context["field"] ?? null), "tabindex", [])) {
            echo "tabindex=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "tabindex", []), "html", null, true);
            echo "\"";
        }
        // line 128
        echo "  ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "spellcheck", []), [0 => "true", 1 => "false"])) {
            echo "spellcheck=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "spellcheck", []), "html", null, true);
            echo "\"";
        }
        // line 129
        echo "  ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 130
        echo "  ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []));
            echo "\"";
        }
        // line 131
        echo "  ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])));
            echo "\"
  ";
        } elseif ($this->getAttribute(        // line 132
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", [])));
            echo "\" ";
        }
        // line 133
        echo "
  ";
        // line 135
        echo "  ";
        if ($this->getAttribute(($context["field"] ?? null), "attributes", [], "any", true, true)) {
            // line 136
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "attributes", []));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 137
                echo "      ";
                if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->ofTypeFunc($context["attribute"], "array")) {
                    // line 138
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", []), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", []), "html_attr");
                    echo "\"
      ";
                } else {
                    // line 140
                    echo "        ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attribute"], "html_attr");
                    echo "\"
      ";
                }
                // line 142
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "  ";
        }
        // line 144
        echo "
  ";
        // line 146
        echo "  ";
        if ($this->getAttribute(($context["field"] ?? null), "datasets", [])) {
            // line 147
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "datasets", []));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 148
                echo "      data-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attribute"], "html_attr");
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "  ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 150,  397 => 148,  392 => 147,  389 => 146,  386 => 144,  383 => 143,  377 => 142,  369 => 140,  361 => 138,  358 => 137,  353 => 136,  350 => 135,  347 => 133,  341 => 132,  334 => 131,  327 => 130,  322 => 129,  315 => 128,  308 => 127,  301 => 126,  294 => 125,  287 => 124,  282 => 123,  277 => 122,  272 => 121,  265 => 120,  260 => 119,  253 => 118,  247 => 117,  240 => 116,  234 => 115,  225 => 112,  221 => 111,  216 => 110,  210 => 109,  199 => 48,  188 => 4,  180 => 107,  177 => 105,  175 => 102,  172 => 98,  170 => 97,  168 => 94,  166 => 93,  164 => 90,  162 => 87,  160 => 84,  158 => 81,  154 => 78,  151 => 76,  149 => 75,  147 => 74,  145 => 71,  143 => 68,  141 => 65,  139 => 64,  137 => 63,  135 => 60,  133 => 57,  131 => 56,  129 => 55,  125 => 53,  121 => 52,  117 => 48,  115 => 47,  112 => 44,  110 => 43,  108 => 41,  106 => 40,  104 => 39,  100 => 36,  97 => 35,  95 => 34,  93 => 33,  91 => 31,  88 => 27,  84 => 24,  82 => 23,  80 => 21,  78 => 20,  75 => 17,  73 => 16,  71 => 15,  69 => 14,  67 => 13,  65 => 12,  63 => 11,  61 => 10,  59 => 9,  57 => 7,  55 => 6,  53 => 1,  44 => 107,  23 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not field.validate.ignore  %}

{% use 'forms/layouts/field-variables.html.twig' %}
{% block field_override_variables_before %}{% endblock %}

{% set field_name = (scope ~ field.name)|fieldName %}
{% set vertical = field.style == 'vertical' %}

{% if not blueprints or (blueprints.schema.type(field.type)['input@'] ?? true) is same as(true) %}
    {% set toggleable = field.toggleable ?? false %}
    {% if toggleable %}
        {% set originalValue = originalValue is defined ? originalValue : value %}
        {% set toggleableChecked = originalValue is not null %}
    {% elseif field.overridable %}
        {% set toggleable = true %}
        {% set default = form.getDefaultValue(field.name) ?? field.default %}
        {% set toggleableChecked = value is not null and value != default %}
    {% endif %}

    {% set cookie_name = 'forms-' ~ form.name ~ '-' ~ field.name %}
    {% set value = value ?? (get_cookie(cookie_name) is not null ? get_cookie(cookie_name) : field.default) %}

    {% if (field.yaml or field.validate.type == 'yaml') and value is iterable %}
        {% set value = value|toYaml %}
    {% endif %}
{% else %}
    {% set toggleable = false %}
{% endif %}

{# DEPRECATED: Needed by old form fields; remove when backwards compatibility breaks are allowed #}
{% set isDisabledToggleable = toggleable and not toggleableChecked %}

{% if toggleable %}
  {% set form_field_toggleable %}
    {% include 'forms/default/toggleable.html.twig' with {checked: toggleableChecked} %}
  {% endset %}
{% endif %}

{% set errors = attribute(form.messages, field.name) %}
{% set required = client_side_validation and field.validate.required in ['on', 'true', 1] %}
{% set autofocus = (inline_errors == false) and field.autofocus in ['on', 'true', 1] %}

{% if inline_errors and errors %}
    {% set autofocus = true %}
{% endif %}

{% set embed_outer_field_classes %}
  {% block outer_field_classes %}{% endblock %}
{% endset %}

{# Field Classes #}
{%- if errors %}{% set form_field_outer_core = form_field_outer_core ~ ' has-errors'  %}{% endif -%}
{%- if toggleable %}{% set form_field_outer_core = form_field_outer_core ~ ' form-field-toggleable' %}{% endif -%}

{% set layout_form_field_outer_classes = field.outerclasses %}
{% set layout_form_field_outer_classes = layout_form_field_outer_classes|trim ~ ' ' ~ form_field_outer_classes %}
{% set layout_form_field_outer_classes = layout_form_field_outer_classes|trim ~ ' ' ~ embed_outer_field_classes %}

{# Show Label logic #}
{% set show_label = field.label is not same as(false) and field.display_label is not same as(false )%}

{# Label Classes #}
{% set layout_form_field_outer_label_classes = ((form_field_outer_label_classes ?: 'form-label') ~ ' ' ~ field.labelclasses)|trim %}
{% set layout_form_field_label_classes = (form_field_label_classes ?: 'inline')|trim %}
{% set form_field_label_trim = toggleable ? 'toggleable' %}

{# Field Outer Data classes #}
{% set layout_form_field_outer_data_classes = ((form_field_outer_data_classes ?: ' form-data') ~ ' ' ~ field.dataclasses)|trim  %}

{# Field Wrapper classes #}
{% set layout_form_field_wrapper_classes = ((form_field_wrapper_classes ?: ' form-input-wrapper') ~ ' ' ~ field.wrapper_classes)|trim %}

{# Field input classes #}
{% if field|of_type('array') %}
  {% if field.classes %}
    {% set field = field|merge({'classes': field.classes ~ ' ' ~ block('field_input_classes')|trim }) %}
  {% else %}
    {% set field = field|merge({'classes': block('field_input_classes') }) %}
  {% endif %}
{% endif %}
{% set layout_form_field_input_classes = (form_field_input_classes ~ ' ' ~ field.classes)|trim %}

{# Inline error classes #}
{% set form_field_inline_error_classes = form_field_inline_error_classes ?: ' form-errors' %}

{# Field extra classes #}
{% set form_field_extra_wrapper_classes = 'form-extra-wrapper ' ~ field.wrapper_classes %}

{# Field For #}
{% set form_field_for = toggleable ? 'toggleable_' ~ field.name : field.id|e %}

{# Field Label #}
{% set form_field_label = field.markdown ? field.label|markdown(false) : field.label %}
{% set form_field_label = form_field_label|default(field.name|capitalize)|t %}

{# Field Help #}
{% if field.help %}
    {% set form_field_help = field.markdown ? field.help|t|markdown(false)|e : field.help|t|e %}
{% endif %}

{# Field Requied #}
{% set form_field_required = field.validate.required in ['on', 'true', 1] ? true : false %}

{# Field Description #}
{% set form_field_description = field.markdown ? field.description|t|markdown(false)|raw : field.description|t|raw %}

{% extends 'forms/layouts/field.html.twig' %}

{% block global_attributes %}
  data-grav-field=\"{{ field.type }}\"
  data-grav-disabled=\"{{ toggleable and toggleableChecked }}\"
  data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
{% endblock %}

{% block input_attributes %}
  class=\"{{ layout_form_field_input_classes|trim }} {{ field.size }}\"
  {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
  {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
  {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
  {% if field.placeholder %}placeholder=\"{{ field.placeholder|t|e('html_attr') }}\"{% endif %}
  {% if autofocus %}autofocus=\"autofocus\"{% endif %}
  {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
  {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
  {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
  {% if field.autocapitalize in ['off', 'characters', 'words', 'sentences'] %}autocapitalize=\"{{ field.autocapitalize }}\"{% endif %}
  {% if field.inputmode in ['none', 'text', 'decimal', 'numeric', 'tel', 'search', 'email', 'url'] %}inputmode=\"{{ field.inputmode }}\"{% endif %}
  {% if field.tabindex %}tabindex=\"{{ field.tabindex }}\"{% endif %}
  {% if field.spellcheck in ['true', 'false'] %}spellcheck=\"{{ field.spellcheck }}\"{% endif %}
  {% if required %}required=\"required\"{% endif %}
  {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
  {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
  {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}

  {# Support key/value and .name/.value styles #}
  {% if field.attributes is defined %}
    {% for key,attribute in field.attributes %}
      {% if attribute|of_type('array') %}
        {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
      {% else %}
        {{ key }}=\"{{ attribute|e('html_attr') }}\"
      {% endif %}
    {% endfor %}
  {% endif %}

  {# Support for Custom data attributes#}
  {% if field.datasets %}
    {% for key, attribute in field.datasets %}
      data-{{ key }}=\"{{ attribute|e('html_attr') }}\"
    {% endfor %}
  {% endif %}
{% endblock %}



{% endif %}
", "forms/default/field.html.twig", "/domains1/gh43616200/public/www_root/user/plugins/form/templates/forms/default/field.html.twig");
    }
}
