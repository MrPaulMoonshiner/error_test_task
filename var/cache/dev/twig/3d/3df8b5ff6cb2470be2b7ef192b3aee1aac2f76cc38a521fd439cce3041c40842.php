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

/* @SonataAdmin/CRUD/base_acl_macro.html.twig */
class __TwigTemplate_5beb93f73fa19d0f0d92f0c031a1dc73d61a1d38cba76bfdedea6c7388ff5c15 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl_macro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl_macro.html.twig"));

        // line 11
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function macro_render_form($__form__ = null, $__permissions__ = null, $__td_type__ = null, $__admin__ = null, $__admin_pool__ = null, $__object__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "permissions" => $__permissions__,
            "td_type" => $__td_type__,
            "admin" => $__admin__,
            "admin_pool" => $__admin_pool__,
            "object" => $__object__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form"));

            // line 13
            echo "    <form class=\"form-horizontal\"
          action=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 14, $this->source); })()), "generateUrl", [0 => "acl", 1 => ["id" => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 14, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 14, $this->source); })())], "method"), "uniqid" => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 14, $this->source); })()), "uniqid", []), "subclass" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", []), "get", [0 => "subclass"], "method")]], "method"), "html", null, true);
            echo "\"
          ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", []), "multipart", [])) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 16
            echo "          method=\"POST\"
            ";
            // line 17
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["admin_pool"]) || array_key_exists("admin_pool", $context) ? $context["admin_pool"] : (function () { throw new RuntimeError('Variable "admin_pool" does not exist.', 17, $this->source); })()), "getOption", [0 => "html5_validate"], "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 18
            echo "            >

        ";
            // line 20
            echo twig_include($this->env, $context, "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig");
            echo "

        <div class=\"box box-success\">
            <div class=\"body table-responsive no-padding\">
                <table class=\"table\">
                    <colgroup>
                        <col style=\"width: 100%;\"/>
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 28
                echo "                            <col/>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    </colgroup>

                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "children", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", []), "name", []) != "_token")) {
                    // line 33
                    echo "                        ";
                    if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []) == 0) || ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []) % 10) == 0))) {
                        // line 34
                        echo "                            <tr>
                                <th>";
                        // line 35
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["td_type"]) || array_key_exists("td_type", $context) ? $context["td_type"] : (function () { throw new RuntimeError('Variable "td_type" does not exist.', 35, $this->source); })()), [], "SonataAdminBundle"), "html", null, true);
                        echo "</th>
                                ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 36, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                            // line 37
                            echo "                                    <th class=\"text-right\">";
                            echo twig_escape_filter($this->env, $context["permission"], "html", null, true);
                            echo "</th>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "                            </tr>
                        ";
                    }
                    // line 41
                    echo "
                        <tr>
                            <td>
                                ";
                    // line 44
                    $context["typeChild"] = ((twig_get_attribute($this->env, $this->source, $context["child"], "role", [], "array", true, true)) ? (twig_get_attribute($this->env, $this->source, $context["child"], "role", [], "array")) : (twig_get_attribute($this->env, $this->source, $context["child"], "user", [], "array")));
                    // line 45
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["typeChild"]) || array_key_exists("typeChild", $context) ? $context["typeChild"] : (function () { throw new RuntimeError('Variable "typeChild" does not exist.', 45, $this->source); })()), "vars", []), "value", []), "html", null, true);
                    echo "
                                ";
                    // line 46
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["typeChild"]) || array_key_exists("typeChild", $context) ? $context["typeChild"] : (function () { throw new RuntimeError('Variable "typeChild" does not exist.', 46, $this->source); })()), 'widget');
                    echo "
                            </td>
                            ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 48, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                        // line 49
                        echo "                                <td class=\"text-right\">";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["child"], $context["permission"], [], "array"), 'widget', ["label" => false]);
                        echo "</td>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                        </tr>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                </table>
            </div>
        </div>

        ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "_token", []), 'row');
            echo "

        <div class=\"well well-small form-actions\">
            <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update_acl", [], "SonataAdminBundle"), "html", null, true);
            echo "\">
        </div>
    </form>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 60,  207 => 57,  201 => 53,  190 => 51,  181 => 49,  177 => 48,  172 => 46,  167 => 45,  165 => 44,  160 => 41,  156 => 39,  147 => 37,  143 => 36,  139 => 35,  136 => 34,  133 => 33,  122 => 32,  118 => 30,  111 => 28,  107 => 27,  97 => 20,  93 => 18,  89 => 17,  86 => 16,  82 => 15,  78 => 14,  75 => 13,  52 => 12,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% macro render_form(form, permissions, td_type, admin, admin_pool, object) %}
    <form class=\"form-horizontal\"
          action=\"{{ admin.generateUrl('acl', {'id': admin.id(object), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}\"
          {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
          method=\"POST\"
            {% if not admin_pool.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
            >

        {{ include('@SonataAdmin/Helper/render_form_dismissable_errors.html.twig') }}

        <div class=\"box box-success\">
            <div class=\"body table-responsive no-padding\">
                <table class=\"table\">
                    <colgroup>
                        <col style=\"width: 100%;\"/>
                        {% for permission in permissions %}
                            <col/>
                        {% endfor %}
                    </colgroup>

                    {% for child in form.children if child.vars.name != '_token' %}
                        {% if loop.index0 == 0 or loop.index0 % 10 == 0 %}
                            <tr>
                                <th>{{ td_type|trans({}, 'SonataAdminBundle') }}</th>
                                {% for permission in permissions %}
                                    <th class=\"text-right\">{{ permission }}</th>
                                {% endfor %}
                            </tr>
                        {% endif %}

                        <tr>
                            <td>
                                {% set typeChild = child['role'] is defined ? child['role'] : child['user'] %}
                                {{ typeChild.vars.value }}
                                {{ form_widget(typeChild) }}
                            </td>
                            {% for permission in permissions %}
                                <td class=\"text-right\">{{ form_widget(child[permission], { label: false }) }}</td>
                            {% endfor %}
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>

        {{ form_row(form._token) }}

        <div class=\"well well-small form-actions\">
            <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"{{ 'btn_update_acl'|trans({}, 'SonataAdminBundle') }}\">
        </div>
    </form>
{% endmacro %}
", "@SonataAdmin/CRUD/base_acl_macro.html.twig", "/var/www/html/TestTask/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_acl_macro.html.twig");
    }
}
