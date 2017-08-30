<?php

/* offer/new.html.twig */
class __TwigTemplate_daf02308eadc559d7a6fe891b112d7ef14943828836a13b17411d9aefce2d161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "offer/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4ed8ae4f84ad69e2e8158f510b1056eb1541c1553681584b076e24797da80a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ed8ae4f84ad69e2e8158f510b1056eb1541c1553681584b076e24797da80a5->enter($__internal_d4ed8ae4f84ad69e2e8158f510b1056eb1541c1553681584b076e24797da80a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/new.html.twig"));

        $__internal_0d9ff4d2e266c52137f106d9781e2d79e032a794a799678e1d1d444d9fde2bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9ff4d2e266c52137f106d9781e2d79e032a794a799678e1d1d444d9fde2bab->enter($__internal_0d9ff4d2e266c52137f106d9781e2d79e032a794a799678e1d1d444d9fde2bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4ed8ae4f84ad69e2e8158f510b1056eb1541c1553681584b076e24797da80a5->leave($__internal_d4ed8ae4f84ad69e2e8158f510b1056eb1541c1553681584b076e24797da80a5_prof);

        
        $__internal_0d9ff4d2e266c52137f106d9781e2d79e032a794a799678e1d1d444d9fde2bab->leave($__internal_0d9ff4d2e266c52137f106d9781e2d79e032a794a799678e1d1d444d9fde2bab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3def67cb73d0b77ddb28ba18e05cf1fa91b663c92afc1a996d7d4cbc4fcfcf45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3def67cb73d0b77ddb28ba18e05cf1fa91b663c92afc1a996d7d4cbc4fcfcf45->enter($__internal_3def67cb73d0b77ddb28ba18e05cf1fa91b663c92afc1a996d7d4cbc4fcfcf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf67d5e4be86946f1ac09e82e0fcb93f38d712759d5c2d249bed6297b92755bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf67d5e4be86946f1ac09e82e0fcb93f38d712759d5c2d249bed6297b92755bd->enter($__internal_bf67d5e4be86946f1ac09e82e0fcb93f38d712759d5c2d249bed6297b92755bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Offer creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bf67d5e4be86946f1ac09e82e0fcb93f38d712759d5c2d249bed6297b92755bd->leave($__internal_bf67d5e4be86946f1ac09e82e0fcb93f38d712759d5c2d249bed6297b92755bd_prof);

        
        $__internal_3def67cb73d0b77ddb28ba18e05cf1fa91b663c92afc1a996d7d4cbc4fcfcf45->leave($__internal_3def67cb73d0b77ddb28ba18e05cf1fa91b663c92afc1a996d7d4cbc4fcfcf45_prof);

    }

    public function getTemplateName()
    {
        return "offer/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Offer creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('offer_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "offer/new.html.twig", "/var/www/html/proyectos/test_Blue_Day_Solutions/app/Resources/views/offer/new.html.twig");
    }
}
