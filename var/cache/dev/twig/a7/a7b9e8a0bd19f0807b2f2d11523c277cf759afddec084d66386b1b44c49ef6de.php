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

/* @SonataAdmin/CRUD/list_url.html.twig */
class __TwigTemplate_a933641ab4aa41588f5c57c002d5d275ee4c36de9f0cf8a212fb6160e1684966 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("base_list_field", twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 12, $this->source); })()), "code", [])), "@SonataAdmin/CRUD/list_url.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_url.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_url.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_field($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "        &nbsp;
    ";
        } else {
            // line 19
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "url", [], "any", true, true)) {
                // line 20
                echo "            ";
                // line 21
                echo "            ";
                $context["url_address"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 21, $this->source); })()), "options", []), "url", []);
                // line 22
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "route", [], "any", true, true) && !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 22, $this->source); })()), "options", []), "route", []), "name", []), [0 => "edit", 1 => "show"]))) {
                // line 23
                echo "            ";
                // line 24
                echo "            ";
                $context["parameters"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "route", [], "any", false, true), "parameters", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "route", [], "any", false, true), "parameters", []), [])) : ([]));
                // line 25
                echo "
            ";
                // line 27
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "route", [], "any", false, true), "identifier_parameter_name", [], "any", true, true)) {
                    // line 28
                    echo "                ";
                    $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 28, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 28, $this->source); })()), "options", []), "route", []), "identifier_parameter_name", []) => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 28, $this->source); })()), "normalizedidentifier", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 28, $this->source); })())], "method")]);
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "
            ";
                // line 31
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "route", [], "any", false, true), "absolute", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "route", [], "any", false, true), "absolute", []), false)) : (false))) {
                    // line 32
                    echo "                ";
                    $context["url_address"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 32, $this->source); })()), "options", []), "route", []), "name", []), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 32, $this->source); })()));
                    // line 33
                    echo "            ";
                } else {
                    // line 34
                    echo "                ";
                    $context["url_address"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 34, $this->source); })()), "options", []), "route", []), "name", []), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 34, $this->source); })()));
                    // line 35
                    echo "            ";
                }
                // line 36
                echo "        ";
            } else {
                // line 37
                echo "            ";
                // line 38
                echo "            ";
                $context["url_address"] = (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 38, $this->source); })());
                // line 39
                echo "        ";
            }
            // line 40
            echo "
        ";
            // line 41
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "hide_protocol", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "hide_protocol", []), false)) : (false))) {
                // line 42
                echo "            ";
                $context["value"] = twig_replace_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 42, $this->source); })()), ["http://" => "", "https://" => ""]);
                // line 43
                echo "        ";
            }
            // line 44
            echo "
        <a
            href=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["url_address"]) || array_key_exists("url_address", $context) ? $context["url_address"] : (function () { throw new RuntimeError('Variable "url_address" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "\"";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "attributes", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "attributes", []), [])) : ([])));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 48
                echo "                ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html_attr");
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo ">";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 51, $this->source); })()), "html", null, true);
            // line 52
            echo "</a>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 52,  163 => 51,  161 => 50,  151 => 48,  147 => 47,  144 => 46,  140 => 44,  137 => 43,  134 => 42,  132 => 41,  129 => 40,  126 => 39,  123 => 38,  121 => 37,  118 => 36,  115 => 35,  112 => 34,  109 => 33,  106 => 32,  104 => 31,  101 => 30,  98 => 29,  95 => 28,  92 => 27,  89 => 25,  86 => 24,  84 => 23,  81 => 22,  78 => 21,  76 => 20,  73 => 19,  69 => 17,  66 => 16,  64 => 15,  55 => 14,  34 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends get_admin_template('base_list_field', admin.code) %}

{% block field %}
{% spaceless %}
    {% if value is empty %}
        &nbsp;
    {% else %}
        {% if field_description.options.url is defined %}
            {# target url is string #}
            {% set url_address = field_description.options.url %}
        {% elseif field_description.options.route is defined and field_description.options.route.name not in ['edit', 'show'] %}
            {# target url is Symfony route #}
            {% set parameters = field_description.options.route.parameters|default([]) %}

            {# route with paramter related to object ID #}
            {% if field_description.options.route.identifier_parameter_name is defined %}
                {% set parameters = parameters|merge({(field_description.options.route.identifier_parameter_name):(admin.normalizedidentifier(object))}) %}
            {% endif %}

            {% if field_description.options.route.absolute|default(false) %}
                {% set url_address = url(field_description.options.route.name, parameters) %}
            {% else %}
                {% set url_address = path(field_description.options.route.name, parameters) %}
            {% endif %}
        {% else %}
            {# value is url #}
            {% set url_address = value %}
        {% endif %}

        {% if field_description.options.hide_protocol|default(false) %}
            {% set value = value|replace({'http://': '', 'https://': ''}) %}
        {% endif %}

        <a
            href=\"{{ url_address }}\"
            {%- for attribute, value in field_description.options.attributes|default([]) %}
                {{ attribute }}=\"{{ value|escape('html_attr') }}\"
            {%- endfor -%}
        >
            {{- value -}}
        </a>
    {% endif %}
{% endspaceless %}
{% endblock %}
", "@SonataAdmin/CRUD/list_url.html.twig", "/var/www/html/TestTask/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_url.html.twig");
    }
}
