<?php

/* recipe/show.html.twig */
class __TwigTemplate_0d1acbb85e86a516a12a4cc3d3babd6077a7371bd5f05b3495c7e0a8d461b185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MarmiWild/layout.html.twig", "recipe/show.html.twig", 1);
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
        $__internal_ffb5a619094d6eb4c8a8facc90c06ac179882039c4a61e9722955f95a25addb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb5a619094d6eb4c8a8facc90c06ac179882039c4a61e9722955f95a25addb0->enter($__internal_ffb5a619094d6eb4c8a8facc90c06ac179882039c4a61e9722955f95a25addb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_6c1f53939a09fc14f958a8b90f6e6c92ad70ff59f35615911b701ad273dcbc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1f53939a09fc14f958a8b90f6e6c92ad70ff59f35615911b701ad273dcbc4e->enter($__internal_6c1f53939a09fc14f958a8b90f6e6c92ad70ff59f35615911b701ad273dcbc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffb5a619094d6eb4c8a8facc90c06ac179882039c4a61e9722955f95a25addb0->leave($__internal_ffb5a619094d6eb4c8a8facc90c06ac179882039c4a61e9722955f95a25addb0_prof);

        
        $__internal_6c1f53939a09fc14f958a8b90f6e6c92ad70ff59f35615911b701ad273dcbc4e->leave($__internal_6c1f53939a09fc14f958a8b90f6e6c92ad70ff59f35615911b701ad273dcbc4e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40e7e5f5c889927222dbd3f59d757e8690828e9d1c8f60fbb633813dab1bda98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e7e5f5c889927222dbd3f59d757e8690828e9d1c8f60fbb633813dab1bda98->enter($__internal_40e7e5f5c889927222dbd3f59d757e8690828e9d1c8f60fbb633813dab1bda98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_113102357c295b2f6ffd135654d591971f3f70b84fa26428c0b19ae6adc1e67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113102357c295b2f6ffd135654d591971f3f70b84fa26428c0b19ae6adc1e67f->enter($__internal_113102357c295b2f6ffd135654d591971f3f70b84fa26428c0b19ae6adc1e67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "      <a class=\"back\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_index");
        echo "\"><i class=\"fa fa-arrow-left fa-2x\" aria-hidden=\"true\"></i>
    </a>

<div class=\"container\">
    <div id=\"recipe_header\" class=\"row\">
        <img class=\"image_recipe col s12 m5 l5\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "picture", array()), "html", null, true);
        echo "\">
        <div id=\"recipe_infos\" class=\"col s12 m7 l7\">
            <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "name", array()), "html", null, true);
        echo "</h1> 
            <div class=\"row\">
                <div class=\"col s12 m6 l6\">
                    <p><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "type", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col s12 m6 l6\">
                    <p> <i class=\"fa fa-male\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "nbPerson", array()), "html", null, true);
        echo " personne(s)</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col s12 m6 l6\">
                    <p><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "difficulty", array()), "html", null, true);
        echo "/4</p>
                </div>
                <div class=\"col s12 m6 l6\">
                    <p><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "duration", array()), "html", null, true);
        echo " minutes</p>
                </div>
            </div>

        </div>
    </div>
    <div id=\"recipe_body\" class=\"row\">
        <div id=\"recipe_instruc\" class=\"col s12 offset-m1 m10 offset-l1 l10\">
            <p>";
        // line 33
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "instruction", array()), "html", null, true));
        echo "</p>
        </div>";
        // line 38
        echo "    </div>

    <div class=\"row\">
        <div class=\"col s12 l6 modif\">
                <a class=\"waves-effect waves-light btn\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\">Modifier</a>
        </div>
        <div class=\"col s12 l6 del\">
                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input class=\"waves-effect waves-light btn\" type=\"submit\" value=\"Supprimer\">
                ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_113102357c295b2f6ffd135654d591971f3f70b84fa26428c0b19ae6adc1e67f->leave($__internal_113102357c295b2f6ffd135654d591971f3f70b84fa26428c0b19ae6adc1e67f_prof);

        
        $__internal_40e7e5f5c889927222dbd3f59d757e8690828e9d1c8f60fbb633813dab1bda98->leave($__internal_40e7e5f5c889927222dbd3f59d757e8690828e9d1c8f60fbb633813dab1bda98_prof);

    }

    public function getTemplateName()
    {
        return "recipe/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 47,  116 => 45,  110 => 42,  104 => 38,  100 => 33,  89 => 25,  83 => 22,  75 => 17,  69 => 14,  63 => 11,  58 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
      <a class=\"back\" href=\"{{ path('recipe_index') }}\"><i class=\"fa fa-arrow-left fa-2x\" aria-hidden=\"true\"></i>
    </a>

<div class=\"container\">
    <div id=\"recipe_header\" class=\"row\">
        <img class=\"image_recipe col s12 m5 l5\" src=\"{{ recipe.picture }}\">
        <div id=\"recipe_infos\" class=\"col s12 m7 l7\">
            <h1>{{ recipe.name }}</h1> 
            <div class=\"row\">
                <div class=\"col s12 m6 l6\">
                    <p><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> {{ recipe.type }}</p>
                </div>
                <div class=\"col s12 m6 l6\">
                    <p> <i class=\"fa fa-male\" aria-hidden=\"true\"></i> {{ recipe.nbPerson }} personne(s)</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col s12 m6 l6\">
                    <p><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i> {{ recipe.difficulty }}/4</p>
                </div>
                <div class=\"col s12 m6 l6\">
                    <p><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> {{ recipe.duration }} minutes</p>
                </div>
            </div>

        </div>
    </div>
    <div id=\"recipe_body\" class=\"row\">
        <div id=\"recipe_instruc\" class=\"col s12 offset-m1 m10 offset-l1 l10\">
            <p>{{ recipe.instruction | nl2br }}</p>
        </div>{# 
        <div id=\"recipe_ingredient\" class=\"col s12 offset-m1 m10 offset-l1 l10\">
            <p></p>
        </div> #}
    </div>

    <div class=\"row\">
        <div class=\"col s12 l6 modif\">
                <a class=\"waves-effect waves-light btn\" href=\"{{ path('recipe_edit', { 'id': recipe.id }) }}\">Modifier</a>
        </div>
        <div class=\"col s12 l6 del\">
                {{ form_start(delete_form) }}
                    <input class=\"waves-effect waves-light btn\" type=\"submit\" value=\"Supprimer\">
                {{ form_end(delete_form) }}
        </div>
    </div>
</div>
{% endblock %}
", "recipe/show.html.twig", "/var/www/html/Bdx0217PHP_Final_Checkpoint/Finale_Checkpoint/app/Resources/views/recipe/show.html.twig");
    }
}
