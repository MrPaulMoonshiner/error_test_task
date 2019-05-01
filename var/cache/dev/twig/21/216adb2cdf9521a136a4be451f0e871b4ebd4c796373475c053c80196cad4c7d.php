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

/* @SonataAdmin/Core/add_block.html.twig */
class __TwigTemplate_c40185c585079695342e331dd1c225aacb530d743cd4ec30b9c303eedee2e8df extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'user_block' => [$this, 'block_user_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/add_block.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/add_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_user_block($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        $context["items_per_column"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 2, $this->source); })()), "adminPool", []), "getOption", [0 => "dropdown_number_groups_per_colums"], "method");
        // line 3
        echo "    ";
        $context["groups"] = [];
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 5, $this->source); })()), "adminPool", []), "dashboardgroups", []));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            echo "        ";
            $context["display_group"] = false;
            // line 7
            echo "
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                if (((isset($context["display_group"]) || array_key_exists("display_group", $context) ? $context["display_group"] : (function () { throw new RuntimeError('Variable "display_group" does not exist.', 8, $this->source); })()) == false)) {
                    // line 9
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["admin"], "hasRoute", [0 => "create"], "method") && twig_get_attribute($this->env, $this->source, $context["admin"], "hasAccess", [0 => "create"], "method"))) {
                        // line 10
                        echo "                ";
                        $context["display_group"] = true;
                        // line 11
                        echo "                ";
                        $context["groups"] = twig_array_merge([0 => $context["group"]], (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 11, $this->source); })()));
                        // line 12
                        echo "            ";
                    }
                    // line 13
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        $context["column_count"] = twig_round((twig_length_filter($this->env, (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 16, $this->source); })())) / (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 16, $this->source); })())), 0, "ceil");
        // line 17
        echo "
    <div class=\"dropdown-menu multi-column dropdown-add\"
        ";
        // line 19
        if (((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 19, $this->source); })()) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, ((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 19, $this->source); })()) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 20
        echo "    >
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 21, $this->source); })())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 22
            echo "            ";
            $context["display"] = (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "roles", [])) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 22, $this->source); })()), "adminPool", []), "getOption", [0 => "role_admin"], "method")));
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "roles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new RuntimeError('Variable "display" does not exist.', 23, $this->source); })())) {
                    // line 24
                    echo "                ";
                    $context["display"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted($context["role"]);
                    // line 25
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
            ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                // line 28
                echo "                ";
                $context["render_first_element"] = true;
                // line 29
                echo "            ";
            }
            // line 30
            echo "
            ";
            // line 31
            if ((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new RuntimeError('Variable "display" does not exist.', 31, $this->source); })())) {
                // line 32
                echo "                ";
                if (((isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 32, $this->source); })()) || ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []) % (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 32, $this->source); })())) == 0))) {
                    // line 33
                    echo "                    ";
                    if ((isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 33, $this->source); })())) {
                        // line 34
                        echo "                        <div class=\"container-fluid\">
                            <div class=\"row\">
                        ";
                        // line 36
                        $context["render_first_element"] = false;
                        // line 37
                        echo "                    ";
                    } else {
                        // line 38
                        echo "                        </ul>
                    ";
                    }
                    // line 40
                    echo "                    <ul class=\"dropdown-menu";
                    if (((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 40, $this->source); })()) > 1)) {
                        echo " col-md-";
                        echo twig_escape_filter($this->env, twig_round((12 / (isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 40, $this->source); })()))), "html", null, true);
                    }
                    echo "\">
                ";
                }
                // line 42
                echo "                ";
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []) % (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 42, $this->source); })())) != 0)) {
                    // line 43
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 45
                echo "                <li role=\"presentation\" class=\"dropdown-header\">
                    ";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["group"], "icon", []);
                echo "
                    ";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group"], "label", []), [], twig_get_attribute($this->env, $this->source, $context["group"], "label_catalogue", [])), "html", null, true);
                echo "
                </li>

                ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", []));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 51
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["admin"], "hasRoute", [0 => "create"], "method") && twig_get_attribute($this->env, $this->source, $context["admin"], "hasAccess", [0 => "create"], "method"))) {
                        // line 52
                        echo "                        ";
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["admin"], "subClasses", []))) {
                            // line 53
                            echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                            // line 54
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "generateUrl", [0 => "create"], "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["admin"], "label", []), [], twig_get_attribute($this->env, $this->source, $context["admin"], "translationdomain", [])), "html", null, true);
                            echo "</a>
                            </li>
                        ";
                        } else {
                            // line 57
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, $context["admin"], "subclasses", [])));
                            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                // line 58
                                echo "                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                                // line 59
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "generateUrl", [0 => "create", 1 => ["subclass" => $context["subclass"]]], "method"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["subclass"], [], twig_get_attribute($this->env, $this->source, $context["admin"], "translationdomain", [])), "html", null, true);
                                echo "</a>
                                </li>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 62
                            echo "                        ";
                        }
                        // line 63
                        echo "                    ";
                    }
                    // line 64
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", []) &&  !(isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 65, $this->source); })()))) {
                    // line 66
                    echo "                    </ul>
                    </div>
                    </div>
                ";
                }
                // line 70
                echo "            ";
            }
            // line 71
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  305 => 72,  291 => 71,  288 => 70,  282 => 66,  279 => 65,  273 => 64,  270 => 63,  267 => 62,  256 => 59,  253 => 58,  248 => 57,  240 => 54,  237 => 53,  234 => 52,  231 => 51,  227 => 50,  221 => 47,  217 => 46,  214 => 45,  210 => 43,  207 => 42,  198 => 40,  194 => 38,  191 => 37,  189 => 36,  185 => 34,  182 => 33,  179 => 32,  177 => 31,  174 => 30,  171 => 29,  168 => 28,  166 => 27,  163 => 26,  156 => 25,  153 => 24,  147 => 23,  144 => 22,  127 => 21,  124 => 20,  118 => 19,  114 => 17,  112 => 16,  109 => 15,  103 => 14,  96 => 13,  93 => 12,  90 => 11,  87 => 10,  84 => 9,  79 => 8,  76 => 7,  73 => 6,  69 => 5,  66 => 4,  63 => 3,  60 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block user_block %}
    {% set items_per_column = sonata_admin.adminPool.getOption('dropdown_number_groups_per_colums') %}
    {% set groups = [] %}

    {% for group in sonata_admin.adminPool.dashboardgroups %}
        {% set display_group = false %}

        {% for admin in group.items if display_group == false %}
            {% if admin.hasRoute('create') and admin.hasAccess('create') %}
                {% set display_group = true %}
                {% set groups = [group]|merge(groups) %}
            {% endif %}
        {% endfor %}
    {% endfor %}

    {% set column_count = (groups|length / items_per_column)|round(0, 'ceil') %}

    <div class=\"dropdown-menu multi-column dropdown-add\"
        {% if column_count > 1 %}style=\"width: {{ column_count*140 }}px;\"{% endif %}
    >
        {% for group in groups|reverse %}
            {% set display = (group.roles is empty or is_granted(sonata_admin.adminPool.getOption('role_admin')) ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if loop.first %}
                {% set render_first_element = true %}
            {% endif %}

            {% if display %}
                {% if render_first_element or loop.index0 % items_per_column == 0 %}
                    {% if render_first_element %}
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                        {% set render_first_element = false %}
                    {% else %}
                        </ul>
                    {% endif %}
                    <ul class=\"dropdown-menu{% if column_count > 1 %} col-md-{{ (12/column_count)|round }}{% endif %}\">
                {% endif %}
                {% if loop.index0 % items_per_column != 0 %}
                    <li role=\"presentation\" class=\"divider\"></li>
                {% endif %}
                <li role=\"presentation\" class=\"dropdown-header\">
                    {{ group.icon|raw }}
                    {{ group.label|trans({}, group.label_catalogue) }}
                </li>

                {% for admin in group.items %}
                    {% if admin.hasRoute('create') and admin.hasAccess('create') %}
                        {% if admin.subClasses is empty %}
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ admin.generateUrl('create')}}\">{{ admin.label|trans({}, admin.translationdomain) }}</a>
                            </li>
                        {% else %}
                            {% for subclass in admin.subclasses|keys %}
                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">{{ subclass|trans({}, admin.translationdomain) }}</a>
                                </li>
                            {% endfor %}
                        {% endif %}
                    {% endif %}
                {% endfor %}
                {% if loop.last and not render_first_element %}
                    </ul>
                    </div>
                    </div>
                {% endif %}
            {% endif %}
        {% endfor %}
    </div>
{% endblock %}
", "@SonataAdmin/Core/add_block.html.twig", "/var/www/html/TestTask/vendor/sonata-project/admin-bundle/src/Resources/views/Core/add_block.html.twig");
    }
}
