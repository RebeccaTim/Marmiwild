<?php

/* recipe/index.html.twig */
class __TwigTemplate_b637a001aec94c4d315c12a2f301a257fc6124d60800c941573d07ba80834d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MarmiWild/layout.html.twig", "recipe/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@MarmiWild/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_318f9186babd35369bb0afb97a21262f0bf7389bb3b2251c395082917d894788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318f9186babd35369bb0afb97a21262f0bf7389bb3b2251c395082917d894788->enter($__internal_318f9186babd35369bb0afb97a21262f0bf7389bb3b2251c395082917d894788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $__internal_ef4cde610d1090660ad8e7c341d2564dc7a56fb61874220f0c1fac6ee92662c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4cde610d1090660ad8e7c341d2564dc7a56fb61874220f0c1fac6ee92662c8->enter($__internal_ef4cde610d1090660ad8e7c341d2564dc7a56fb61874220f0c1fac6ee92662c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_318f9186babd35369bb0afb97a21262f0bf7389bb3b2251c395082917d894788->leave($__internal_318f9186babd35369bb0afb97a21262f0bf7389bb3b2251c395082917d894788_prof);

        
        $__internal_ef4cde610d1090660ad8e7c341d2564dc7a56fb61874220f0c1fac6ee92662c8->leave($__internal_ef4cde610d1090660ad8e7c341d2564dc7a56fb61874220f0c1fac6ee92662c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_635ca3792e265386cb545f9bcff7d1a4e5e5fe542f5357de1c94f17cd2c70390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635ca3792e265386cb545f9bcff7d1a4e5e5fe542f5357de1c94f17cd2c70390->enter($__internal_635ca3792e265386cb545f9bcff7d1a4e5e5fe542f5357de1c94f17cd2c70390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8d054863169407bdddf26b96e4a770349828bc5097e657bb99a557458bc39f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d054863169407bdddf26b96e4a770349828bc5097e657bb99a557458bc39f0->enter($__internal_c8d054863169407bdddf26b96e4a770349828bc5097e657bb99a557458bc39f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div id=\"search\"> <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/banner.jpg"), "html", null, true);
        echo "\"></div>

    <div id=\"create\">  <a class=\"waves-effect waves-light btn\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_new");
        echo "\">Créer une recette</a></div>

    <section class=\"main container\">
            <ul class=\"row ch-grid\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipes"] ?? $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 12
            echo "            <div class=\"col s12 l4 m4\">
                <li>
                    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_show", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"ch-item\">   
                        <div class=\"ch-info\">
                            <h3>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "name", array()), "html", null, true);
            echo "</h3>
                            <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "nbPerson", array()), "html", null, true);
            echo " personnes<span class=\"type\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "type", array()), "html", null, true);
            echo "</span></p>
                        </div>
                        ";
            // line 20
            if (($this->getAttribute($context["recipe"], "picture", array()) == null)) {
                // line 21
                echo "                            <div class=\"ch-thumb\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/default.png"), "html", null, true);
                echo ");background-position: center;background-size:cover; background-repeat:no-repeat;
                             z-index: 12;\"></div>
                        ";
            }
            // line 24
            echo "                        ";
            if (($this->getAttribute($context["recipe"], "picture", array()) != null)) {
                // line 25
                echo "                            <div class=\"ch-thumb\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "picture", array()), "html", null, true);
                echo ");background-position: center;background-size:cover; background-repeat:no-repeat;
                             z-index: 12;\"></div>
                        ";
            }
            // line 28
            echo "                    </div>
                    </a>

                </li>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </ul>
        </section>
";
        
        $__internal_c8d054863169407bdddf26b96e4a770349828bc5097e657bb99a557458bc39f0->leave($__internal_c8d054863169407bdddf26b96e4a770349828bc5097e657bb99a557458bc39f0_prof);

        
        $__internal_635ca3792e265386cb545f9bcff7d1a4e5e5fe542f5357de1c94f17cd2c70390->leave($__internal_635ca3792e265386cb545f9bcff7d1a4e5e5fe542f5357de1c94f17cd2c70390_prof);

    }

    public function getTemplateName()
    {
        return "recipe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 34,  108 => 28,  101 => 25,  98 => 24,  91 => 21,  89 => 20,  82 => 18,  78 => 17,  72 => 14,  68 => 12,  64 => 11,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@MarmiWild/layout.html.twig' %}

{% block body %}

    <div id=\"search\"> <img src=\"{{ asset('img/banner.jpg') }}\"></div>

    <div id=\"create\">  <a class=\"waves-effect waves-light btn\" href=\"{{ path ('recipe_new') }}\">Créer une recette</a></div>

    <section class=\"main container\">
            <ul class=\"row ch-grid\">
        {% for recipe in recipes %}
            <div class=\"col s12 l4 m4\">
                <li>
                    <a href=\"{{ path('recipe_show', { 'id': recipe.id }) }}\">
                        <div class=\"ch-item\">   
                        <div class=\"ch-info\">
                            <h3>{{ recipe.name }}</h3>
                            <p>{{ recipe.nbPerson }} personnes<span class=\"type\">{{ recipe.type }}</span></p>
                        </div>
                        {% if recipe.picture == NULL %}
                            <div class=\"ch-thumb\" style=\"background-image: url({{ asset('img/default.png') }});background-position: center;background-size:cover; background-repeat:no-repeat;
                             z-index: 12;\"></div>
                        {% endif %}
                        {% if recipe.picture != NULL %}
                            <div class=\"ch-thumb\" style=\"background-image: url({{ recipe.picture }});background-position: center;background-size:cover; background-repeat:no-repeat;
                             z-index: 12;\"></div>
                        {% endif %}
                    </div>
                    </a>

                </li>
                </div>
                {% endfor %}
            </ul>
        </section>
{% endblock %}
", "recipe/index.html.twig", "/var/www/html/Bdx0217PHP_Final_Checkpoint/Finale_Checkpoint/app/Resources/views/recipe/index.html.twig");
    }
}
