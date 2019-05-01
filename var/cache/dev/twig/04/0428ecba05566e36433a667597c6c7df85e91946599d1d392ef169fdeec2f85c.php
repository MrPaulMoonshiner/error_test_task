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

/* @SonataDatagrid/Search/pager.html.twig */
class __TwigTemplate_efec5bdd1cccc4d0626920c8be231e9afe4e84448570a0587b6652c6af26f395 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pager_links' => [$this, 'block_pager_links'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataDatagrid/Search/pager.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataDatagrid/Search/pager.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('pager_links', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_pager_links($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_links"));

        // line 13
        echo "    <ul class=\"pagination";
        if ((isset($context["pager_class"]) || array_key_exists("pager_class", $context))) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["pager_class"]) || array_key_exists("pager_class", $context) ? $context["pager_class"] : (function () { throw new RuntimeError('Variable "pager_class" does not exist.', 13, $this->source); })()), "html", null, true);
        }
        echo "\">
        ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 14, $this->source); })()), "pager", []), "page", []) > 2)) {
            // line 15
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", []), "query", []), "all", []), ["page" => 1])), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_first_pager", [], "SonataDatagridBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 18, $this->source); })()), "pager", []), "page", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 18, $this->source); })()), "pager", []), "previouspage", []))) {
            // line 19
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", []), "query", []), "all", []), ["page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 19, $this->source); })()), "pager", []), "previouspage", [])])), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_previous_pager", [], "SonataDatagridBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
        ";
        }
        // line 21
        echo "
        ";
        // line 23
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 23, $this->source); })()), "pager", []), "getLinks", [0 => 5], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 24
            echo "            ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 24, $this->source); })()), "pager", []), "page", []))) {
                // line 25
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", []), "query", []), "all", []), ["page" => $context["page"]])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 27
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", []), "query", []), "all", []), ["page" => $context["page"]])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
            ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 31, $this->source); })()), "pager", []), "page", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 31, $this->source); })()), "pager", []), "nextpage", []))) {
            // line 32
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", []), "query", []), "all", []), ["page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 32, $this->source); })()), "pager", []), "nextpage", [])])), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_next_pager", [], "SonataDatagridBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
        ";
        }
        // line 34
        echo "
        ";
        // line 35
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 35, $this->source); })()), "pager", []), "page", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 35, $this->source); })()), "pager", []), "lastpage", [])) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 35, $this->source); })()), "pager", []), "lastpage", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 35, $this->source); })()), "pager", []), "nextpage", [])))) {
            // line 36
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", []), "query", []), "all", []), ["page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 36, $this->source); })()), "pager", []), "lastpage", [])])), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_last_pager", [], "SonataDatagridBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
        ";
        }
        // line 38
        echo "    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDatagrid/Search/pager.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  153 => 38,  145 => 36,  143 => 35,  140 => 34,  132 => 32,  130 => 31,  127 => 30,  121 => 29,  113 => 27,  105 => 25,  102 => 24,  97 => 23,  94 => 21,  86 => 19,  84 => 18,  81 => 17,  73 => 15,  71 => 14,  63 => 13,  45 => 12,  42 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block pager_links %}
    <ul class=\"pagination{% if pager_class is defined %} {{ pager_class }}{% endif %}\">
        {% if datagrid.pager.page > 2  %}
            <li><a href=\"{{ url(app.request.attributes.get('_route'), app.request.query.all|merge({page: 1})) }}\" title=\"{{ 'link_first_pager'|trans({}, 'SonataDatagridBundle') }}\">&laquo;</a></li>
        {% endif %}

        {% if datagrid.pager.page != datagrid.pager.previouspage %}
            <li><a href=\"{{ url(app.request.attributes.get('_route'), app.request.query.all|merge({page: datagrid.pager.previouspage})) }}\" title=\"{{ 'link_previous_pager'|trans({}, 'SonataDatagridBundle') }}\">&lsaquo;</a></li>
        {% endif %}

        {# Set the number of pages to display in the pager #}
        {% for page in datagrid.pager.getLinks(5) %}
            {% if page == datagrid.pager.page %}
                <li class=\"active\"><a href=\"{{ url(app.request.attributes.get('_route'), app.request.query.all|merge({page: page})) }}\">{{ page }}</a></li>
            {% else %}
                <li><a href=\"{{ url(app.request.attributes.get('_route'), app.request.query.all|merge({page: page})) }}\">{{ page }}</a></li>
            {% endif %}
        {% endfor %}

        {% if datagrid.pager.page != datagrid.pager.nextpage %}
            <li><a href=\"{{ url(app.request.attributes.get('_route'), app.request.query.all|merge({page: datagrid.pager.nextpage})) }}\" title=\"{{ 'link_next_pager'|trans({}, 'SonataDatagridBundle') }}\">&rsaquo;</a></li>
        {% endif %}

        {% if datagrid.pager.page != datagrid.pager.lastpage and datagrid.pager.lastpage != datagrid.pager.nextpage %}
            <li><a href=\"{{ url(app.request.attributes.get('_route'), app.request.query.all|merge({page: datagrid.pager.lastpage})) }}\" title=\"{{ 'link_last_pager'|trans({}, 'SonataDatagridBundle') }}\">&raquo;</a></li>
        {% endif %}
    </ul>
{% endblock %}", "@SonataDatagrid/Search/pager.html.twig", "/var/www/html/TestTask/vendor/sonata-project/datagrid-bundle/src/Resources/views/Search/pager.html.twig");
    }
}
