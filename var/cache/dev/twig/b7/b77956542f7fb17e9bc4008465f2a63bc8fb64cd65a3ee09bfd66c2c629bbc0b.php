<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SonataAdmin/CRUD/_email_link.html.twig */
class __TwigTemplate_917c7d53a7a8f97411c98fc7966967d51a98b67ece91f67fe989da3e69d1d880 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/_email_link.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/_email_link.html.twig"));

        // line 2
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "&nbsp;";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["field_description"] ?? null), "options", [], "any", false, true), "as_string", [], "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 4, $this->source); })()), "options", []), "as_string", []))) {
            // line 5
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 5, $this->source); })()), "html", null, true);
        } else {
            // line 7
            $context["parameters"] = [];
            // line 8
            echo "    ";
            $context["subject"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "subject", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "subject", []), "")) : (""));
            // line 9
            echo "    ";
            $context["body"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "body", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "body", []), "")) : (""));
            // line 10
            echo "
    ";
            // line 11
            if ( !twig_test_empty((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 11, $this->source); })()))) {
                // line 12
                echo "        ";
                $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 12, $this->source); })()), ["subject" => (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 12, $this->source); })())]);
                // line 13
                echo "    ";
            }
            // line 14
            echo "    ";
            if ( !twig_test_empty((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 14, $this->source); })()))) {
                // line 15
                echo "        ";
                $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 15, $this->source); })()), ["body" => (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 15, $this->source); })())]);
                // line 16
                echo "    ";
            }
            // line 17
            echo "
    <a href=\"mailto:";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 18, $this->source); })()), "html", null, true);
            if ((twig_length_filter($this->env, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 18, $this->source); })())) > 0)) {
                echo "?";
                echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 18, $this->source); })())), "html", null, true);
            }
            echo "\">";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })()), "html", null, true);
            // line 20
            echo "</a>";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/_email_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  88 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  50 => 7,  47 => 5,  45 => 4,  43 => 3,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{%- if value is empty -%}
    &nbsp;
{%- elseif field_description.options.as_string is defined and field_description.options.as_string -%}
    {{ value }}
{%- else -%}
    {% set parameters = {} %}
    {% set subject = field_description.options.subject|default('') %}
    {% set body = field_description.options.body|default('') %}

    {% if subject is not empty %}
        {% set parameters = parameters|merge({'subject': subject}) %}
    {% endif %}
    {% if body is not empty %}
        {% set parameters = parameters|merge({'body': body}) %}
    {% endif %}

    <a href=\"mailto:{{ value }}{% if parameters|length > 0 %}?{{- parameters|url_encode -}}{% endif %}\">
        {{- value -}}
    </a>
{%- endif -%}
", "@SonataAdmin/CRUD/_email_link.html.twig", "/var/www/html/TestTask/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/_email_link.html.twig");
    }
}
