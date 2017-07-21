<?php

/* recipe/new.html.twig */
class __TwigTemplate_28ff7de4eb3503269cdeea7e96c629dd0de70b73e533cb645e905f983ce95382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MarmiWild/layout.html.twig", "recipe/new.html.twig", 1);
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
        $__internal_a1afddf8f29349435fdebbedea0352d1fefb06b67c2b73e6f56e586fd55d718c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1afddf8f29349435fdebbedea0352d1fefb06b67c2b73e6f56e586fd55d718c->enter($__internal_a1afddf8f29349435fdebbedea0352d1fefb06b67c2b73e6f56e586fd55d718c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $__internal_6813710dd181ef03d475191968b53c9613d66af2841253a36e37dcc4356826d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6813710dd181ef03d475191968b53c9613d66af2841253a36e37dcc4356826d4->enter($__internal_6813710dd181ef03d475191968b53c9613d66af2841253a36e37dcc4356826d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1afddf8f29349435fdebbedea0352d1fefb06b67c2b73e6f56e586fd55d718c->leave($__internal_a1afddf8f29349435fdebbedea0352d1fefb06b67c2b73e6f56e586fd55d718c_prof);

        
        $__internal_6813710dd181ef03d475191968b53c9613d66af2841253a36e37dcc4356826d4->leave($__internal_6813710dd181ef03d475191968b53c9613d66af2841253a36e37dcc4356826d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09ee9b1fce62c2dc2986630ce3bc73735d48c78d484256ed1ea3037d06f02fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ee9b1fce62c2dc2986630ce3bc73735d48c78d484256ed1ea3037d06f02fca->enter($__internal_09ee9b1fce62c2dc2986630ce3bc73735d48c78d484256ed1ea3037d06f02fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0e20da97c31bc5c7f2ce053ade4d1d20bac077d4c032ee5ebdfda7e18972ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e20da97c31bc5c7f2ce053ade4d1d20bac077d4c032ee5ebdfda7e18972ec4->enter($__internal_e0e20da97c31bc5c7f2ce053ade4d1d20bac077d4c032ee5ebdfda7e18972ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <a class=\"back\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_index");
        echo "\"><i class=\"fa fa-arrow-left fa-2x\" aria-hidden=\"true\"></i>
</a>

    <div class=\"container\">
    <h2>Créez votre recette</h2>

    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"input-field col s12 l3\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
        </div>   
         <div class=\"input-field col s12 l3\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbPerson", array()), 'widget');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbPerson", array()), 'label');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbPerson", array()), 'errors');
        echo "
    </div>    
    <div class=\"input-field col s12 l3\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "duration", array()), 'widget');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "duration", array()), 'label');
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "duration", array()), 'errors');
        echo "
    </div>    
    <div class=\"input-field col s12 l3\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "difficulty", array()), 'widget');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "difficulty", array()), 'label');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "difficulty", array()), 'errors');
        echo "
    </div>    
    <div class=\"input-field col s12 l3\">
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
    </div>    
    <div class=\"input-field col s12 l3\" >
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "picture", array()), 'widget');
        echo "
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "picture", array()), 'label');
        echo "
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "picture", array()), 'errors');
        echo "
    </div>
    <div class=\"input-field col s12 l4\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valider", array()), 'row', array("attr" => array("class" => "btn waves-effect waves-light")));
        echo "
    </div>
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
";
        
        $__internal_e0e20da97c31bc5c7f2ce053ade4d1d20bac077d4c032ee5ebdfda7e18972ec4->leave($__internal_e0e20da97c31bc5c7f2ce053ade4d1d20bac077d4c032ee5ebdfda7e18972ec4_prof);

        
        $__internal_09ee9b1fce62c2dc2986630ce3bc73735d48c78d484256ed1ea3037d06f02fca->leave($__internal_09ee9b1fce62c2dc2986630ce3bc73735d48c78d484256ed1ea3037d06f02fca_prof);

    }

    public function getTemplateName()
    {
        return "recipe/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  144 => 41,  138 => 38,  134 => 37,  130 => 36,  124 => 33,  120 => 32,  114 => 29,  110 => 28,  106 => 27,  100 => 24,  96 => 23,  92 => 22,  86 => 19,  82 => 18,  78 => 17,  72 => 14,  68 => 13,  64 => 12,  59 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Créez votre recette</h2>

    {{ form_start(form) }}
        <div class=\"input-field col s12 l3\">
            {{ form_widget(form.name) }}
            {{ form_label(form.name) }}
            {{ form_errors(form.name) }}
        </div>   
         <div class=\"input-field col s12 l3\">
        {{ form_widget(form.nbPerson) }}
        {{ form_label(form.nbPerson) }}
        {{ form_errors(form.nbPerson) }}
    </div>    
    <div class=\"input-field col s12 l3\">
        {{ form_widget(form.duration) }}
        {{ form_label(form.duration) }}
        {{ form_errors(form.duration) }}
    </div>    
    <div class=\"input-field col s12 l3\">
        {{ form_widget(form.difficulty) }}
        {{ form_label(form.difficulty) }}
        {{ form_errors(form.difficulty) }}
    </div>    
    <div class=\"input-field col s12 l3\">
        {{ form_widget(form.type) }}
        {{ form_errors(form.type) }}
    </div>    
    <div class=\"input-field col s12 l3\" >
        {{ form_widget(form.picture) }}
        {{ form_label(form.picture) }}
        {{ form_errors(form.picture) }}
    </div>
    <div class=\"input-field col s12 l4\">
        {{ form_row(form.valider, {'attr':{ 'class': 'btn waves-effect waves-light'}}) }}
    </div>
        {{ form_end(form) }}
        </div>
{% endblock %}
", "recipe/new.html.twig", "/var/www/html/Bdx0217PHP_Final_Checkpoint/Finale_Checkpoint/app/Resources/views/recipe/new.html.twig");
    }
}
