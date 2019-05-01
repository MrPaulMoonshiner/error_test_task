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

/* task/sing_up.html.twig */
class __TwigTemplate_4a23b4a5557bc01874404487863976333d9d57044ffc87fd63855f60b03152b3 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/sing_up.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/sing_up.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "task/sing_up.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<!-- Highlights -->
<section class=\"wrapper\">
    <div class=\"inner\">
        <header class=\"special\">
            <h2>Sem turpis amet semper</h2>
            <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
        </header>
        <div class=\"highlights\">
            <section id=\"main\" class=\"wrapper\">

                <h3>Sign up</h3>
                <form method=\"post\" action=\"#\">
                    <div class=\"row gtr-uniform\">
                        <div class=\"col-6 col-12-xsmall\">
                            <input type=\"text\" name=\"name\" id=\"name\" value=\"\" placeholder=\"Login\" />

                                <br />

                            <input type=\"email\" name=\"email\" id=\"email\" value=\"\" placeholder=\"E-mail\" />
                        </div>

                        <div class=\"col-6 col-12-xsmall\">
                            <input type=\"password\" name=\"repass\" id=\"repass\" value=\"\" placeholder=\"Password\" />

                                <br />

                            <input type=\"password\" name=\"pass\" id=\"pass\" value=\"\" placeholder=\"Check Password\" />
                        </div>

                        <div class=\"col-12\">
                            <ul class=\"actions\">
                                <li><input type=\"submit\" value=\"Go!\" class=\"primary\" /></li>
                            </ul>
                        </div>
                    </div>
                </form>

            </section>
        </div>
    </div>
</section>

s



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/sing_up.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  56 => 7,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}





{% block body %}

<!-- Highlights -->
<section class=\"wrapper\">
    <div class=\"inner\">
        <header class=\"special\">
            <h2>Sem turpis amet semper</h2>
            <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
        </header>
        <div class=\"highlights\">
            <section id=\"main\" class=\"wrapper\">

                <h3>Sign up</h3>
                <form method=\"post\" action=\"#\">
                    <div class=\"row gtr-uniform\">
                        <div class=\"col-6 col-12-xsmall\">
                            <input type=\"text\" name=\"name\" id=\"name\" value=\"\" placeholder=\"Login\" />

                                <br />

                            <input type=\"email\" name=\"email\" id=\"email\" value=\"\" placeholder=\"E-mail\" />
                        </div>

                        <div class=\"col-6 col-12-xsmall\">
                            <input type=\"password\" name=\"repass\" id=\"repass\" value=\"\" placeholder=\"Password\" />

                                <br />

                            <input type=\"password\" name=\"pass\" id=\"pass\" value=\"\" placeholder=\"Check Password\" />
                        </div>

                        <div class=\"col-12\">
                            <ul class=\"actions\">
                                <li><input type=\"submit\" value=\"Go!\" class=\"primary\" /></li>
                            </ul>
                        </div>
                    </div>
                </form>

            </section>
        </div>
    </div>
</section>

s



{% endblock %}", "task/sing_up.html.twig", "/var/www/html/TestTask/templates/task/sing_up.html.twig");
    }
}
