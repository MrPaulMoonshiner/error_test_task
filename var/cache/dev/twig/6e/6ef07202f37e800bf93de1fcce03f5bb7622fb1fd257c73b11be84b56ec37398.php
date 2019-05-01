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

/* task/sing_in.html.twig */
class __TwigTemplate_fea07035295b782f9f30a9a1480d3086172f525d2f69bf8d5f67b6e7984e5aa8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/sing_in.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/sing_in.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "task/sing_in.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
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

                <h3>Sign in</h3>
                <form method=\"post\" action=\"#\">
                    <div class=\"row gtr-uniform\">
                        <div class=\"col-6 col-12-xsmall\">
                            <input type=\"text\" name=\"name\" id=\"name\" value=\"\" placeholder=\"Login\" />

                        </div>

                        <div class=\"col-6 col-12-xsmall\">
                            <input type=\"password\" name=\"repass\" id=\"repass\" value=\"\" placeholder=\"Password\" />

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



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/sing_in.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 4,  56 => 3,  34 => 1,);
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

                <h3>Sign in</h3>
                <form method=\"post\" action=\"#\">
                    <div class=\"row gtr-uniform\">
                        <div class=\"col-6 col-12-xsmall\">
                            <input type=\"text\" name=\"name\" id=\"name\" value=\"\" placeholder=\"Login\" />

                        </div>

                        <div class=\"col-6 col-12-xsmall\">
                            <input type=\"password\" name=\"repass\" id=\"repass\" value=\"\" placeholder=\"Password\" />

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



{% endblock %}", "task/sing_in.html.twig", "/var/www/html/TestTask/templates/task/sing_in.html.twig");
    }
}
