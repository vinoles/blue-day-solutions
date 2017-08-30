<?php

/* offer/edit.html.twig */
class __TwigTemplate_63e5c5b9635a40279f818242c8bc327004ecb4c6af7e2130f82fe473333116eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "offer/edit.html.twig", 1);
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
        $__internal_ef932a3a07d71e880e4914da994d78c6424cdcbcec4f00c9796860733223df51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef932a3a07d71e880e4914da994d78c6424cdcbcec4f00c9796860733223df51->enter($__internal_ef932a3a07d71e880e4914da994d78c6424cdcbcec4f00c9796860733223df51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/edit.html.twig"));

        $__internal_36178964ab24522a74263197b9003a19f3e66b87ae8376508f0d4a1d43be8186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36178964ab24522a74263197b9003a19f3e66b87ae8376508f0d4a1d43be8186->enter($__internal_36178964ab24522a74263197b9003a19f3e66b87ae8376508f0d4a1d43be8186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef932a3a07d71e880e4914da994d78c6424cdcbcec4f00c9796860733223df51->leave($__internal_ef932a3a07d71e880e4914da994d78c6424cdcbcec4f00c9796860733223df51_prof);

        
        $__internal_36178964ab24522a74263197b9003a19f3e66b87ae8376508f0d4a1d43be8186->leave($__internal_36178964ab24522a74263197b9003a19f3e66b87ae8376508f0d4a1d43be8186_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84d5fb9314203909527aa680384c7f9f0e49dd572e0b703cc6e4dd796c56fed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d5fb9314203909527aa680384c7f9f0e49dd572e0b703cc6e4dd796c56fed0->enter($__internal_84d5fb9314203909527aa680384c7f9f0e49dd572e0b703cc6e4dd796c56fed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_807ab6680c1d483bd6fba1f9108577acf58e5e00bfa53ac654b602237a31a6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807ab6680c1d483bd6fba1f9108577acf58e5e00bfa53ac654b602237a31a6b4->enter($__internal_807ab6680c1d483bd6fba1f9108577acf58e5e00bfa53ac654b602237a31a6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Offer edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_807ab6680c1d483bd6fba1f9108577acf58e5e00bfa53ac654b602237a31a6b4->leave($__internal_807ab6680c1d483bd6fba1f9108577acf58e5e00bfa53ac654b602237a31a6b4_prof);

        
        $__internal_84d5fb9314203909527aa680384c7f9f0e49dd572e0b703cc6e4dd796c56fed0->leave($__internal_84d5fb9314203909527aa680384c7f9f0e49dd572e0b703cc6e4dd796c56fed0_prof);

    }

    public function getTemplateName()
    {
        return "offer/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Offer edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('offer_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "offer/edit.html.twig", "/var/www/html/proyectos/test_Blue_Day_Solutions/app/Resources/views/offer/edit.html.twig");
    }
}
