<?php

/* recipe/edit.html.twig */
class __TwigTemplate_a0d7f069bac4fa6dfc0bf7244a1c62f088ffbc08d12e095c23b021e8cd543aaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MarmiWild/layout.html.twig", "recipe/edit.html.twig", 1);
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
        $__internal_44c0869adba189252bbb26357e8ff77a5bc330b3e16673d088e60bae591b92ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c0869adba189252bbb26357e8ff77a5bc330b3e16673d088e60bae591b92ce->enter($__internal_44c0869adba189252bbb26357e8ff77a5bc330b3e16673d088e60bae591b92ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/edit.html.twig"));

        $__internal_89d45fa0131a45d5d68460169ed710a31c6f0a18c03ec81de80721dcb4129539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d45fa0131a45d5d68460169ed710a31c6f0a18c03ec81de80721dcb4129539->enter($__internal_89d45fa0131a45d5d68460169ed710a31c6f0a18c03ec81de80721dcb4129539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44c0869adba189252bbb26357e8ff77a5bc330b3e16673d088e60bae591b92ce->leave($__internal_44c0869adba189252bbb26357e8ff77a5bc330b3e16673d088e60bae591b92ce_prof);

        
        $__internal_89d45fa0131a45d5d68460169ed710a31c6f0a18c03ec81de80721dcb4129539->leave($__internal_89d45fa0131a45d5d68460169ed710a31c6f0a18c03ec81de80721dcb4129539_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f8403addfff567831728340e1c48c7e963e0bdab1a2e40f127bcbb6788a019b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8403addfff567831728340e1c48c7e963e0bdab1a2e40f127bcbb6788a019b->enter($__internal_6f8403addfff567831728340e1c48c7e963e0bdab1a2e40f127bcbb6788a019b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_726d0262caa7b5ba67355032f1d1fd877f7eb18faa35122348d78b6f09f2cd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726d0262caa7b5ba67355032f1d1fd877f7eb18faa35122348d78b6f09f2cd3a->enter($__internal_726d0262caa7b5ba67355032f1d1fd877f7eb18faa35122348d78b6f09f2cd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  

    <a class=\"back\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_show", array("id" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-arrow-left fa-2x\" aria-hidden=\"true\"></i>
</a>

    <div class=\"container\">
    <h2>Modifiez votre recette</h2>


    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "        
    <div class=\"input-field col s12 l3\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "name", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "name", array()), 'errors');
        echo "
        </div>   
         <div class=\"input-field col s12 l3\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nbPerson", array()), 'widget');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nbPerson", array()), 'label');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nbPerson", array()), 'errors');
        echo "
    </div>    
    <div class=\"input-field col s12 l3\">
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "duration", array()), 'widget');
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "duration", array()), 'label');
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "duration", array()), 'errors');
        echo "
    </div>    
    <div class=\"input-field col s12 l3\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "difficulty", array()), 'widget');
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "difficulty", array()), 'label');
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "difficulty", array()), 'errors');
        echo "
    </div>    
    <div class=\"input-field col s12 l3\">
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "type", array()), 'widget');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "type", array()), 'errors');
        echo "
    </div>    
    <div class=\"input-field col s12 l3\" >
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "picture", array()), 'widget');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "picture", array()), 'label');
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "picture", array()), 'errors');
        echo "
    </div>
    <div class=\"input-field col s12 l4\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "valider", array()), 'row', array("attr" => array("class" => "btn waves-effect waves-light")));
        echo "
    </div>
    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
</div>
";
        
        $__internal_726d0262caa7b5ba67355032f1d1fd877f7eb18faa35122348d78b6f09f2cd3a->leave($__internal_726d0262caa7b5ba67355032f1d1fd877f7eb18faa35122348d78b6f09f2cd3a_prof);

        
        $__internal_6f8403addfff567831728340e1c48c7e963e0bdab1a2e40f127bcbb6788a019b->leave($__internal_6f8403addfff567831728340e1c48c7e963e0bdab1a2e40f127bcbb6788a019b_prof);

    }

    public function getTemplateName()
    {
        return "recipe/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 45,  147 => 43,  141 => 40,  137 => 39,  133 => 38,  127 => 35,  123 => 34,  117 => 31,  113 => 30,  109 => 29,  103 => 26,  99 => 25,  95 => 24,  89 => 21,  85 => 20,  81 => 19,  75 => 16,  71 => 15,  67 => 14,  62 => 12,  52 => 5,  40 => 3,  11 => 1,);
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

    <a class=\"back\" href=\"{{ path('recipe_show', { 'id': recipe.id }) }}\"><i class=\"fa fa-arrow-left fa-2x\" aria-hidden=\"true\"></i>
</a>

    <div class=\"container\">
    <h2>Modifiez votre recette</h2>


    {{ form_start(edit_form) }}        
    <div class=\"input-field col s12 l3\">
            {{ form_widget(edit_form.name) }}
            {{ form_label(edit_form.name) }}
            {{ form_errors(edit_form.name) }}
        </div>   
         <div class=\"input-field col s12 l3\">
        {{ form_widget(edit_form.nbPerson) }}
        {{ form_label(edit_form.nbPerson) }}
        {{ form_errors(edit_form.nbPerson) }}
    </div>    
    <div class=\"input-field col s12 l3\">
        {{ form_widget(edit_form.duration) }}
        {{ form_label(edit_form.duration) }}
        {{ form_errors(edit_form.duration) }}
    </div>    
    <div class=\"input-field col s12 l3\">
        {{ form_widget(edit_form.difficulty) }}
        {{ form_label(edit_form.difficulty) }}
        {{ form_errors(edit_form.difficulty) }}
    </div>    
    <div class=\"input-field col s12 l3\">
        {{ form_widget(edit_form.type) }}
        {{ form_errors(edit_form.type) }}
    </div>    
    <div class=\"input-field col s12 l3\" >
        {{ form_widget(edit_form.picture) }}
        {{ form_label(edit_form.picture) }}
        {{ form_errors(edit_form.picture) }}
    </div>
    <div class=\"input-field col s12 l4\">
        {{ form_row(edit_form.valider, {'attr':{ 'class': 'btn waves-effect waves-light'}}) }}
    </div>
    {{ form_end(edit_form) }}
</div>
{% endblock %}
", "recipe/edit.html.twig", "/var/www/html/Bdx0217PHP_Final_Checkpoint/Finale_Checkpoint/app/Resources/views/recipe/edit.html.twig");
    }
}
